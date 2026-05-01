<?php
// Tiny blog engine — scans posts/<lang>/*.md, parses YAML frontmatter, renders Markdown.

require_once __DIR__ . '/Parsedown.php';

class Blog
{
    private string $lang;
    private string $postsDir;

    public function __construct(string $lang)
    {
        $this->lang = $lang;
        $this->postsDir = __DIR__ . '/../posts/' . $lang;
    }

    /** All posts, sorted by date desc. */
    public function list(): array
    {
        if (!is_dir($this->postsDir)) return [];
        $posts = [];
        foreach (glob($this->postsDir . '/*.md') as $file) {
            $post = $this->parseFile($file);
            if ($post !== null) $posts[] = $post;
        }
        usort($posts, fn($a, $b) => strcmp($b['date'], $a['date']));
        return $posts;
    }

    public function get(string $slug): ?array
    {
        // Slug must match a real file — guard against directory traversal
        if (!preg_match('/^[a-z0-9-]+$/i', $slug)) return null;
        $file = $this->postsDir . '/' . $slug . '.md';
        if (!is_file($file)) {
            // Also accept slug that includes a date prefix (filename pattern)
            foreach (glob($this->postsDir . '/*-' . $slug . '.md') as $candidate) {
                $file = $candidate;
                break;
            }
            if (!is_file($file)) return null;
        }
        return $this->parseFile($file);
    }

    private function parseFile(string $file): ?array
    {
        $content = file_get_contents($file);
        if ($content === false) return null;

        // Detect frontmatter (--- ... ---)
        $meta = [];
        $body = $content;
        if (preg_match('/^---\s*\n(.*?)\n---\s*\n(.*)$/s', $content, $m)) {
            $meta = $this->parseFrontmatter($m[1]);
            $body = $m[2];
        }

        $filename = basename($file, '.md');
        // Slug derivation: filename without leading YYYY-MM-DD-
        $slug = preg_replace('/^\d{4}-\d{2}-\d{2}-/', '', $filename);

        // Date derivation: from frontmatter, else from filename prefix
        $date = $meta['date'] ?? '';
        if ($date === '' && preg_match('/^(\d{4}-\d{2}-\d{2})/', $filename, $dm)) {
            $date = $dm[1];
        }

        $parsedown = new Parsedown();
        $parsedown->setSafeMode(true);

        return [
            'slug'    => $slug,
            'title'   => $meta['title'] ?? $slug,
            'date'    => $date,
            'excerpt' => $meta['excerpt'] ?? '',
            'cover'   => $meta['cover'] ?? '',
            'tags'    => $meta['tags'] ?? [],
            'body'    => $body,
            'html'    => $parsedown->text($body),
            'reading_minutes' => max(1, (int) round(str_word_count(strip_tags($body)) / 200)),
        ];
    }

    /** Minimal YAML frontmatter parser — supports key: "value", key: value, key: [a, b, c]. */
    private function parseFrontmatter(string $yaml): array
    {
        $out = [];
        foreach (preg_split('/\r?\n/', $yaml) as $line) {
            if (!preg_match('/^([a-zA-Z_]+)\s*:\s*(.*)$/', $line, $m)) continue;
            $key = $m[1];
            $val = trim($m[2]);

            // Quoted string
            if (preg_match('/^"(.*)"$/', $val, $vm) || preg_match("/^'(.*)'$/", $val, $vm)) {
                $out[$key] = $vm[1];
                continue;
            }
            // Inline list [a, b, c]
            if (preg_match('/^\[(.*)\]$/', $val, $vm)) {
                $items = array_map('trim', explode(',', $vm[1]));
                $items = array_map(fn($s) => trim($s, '"\' '), $items);
                $out[$key] = array_values(array_filter($items, fn($s) => $s !== ''));
                continue;
            }
            $out[$key] = $val;
        }
        return $out;
    }
}

function format_post_date(string $date, string $lang): string
{
    if ($date === '') return '';
    $ts = strtotime($date);
    if ($ts === false) return $date;
    if ($lang === 'fr') {
        $months = ['janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre'];
        return (int) date('j', $ts) . ' ' . $months[(int) date('n', $ts) - 1] . ' ' . date('Y', $ts);
    }
    return date('F j, Y', $ts);
}
