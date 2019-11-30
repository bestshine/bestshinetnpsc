@extends('layouts.app')

@section('title', 'Developer Create')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading custom-form-heading">Developer Create</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('postDeveloper') }}">
                        {{ csrf_field() }}                      

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Developer Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Developer Name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="code" class="col-md-4 control-label">Developer Code</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control" name="code" placeholder="Developer Code" value="{{ old('code') }}" required>

                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                            <label for="designation" class="col-md-4 control-label">Developer Designation</label>

                            <div class="col-md-6">
                                <input id="designation" type="text" class="form-control" name="designation" placeholder="Developer Designation" value="{{ old('designation') }}" required>

                                @if ($errors->has('designation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                @endif
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
