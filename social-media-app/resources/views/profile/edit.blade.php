@extends('templates.default')

@section('content')

    <div class="container" style="margin-top:50px;">
        <h2 style="color: rgb(212, 51, 51)">update page</h2>
        <div class="row">
            <div class="col-lg-6">
                <form action="" method= "POST">
                    @csrf
                    <div class="form-group has-error">
                     <label for="email" style="color: white">Email address:</label>
                     <input type="email" class="form-control" placeholder="Enter email" id="email"  >
                    
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' is-invalid' : '' }}">
                        <label for="pwd" style="color: white">username:</label>
                        <input type="text" class="form-control" placeholder="Enter username"    id="pwd" >
                       </div>
                    <div class="form-group{{ $errors->has('email') ? ' is-invalid' : '' }}">
                     <label for="pwd" style="color: white">Password:</label>
                     <input type="password" class="form-control" placeholder="Enter password"    id="pwd" value="">
                    </div>
                    
                    <div class="form-group form-check">
                     <label class="form-check-label" style="color: white">
                       <input class="form-check-input style="color: white"" type="checkbox"> Remember me
                     </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign up</button>
                    </form> 
            </div>
        </div>
       </div>

@endsection