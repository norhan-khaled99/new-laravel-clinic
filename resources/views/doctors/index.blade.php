@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>List of Doctors</h2>

        <!-- Display success message if any -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($doctor as $doctor)
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td >
                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('doctors.delete', ['id' => $doctor->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" >Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
