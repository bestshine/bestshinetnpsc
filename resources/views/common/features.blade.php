@extends('layouts.app')

@section('title', 'Features')

@section('content')

<section class="new-contact">
     <div class="jumbotron jumbotron-sm mr-b-0">
    <div class="container">
       <!-- <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Main Features of Test You
            </div>
        </div>-->
    </div>
</div>
<div class="feature-bg">
  <div class="container">
   <!-- <div class="row Feature-sec1 text-center">
        <div class="col-sm-3 fea-img-wr animated fadeInUp" style="animation-delay: 0.2">
           <img src="{{ asset('images/home/Examiner.png') }}"> 
             <img src="{{ asset('images/home/Examiner-img.png') }}" class="wow animated fadeInUp fes-img2" style="animation-delay: 0.2s;">      
        </div>
        <div class="col-sm-3 animated fadeInDown" style="animation-delay: 0.4">
             <img src="{{ asset('images/home/student.png') }}">           
        </div>
        <div class="col-sm-3 animated fadeInUp" style="animation-delay: 0.6">
             <img src="{{ asset('images/home/Test.png') }}">        
        </div>
        <div class="col-sm-3 animated fadeInDown" style="animation-delay: 0.8">
            <img src="{{ asset('images/home/All.png') }}">         
        </div>
       
    </div>-->
    <hr>
</div>
<section class="text-center about-wr">
    
        
    
    <div class="container">
        


        <h2 class="heading">TNPSC</h2>
        <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five </p>-->
        <div class="pad-t-3 mission-vis-wr" id="loading">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/home/vision.png') }}" class="wow animated fadeInLeft">
                    <h2 class="heading" style="font-size: 35px;">Academics</h2>
                    <div class="col-md-12" align="left">
                                    <a href="#" class="get-courses-btn dilb" style="font-size: 25px;">COURCES OFFERED</a>
                     </div>
                     <div class="col-md-12" align="left">
                                    <a href="#" class="get-courses-btn dilb" style="font-size: 25px;">EXAM PATTERN</a>
                     </div>
                     <div class="col-md-12" align="left">
                                    <a href="#" class="get-courses-btn dilb" style="font-size: 25px;">BOOK LIST</a>
                     </div>
                     <div class="col-md-12" align="left">
                                    <a href="#" class="get-courses-btn dilb" style="font-size: 25px;">INTERVIEW GUIDANCE</a>
                     </div>
                     <div class="col-md-12" align="left">
                                    <a href="#" class="get-courses-btn dilb" style="font-size: 25px;">COUNSELLING SUPPORT</a>
                     </div>
                <!--    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>-->
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/home/mission.png') }}" class="wow animated fadeInRight">
                    <h2 class="heading" style="font-size: 35px;">Admission</h2>
                    <div class="col-md-12" align="left">
                                    <a href="#" class="get-courses-btn dilb" style="font-size: 25px;">ADMISSION POLICY</a>
                     </div>
                     <div class="col-md-12" align="left">
                                    <a href="#" class="get-courses-btn dilb" style="font-size: 25px;">COURSE SCHEDULE</a>
                     </div>
                    <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>-->
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/home/vision.png') }}" class="wow animated fadeInLeft">
                    <h2 class="heading" style="font-size: 35px;">Overview</h2>
                    <div class="col-md-12" align="left">
                                    <a href="#" class="get-courses-btn dilb" style="font-size: 25px;">COURCES OFFERED</a>
                     </div>
                     <div class="col-md-12" align="left">
                                    <a href="#" class="get-courses-btn dilb" style="font-size: 25px;">EXAM PATTERN</a>
                     </div>
                     <div class="col-md-12" align="left">
                                    <a href="#" class="get-courses-btn dilb" style="font-size: 25px;">BOOK LIST</a>
                     </div>
                     <div class="col-md-12" align="left">
                                    <a href="#" class="get-courses-btn dilb" style="font-size: 25px;">INTERVIEW GUIDANCE</a>
                     </div>
                     <div class="col-md-12" align="left">
                                    <a href="#" class="get-courses-btn dilb" style="font-size: 25px;">COUNSELLING SUPPORT</a>
                     </div>
                     <div class="col-md-12" align="left">
                                    <a href="#" class="get-courses-btn dilb" style="font-size: 25px;">COUNSELLING SUPPORT</a>
                     </div>
                    <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>-->
                </div>
        </div>
    </div>
</section>
<!--<section class="features-wr">
   <div class="container">
        <ul>
            <li>
                <div class="col-sm-4">
                    <div class="col-sm-3"><img src="{{ asset('images/home/icon/pass-wrd.png') }}" class="wow animated zoomIn"></div>
                    <div class="col-sm-9">
                        <h5>Password Protected Tests.</h5>
                        <p>We understand how important confidentially matters for you, so all test you create or conduct are password protected. Only people who have access can give test. You can also create test for public if do not set any password.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-sm-4">
                    <div class="col-sm-3"><img src="{{ asset('images/home/icon/time.png') }}" class="wow animated zoomIn"></div>
                    <div class="col-sm-9">
                        <h5>Time Flexibility</h5>
                        <p>Want to restrict people to give test at odd times? Bingo! With “Time Flexibility” feature choose your own Date, Time and Hours for conducting test.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-sm-4">
                     <div class="col-sm-3"><img src="{{ asset('images/home/icon/group.png') }}" class="wow animated zoomIn"></div>
                    <div class="col-sm-9">
                        <h5>Create Exclusive Groups.</h5>
                        <p>User can create different groups through his account to assign different test to each group, E.g. A HR manager can make one group for one designation while another group for other designation. Same can be done by Examiner to make different group for different section or classes of students.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-sm-4">
                    <div class="col-sm-3"><img src="{{ asset('images/home/icon/negative.png') }}" class="wow animated zoomIn"></div>
                    <div class="col-sm-9">
                        <h5>Negative Marking.</h5>
                        <p>Want to prevent people from to give test as a guessing game? Use this feature to enable negative marking for choosing each wrong option in your test.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-sm-4">
                    <div class="col-sm-3"><img src="{{ asset('images/home/icon/imp-file.png') }}" class="wow animated zoomIn"></div>
                    <div class="col-sm-9">
                        <h5>Import Test.</h5>
                        <p>We understand how tedious and time consuming is to create test paper, when you have lots of questions. Use “Import Test” feature to upload test through excel sheet.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-sm-4">
                     <div class="col-sm-3"><img src="{{ asset('images/home/icon/mail-noti.png') }}" class="wow animated zoomIn"></div>
                    <div class="col-sm-9">
                        <h5>Email Notification .</h5>
                        <p>Get real time update of test results through enabling this feature, whenever a candidate completes his test, an automated email notification will be sent to you on registered Email with his/her scoreboard.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-sm-4">
                    <div class="col-sm-3"><img src="{{ asset('images/home/icon/result.png') }}" class="wow animated zoomIn"></div>
                    <div class="col-sm-9">
                        <h5>Control Result Output.</h5>
                        <p>Examiner can control format of results in various type such as Marks, Percentage and Percentile. Also there is option of “to show result to student” or Email results to students enable/disable this as per your will.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-sm-4">
                    <div class="col-sm-3"><img src="{{ asset('images/home/icon/contact.png') }}" class="wow animated zoomIn"></div>
                    <div class="col-sm-9">
                        <h5>Import contacts from Gmail</h5>
                        <p>Import contacts from your Gmail account to allow access to your exclusive contact list to attempt test.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-sm-4">
                     <div class="col-sm-3"><img src="{{ asset('images/home/icon/other.png') }}" class="wow animated zoomIn"></div>
                    <div class="col-sm-9">
                        <h5>Other.</h5>
                        <p>Apart from above listed features TestYou provides various miscellaneous features for Examiner such Number of questions per page, Allow back button and many more.</p>
                    </div>
                </div>
            </li>
        </ul>
   </div>
</section>-->
<section class="pad-t-3"></section>
<section class="pad-t-3"></section>
</div>
</section>

@endsection