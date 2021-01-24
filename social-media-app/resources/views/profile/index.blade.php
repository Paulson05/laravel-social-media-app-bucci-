@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-lg-5">
        @include('/templates/partials/userblock')
        <hr>
    </div>
    <div class="col-lg-4 col-lg-offset-3">

        <h4>{{ $user->first_name }} friends</h4>
        @if(!$user->friends()->count())
        <p>{{ $user->first_name }}  has no friends</p>
        @else
          @foreach($user ->friends() as $user)
          @include('/templates/partials/userblock')
          @endforeach
        @endif
    </div>
</div>
    
@endsection  

