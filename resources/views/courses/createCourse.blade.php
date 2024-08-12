<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Create Course</h2>
    <form action="/courses" method="POST">
        @csrf
        Student Name: <select name="student_id">
            <option value="">Choose...</option>
            @foreach($students as $student)
            <option value="{{$student->id}}">{{$student->name}}</option>
            @endforeach
        </select>
        Course Name: <input type="text" name="course_name"><br>
        <input type="submit">
    </form>

</body>

</html>