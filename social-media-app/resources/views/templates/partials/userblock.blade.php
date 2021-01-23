<div class="media" style="padding-top: 50px;">
    <a href="" class="pull-left">

        <img src="" alt="" class="media-object">
    </a>
    <div class="media-body">
        <h4 class="media-heading"><a href="">{{ $user->first_name }}  {{$user->last_name }}</a></h4>
        @if($user->location)
        <p>{{ $user->location }}</p>
        @endif
    </div>
</div>