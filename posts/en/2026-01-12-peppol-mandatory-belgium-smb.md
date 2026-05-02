---
title: "Peppol mandatory: what changes for your Belgian SMB since January 1st"
date: 2026-01-12
excerpt: "Since January 1st, 2026, all Belgian VAT-registered businesses must issue and receive their B2B invoices via the Peppol network. Here's how Odoo handles it (for free) and what you need to check."
cover: "/assets/img/blog/peppol.webp"
tags: [odoo, invoicing, peppol, compliance]
---

# Peppol mandatory: what changes for your Belgian SMB since January 1st

Since **January 1st, 2026**, all Belgian VAT-registered businesses must issue and receive their B2B invoices via the **Peppol** network (Pan-European Public Procurement OnLine). Email PDFs and paper invoices are no longer accepted for business-to-business transactions.

Two weeks in, many SMBs have buried their heads in the sand and are now rushing to comply. Here's a clear take.

## What is Peppol, exactly?

Peppol is a **standardized protocol** for exchanging electronic documents. Instead of emailing a PDF or uploading to a proprietary portal, you issue a **structured invoice** (XML, UBL format) routed automatically to your client through the Peppol network.

For the client, it lands directly in their accounting software — no manual entry, no scanning, no OCR.

## What changes for you?

**If you invoice other Belgian businesses**:
- Your invoices must go out in Peppol format
- You need a registered **Peppol access point**
- Your clients receive invoices directly in their software

**If you receive supplier invoices in B2B**:
- You must be able to receive them in Peppol format
- Ideally, they should auto-integrate into your accounting

**B2C is not concerned** at this stage. Same for invoices issued to foreign customers (but it's coming — Europe is pushing for generalization by 2030).

## How Odoo handles it

This is the right moment to mention why Odoo has a clear edge here.

**Odoo natively integrates a free, unlimited Peppol access point**.

Where most providers (Qonto, Sage, Cegid, and even some third-party access points like Mailteck) charge per document — typically **€0.15 to €0.50 per invoice** — Odoo provides unlimited access at no extra cost.

For an SMB issuing 200 invoices a month, the annual saving is around **€400 to €1,200**. At higher volumes, it scales fast.

## What you need to check

If you're already on Odoo (16+), there are 4 steps to validate:

1. **Activate the e-Invoicing module** in accounting settings
2. **Register with the built-in Peppol access point** (a few clicks, no complex KYC)
3. **Configure the UBL format** as default on your invoice templates
4. **Test sending** to a Peppol-connected client (most large structures have been since 2024)

For receiving, even simpler: once connected, supplier invoices land automatically in "Invoices to validate".

## What if I'm not on Odoo yet?

Several options:

- **Stick with your current software**: most vendors (Sage, Cegid, Bob Software, Horus) released Peppol connectors. Check per-document pricing.
- **Migrate to Odoo**: relevant if you have other motivations (integrated ERP, e-commerce, etc.) on top of Peppol compliance. The Peppol saving adds to the other benefits.
- **Use an intermediary platform**: solutions like Bizyhood, IT Pro Cloud, Mailteck bridge between your current software and Peppol. Often per-document.

## Common pitfalls we've seen

A few classic traps from client cases over the past weeks:

- **Wrong VAT number** on the client side → the Peppol invoice goes nowhere
- **Missing legal mentions** on Odoo invoice templates (mandatory electronic mention)
- **Bank accounts not linked** to the invoicing entity (typical for holding/subsidiary setups)

These get fixed quickly but cause real stress when a client says "I haven't received your invoice" while you've sent it.

## Our recommendation

If you're not yet compliant, **handle it this week**. The risk isn't an immediate fine (the administration is in "educational" mode for the first months) — it's **invoices not landing at the client** and therefore **payment delays**.

If you're on Odoo and want us to do the audit + activation for you, [contact us](/en/contact). It's typically half a day of guidance, no more.
