@extends('layout.app')

@section('title', 'Student Page')

@push('style')

@endpush

@section('content')

<h2>Welcome to Students Page</h2>
<hr>
<a href="/students/create">Create Student</a>
<br>

@include('components.students.studentlist')

@push('script')
<script>

</script>
@endpush
@endsection