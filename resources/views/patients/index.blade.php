    @extends('layouts.app')

    @section('content')
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <div class="container">
            <div class="d-flex justify-content-end">
                <button class="btn btn-info my-3" onclick="window.location.href='{{ url('/') }}'">Back to Homepage</button>
    
            </div>

            <h2 >List of Patients</h2>

            <form action="{{ route('patients.index') }}" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search patients..." name="search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>

            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Phone Number</th>
                    <th>Chronic Diseases</th>
                    <th>CT</th>
                </tr>
                </thead>
                <tbody>
                @foreach($patients as $patient)
                    <tr>
                        <td>{{ $patient->patient_id }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->age }}</td>
                        <td>{{ $patient->phone_number }}</td>
                        <td>{{ $patient->chronic_diseases }}</td>
                        <td>{{ $patient->ct }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endsection
