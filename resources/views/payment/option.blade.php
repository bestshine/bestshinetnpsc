@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <h3>Subscription Plan Options</h3>
        @if (session('paymentSuccess'))
            <div class="alert alert-success">
              {{ session('paymentSuccess') }}
            </div>                           
        @endif    

        <form class="form-horizontal subscribe-plan" role="form" method="post" action="{{ route('paymentSubscribePlan') }}" enctype="multipart/form-data">
            {!! csrf_field() !!} 
            <input type="hidden" name="subscribe_amount">        
            <div class="row">
                <!-- Pricing -->
                <div class="col-md-5">
                    <div class="pricing hover-effect">
                        <div class="pricing-head">
                            <h3>FREE  
                                <span> Package </span>
                            </h3>
                            <h4>
                                FREE
                            </h4>
                        </div>
                        <ul class="pricing-content list-unstyled">
                            <li>
                                Duration 0 Days
                            </li>
                            <li>
                                Max 2 Tests Can Take
                            </li>
                            <li>
                                0 Price Per Month
                            </li>
                        </ul>
                        <div class="pricing-footer">
                            <p>
                                ** Terms & Conditions Applied.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="pricing hover-effect">
                        <div class="pricing-head">
                            <h3>SILVER
                            <span> Package </span>
                            </h3>
                            <h4><i class="fa fa-inr" aria-hidden="true"></i><i>50.00</i>
                            <span>
                            Per Month </span>
                            </h4>
                        </div>
                        <ul class="pricing-content list-unstyled">
                            <li>
                                Duration 10 Days
                            </li>
                            <li>
                                Max 10 Tests Can Take
                            </li>
                        </ul>
                        <div class="pricing-footer">
                            <p>
                                ** Terms & Conditions Applied.
                            </p>
                            <a href="javascript:;" class="btn yellow-crusta" data-value="50">
                            Subscribe
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="pricing hover-effect">
                        <div class="pricing-head">
                            <h3>GOLD 
                            <span> Package </span>
                            </h3>
                            <h4><i class="fa fa-inr" aria-hidden="true"></i><i>100.00</i>
                            <span>
                            Per Month </span>
                            </h4>
                        </div>
                        <ul class="pricing-content list-unstyled">
                            <li>
                                Duration 30 Days
                            </li>
                            <li>
                                Max 30 Tests Can Take
                            </li>
                        </ul>
                        <div class="pricing-footer">
                            <p>
                                ** Terms & Conditions Applied.
                            </p>
                            <a href="javascript:;" class="btn yellow-crusta" data-value="100">
                            Subscribe
                            </a>
                        </div>
                    </div>
                </div>

       <!--     <div class="pricing pricing-active hover-effect">
                <div class="pricing-head pricing-head-active">  -->               
                <div class="col-md-5">
                    <div class="pricing hover-effect">
                        <div class="pricing-head">
                            <h3>PLATINUM 
                            <span> Package </span>
                            </h3>
                            <h4><i class="fa fa-inr" aria-hidden="true"></i><i>150.00</i>
                            <span>
                            Per Month </span>
                            </h4>
                        </div>
                        <ul class="pricing-content list-unstyled">
                            <li>
                                Duration 50 Days
                            </li>
                            <li>
                                Max 50 Tests Can Take
                            </li>
                        </ul>
                        <div class="pricing-footer">
                            <p>
                                ** Terms & Conditions Applied.
                            </p>
                            <a href="javascript:;" class="btn yellow-crusta" data-value="150">
                            Subscribe
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--//End Pricing -->
    </div>
</div>
@endsection
