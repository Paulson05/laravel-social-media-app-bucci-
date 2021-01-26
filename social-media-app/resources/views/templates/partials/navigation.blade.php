<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: blue !important">
    <div class="container"><a class="navbar-brand js-scroll-trigger" href="{{ route('index')}}">Bucci app </a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler float-right" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            
            @if (Auth::check())
            <ul class="nav navbar-nav">
                <li ><a class="nav-link js-scroll-trigger" href="{{ route('index') }}">Timeline</a></li>
                <li ><a class="nav-link js-scroll-trigger" href="{{ route('friend.index') }}">Friends</a></li>
            </ul>
            <form class="navbar-form mr-auto"  role="search" action="{{ route('search.results')}}">
             
                <input class "nav-item form-control" type="text" name="query" id="" placeholder="find people">
        
            <button type="submit" class="nav-item btn btn-default">search</button>
         </form>
             @endif
            <ul class="nav navbar-nav ml-auto">
                @if (Auth::check())  
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('profile.index', ['username' =>  Auth::user()->username]) }}">{{  Auth::user()->getNameOrUsername()  }}</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('profile.edit') }}">update profile</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('auth.signout') }}">sign out</a></li>  
                @else
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('auth.signup')}}">Sign up</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('auth.signin') }}">Sign in</a></li>
                @endif
            </ul>
    </div>
    </div>
</nav>