<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Welcome') }} - {{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unkempt:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>

        body {
            font-size: 1.5rem;
        }
        a:hover {
            text-decoration: underline 2px orange;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: "Unkempt", cursive;
            font-weight: 700;
            font-style: normal;
        }

        * {
            font-family: "Unkempt", cursive;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>
<body style="background-color: black; color: pink; padding: 5em;">
<x-header-app />
    <main>
        {{$slot}}
    </main>
@if (Route::has('login'))
    <div class="h-14.5 hidden lg:block"></div>
@endif
</body>
</html>
