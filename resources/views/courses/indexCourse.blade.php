<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="container">

    <h2>Welcome to Course Page</h2>
    <hr>
    <a href="/courses/create">Create Course</a>

    <br>

    <table class="table table-stripe">
        <tr>
            <th> ID</th>
            <th> Course Name</th>
            <th> Student Name</th>
        </tr>

        @foreach($courses as $course)
        <tr>
            <td> {{ $course->id }} </td>
            <td> {{ $course->course_name }} </td>
            <td> {{ $course->student->name }} </td>
            <td>
                <a href="/courses/{{$course->id}}">Show</a>
                <a href="/courses/{{$course->id}}/edit">Edit</a>
                <form action="/courses/{{$course->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger text-white">
                </form>
            </td>

        </tr>
        @endforeach
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>