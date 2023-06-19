<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registation</title>
</head>

<body>
    <form action="{{ route('create.user') }}" method="post">
        @csrf
        <input type="email" name="email">
        <input type="text" name="first_name">
        <input type="text" name="last_name">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
