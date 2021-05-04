@extends('layouts.app')

@section('content')
<div class="container bg-white">
    <div class="wrap mx-2 my-5 py-4">
        

        <div class="header d-flex justify-content-sm-between">
            <div class="left">
                <h1>ADMIN</h1>
                <h5>All movies</h5>
            </div>

            <div class="right">
                <button type="button" class="btn btn-info btn-lg display-1"data-toggle="modal" data-target="#myModal">+ Add Movie</button>
            </div>
            
        </div>
        <hr>

        <div class="row ">

            <div class="col-md-3">
                <div class="search bg-secondary py-3" style="border-radius: 1rem">
                    <form action="" class="bg-light m-3" method="POST">
                        @csrf

                        <div class="form-group">
                            <input name="search" type="hidden" class="form-control" id="search"
                            placeholder="Search for movies">
                        </div>

                        <button  type="submit" class="btn-light btn px-3 w-100 text-sm-left">Genre</button>

                    </form>
                    <form action="" class="bg-light m-3" method="POST">
                        @csrf

                        <div class="form-group">
                            <input name="search" type="hidden" class="form-control" id="search"
                            placeholder="Search for movies">
                        </div>

                        <button  type="submit" class="btn-light btn px-3 w-100 text-sm-left rounded">Genre</button>

                    </form>
                    <form action="" class="bg-light m-3" method="POST">
                        @csrf

                        <div class="form-group">
                            <input name="search" type="hidden" class="form-control" id="search"
                            placeholder="Search for movies">
                        </div>

                        <button  type="submit" class="btn-light btn px-3 w-100 text-sm-left">Genre</button>

                    </form>
                </div>
            </div>


            <div class="col-md-9">

                <table class="table">
                    <thead class="thead-default">
                    <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Genre</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <th scope="row">{{$movie->id}}</th>
                            <td>{{$movie->title}}</td>
                            <td>{{$movie->description}}</td>
                            <td>{{$movie->genre}}</td>
                            <td>{{$movie->price}}</td>
                            <td>{{$movie->quantity}}</td>
                            <td>
                                <a href="">
                                    <img height="20rem" src="/image/icons/icons8-edit-48.png" alt="" srcset="">
                                </a>
                            </td>
                            <td>
                                <form action="/movies/{{$movie->id}}" class="bg-light m-3" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
            
                                    <div class="form-group">
                                        <input name="search" type="hidden" class="form-control" id="search"
                                        placeholder="Search for movies">
                                    </div>
            
                                    <button  type="submit" class="btn btn-default">
                                        <img height="20rem" src="/image/icons/icons8-trash-48.png" alt="" srcset="">
                                    </button>
            
                                </form>
                            </td>                            
                        </tr>
                    @endforeach
                    </tbody>
                    </table>

            </div>
        </div>



        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" arialabelledby="
exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adda new movie to the store</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <form action="{{ route('movie.store') }}" method="post" enctype="multipart/form-data">

                    <!-- Add CSRF Token -->
                    @csrf

                    <div class="form-group">
                      <label for="title">Movie Title</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="" placeholder="Movie Title" name="title">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Movie Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>



                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="title">Genre</label>
                            <input type="text" class="form-control" id="title" aria-describedby="" placeholder="Genre" name="genre">
                        </div>
                          
                        <div class="form-group col-md-4">
                            <label for="title">Price</label>
                            <input type="text" class="form-control" id="title" aria-describedby="" placeholder="Price" name="price">
                        </div>
                          
                        <div class="form-group col-md-4">
                            <label for="title">Quantity</label>
                            <input type="text" class="form-control" id="title" aria-describedby="" placeholder="Quantity"  name="quantity">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                
            </div>

            
        </div>
    </div>

        
        
    </div>
</div>
@endsection
