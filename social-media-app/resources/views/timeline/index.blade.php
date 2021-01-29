@extends('templates.default')

@section('content')
   <section class="masthead" style="background:url('assets/img/bg-pattern.png'), linear-gradient(to left, #7b4397, #dc2430);height:100%;">
    <div class="container" >
        <div class="row">
            <div class="col-lg-6">
               
                <form action="{{ route('status.post') }}" method= "POST">
                    @csrf
                   
                    <div class="form-group">
                       
                        <textarea class="form-control" name="status" id="" rows="2" placeholder="what's up {{Auth::user()->getFirstNameOrUsername() }}?"></textarea>
                   
                  </div>
                    
                    <button type="submit" class="btn btn-primary" style="color: white">Update status</button>
                    </form> 
            </div>
        </div>
       </div>
       <div class="row">
           <div class="col-lg-5">
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
                        <form role="form" action="{{ route('status.reply',['statusid'=>$status->id]) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                            
                                <textarea class="form-control" name="reply-{{ $status->id }}" rows="5" style="background: none" placeholder="reply to this status"></textarea>
                              </div>
                            <input type="submit" value="reply" class="btn btn-default btn-sm" style="background: red">
                            
                        </form>
                    </div>
                    
               @endforeach

               @endif

           </div>
       </div>
   </section>
@endsection