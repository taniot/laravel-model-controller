<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Books</title>

    </head>
    <body class="antialiased">
       <h1>{{ $book->title }}</h1>
       <h2>{{ $book->author }}</h2>
       <a href="{{ route('home') }}">Back to home</a>
    </body>
</html>
