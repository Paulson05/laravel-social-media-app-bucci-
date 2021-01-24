<div class="media" style="padding-top: 50px;">
    <a href="{{ route('profile.index',['username'=>$user->username]) }}" class="pull-left">

        <img src="{{ $user->getAvatarUrl() }}" alt="img" class="media-object">
    </a>
    <div class="media-body">
        <h4 class="media-heading"><a href="{{ route('profile.index',['username'=>$user->username]) }}">{{ $user->first_name }}  {{$user->last_name }}</a></h4>
        @if($user->location)
        <p>{{ $user->location }}</p>
        @endif
    </div>
</div>