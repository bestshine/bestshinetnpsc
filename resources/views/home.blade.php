<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Styles -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900" rel="stylesheet">
    <link rel="shortcut icon" type="text/css" href="fav-ico.ico">
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
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('aboutUs') }}">About</a></li>
                            <li><a href="{{ route('features') }}">Features</a></li>
                            <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav> 
    </div>

    <div class="banner-carousel">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="{{ asset('images/home/neet-BANNER.png') }}" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-inner-content col-md-6">
                        <div class="row">
                            <div class="banner-carousel-cont text-center">
                               <!-- <span>
                                    Smart way to prepare for <span class="yellow">Online Test</span>
                                </span>
                                <div class="col-md-12">
                                    <a href="#" class="get-courses-btn dilb">Get courses</a>
                                </div>-->
                               <!-- <div class="col-md-12 Anouncement-wr">
                                    <label>Anouncement</label>
                                    <div class="Anouncement-marquee"><marquee>Smart way to prepare for NEET Smart way to prepare for NEET</marquee></div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('images/home/neet-BANNER.png') }}" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                    </div>
                </div>
            
                <div class="item">
                    <img src="{{ asset('images/home/neet-BANNER.png') }}" alt="New York" style="width:100%;">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> 

    <section class="news">
        <div class="container">
            <div class="news-out-wr"> 
                <div class="lable-wr">
                  <span class="span-label">Latest News</span><span><marquee>NEET exam can be written by total 3 times starts from the year 2017. People who wrote NEET exam last year (2016) also can able to appear this year(2017) and total number of times written Will be calculated from this year Only.</marquee></span>
                </div>
            </div>
        </div>
    </section>

    <section class="analy-wr pad-t-3 mr-b-0" id="analy-wr">
        <div class="container">
            <div class="col-md-6 text-center pad-t-3">
                <h4>Analyze your</h4>
                <h2 class="blue">Strengths <em class="yellow">&</em> Weaknesses</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and 
                  typesetting industry. Lorem Ipsum has been the industry's 
                  dummy text ever since the 1500s Lorem is simply 
                  dummy text of the printing and typesetting industry. Lorem
                   Ipsum has been the industry's dummy 
                  text ever since the 1500s,
                </p>
            </div>
            <div class="col-md-6 text-center analyzer-img-wr wow animated fadeInRight">
               <img src="{{ asset('images/home/analyzer.png') }}" alt="image-of-analyze">
            </div>
        </div>
    </section> 

    <section class="neet-cls-feature-wr mr-t-0">
        <div class="container">
            <div class="neet-cls-feature-in">
                <h3>List of Online Test</h3>
                <ul class="col-md-12">
                    <li class="col-md-6">
                        <div class="col-md-2 text-center">
                            <span class="number-a">1</span>
                        </div>
                        <div class="col-md-9">
                            <span class="sub-hd">Online test for STATE BOARD</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </li>
                    <li class="col-md-6">
                        <div class="col-md-2 text-center">
                           <span class="number-a">2</span>
                        </div>
                        <div class="col-md-9">
                           <span class="sub-hd">Online test for CBSE</span>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </li>
                    <li class="col-md-6">
                        <div class="col-md-2 text-center">
                           <span class="number-a">3</span>
                        </div>
                        <div class="col-md-9">
                            <span class="sub-hd">Online test for COLLAGE</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </li>
                    <li class="col-md-6">
                        <div class="col-md-2 text-center">
                           <span class="number-a">4</span>
                        </div>
                        <div class="col-md-9">
                            <span class="sub-hd">Online test for NEET</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section> 

    <section class="include-test-wr pad-t-3">
        <div class="container">
            <div class="row"> 
                <div class="col-md-6 include-list-wr text-left">
                <h3>Online test Prep Advantage</h3>
                <ul class="include-list-li">
                 <li><i class="fa fa-check" aria-hidden="true"></i>Lorem Ipsum is simply dummy text</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i>Lorem Ipsum is simply dummy text</li>
                   <li><i class="fa fa-check" aria-hidden="true"></i>Lorem Ipsum is simply dummy text</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Lorem Ipsum is simply dummy text</li>
                     <li><i class="fa fa-check" aria-hidden="true"></i>Lorem Ipsum is simply dummy text</li>
                </ul>
                </div>
                <div class="col-md-6 include-cont">
                    <div>
                        <p>Lorem Ipsum is simply dummy text of the printing and 
                          typesetting industry. Lorem Ipsum has been the industry's 
                          dummy text ever since the 1500s Lorem is simply 
                          dummy text of the printing and typesetting industry. Lorem
                           Ipsum has been the industry's dummy 
                          text ever since the 1500s,
                        </p>
                        <p>Lorem Ipsum is simply dummy text of the printing and 
                          typesetting industry. Lorem Ipsum has been the industry's 
                          dummy the industry's dummy 
                          text ever since the 1500s,
                        </p>
                    </div>
                    <a class="Singup-a btn" href="#">Register now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="homt-tab-wr" id="scroll-exam">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-hd-wr text-center">
                        <h2 class="heading">Exam Information</h2>
                        <div class="divider"></div>
                    </div>
                
                    <div class="tabbable tabs-left col-md-12 pad-t-3">
                        <div class="side-bar col-md-3">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a class="show-menu-list">MEDICAL ENTRANCE
                                    <span class="caret pull-right"></span></a>
                                    <ul class="dropdown-menu-list">
                                        <li><a href="#a" data-toggle="tab"><i class="fa fa-chevron-right" aria-hidden="true" style="font-size: 10px"></i> NEET</a></li>
                                        <li><a href="#b" data-toggle="tab"><i class="fa fa-chevron-right" aria-hidden="true" style="font-size: 10px"></i>  AICEE</a></li>
                                        <li><a href="#c" data-toggle="tab"><i class="fa fa-chevron-right" aria-hidden="true" style="font-size: 10px"></i>  AIPMT</a></li>
                                        <li><a href="#d" data-toggle="tab"><i class="fa fa-chevron-right" aria-hidden="true" style="font-size: 10px"></i>  AIIMS</a></li>
                                        <li><a href="#" data-toggle="tab">>> more click to login <<</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" data-toggle="tab">COLLAGE ENTRANCE</a></li>
                                <li><a href="#" data-toggle="tab">CBSE</a></li>
                                <li><a href="#" data-toggle="tab">STATE BOARD</a></li>
                            </ul>
                        </div>
                        <div class="tab-content col-md-9">
                            <div class="tab-pane active" id="a">
                                <h3 class="blue">NEET Exam 2017 Information</h3>
                                <span class="sub-hd">Update:</span> 
                                <p> NEET exam age limit for candidates is 25 Years old. For Reserved candidates age limit is 30 years old.</p><br>
                                <span class="sub-hd">Update:</span> 
                                <p>
                                    NEET exam can be written by total 3 times starts from the year 2017. People who wrote NEET exam last year (2016) also can able to appear this year(2017) and total number of times written Will be calculated from this year Only.
                                </p>
                                <br>
                                <span class="sub-hd">Course Duration</span>
                                <span class="sub-hd">MBBS:</span>
                                <p> The duration of MBBS course is four years and six months followed by internship of 1 year.</p><br>
                                <span class="sub-hd">BDS:</span>
                                <p> The course is divided into four years of training and one year compulsory rotatory internship.</p><br>
                                <span class="sub-hd">NEET UG 2017 Seat Quota Exam</span> 

                               <p> Seat Reservation are offered to candidates applying for the 15% All India Quota Seats. Different percentage of seats is given to various categories such as Schedule Caste, Schedule Tribe, OBC and Physically Handicapped. Candiates can apply for admission through their respective category provided they meet the required criteria.</p>
                            </div>
                            <div class="tab-pane" id="b">
                                <h3 class="blue">AICEE Exam Information</h3>
                                <span class="sub-hd">Update:</span> 
                                <p>All India Common Entrance Examination (AICEE) is conducted by the Veterinary Council of India, for admission to first year Bachelor of Veterinary Science (BVSc) & Animal Husbandry (AH) degree course.</p><br>
                                <p>The Veterinary Council of India is a statutory body of the Government of India framed under an Act of Parliament i.e. Indian Veterinary Council Act, 1984 (52 of 1984). This is an Act to regulate Veterinary practice and Veterinary education in India. The Act stands extended to all the States of India except Tamil Nadu and J & K as on date. Only those who possess recognised veterinary qualification and registered can practice in the country.</p><br>
                                <p>All India Common Entrance Examination (AICEE) is conducted for the admission in programmes like B.H.M.S / B.Sc (Nursing) / B.Pharm. / B.P.T/ B.A.S.L.P / B. Opt or B.O.T programs. The duration of degree courses like BVSc& AH is five complete academic years that also include compulsory internship of six months.
                                </p><br>
                            </div>
                            <div class="tab-pane" id="c">
                                <h3 class="blue">AIPMT Exam Information</h3>
                                <span class="sub-hd">Update:</span> 
                                <p>In compliance with the directives of the Hon'ble Supreme Court of India, the Central Board of Secondary Education, Delhi, would be conducting the All India Pre-Medical/Pre-Dental Entrance Test 2014, for the academic session 2014-15. This entrance test is being conducted for the 15% merit positions in the Medical/Dental Colleges of India as specified in the directive of the court and will be governed by the rules and regulations specified for the same by the Ministry of Health and Family Welfare, Government of India from time to time. There are also State Governments/Universities/Institutions voluntarily participating in the All India Pre-Medical/Pre-Dental Entrance Test 2014 for using its merit list for admission in the Medical Colleges/Dental Colleges against seats under their control.</p><br>
                                <p>The responsibility of the CBSE is limited to the conduct of the entrance test, declaration of result and providing merit list to the DGHS and participating States/Universities/Institutions.</p><br>
                                <p>The counselling for successful candidates under 15% All India Quota seats is conducted by the DGHS. The Counselling for admission in seats under the control of other participating States/Universities/Institutions shall be conducted as per the notifications issued separately by the authorities concerned. During counselling, the eligibility criteria, various documents, etc. of the meritorious candidate is verified as per norms specified by the respective authorities and Medical/Dental College is allotted to the candidate according to the choice.
                                </p><br>
                            </div>
                            <div class="tab-pane" id="d"><h3 class="blue">AIIMS 2014 Exam Information</h3>
                                <span class="sub-hd">Update:</span> 
                                <p>In compliance with the directives of the Hon'ble Supreme Court of India, the Central Board of Secondary Education, Delhi, would be conducting the All India Pre-Medical/Pre-Dental Entrance Test 2014, for the academic session 2014-15. This entrance test is being conducted for the 15% merit positions in the Medical/Dental Colleges of India as specified in the directive of the court and will be governed by the rules and regulations specified for the same by the Ministry of Health and Family Welfare, Government of India from time to time. There are also State Governments/Universities/Institutions voluntarily participating in the All India Pre-Medical/Pre-Dental Entrance Test 2014 for using its merit list for admission in the Medical Colleges/Dental Colleges against seats under their control.</p><br>
                                <p>The responsibility of the CBSE is limited to the conduct of the entrance test, declaration of result and providing merit list to the DGHS and participating States/Universities/Institutions.</p><br>
                                <p>The counselling for successful candidates under 15% All India Quota seats is conducted by the DGHS. The Counselling for admission in seats under the control of other participating States/Universities/Institutions shall be conducted as per the notifications issued separately by the authorities concerned. During counselling, the eligibility criteria, various documents, etc. of the meritorious candidate is verified as per norms specified by the respective authorities and Medical/Dental College is allotted to the candidate according to the choice.
                                </p><br>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </section> 

    <section class="usr-fb-wr text-center mr-b-0">
        <div class="usr-fb container">
            <h2 class="heading"><span class="yellow">H</span>appy <span class="yellow">U</span>sers</h2>
            <!-- <div class="divider"></div> -->
            <!-- test-carosel -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="usr-fb-img text-center col-md-12 pad-t-3">
                            <img src="{{ asset('images/home/user.png') }}">
                        </div>
                        <div class="fb-content col-md-12 pad-t-3">
                           <p> Seat Reservation are offered to   candidates applying for the 15% All India Quota Seats. Different percentage of seats is given to various categories such as Schedule Caste, Schedule Tribe, OBC and Physic</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="usr-fb-img text-center col-md-12 pad-t-3">
                            <img src="{{ asset('images/home/user.png') }}">
                        </div>
                        <div class="fb-content col-md-12 pad-t-3">
                            <p>Seat Reservation are offered to candidates applying for the 15% All India Quota Seats. Different percentage of seats is given to various categories such as Schedule Caste, Schedule Tribe, OBC and Physic</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="usr-fb-img text-center col-md-12 pad-t-3">
                            <img src="{{ asset('images/home/user.png') }}">
                        </div>
                        <div class="fb-content col-md-12 pad-t-3">
                           <p> Seat Reservation are offered to candidates applying for the 15% All India Quota Seats. Different percentage of seats is given to various categories such as Schedule Caste, Schedule Tribe, OBC and Physic</p>
                        </div>
                    </div>
                </div>
                
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span><i class="fa fa-chevron-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span><i class="fa fa-chevron-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- test-carosel -->        
        </div>
        <div class="play-wr container text-right col-md-12">
            <div class="text-center">
                <ul>
                    <!-- <li><img class="android-gif" src="images/android.gif"></li> -->
                    <li><img class="wow animated zoomIn" src="{{ asset('images/home/play.png') }}"></li>
                </ul>
            </div>
        </div>
    </section>
<!-- 
    <section class="container-fluid contact-wr-bg mr-t-0 mr-b-0">
        <div class="container contact-wr" id="contact-wr">
            <div class="row">
                <div class="text-center">
                    <h2 class="heading" id="submit">Say Hello <span class="blue">!</span></h2>
                    <div class="divider"></div>
                </div>
                <div class="col-md-12 pad-t-3  wow fadeInRight animated" data-wow-delay="0.3s" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.3s; animation-name: fadeInRight;">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p class="address">
                            <strong>Address:</strong><br>
                            Shekhilar Street,
                            Rajivgandhi Nagar,
                            Nesapakkam,
                            Chennai-78              
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p class="email">
                            <strong>Email:</strong><br>
                            <a href="mailto:info@shineschoolapp.com">info@bestshineeduapp.com</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p class="mobile">
                        <strong>Mobile:</strong><br>
                        +91-8929333444 
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12  wow fadeInRight animated" data-wow-delay="0.3s" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.3s; animation-name: fadeInRight;">
                    <form method="post" action="contactmail.php">
                        <div class="form-group col-md-4">
                          <label class="control-label">Name</label>
                          <input type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group col-md-4">
                          <label class="control-label">Email</label>
                          <input type="email" class="form-control" placeholder="Enter Your Email ID">
                        </div>
                        <div class="form-group col-md-4">
                          <label class="control-label">Mobile</label>
                          <input type="text" class="form-control" placeholder="Enter Your Mobile Number">
                        </div>
                        <div class="form-group col-md-12">
                          <label class="control-label">Message</label>
                          <textarea class="form-control" rows="7" placeholder="Enter Your Message"></textarea>
                        </div>
                        <div class="col-md-2">
                          <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary btn-block" id="submit">
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>  -->

    <!-- move to top-btn -->
    <div class="move-top">
        <button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true" alt="top"></i></button>
    </div>

    <!-- footer section -->
    <section id="footer-sec">
        <footer>
            <div id="footer col-md-12">
                <div class="container text-center">
                    <div class="col-md-12">
                        <ul class="footTop">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('aboutUs') }}">About</a></li>
                            <li><a href="{{ route('features') }}">Features</a></li>
                            <!-- <li><a href="#" target="_blank">Sarkari Naukri</a></li> -->
                           <!-- <li><a href="{{ route('contactUs') }}">Contact</a></li>-->
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <ul class="footBtom">
                            <li><a href="#scroll-exam">NEET</a></li>
                            <li><a href="#scroll-exam">COLLAGE</a></li>
                            <li><a href="#scroll-exam">CBSE</a></li>
                            <li><a href="#scroll-exam">STATE BOARD</a></li>              
                        </ul>  
                    </div>
                         
                    <ul class="social">
                        <!-- <li><a href="#"><img src="./img/googleplay.jpg"></a></li>  --> 
                        <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> 
                        <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> 
                        <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>        
                    </ul>
                   <!-- <p class="text-center">© {{ date('Y') }} BESTSHINE EDUCATION CAMPUS PRIVATE LIMITED</p>-->
                    <ul class="footTermCond">
                        <li><a href="{{ route('termsAndCondition') }}">Terms &amp; Conditions</a></li>
                        <li><a href="#">|</a></li>
                        <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>             
                    </ul>
                </div>
            </div>
        </footer>
    </section>                                   

    <!-- Scripts -->
    <!-- script addde by tamil -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        new WOW().init();
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
