@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Movie</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">

        
        <div class="col-md-6">

            <img style="height: 100%" class="card-img-top w-100" src="{{ asset('storage/movies/' . $movie->image) }}" alt="Card image cap" >
            

        </div>

        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
               
                <div class="card-body">
                    <h4 class="card-title">{{$movie->title}}</h4>
                    <p class="card-text">{{$movie->price}}</p>
                    <p class="card-text">{{$movie->genre}}</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="/" class="btn btn-primary">Continue Shopping</a>
                </div>
                </div>
                
            <p class="card-text">{{$movie->description}}</p>
        </div>
        

    </div>
</div>
@endsection
