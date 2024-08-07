<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Create Student</h2>
    <form action="/students" method="POST">
        @csrf
        Fullname: <input type="text" name="fullname"><br>
        Age: <input type="text" name="age"><br>
        Phone: <input type="text" name="phone"><br>
        City: <input type="text" name="city"><br>
        Subcity: <input type="text" name="subcity"><br>
        <input type="submit">
    </form>

</body>

</html>