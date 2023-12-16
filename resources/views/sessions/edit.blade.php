@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">

                        <form method="POST" action="{{ route('sessions.update', $session->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="patient_id" class="form-label">Patient</label>
                                <select class="form-select" id="patient_id" name="patient_id" required>
                                    @foreach($patients as $patient)
                                        <option value="{{ $patient->id }}" {{ $session->patient_id == $patient->id ? 'selected' : '' }}>
                                            {{ $patient->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="doctor_id" class="form-label">Doctor</label>
                                <select class="form-select" id="doctor_id" name="doctor_id" required>
                                    @foreach($doctors as $doctor)
                                        <option value="{{ $doctor->id }}" {{ $session->doctor_id == $doctor->id ? 'selected' : '' }}>
                                            {{ $doctor->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="session_date" class="form-label">Session Date</label>
                                <input type="date" class="form-control" id="session_date" name="session_date" value="{{ $session->session_date }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="session_number" class="form-label">Session Number</label>
                                <input type="number" class="form-control" min="1" id="session_number" name="session_number" value="{{ $session->session_number }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="diagnosis" class="form-label">Diagnosis</label>
                                <textarea class="form-control" id="diagnosis" name="diagnosis" rows="3" required>{{ $session->diagnosis }}</textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update Session</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
