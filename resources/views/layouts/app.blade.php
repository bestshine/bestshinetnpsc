<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/payment.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/duration-picker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/duration-picker.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/animsition/animsition.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/animsition/animsition.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="text/css" href="{{ asset('images/home/fav-ico.ico') }}">
    <!-- code added by tamil -->
    <link href="{{ asset('css/home/animate.css') }}" rel="stylesheet"> 
    @yield('styles')
</head>
<body>
    <div id="app">  
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Site Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <div class="custom-site-logo"></div>
                    </a>                
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('home') }}">Home</a></li>
                           <!-- <li><a href="{{ route('aboutUs') }}">About</a></li>
                            <li><a href="{{ route('features') }}">Features</a></li>
                            <li><a href="{{ route('contactUs') }}">Contact Us</a></li>-->
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                          <!--  <li><a href="{{ route('aboutUs') }}">About</a></li>
                            <li><a href="{{ route('features') }}">Features</a></li>
                           <li><a href="{{ route('contactUs') }}">Contact Us</a></li>-->
                            <!-- https://bootsnipp.com/snippets/depAz -->
                            @php $notificationCount = getNotificationCount(); @endphp
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle notify-click" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <div class="numberCircle">{{$notificationCount}}</div>
                                <i class="fa fa-bell-o fa-2x" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu notify-drop">
                                <div class="notify-drop-title">
                                    <div class="row">
                                        <div class="text-center">Notifications</div>
                                    </div>
                                </div>
                                <!-- end notify title -->
                                <!-- notify content -->
                                @php $notifications = getNotifications(); @endphp
                                @if(count($notifications) > 0)
                                    <div class="drop-content">
                                        @foreach($notifications as $notification)
                                            <li>
                                                <div class="col-md-9 col-sm-9 col-xs-9 pd-l0">
                                                    @php $string = $notification->title; @endphp
                                                    <p>{{ substr($string, 0, 50) }}... <a href="{{ $notification->url }}">link</a></p> 
                                                    <p class="time">{{ $notification->created_at }}</p>
                                                </div>
                                            </li> 
                                        @endforeach                                 
                                    </div>
                                    <div class="notify-drop-footer text-center">
                                        <a href="{{route('notification')}}"><i class="fa fa-eye"></i>View all</a>
                                    </div>
                                @else
                                    <div class="drop-content">
                                        <li>
                                            <div class="col-md-9 col-sm-9 col-xs-9 pd-l0">
                                                <p>No Content</p>
                                            </div>
                                        </li>                                 
                                    </div>
                                    <div class="notify-drop-footer text-center">
                                       
                                    </div>                                
                                @endif
                              </ul>
                            </li>                            

<!--                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>                             

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li> -->
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
       
        @if(Auth::User())
            @if((Route::currentRouteName() != "contactUs") && (Route::currentRouteName() != "aboutUs")&& (Route::currentRouteName() != "privacyPolicy") && (Route::currentRouteName() != "termsAndCondition") && (Route::currentRouteName() != "features"))
                <!-- Admin NavBar -->
                @if(Auth::User()->roles->first()->name == "Admin")    
                    @include('navbar.admin-navbar')
                @endif    

                <!-- User NavBar -->
                @if(Auth::User()->roles->first()->name == "User")    
                    @include('navbar.user-navbar')
                @endif                
            @endif                
        @endif  

        @yield('content')

        <div class="tets" ng-app="appcommon" ng-controller="commonCtrl">
        <!-- include feed-back -->
        @include('layouts.partials.feed-back')

        <!-- include report-error -->
        @include('layouts.partials.report-error')        
        </div>
        <!-- include footer -->
        @include('layouts.partials.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/angular.min.js') }}"></script>
    <script src="{{ asset('js/duration-picker.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script> 
    <script src="{{ asset('js/sweetalert2/dist/sweetalert2.js') }}"></script> 
    <script src="{{ asset('js/sweetalert2/dist/sweetalert2.min.js') }}"></script> 
    <!-- <script src="{{ asset('js/animsition/animsition.js') }}"></script> -->
    <script src="{{ asset('js/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('js/user.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="{{ asset('js/module.js') }}"></script>
    <script src="{{ asset('js/exam.js') }}"></script>
    <script src="{{ asset('js/register.js') }}"></script>
    <script src="{{ asset('js/question.js') }}"></script>
    <script src="{{ asset('js/plan.js') }}"></script>
    <script src="{{ asset('js/payment.js') }}"></script>
   <!-- script addde by tamil -->
   <script src="{{ asset('js/wow.min.js') }}"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

   <script type="text/javascript">
    $( document ).ready(function() {
       new WOW().init();
    });    
   </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".show-menu-list").click(function(){
                $(".dropdown-menu-list").fadeToggle("slow");
            });
        });

        /*Scroll to top when arrow up clicked BEGIN*/
        $(window).scroll(function() {
            var height = $(window).scrollTop();
            if (height > 100) {
                $('#topBtn').fadeIn();
            } else {
                $('#topBtn').fadeOut();
            }
        });

        $(document).ready(function() {
            $("#topBtn").click(function(event) {
                event.preventDefault();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            });
        });        
    </script>     
    @yield('scripts')
</body>
</html>
