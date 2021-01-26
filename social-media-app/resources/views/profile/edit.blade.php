@extends('templates.default')

@section('content')
@include('templates.partials.alerts')

    <div class="container" style="margin-top:50px;">
        <h2 style="color: rgb(212, 51, 51)">update page</h2>
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('profile.edit') }}" method= "post">
                    @csrf
                   
                    <div class="col-lg-6">
                    <div class="form-group{{ $errors->has('email') ? ' is-invalid' : '' }}">
                        <label for="pwd" style="color: white">first name:</label>
                        <input type="text" class="form-control" name="first_name" placeholder="first  name" value="{{ Auth::user()->first_name ?: Request::old('first_name') }}"    id="pwd"  >
                       </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group{{ $errors->has('email') ? ' is-invalid' : '' }}">
                     <label for="last_name" style="color: white">last name:</label>
                     <input type="last_name" name="last_name" class="form-control" placeholder="last name" value="{{ Auth::user()->last_name  ?: Request::old('last_name') }}"   id="last_name" >
                    </div>
                   </div>
                
                    <div class="form-group{{ $errors->has('email') ? ' is-invalid' : '' }}">
                     <label for="last_name" style="color: white">location:</label>
                     <input type="location" name="location" class="form-control" placeholder="location"  value="{{ Auth::user()->location ?: Request::old('location') }}"   id="last_name" >
                    </div>
                
                   <div class="form-group">
                    <button type="submit" class="btn btn-primary">update</button>

                   </div>
                    </form> 
            </div>
        </div>
       </div>

@endsection