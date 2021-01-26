@extends('templates.default')

@section('content')
<div class="row" style="margin-top:80px;">
    <div class="col-lg-6">
        @include('/templates/partials/userblock')
        <hr style="border: 2px solid blue">
    </div>
    <div class="col-lg-4 col-lg-6">
    @if(!$user->friends()->count())
    <p style="color: red;">{{ $user->getFirstNameOrUsername() }} has no friends</p>
        @else
        @foreach($user->friends() as $user)
        @include('/templates/partials/userblock')
            
        @endforeach
    @endif
    
     </div>
    </div>
@endsection  

