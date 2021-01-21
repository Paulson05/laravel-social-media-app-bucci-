@extends('templates.default')

@section('content')
   <div class="container" style="margin-top:200px">
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('auth.postSignup') }}" method= "POST">
                @csrf
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                 <label for="email">Email address:</label>
                 <input type="email" class="form-control" placeholder="Enter email" name ="email" id="email"  required>
                    {{-- @if($errors-has('email '))
                        <span class="help-block">{{ $error->first('username') }}</span>
                    @endif --}}
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="pwd">username:</label>
                    <input type="password" class="form-control" placeholder="Enter username"  name ="username"  id="pwd" required>
                   </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                 <label for="pwd">Password:</label>
                 <input type="password" class="form-control" placeholder="Enter password"  name ="password"  id="pwd" required value="">
                </div>
                
                <div class="form-group form-check">
                 <label class="form-check-label">
                   <input class="form-check-input" type="checkbox"> Remember me
                 </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
        </div>
    </div>
   </div>
@endsection