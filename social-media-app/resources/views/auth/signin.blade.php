@extends('templates.default')

@section('content')
   <section class="masthead" style="background:url('assets/img/bg-pattern.png'), linear-gradient(to left, #7b4397, #dc2430);height:100%;">
    <div class="container" >
        <div class="row">
            <div class="col-lg-6">
                <h2 style="color: white">Sign in</h2>
                <form action="{{ route('auth.postSignin') }}" method= "POST">
                    @csrf
                   
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="pwd" style="color: white">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter email"  name ="email"  id="pwd" required>
                       </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     <label for="pwd" style="color: white">Password:</label>
                     <input type="password" class="form-control" placeholder="Enter password"  name ="password"  id="pwd" required value="">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label" style="color: white">
                          <input class="form-check-input" type="checkbox" name="remember" > Remember me
                        </label>
                       </div>
                    
                    <button type="submit" class="btn btn-primary" style="color: white">Sign in</button>
                    </form> 
            </div>
        </div>
       </div>
   </section>
@endsection