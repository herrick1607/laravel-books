<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a new bookshop</title>

    <link rel="stylesheet" href="{{ mix('css/books.css') }}">
</head>
<body>

    <h1>Create a new publisher</h1>

    <form action="{{ action('PublisherController@store') }}" method="post">
        @csrf
        <input type="text" name="title">
        <input type="submit" value="Create a new publisher">
    </form>

</body>
</html>