<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Request-Response Flow</title>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>Profile</h1>

        <h2>Hello: {{$user->name}}</h2>
    </body>
</html>
