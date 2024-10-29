<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Books index</h1>
    <a href="/books/create">Create a book</a>
    <ul>
        @foreach ($books as $book)
            <li>
            {{ $book->title }},
            {{ $book->author }},
            {{ $book->release_date }} <br>  
            <a href="/books/{{ $book->id }}/edit">Edit</a>   
            <form action="/books/{{ $book->id }}/delete" method="post">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
            </li> 
        @endforeach
    </ul>
</body>
</html>