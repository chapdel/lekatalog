<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <x-meta></x-meta>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600;700&display=swap">

    <!-- Styles -->
    <livewire:styles />
    <livewire:scripts />


    <!-- Scripts -->
    <wireui:scripts />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    {{-- <x-header></x-header> --}}
    <main>
        {{ $slot }}
    </main>
    <x-footer></x-footer>
    <x-dialog z-index="z-50" blur="md" align="center" />
    <script>
        Livewire.onPageExpired((response, message) => {})
    </script>
    <script>
        /* window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-MSW0VZTNFZ'); */
    </script>
</body>

</html>
