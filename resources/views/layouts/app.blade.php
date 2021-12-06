<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    {{-- Styles --}}
    @include('layouts.templates.styles')
    @stack('styles')
</head>

<body>
    <div id="app">
        @include('layouts.templates.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @yield('content')

            @include('layouts.templates.footer')
        </div>
    </div>
    @include('layouts.templates.scripts')
    @stack('scripts')
</body>

</html>
