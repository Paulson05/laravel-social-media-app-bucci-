<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: blue !important">
    <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">Bucci app </a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler float-right" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div
            class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('auth.signup')}}">Sign up</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('auth.postSignup') }}">Sign in</a></li>
                {{-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li> --}}
            </ul>
    </div>
    </div>
</nav>