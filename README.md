# Split Distribution

Site vitrine de Split Distribution, distributeur de solutions CVC et énergétiques
pour les professionnels.

## Stack

- PHP 8.2 et Laravel 12
- Blade
- Vite 7
- Tailwind CSS 4
- GSAP
- Pest

## Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve
```

Pour travailler avec le serveur Vite :

```bash
composer run dev
```

## Vérifications

```bash
npm run build
php artisan test --compact
vendor/bin/pint --format agent
```

## Pages actuellement réalisées

- Accueil
- Vue d'ensemble des solutions
- Climatisation

Les autres routes présentes dans `routes/web.php` correspondent aux prochaines
pages à développer.
