<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    @if (!request()->routeIs('auth.form'))
        @include('layouts.navbar')
    @endif

    <div class="container mx-auto">
        @yield('content')
    </div>

</body>
</html>
