<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <title> Main | Project Nightfall </title>

        @vite('resources/js/app.js')
        @vite('resources/css/app.css')

        @inertiaHead
        @routes
    </head>
    <body>
        @inertia
    </body>
</html>
