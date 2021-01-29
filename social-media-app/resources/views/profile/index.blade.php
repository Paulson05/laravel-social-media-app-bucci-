@extends('templates.default')

@section('content')
<div class="row" style="margin-top:120px;">
    <div class="col-lg-6">
        @include('/templates/partials/userblock')
        <hr style="border: 2px solid blue">
        @if (!$statuses->count())
        <p>there no status on you timeline</p>
    @else

    @foreach($statuses as $status)
          <div class="media">
              <a href="{{ route('profile.index', ['username'=> $status->user->username]) }}" class="pull-left"></a>
              <img src="{{ $status->user->getAvatarUrl() }}" alt="">
                <div class="media-body">
                    <h4 class="media-heading"><a href="{{ route('profile.index', ['username'=>$status->user->username])}}">{{ $status->user->getNameOrUsername()}}</a></h4>
                     <p class="list-inline">{{$status->body  }}</p>
                      <ul class="list-inline">
                          <span>{{ $status->created_at->diffForHumans()}}</span>
                          <span><a href="">likes</a></span>
                        <span>10likes</span>

                      </ul>
                        
                     @foreach($status-> replies as $reply)
                     <div class="media">
                         <a href="{{ route('profile.index', ['username'=> $reply->user->username]) }}" class="pull-left"></a>
                         <img src="{{ $reply->user->getAvatarUrl() }}" alt="">
                           <div class="media-body">
                               <h4 class="media-heading"><a href="{{ route('profile.index', ['username'=>$reply->user->username])}}">{{ $reply->user->getNameOrUsername()}}</a></h4>
                                <p class="list-inline">{{$reply->body  }}</p>
                                 <ul class="list-inline">
                                     <span>{{ $reply->created_at->diffForHumans()}}</span>
                                     <span><a href="">likes</a></span>
                                   <span>10likes</span>

                                 </ul>
                                   

                            </div>
                      
                         </div>
                     @endforeach     

                 </div>
                 
         </div>
         <div>
           @if($authUserIsFriend || Auth::user()->id===$status->user->id)
             <form role="form" action="{{ route('status.reply',['statusid'=>$status->id]) }}" method="POST">
                 @csrf
                 <div class="mb-3">
                 
                     <textarea class="form-control" name="reply-{{ $status->id }}" rows="5" style="background: none" placeholder="reply to this status"></textarea>
                   </div>
                 <input type="submit" value="reply" class="btn btn-default btn-sm" style="background: red">
                 
             </form>
             @endif
         </div>
         
    @endforeach

    @endif

        
    </div>
    <div class="col-lg-4 col-lg-6">
        @if (Auth::user()->hasFriendRequestsPending($user))
        <p>waiting for {{ $user->getNameOrUsername() }} to accept your request</p>
    @elseif(Auth::user()->hasFriendRequestReceived($user))
    
        <a href="{{ route('friend.accept', ['username' => $user->username]) }}" class="btn btn-primary">Accept friend  Request</a>
        @elseif(Auth::user()->isFriendsWith($user))
        <p>you and  {{ $user->getNameOrUsername() }} are friends</p>
        @elseif(Auth::user()->id !==$user->id)
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

