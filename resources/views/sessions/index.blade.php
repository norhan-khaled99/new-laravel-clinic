@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <div class="container">
        <div class="d-flex justify-content-end">
            <button class="btn btn-info my-3" onclick="window.location.href='{{ url('/') }}'">Back to Homepage</button>
        </div>

        <h2>List of Sessions</h2>

        <form action="{{ route('sessions.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search sessions..." name="search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Patient Name</th>
                <th>Session Date</th>
                <th>Session Number</th>
                <th>Doctor Name</th>
                <th>Diagnosis</th>
                @if(auth()->user() && auth()->user()->role == 'admin')
                <th>Actions</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($sessions as $session)
                <tr>
                    <td>{{ $session->id }}</td>
                     <td>{{ $session->patient->name }}</td>
                    <td>{{ $session->session_date }}</td>
                    <td>{{ $session->session_number }}</td>
                    <td>{{ $session->doctor->name }}</td>
                    <td>{{ $session->diagnosis }}</td>
                    @if(auth()->user() && auth()->user()->role == 'admin')
                            <td>
                                <a href="{{ route('sessions.edit', $session->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('sessions.delete', $session->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this session?')">Delete</button>
                                </form>
                            </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
