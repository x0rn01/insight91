---
title: "Peppol obligatoire : ce qui change pour votre PME belge depuis le 1er janvier"
date: 2026-01-12
excerpt: "Depuis le 1er janvier 2026, toutes les entreprises belges assujetties à la TVA doivent émettre et recevoir leurs factures B2B via le réseau Peppol. Voici comment Odoo gère ça (gratuitement) et ce que vous devez vérifier."
cover: "/assets/img/blog/peppol.webp"
tags: [odoo, facturation, peppol, conformité]
---

# Peppol obligatoire : ce qui change pour votre PME belge depuis le 1er janvier

Depuis le **1er janvier 2026**, toutes les entreprises belges assujetties à la TVA doivent émettre et recevoir leurs factures B2B via le réseau **Peppol** (Pan-European Public Procurement OnLine). Les PDF par email et les factures papier ne sont plus acceptés pour les transactions entre entreprises.

Deux semaines après l'entrée en vigueur, on constate que beaucoup de PME ont fait l'autruche et se retrouvent maintenant à devoir s'aligner en urgence. Voici un point clair.

## C'est quoi Peppol, concrètement ?

Peppol est un **protocole standardisé** d'échange de documents électroniques. Au lieu d'envoyer un PDF par email ou un fichier sur un portail propriétaire, vous émettez une **facture structurée** (XML, format UBL) qui est routée automatiquement à votre client via le réseau Peppol.

Pour le client, ça arrive directement dans son logiciel comptable — pas de saisie manuelle, pas de scan, pas d'OCR.

## Qu'est-ce que ça change pour vous ?

**Si vous facturez d'autres entreprises en Belgique** :
- Vos factures doivent partir au format Peppol
- Vous devez avoir un **point d'accès Peppol** déclaré
- Vos clients reçoivent les factures dans leur logiciel sans intervention

**Si vous recevez des factures fournisseurs B2B** :
- Vous devez pouvoir les recevoir au format Peppol
- Idéalement, elles doivent s'intégrer automatiquement dans votre comptabilité

Les **B2C** ne sont pas concernés à ce stade. Même chose pour les factures émises vers l'étranger (mais ça viendra — l'Europe pousse pour une généralisation à horizon 2030).

## Comment Odoo gère ça

C'est probablement le bon moment de mentionner pourquoi Odoo a un avantage net sur ce sujet.

**Odoo intègre nativement un point d'accès Peppol, gratuit et illimité**.

Là où la plupart des prestataires (Qonto, Sage, Cegid, et même certains points d'accès tiers comme Mailteck) facturent au document — souvent autour de **0,15 à 0,50 € par facture** — Odoo offre l'accès illimité sans surcoût.

Pour une PME qui émet 200 factures par mois, l'économie annuelle est de l'ordre de **400 à 1 200 €**. À volume plus important, ça grimpe vite.

## Ce que vous devez vérifier

Si vous êtes déjà sur Odoo (16+), il y a 4 étapes à valider :

1. **Activer le module e-Invoicing** dans les paramètres comptabilité
2. **Vous enregistrer auprès du point d'accès Peppol intégré** (quelques clics, pas de KYC complexe)
3. **Configurer le format UBL** par défaut sur vos modèles de factures
4. **Tester un envoi** vers un client lui-même connecté à Peppol (la plupart des grandes structures le sont depuis 2024)

Pour la réception, c'est encore plus simple : une fois connecté, les factures fournisseurs arrivent automatiquement dans la section "Factures à valider".

## Et si je ne suis pas encore sur Odoo ?

Plusieurs options :

- **Continuer avec votre logiciel actuel** : la plupart des éditeurs (Sage, Cegid, Bob Software, Horus) ont sorti des connecteurs Peppol. Vérifiez les coûts au document.
- **Migrer vers Odoo** : pertinent si vous avez d'autres motivations (ERP intégré, e-commerce, etc.) en plus de la conformité Peppol. Dans ce cas, l'économie sur Peppol s'ajoute aux autres bénéfices.
- **Utiliser une plateforme intermédiaire** : des solutions comme Bizyhood, IT Pro Cloud, Mailteck font le pont entre votre logiciel actuel et Peppol. Souvent payant au document.

## Les cas particuliers qu'on rencontre

Quelques pièges classiques qu'on a vu chez nos clients ces dernières semaines :

- **Numérotation TVA mal renseignée** côté client → la facture Peppol part dans le vide
- **Mentions légales manquantes** sur les modèles de factures Odoo (mention électronique obligatoire)
- **Comptes bancaires non liés à l'entité** facturée (cas des sociétés holdings/filiales)

Ces cas se règlent vite mais sont source de gros stress quand un client vous dit "j'ai pas reçu ta facture" alors que vous l'avez bien envoyée.

## Notre conseil

Si vous n'êtes pas encore conforme, **traitez ça cette semaine**. Le risque n'est pas une amende immédiate (l'administration est en mode "pédagogique" pendant les premiers mois), mais des **factures qui n'arrivent pas chez le client** et donc des **retards de paiement**.

Si vous êtes sur Odoo et que vous voulez qu'on fasse l'audit + l'activation pour vous, [contactez-nous](/fr/contact). C'est typiquement une demi-journée d'accompagnement, pas plus.
