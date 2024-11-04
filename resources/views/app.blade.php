<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 with Vue 3</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<div id="app">
    @yield('content')
</div>
@vite('resources/js/app.js')
</body>
</html>
