<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>First app in laravel</title>
    </head>
    <body>
        <h1>
            First web app in laravel
        </h1>
        <p>
            It is curently {{ date('h:m A')}} .
        </p>
        <footer>
            <p>
                &copy; Copyright {{ date('Y') }} &middot; <a href="/about">about me</a>
            </p>
        </footer>
    </body>
</html>
