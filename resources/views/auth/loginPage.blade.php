<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <div style="color:red">
        {{ session('error') }}
    </div>

    <form action="/login" method="POST">
        @csrf
        Email: <input type="text" name="email"><br>
        Password: <input type="text" name="password"><br>

        <input type="submit">
    </form>

</body>

</html>