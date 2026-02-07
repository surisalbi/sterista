<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#1daeff"/>
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#1daeff"/>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon"/>
    <title>{{ $title }}</title>
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet"/>
</head>
<body class="min-h-screen">
    @yield('content')
    <script defer="defer" src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>