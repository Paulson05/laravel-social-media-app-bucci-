@extends('templates.default')

@section('content')
   <section class="masthead" style="background:url('assets/img/bg-pattern.png'), linear-gradient(to left, #7b4397, #dc2430);height:100%;">
    <div class="container" style="">
        <h2 style="color: white">Sign up</h2>
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('auth.postSignup') }}" method= "POST">
                    @csrf
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     <label for="email" style="color: white">Email address:</label>
                     <input type="email" class="form-control" placeholder="Enter email" name ="email" id="email"  required>
                        {{-- @if($errors-has('email '))
                            <span class="help-block">{{ $error->first('username') }}</span>
                        @endif --}}
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="pwd" style="color: white">username:</label>
                        <input type="text" class="form-control" placeholder="Enter username"  name ="username"  id="pwd" required>
                       </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     <label for="pwd" style="color: white">Password:</label>
                     <input type="password" class="form-control" placeholder="Enter password"  name ="password"  id="pwd" required value="">
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
   </section>
@endsection