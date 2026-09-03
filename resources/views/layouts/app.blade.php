<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Split Distribution | Solutions CVC & Énergies')
    </title>

    <meta
        name="description"
        content="@yield(
            'description',
            'Split Distribution accompagne les professionnels dans leurs projets de climatisation, chauffage, ventilation et énergies renouvelables.'
        )"
    >

    <meta name="theme-color" content="#0c100c">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <meta
        property="og:title"
        content="@yield('title', 'Split Distribution | Solutions CVC & Énergies')"
    >
    <meta
        property="og:description"
        content="@yield(
            'description',
            'Split Distribution accompagne les professionnels dans leurs projets de climatisation, chauffage, ventilation et énergies renouvelables.'
        )"
    >
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    @stack('styles')
</head>

<body class="@yield('body-class')">

    <a class="skip-link" href="#main-content">
        Aller au contenu
    </a>

    <x-site-header />

    <main id="main-content" tabindex="-1">
        @yield('content')
    </main>

    <x-site-footer />

    @stack('scripts')

</body>
</html>
