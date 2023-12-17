@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <div class="container">
<div class="row d-flex justify-content-center">

    <div class="col-md-4">
        <div class="card border-5">
            <div class="card-body text-center">
            <p class="fs-1 fw-bolder my-5 ">
            Patients</p>
            <a class="btn  add-examination" href="{{ route('patients.create') }}">
                Add Pateint</a>
            </div>
        </div>
    </div>

   <div class="d-flex justify-content-evenly my-3">
    <div class="col-md-4">
        <div class="card border-5 ">
            <div class="card-body text-center">
            <p class="fs-1 fw-bolder my-5 ">
            examination</p>
            <a class="btn  add-examination" href="{{ route('examination.create') }}">
                Add examination</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-5">
            <div class="card-body text-center">
            <p class="fs-1 fw-bolder my-5">Session</p>
            <a class="btn add-examination" href="{{ route('sessions.create') }}">Add Session</a>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
