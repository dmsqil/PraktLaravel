<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="name">Nama</label>
        <input type="text" name="name" id="name">
        <br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>

        <label for="password_confirmation">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <br>

        <button type="submit">Register</button>
    </form>
</body>

</html>