@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<section class="new-contact">
     <div class="jumbotron jumbotron-sm mr-b-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="contact-bg">
  <div class="container">
    <div class="row">
        <div class="col-md-8">       
            <div class="well well-sm">
                @if(session()->has('contactUSSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session()->get('contactUSSuccess') }} </strong> 
                    </div>                     
                @endif   

                <form class="form-horizontal" method="POST" action="{{ route('postContactUs') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">
                                    Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                            </div>
    <!--                         <div class="form-group">
                                <label for="subject">
                                    Subject</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">Choose One:</option>
                                    <option value="service">General Customer Service</option>
                                    <option value="suggestions">Suggestions</option>
                                    <option value="product">Product Support</option>
                                </select>
                            </div> -->

                            <div class="form-group">
                                <label for="name">
                                    Message</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                    placeholder="Message"></textarea>
                            </div>                      
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
           
        <div class="col-md-4">
             <div class="well well-sm">
               <form>
            <legend><span class=><i class="fa fa-building" aria-hidden="true"></i></span> Our office</legend>
            <address>
                <strong></strong><br>
                Rajiv Gandhi Nagar<br>
                Chennai<br>
                <span style="font-weight: 700">phone</span>
                +91-9840492888 
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#"><!-- first.last@example.com --></a>
            </address>
            </form>
        </div>
        </div>
    </div>
</div>

</div>
   </section>
   <div class="move-top">
        <button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true" alt="top"></i></button>
    </div>
   <!-- script -->
   <script src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript">
    new WOW().init();
</script>
@endsection