@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <form method="POST" action="{{ route('patients.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="age" class="form-label">{{ __('Age') }}</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone_number" class="form-label">{{ __('Phone Number') }}</label>
                                <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
                            </div>

                            <div class="mb-3">
                                <label for="chronic_diseases" class="form-label">{{ __('Chronic Diseases') }}</label>
                                <input type="text" class="form-control" id="chronic_diseases" name="chronic_diseases">
                            </div>

                            <div class="mb-3">
                                <label for="ct" class="form-label">{{ __('CT') }}</label>
                                <select class="form-select" id="ct" name="ct">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">{{ __('Add Patient') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
