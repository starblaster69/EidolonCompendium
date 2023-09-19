<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle') | {{config('app.name')}}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<header></header>
<main>
    @yield('content')
</main>
<footer></footer>
</body>
