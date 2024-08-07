<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Edit Student</h2>
    <form action="/students/{{$student->id}}" method="POST">
        @csrf
        @method('PUT')
        Fullname: <input type="text" name="fullname" value="{{$student->name}}"><br>
        Age: <input type="text" name="age" value="{{$student->age}}"><br>
        Phone: <input type="text" name="phone" value="{{$student->phone}}"><br>
        City: <input type="text" name="city" value="{{$student->city}}"><br>
        Subcity: <input type="text" name="subcity" value="{{$student->subcity}}"><br>
        <input type="submit">
    </form>

</body>

</html>