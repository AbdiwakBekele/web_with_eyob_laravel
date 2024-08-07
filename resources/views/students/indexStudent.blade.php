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

    <h2>Welcome to Students Page</h2>
    <hr>
    <a href="/students/create">Create Student</a>

    <br>



    <table class="table table-stripe">
        <tr>
            <th> ID</th>
            <th> Name</th>
            <th> Age</th>
            <th> Phone</th>
            <th> Action</th>
        </tr>

        @foreach($students as $student)
        <tr>
            <td> {{ $student->id }} </td>
            <td> {{ $student->name }} </td>
            <td> {{ $student->age }} </td>
            <td> {{ $student->phone }} </td>
            <td>
                <a href="/students/{{$student->id}}">Show</a>
                <a href="/students/{{$student->id}}/edit">Edit</a>
                <form action="/students/{{$student->id}}" method="POST">
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