<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Welcome') }} - {{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @fonts

    <!-- Styles -->
    <style>
        a:hover {
            text-docoration: underline 2px orange;
        }
    </style>
</head>
<body style="background-color: black; color: pink; padding: 5em;">
<x-header-app />
<ul>
    <li>{{$sighting->location}}</li>
    <li>{{$sighting->goblin}}</li>
</ul>
<a href="/add" style="border: 2px solid pink; padding: .5em 1em; color: white; margin: 0 auto; display: block;">Go back ... </a>
</body>
</html>


