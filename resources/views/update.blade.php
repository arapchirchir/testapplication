<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registation</title>
</head>

<body>
    <form action="{{ route('user.put', ['user_id' => $user->id]) }}" method="post">
        @csrf
        <input type="email" name="email" value="{{ $user->email }}">
        <input type="text" name="first_name" value="{{ $user->first_name }}">
        <input type="text" name="last_name" value="{{ $user->last_name }}">
        <button type="submit">Update</button>
    </form>
</body>

</html>
