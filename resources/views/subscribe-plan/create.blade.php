@extends('layouts.app')

@section('title', 'Subscribe Plan Create')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading custom-form-heading">Subscribe Plan Create</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('subscribePlanPost') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('module_type') ? ' has-error' : '' }}">
                            <label for="module_type" class="col-md-4 control-label">Select Module</label>

                            <div class="col-md-6">
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
                        </div> 
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Plan Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-4 control-label">Plan Amount</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control only_number" name="amount" value="{{ old('amount') }}" placeholder="Plan Amount" required>

                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group{{ $errors->has('time_duration') ? ' has-error' : '' }}">
                            <label for="time_duration" class="col-md-4 control-label">Time Duration</label>

                            <div class="col-md-6">
                                <input id="time_duration" type="text" class="form-control only_number" name="time_duration" value="{{ old('time_duration') }}" placeholder="Plan Duration (Eg:10 Days)" required>

                                @if ($errors->has('time_duration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time_duration') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('limit') ? ' has-error' : '' }}">
                            <label for="limit" class="col-md-4 control-label">Plan Limit</label>

                            <div class="col-md-6">
                                <input id="limit" type="text" class="form-control only_number" name="limit" value="{{ old('limit') }}" placeholder="Plan Limit (Eg:10)" required>                                

                                @if ($errors->has('limit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('limit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="offer_applicable" class="col-md-4 control-label">Offer Applicable</label>

                            <div class="col-md-6">
                                <input id="offer_applicable" type="checkbox" name="offer_applicable" @if($errors->has('offer_percentage') || $errors->has('offer_start_date') || $errors->has('offer_end_date'))  checked @else  @endif>If yes,
                            </div>
                        </div>                        

                        <div class="offer-details-field" style="@if($errors->has('offer_percentage') || $errors->has('offer_start_date') || $errors->has('offer_end_date'))  display: block; @else display: none; @endif">

                            <div class="form-group{{ $errors->has('offer_percentage') ? ' has-error' : '' }}">
                                <label for="offer_percentage" class="col-md-4 control-label">Offer Percentage</label>

                                <div class="col-md-6">
                                    <input id="offer_percentage" type="text" class="form-control only_number" name="offer_percentage" value="{{ old('offer_percentage') }}" placeholder="Plan Offer Percentage">                                

                                    @if ($errors->has('offer_percentage'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('offer_percentage') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>                            

                            <div class="form-group{{ $errors->has('offer_start_date') ? ' has-error' : '' }}">
                                <label for="offer_start_date" class="col-md-4 control-label">Offer Start Date</label>

                                <div class="col-md-6">
                                    <input id="dt1" type="text" class="form-control" name="offer_start_date" value="{{ old('offer_start_date') }}" placeholder="Plan Offer Start Date">

                                    @if ($errors->has('offer_start_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('offer_start_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>                             

                            <div class="form-group{{ $errors->has('offer_end_date') ? ' has-error' : '' }}">
                                <label for="offer_end_date" class="col-md-4 control-label">Offer End Date</label>

                                <div class="col-md-6">
                                    <input id="dt2" type="text" class="form-control" name="offer_end_date" value="{{ old('offer_end_date') }}" placeholder="Plan Offer End Date">                                
                                    @if ($errors->has('offer_end_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('offer_end_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>     
                        </div>                                                

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
