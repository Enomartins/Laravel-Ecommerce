@extends('layouts.app')

@section('content')
<div class="container-fluid p-5" style="background-color: #fff;">
    <div class="row justify-content-center">
        <div class="col-lg-3">
            
            <img height="300px" class="card-img-top w-80" src="/image/isoken.png" alt="Card image cap" >

        </div>
        <div class="col-lg-6">
            <div class="card" style="border:none;">
                <div class="card-header">Personal Details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="my-3 headline d-flex justify-content-between align-items-center">
                    <h2>{{$user->name}}</h2>
                    <button class="btn btn-success">Edit Profile</button>
                </div>
                <div class="my-3 detail d-flex align-items-center">
                    <label for="age">Age</label>
                    <h6 class="ml-3 text-info font-weight-bold"> {{$profile->age}} years </h6>
                </div>

                <div class="detail d-flex align-items-center">
                    <label for="email">Email</label>
                    <h6 class="ml-3 text-info font-weight-bold"> {{$user->email}}</h6>
                </div>
                
            </div>
        </div>
        
    </div>

    <div class="row justify-content-center">

        <div class="col-lg-4">
            <div class="mt-5">

                <h4>Contact Details</h4>
                <hr>
            

                <div class="detail d-flex align-items-center">
                    <label for="country">Country</label>
                    <h6 class="text-capitalize ml-3 text-info font-weight-bold">{{$profile->city}}, {{$profile->country}}</h6>
                </div>
                <div class="detail d-flex align-items-center">
                    <label for="address">Address</label>
                    <h6 class="text-capitalize ml-3 text-info font-weight-bold">{{$profile->address}}</h6>
                </div>
                
                <div class="detail d-flex align-items-center">
                    <label for="phone">Phone</label>
                    <h6 class="text-capitalize ml-3 text-info font-weight-bold">{{$profile->phone}}</h6>
                </div>

            </div>
        </div>

        <div class="col-lg-6">

            <img height="300px" class="card-img-top w-80" src="/image/icons/cardl.jpg" alt="" srcset="">
        </div>

    </div>

</div>
<div class="col-lg-3">


    <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">

        <!-- Add CSRF Token -->
        @csrf

        <div class="d-flex">
            <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" aria-describedby="" placeholder="" name="country">

                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            
            <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" aria-describedby="" placeholder="" name="city">

                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
        </div>

        
        <div class="form-group">
          <label for="address">Street address</label>
          <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" aria-describedby="" placeholder="" name="address">

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        
        <div class="d-flex">
            <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" aria-describedby="" placeholder="" name="phone">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            
            <div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" aria-describedby="" placeholder="" name="age">

                    @error('age')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
        </div>

        
        <div class="form-group">
          <label for="card_type">Card type</label>
          <input type="text" class="form-control @error('card_type') is-invalid @enderror" id="card_type" aria-describedby="" placeholder="" name="card_type">

                @error('card_type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        
        <div class="form-group">
          <label for="card_number">Card Number</label>
          <input type="text" class="form-control @error('card_number') is-invalid @enderror" id="card_number" aria-describedby="" placeholder="" name="card_number">

                @error('card_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="d-flex">
            <div class="form-group">
            <label for="card_date">Card Date</label>
            <input type="text" class="form-control @error('card_date') is-invalid @enderror" id="card_date" aria-describedby="" placeholder="" name="card_date">

                    @error('card_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            
            <div class="form-group">
            <label for="cvv">CVV</label>
            <input type="text" class="form-control @error('cvv') is-invalid @enderror" id="cvv" aria-describedby="" placeholder="" name="cvv">

                    @error('cvv')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
        </div>

          

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Complete Profile</button>
        </div>
    </form>


</div>
@endsection
