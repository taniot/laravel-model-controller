<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Books</title>

    </head>
    <body class="antialiased">
       <h1>My Books</h1>
        <ul>

        @foreach ($books as $book)

            <li>
                <div>
                    <p><a href="{{ route('product', $book->id) }}">Title: {{ $book->title }}</a></p>
                    <p>id: {{ $book->id }}</p>
                    <p>Author: {{ $book->author }}</p>
                    <p>Pages: {{ $book->n_pages }}</p>
                </div>



            </li>
        @endforeach
        </ul>

    </body>
</html>
