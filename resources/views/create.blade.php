<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('proses create') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>