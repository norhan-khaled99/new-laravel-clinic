@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2>Edit Examination</h2>
                        <form method="POST" action="{{ route('examination.update', $examination->id) }}">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="patient_id" class="form-label">Patient</label>
                                <select class="form-select" id="patient_id" name="patient_id" required>
                                    @foreach($patients as $patient)
                                        <option value="{{ $patient->id }}" {{ $examination->patient_id == $patient->id ? 'selected' : '' }}>{{ $patient->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="follow" class="form-label">Follow</label>
                                <input type="text" class="form-control" id="follow" name="follow" value="{{ $examination->follow }}" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update Examination</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
