<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'E-Com')</title>
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  @yield('style')
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
  @yield('content')
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>