<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/books/{{ $book->id }}/update" method="post">
        @csrf 
        @method('put')
        <label for="title">Title: </label>
        <input type="text" name="title" id="title" value="{{ $book->title }}"> <br> 

        <label for="author">Author: </label>
        <input type="text" name="author" id="author" value="{{ $book->author }}"> <br> 

        <label for="release_date">Release date: </label>
        <input type="text" name="release_date" id="release_date" value="{{ $book->release_date }}"> <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>