@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2>Add Doctor</h2>
                        <form method="POST" action="{{ route('doctors.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add Doctor</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
