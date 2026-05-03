# Insight91

Site web Insight91 — PHP statique hébergé sur OVH (cluster mutualisé).

## Structure

- `fr/`, `en/` — pages localisées (PHP)
- `assets/` — CSS, JS, images
- `shared/`, `lib/` — partials et helpers PHP
- `posts/` — articles de blog
- `router.php` — routeur (utilisé par le serveur PHP local)
- `.htaccess` — règles de réécriture en production (OVH/Apache)

## Développement local

```bash
php -S localhost:8000 router.php
```

## Déploiement sur OVH (FTP)

L'hébergement OVH ne dispose pas de pipeline Git — le déploiement se fait par
upload FTP des fichiers modifiés. Les credentials sont dans `.env` (non commité,
listé dans `.gitignore`).

### Configuration

`.env` à la racine du projet :

```dotenv
FTP_HOST=ftp.cluster029.hosting.ovh.net
FTP_PORT=21
FTP_USER=insighf
FTP_PASS=...
```

### Procédure

Workflow type pour livrer un changement :

```bash
# 1. Commit + push sur GitHub
git add <fichiers>
git commit -m "..."
git push origin main

# 2. Upload des fichiers modifiés sur OVH via curl
set -a; source .env; set +a
BASE="ftp://${FTP_USER}:${FTP_PASS}@${FTP_HOST}:${FTP_PORT}"

curl -sS -T fr/index.php       "$BASE/fr/index.php"
curl -sS -T en/index.php       "$BASE/en/index.php"
curl -sS -T assets/img/foo.webp "$BASE/assets/img/foo.webp"
```

Un code de retour HTTP `226` indique un transfert FTP complet (succès).
Ajouter `-w "%{http_code}\n"` à la commande `curl` pour l'afficher.

### Conseils

- **N'uploader que les fichiers modifiés** (`git diff --name-only origin/main`
  donne la liste). Pas de mirroring complet — c'est lent et inutile.
- **Créer les répertoires manquants** : ajouter `--ftp-create-dirs` à `curl` si
  on uploade un fichier dans un nouveau dossier.
- **Ne jamais commiter `.env`** — il contient le mot de passe FTP en clair.
- L'index FTP du serveur reflète directement la racine web (pas de dossier
  `public_html` ou `www` intermédiaire).

### Script utilitaire (optionnel)

Pour automatiser, on peut récupérer la liste des fichiers du dernier commit :

```bash
set -a; source .env; set +a
BASE="ftp://${FTP_USER}:${FTP_PASS}@${FTP_HOST}:${FTP_PORT}"

git diff --name-only HEAD~1 HEAD | while read f; do
  [ -f "$f" ] && curl -sS --ftp-create-dirs -T "$f" "$BASE/$f" \
    -w "$f: %{http_code}\n"
done
```
