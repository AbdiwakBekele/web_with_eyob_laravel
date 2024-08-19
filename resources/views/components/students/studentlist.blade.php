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