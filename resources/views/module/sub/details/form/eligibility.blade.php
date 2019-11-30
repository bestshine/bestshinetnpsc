@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-content-wrap">
        <h4 class="custom-heading">Sub Module Eligibility Create / Update</h4>
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="POST" action="{{ route('postSubModuleEligibility') }}">
                    {{ csrf_field() }}   
                    <input type="hidden" name="sub_module" value="{{ $sub_module_slug }}">
                    <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                        <div class="col-md-12">                                
                            @if(isset($eligibility))
                                <textarea id="mytextarea" name="content" cols="40" rows="10" placeholder="Text here"> {{ $eligibility->content }}</textarea>
                            @else
                                <textarea id="mytextarea" name="content" cols="40" rows="10" placeholder="Text here"></textarea>                        
                            @endif                        

                            @if ($errors->has('content'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                            @endif                        
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
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
@endsection
