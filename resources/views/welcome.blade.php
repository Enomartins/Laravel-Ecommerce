<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

         <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                /* height: 100vh; */
                margin: 0;
            }

            
        </style>
    </head>
    <body>
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">My Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            @if (Route::has('login'))

            <nav class="navbar navbar-toggleable-md navbar-dark bg-primary">

                
                <a class="navbar-brand" href="/">Movie shop</a>


                <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <ul class="navbar-nav">
                        @auth
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/home') }}">My Dashboard <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/cart') }}">Cart</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">REGISTER</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </nav>
            @endif

            <div class="container">
                <div class="row mt-5">
                    <form action="{{ route('movie.search') }}" class="d-flex col-md-8 offset-md-2 justify-content-md-center" method="POST">
                        @csrf

                        <div class="form-group w-100 mb-0">
                            <input name="search" type="text" class="form-control" id="search"
                            placeholder="Search for movies">
                        </div>

                        <button type="submit" class="btn-primary p-1 mx-4 btn-sm">Search</button>

                    </form>
                </div>
                
                <div class="row mt-5">
                        
                        @foreach ($movies as $movie)

                        <div class="col-sm-6 col-md-3 mt-2">
                            <div class="card" style="">
                                
                                <a href="{{ route('movie.show', $movie->id) }}" class="p-0 b-0 btn btn-default">
                                    <img style="object-fit: cover; height:10rem" class="card-img-top w-100" src="{{ asset('storage/movies/' . $movie->image) }}" alt="" title="">
                                </a>
                                
                                <div class="card-body p-0">
                                    <h6 class="text-info font-weight-bold text-uppercase card-title">{{$movie->title}}</h6>
                                    <div class="d-flex justify-content-md-between">
                                        <p class="card-text">{{$movie->genre}}</p>
                                        <p class="card-text font-weight-bold text-danger">${{$movie->price}}</p>
                                    </div>
                                </div>

                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            
                            </div>
                        </div>
                            
                        @endforeach
                    
                        @foreach ($movies as $movie)

                        <div class="col-sm-6 col-md-3 mt-2">
                            <div class="card" style="">
                                
                                <a href="{{ route('movie.show', $movie->id) }}" class="p-0 b-0 btn btn-default">
                                    <img style="object-fit: cover; height:10rem" class="card-img-top w-100" src="{{ asset('storage/movies/' . $movie->image) }}" alt="" title="">
                                </a>
                                
                                <div class="card-body p-0">
                                    <h6 class="text-info font-weight-bold text-uppercase card-title">{{$movie->title}}</h6>
                                    <div class="d-flex justify-content-md-between">
                                        <p class="card-text">{{$movie->genre}}</p>
                                        <p class="card-text font-weight-bold text-danger">${{$movie->price}}</p>
                                    </div>
                                </div>

                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            
                            </div>
                        </div>
                            
                        @endforeach
                    
                </div>
            </div>

        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
