<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>

    {{-- Common CSS and JS --}}
    @include('includes.scripts') {{-- Include common scripts such as CSS, fonts, etc. --}}

    {{-- Additional head content --}}
    @stack('head') {{-- For any extra styles or scripts specific to the page --}}
</head>
<body class="vertical light">
    {{-- Include the Navbar --}}
    @include('partials.navbar')

    {{-- Include the Sidebar --}}
    @include('partials.sidebar')

    {{-- Main Content Section --}}
    <main class="container py-4">
        @yield('content')
    </main>

    {{-- Include the Footer --}}
    @include('includes.footer')

    {{-- Common Scripts --}}
    <script>
        // Theme toggle functionality
        document.getElementById('theme-toggle').addEventListener('click', function() {
            document.body.classList.toggle('dark');
            document.body.classList.toggle('light');

            const lightTheme = document.getElementById('lightTheme');
            const darkTheme = document.getElementById('darkTheme');
            if (document.body.classList.contains('dark')) {
                lightTheme.disabled = true;
                darkTheme.disabled = false;
            } else {
                lightTheme.disabled = false;
                darkTheme.disabled = true;
            }
        });
    </script>

    {{-- Additional Scripts --}}
    @stack('scripts') {{-- For any additional scripts specific to the page --}}
</body>
</html>
