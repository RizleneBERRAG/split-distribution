# Mise en ligne du site

Mise à jour : 24 novembre 2026.

## Ce qui existe aujourd'hui

- Le nom de domaine `split-distribution.fr`, ses DNS et ses boîtes mail sont chez **OVH**.
- Le site actuel est un **WordPress 6.1 (PHP 7.4)**, lui aussi hébergé chez OVH.
- Le nouveau site le remplace. On garde une sauvegarde du WordPress avant de basculer.

## 1. Choisir l'hébergeur (avec Christophe)

| | OVH, déjà en place | o2switch Grow | Serveur privé (VPS) |
|---|---|---|---|
| Prix | 9,99 € HT/mois pour l'offre Pro (1,99 € HT/mois la 1re année pour une nouvelle offre) | environ 7 € HT/mois | 5 à 10 € HT/mois |
| Ce qu'il faut faire | Rien de nouveau : domaine, mails et hébergement au même endroit | Ouvrir un compte, puis faire pointer le domaine vers o2switch | Installer et entretenir le serveur soi-même |
| Accès SSH (pour lancer les commandes Laravel) | Oui avec l'offre Pro, non avec l'offre Perso | Oui | Oui |
| Avis | **Recommandé** | Bien, mais un compte de plus | Trop de maintenance |

À vérifier dans l'espace client OVH : quelle offre Split a déjà. Si c'est « Perso », il faut passer à « Pro » pour avoir le SSH.

Les prix changent souvent : on les confirme sur le site de l'hébergeur avant de commander.

Les sessions et le cache sont stockés dans des fichiers. Seules les **demandes de devis** sont enregistrées en base : un simple fichier SQLite (`database/database.sqlite`) suffit, pas besoin de base MySQL.

## 2. Ce qu'il faut demander à Christophe

- L'accès à l'espace client OVH de Split, ou qu'il t'ajoute comme contact technique.
- Le mot de passe de la boîte mail qui enverra les messages du formulaire (voir le point 4).

## 3. Mettre en ligne chez OVH

1. Sauvegarder le WordPress : télécharger les fichiers (FTP) et exporter la base de données.
2. Passer la version PHP de l'hébergement en 8.3.
3. Envoyer le nouveau site dans un dossier à part, par exemple `split-site/`, **sans supprimer le WordPress**.
4. Sur la machine, avant l'envoi :
   ```bash
   composer install --no-dev --optimize-autoloader
   npm ci && npm run build
   ```
5. Créer le fichier `.env` de production (le modèle est au point 5).
6. Sur le serveur, en SSH :
   ```bash
   php artisan key:generate
   touch database/database.sqlite
   php artisan migrate --force
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```
7. Dans OVH (Multisite), changer le dossier racine du domaine pour `split-site/public`.
   Pour revenir à l'ancien site, il suffit de remettre l'ancien dossier.
8. Tester : toutes les pages, le formulaire de contact, une demande de devis avec un fichier joint, et les anciennes adresses (point 7).

Les dossiers `storage/` et `database/` doivent rester accessibles en écriture : c'est là que sont gardés les demandes et les fichiers joints.

## 4. Envoi réel du formulaire

Le formulaire envoie les demandes à `contact@split-distribution.fr`.

Pour qu'ils ne tombent pas en spam, les mails partent d'une boîte du domaine, chez OVH. Ça peut être `contact@` ou une boîte dédiée comme `site@split-distribution.fr`.

Réglages pour une boîte mail OVH classique (MX Plan) :

```env
MAIL_MAILER=smtp
MAIL_SCHEME=smtps
MAIL_HOST=ssl0.ovh.net
MAIL_PORT=465
MAIL_USERNAME=site@split-distribution.fr
MAIL_PASSWORD=le-mot-de-passe-de-la-boite
MAIL_FROM_ADDRESS=site@split-distribution.fr
MAIL_FROM_NAME="Split Distribution"
CONTACT_EMAIL=contact@split-distribution.fr
```

Si Split a l'offre « E-mail Pro » ou « Exchange », le serveur est différent. Il est indiqué dans l'espace client OVH, dans la rubrique E-mails.

## 5. Modèle de `.env` de production

```env
APP_NAME="Split Distribution"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://split-distribution.fr
APP_LOCALE=fr

DB_CONNECTION=sqlite
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync

# + les lignes MAIL_ du point 4
# + GTM_ID, seulement quand le bandeau cookies doit s'activer (point 8)
```

Le fichier `.env` ne va jamais sur GitHub.

## 6. Mentions légales : rubrique Hébergement

Texte à mettre si on reste chez OVH :

> OVH SAS, 2 rue Kellermann, 59100 Roubaix, France. Téléphone : 1007.

Le fichier à modifier : `resources/views/pages/legal/mentions.blade.php`, rubrique 03. Il faut aussi retirer l'encadré « Information en attente ».

Pour un autre hébergeur, on reprend les mentions légales publiées sur son site.

## 7. Adresses de l'ancien site

Les anciennes adresses renvoient vers les nouvelles pages (redirections 301, déjà en place dans `routes/web.php`) :

| Ancienne adresse | Nouvelle page |
|---|---|
| `/accueil-2/` | `/` |
| `/a-propos/` | `/entreprise` |
| `/nos-partenaires/` | `/#marques` |
| `/politique-de-confidentialite/` | `/confidentialite` |
| `/contact/`, `/mentions-legales/` | même page, sans la barre finale |

Après la bascule, on envoie le nouveau plan du site à Google Search Console.

## 7 bis. Les demandes de devis

La page `/devis` propose un parcours en 4 étapes. On y arrive par le bouton « Demander un devis » de la barre du haut, et par les pages Solutions, qui cochent déjà la bonne famille (`/devis?famille=pompes-a-chaleur`).

Chaque demande :

- part par e-mail à `CONTACT_EMAIL`, avec un numéro (`DEV-000012`), la pièce jointe éventuelle, et la réponse qui va directement au demandeur ;
- est enregistrée sur le site (table `quote_requests`, fichiers joints dans `storage/app/private/devis`).

Pour récupérer toutes les demandes dans Excel, en SSH :

```bash
php artisan devis:export
php artisan devis:export --depuis=2026-12-01
```

Le fichier CSV est créé dans `storage/app/private/exports/`.

Pour les publicités, ajoutez la provenance aux liens : `/devis?utm_source=meta&utm_campaign=haier-r290`. Elle est enregistrée avec chaque demande. Si les cookies sont acceptés, l'événement `demande_devis` est aussi envoyé à Google Tag Manager, ce qui permet de compter les demandes comme conversions.

Les choix proposés (familles, types de projet, délais, profils) se modifient dans `config/quote.php`.

## 8. Cookies et Google Tag Manager

Le bandeau cookies est prêt, mais il reste **éteint** tant que `GTM_ID` est vide. Sans traceur, la loi n'en demande pas.

Pour l'activer :

1. Créer le conteneur Google Tag Manager au nom de Split (jamais sur un compte personnel).
2. Mettre son identifiant dans `.env` : `GTM_ID=GTM-XXXXXXX`.
3. **Avant de l'activer**, mettre à jour la rubrique « Cookies et mesure d'audience » de la page confidentialité. Elle doit dire quels outils sont utilisés (Google Analytics, Google Ads, Meta…), pourquoi, et combien de temps le choix est gardé (6 mois).
4. Dans GTM, régler chaque balise pour qu'elle attende le consentement : les réglages de consentement intégrés de Google, ou un déclencheur sur l'événement `consentement_mis_a_jour`.

Comment le bandeau fonctionne :

- **Tout refuser** et **Tout accepter** ont la même taille et la même place, comme le demande la CNIL.
- Tant que la personne n'a rien accepté, Google Tag Manager n'est pas chargé.
- Le choix est gardé 6 mois, puis le bandeau revient.
- Le lien « Gestion des cookies », en bas de chaque page, permet de changer d'avis.
- Le mode Consentement v2 de Google reçoit les quatre signaux : `ad_storage`, `ad_user_data`, `ad_personalization` et `analytics_storage`.

## Vérifié le 24 novembre 2026

- L'adresse du siège des mentions légales est identique au Kbis du 13 juin 2026. Il y est écrit « Veellage de Parilly », avec cette orthographe.
- Le SIRET du siège, 824 080 782 00066, correspond à l'annuaire des entreprises.
