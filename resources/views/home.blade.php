@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-4">
        <div class="card border-5">
            <div class="card-body">
            <p class="fs-1 fw-bolder my-3">examination</p>
            <button class="btn add-examination">Add examination</button>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-5">
            <div class="card-body">
            <p class="fs-1 fw-bolder my-3">Session</p>
            <button class="btn add-examination">Add Session</button>
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
