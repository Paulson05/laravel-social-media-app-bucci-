@extends('templates.default')

@section('content')
<div class="container" style="padding-top: 60px">
    <h3 class="media-heading">your search for "{{ Request::input('query') }}"</h3>
    @if(!$users->count())
    <p>no result found</p>
    @else
    <div class="row">
        <div class="col-lg-12">
           @foreach($users as $user)
           @include('/templates/partials/userblock')
           @endforeach
    
        </div>
    </div>
   </div>
        
    @endif
    
@endsection  

