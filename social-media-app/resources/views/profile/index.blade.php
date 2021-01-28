@extends('templates.default')

@section('content')
<div class="row" style="margin-top:120px;">
    <div class="col-lg-6">
        @include('/templates/partials/userblock')
        <hr style="border: 2px solid blue">
    </div>
    <div class="col-lg-4 col-lg-6">
        @if (Auth::user()->hasFriendRequestsPending($user))
        <p>waiting for {{ $user->getNameOrUsername() }} to accept your request</p>
    @elseif(Auth::user()->hasFriendRequestReceived($user))
    
        <a href="{{ route('friend.accept', ['username' => $user->username]) }}" class="btn btn-primary">Accept friend  Request</a>
        @elseif(Auth::user()->isFriendsWith($user))
        <p>you and  {{ $user->getNameOrUsername() }} are friends</p>
        @else
        <a href="{{ route('friend.add', ['username' => $user->username]) }}" class="btn btn-primary">Add as friend</a>
        @endif
        <h4>{{ $user->getFirstNameOrUsername() }} are friends</h4>
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

