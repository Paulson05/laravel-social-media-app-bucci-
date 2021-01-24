

@extends('templates.default')

@section('content')
<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: blue !important">
    <div class="container"><a class="navbar-brand js-scroll-trigger" href="{{ route('index')}}">Bucci app </a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler float-right" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
           
            <ul class="nav navbar-nav">
                <li ><a class="nav-link js-scroll-trigger" href="">Timeline</a></li>
                <li ><a class="nav-link js-scroll-trigger" href="">Friends</a></li>
            </ul>
             <form class="navbar-form mr-auto"  role="search" action="{{ route('search.results')}}">
             
                    <input class "nav-item form-control" type="text" name="query" id="" placeholder="find people">
            
                <button type="submit" class="nav-item btn btn-default">search</button>
             </form>
             
            <ul class="nav navbar-nav ml-auto">
                    @if(auth()->check())
                        {{ "in" }}
                    @endif
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="">{{ auth()->user()->username }}</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="">update profile</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('auth.signout') }}">sign out</a></li>
                
            </ul>
    </div>
    </div>
</nav>


<header class="masthead" style="background:url('assets/img/bg-pattern.png'), linear-gradient(to left, #7b4397, #dc2430);height:100%;">
    
            
</header>
@endsection