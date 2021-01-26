@extends('templates.default')

@section('content')
<div class="row" style="margin-top:80px;">
    <div class="col-lg-6">
      <h3  style="margin:30px;">your Friends</h3>

      @if(!$friends->count())
      <p style="color: red;">your has no friends</p>
          @else
          @foreach($friends as $user)
          @include('/templates/partials/userblock')
              
          @endforeach
      @endif
    </div>
    <div class="col-lg-4 col-lg-6">
   
    <p style="color: red;">friends Request</p>
    
    
     </div>
    </div>
@endsection  

