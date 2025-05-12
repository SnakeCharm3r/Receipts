<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <title>@yield('title', 'Tiny Dashboard')</title>

  <!-- CSS Assets -->
  <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
  <link rel="stylesheet" href="{{ asset('css/uppy.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.steps.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quill.snow.css') }}">
  <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app-light.css') }}" id="lightTheme">
  <link rel="stylesheet" href="{{ asset('css/app-dark.css') }}" id="darkTheme" disabled>
</head>
<body class="vertical light">
  @include('partials.navbar') <!-- Include Navbar -->
  @include('partials.sidebar') <!-- Include Sidebar -->

  <div class="main-content">
    <!-- Your content goes here -->
  </div>

  <!-- Theme Toggle Button (Placed in Navbar or Sidebar) -->
  <button id="theme-toggle" class="btn btn-sm btn-light">Toggle Theme</button>

  <!-- JavaScript -->
  <script>
    document.getElementById('theme-toggle').addEventListener('click', function() {
      // Toggle body class for theme
      document.body.classList.toggle('dark');
      document.body.classList.toggle('light');
      
      // Toggle theme stylesheets
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
</body>
</html>
