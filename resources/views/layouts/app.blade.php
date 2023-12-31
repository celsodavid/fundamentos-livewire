<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <style>[x-cloak] { display: none !important; }</style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <livewire:styles />
    @stack('scripts')
</head>
<body>
    {{ $slot }}

    <livewire:scripts />

    <wireui:scripts />
    <script src="//unpkg.com/alpinejs" defer></script>

    @yield('scripts')
    @livewire('notifications')
</body>
</html>
