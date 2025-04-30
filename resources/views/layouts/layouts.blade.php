<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>

    {{-- Additional head content --}}
    @stack('head')

    {{-- Common scripts like CSS --}}
    @include('includes.scripts')
</head>
<body>

    {{-- Header --}}
    @include('includes.header')

    {{-- Main Content --}}
    <main class="container py-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Additional Scripts
    @stack('scripts') --}}

</body>
</html>
