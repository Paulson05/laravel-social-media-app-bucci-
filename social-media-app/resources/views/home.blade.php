@extends('templates.default')

@section('content')
<header class="masthead" style="background:url('assets/img/bg-pattern.png'), linear-gradient(to left, #7b4397, #dc2430);height:100%;">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-7 my-auto">
                <div class="mx-auto header-content">
                    <h1 class="mb-5">New Age is an app landing page that will help you beautifully showcase your new mobile app, or anything else!</h1><a class="btn btn-outline-warning btn-xl js-scroll-trigger" role="button" href="#download">Start Now for Free!</a></div>
            </div>
            <div class="col-lg-5 my-auto">
                <div class="device-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div class="device" style="background-image:url('assets/img/iphone_6_plus_white_port.png');">
                            <div class="screen"><img class="img-fluid" src="assets/img/demo-screen-1.jpg"></div>
                            <div class="button"></div>
                        </div>
                    </div>
                </div>
                <div class="iphone-mockup"></div>
            </div>
        </div>
    </div>
</header>
@endsection