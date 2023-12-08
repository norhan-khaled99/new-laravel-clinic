@section('title')

@endsection

<!-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> -->



@section('content')
    <h1 class="text-center">Create Post</h1>
    <div class="row justify-content-center my-3">
        <div class="col-md-6">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{route('sessions.store')}}" enctype="multipart/form-data">
                @csrf
                <div>
                    <h3>Patient Name</h3>
                    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <input type="text" class="form-control" value="{{old('title')}}" name="title">
                </div>

                <div>
                    <h3>Age</h3>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <input type="text" class="form-control" value="{{old('description')}}" name="description">
                </div>

                
                <div>
                    <h3>phoneNumber</h3>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <input type="number" class="form-control" value="{{old('description')}}" name="description">
                </div>
 
                <div>
                    <h3>SessionDate</h3>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <input type="date" class="form-control" value="{{old('description')}}" name="description">
                </div>

                <div>
                    <h3>SessionNumber</h3>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <input type="date" class="form-control" value="{{old('description')}}" name="description">
                </div>
               
                <div>
                    <h3>Diagnostic</h3>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <input type="text" class="form-control" value="{{old('description')}}" name="description">
                </div>
 
          
                <div class="d-block mx-auto my-3 text-center">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
@endsection

