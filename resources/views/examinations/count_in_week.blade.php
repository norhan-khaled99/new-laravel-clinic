@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Examinations Count in the Current Week</h2>
        <div class="card col-4 bg-light">
        <p class="py-4 text-center">Number of examinations  in the week: {{ $examinationCount }}</p>
        </div>
    </div>
@endsection
