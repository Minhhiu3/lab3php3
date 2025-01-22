<!DOCTYPE html>
<html>

<head>
    <title>Books by Category</title>
</head>

<body>
    <h1>categori</h1>
    <ul>
        @foreach($books as $book)
        <li>{{ $book->title }} - {{ $book->price }}</li>
        @endforeach
    </ul>
</body>

</html>