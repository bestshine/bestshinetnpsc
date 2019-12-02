@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <h4 class="custom-heading">Subscribe Plans</h4>
        @if (session('paymentSuccess'))
            <div class="alert alert-success">
              {{ session('paymentSuccess') }}
            </div>                           
        @endif    

        <div class="panel panel-default">
            <div class="panel-heading custom-form-heading">Plan</div>
            <div class="panel-body">
                <form class="form-inline" style="text-align: center;">
                    <div class="form-group">
                        <label for="module_type" class="sr-only">Select Module</label>
                        <select class="form-control" id="sel1" name="module_type" required autofocus>
                            <option value="">Select Module Type</option>
                            @foreach($mainModules as $mainModule)
                                <option value="{{ $mainModule->id }}">{{ $mainModule->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('module_type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('module_type') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Get Plan</button>
                </form>
            </div>
        </div>             

        <form class="form-horizontal subscribe-plan" role="form" method="post" action="{{ route('paymentSubscribePlan') }}" enctype="multipart/form-data">
            {!! csrf_field() !!} 
            <input type="hidden" name="subscribe_id">        
            <div class="row">
                <!-- Pricing -->
                @foreach($subscribePlans as $subscribePlan)
                <div class="col-md-5">
                    <div class="pricing hover-effect">
                        @php $result = checkOfferAvailable($subscribePlan->id); @endphp
                        @if($result)
                            <div class="shape">
                                <div class="shape-text">
                                    <span class="offer-text"> OFFER </span>
                                    <span class="percentage-text"> {{ $result }}% </span>
                                </div>
                            </div>                    
                        @endif
                        <div class="pricing-head">
                            <h3>{{ $subscribePlan->name }}  
                                <span> Package </span>
                            </h3>
                            <h4><i class="fa fa-inr" aria-hidden="true"></i><i>{{ $subscribePlan->amount }}</i>
                            <span>
                            Per Month </span>
                            </h4>
                        </div>
                        <ul class="pricing-content list-unstyled">
                            <li>
                                Duration {{ $subscribePlan->duration }} Days
                            </li>
                            <li>
                                Max {{ $subscribePlan->limit }} Tests Can Take
                            </li>
                            <li>
                                {{ $subscribePlan->amount }} Price Per Month
                            </li>
                        </ul>
                        <div class="pricing-footer">
                            <p>
                                ** Terms & Conditions Applied.
                            </p>
                            <a href="javascript:void(0)" class="btn yellow-crusta" data-value="{{ $subscribePlan->id }}">
                            Subscribe
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </form>
        <!-- End Pricing -->
    </div>
</div>
@endsection
