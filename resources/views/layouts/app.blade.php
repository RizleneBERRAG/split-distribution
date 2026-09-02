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

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    @stack('styles')
</head>

<body class="@yield('body-class')">

    <x-site-header />

    <main>
        @yield('content')
    </main>

    <x-site-footer />

    @stack('scripts')

</body>
</html>