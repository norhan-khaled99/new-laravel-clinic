@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <div class="container">
        <div class="d-flex justify-content-end">
            <button class="btn btn-info my-3" onclick="window.location.href='{{ url('/') }}'">Back to Homepage</button>
        </div>

        <h2>List of Examinations</h2>

        <form action="{{ route('examination.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search examinations..." name="search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Patient</th>
                <th>Follow</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($examination as $exam)
                <tr>
                    <td>{{ $exam->id }}</td>
                    <td>{{ $exam->patient->name }}</td>
                    <td>{{ $exam->follow }}</td>
                    <td>
                        <a href="{{ route('examination.edit', $exam->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('examination.delete', $exam->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this examination?')">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
