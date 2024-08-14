<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Detail Student Profile</h2>
    <hr>

    <p> Name: {{$student->name}} </p>
    <p> Address: {{$student->subcity}}, {{$student->city}}</p>

    <hr>
    <h2>Courses</h2>

    <ol>
        @foreach($student->courses as $course)
        <li>{{$course->course_name}}</li>
        @endforeach
    </ol>


</body>

</html>