@extends('layouts.app')

@section('title','Subject Create')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading custom-form-heading">Subject Create</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('postSubModule') }}">
                        {{ csrf_field() }} 

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">Select State</label>

                            <div class="col-md-6">
                                <select class="form-control" name="state" id="state_id_common" required autofocus>
                                    <option value="">Select State</option>
                                    @foreach($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('board_type') ? ' has-error' : '' }}">
                            <label for="board_type" class="col-md-4 control-label">Select Board</label>

                            <div class="col-md-6">
                                <select class="form-control" name="board_type" id="board_id_common" required autofocus>
                                    <option value="">Select Board</option>
                                    @foreach($boards as $board)
                                        <option value="{{ $board->id }}">{{ $board->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('board_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('board_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('medium') ? ' has-error' : '' }}">
                            <label for="medium" class="col-md-4 control-label">Select Medium</label>

                            <div class="col-md-6">
                                <select class="form-control" name="medium" id="medium_id_common" required autofocus>
                                    <option value="">Select Medium</option>
                                    @foreach($mediums as $medium)
                                        <option value="{{ $medium->id }}">{{ $medium->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('medium'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('medium') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('module_type') ? ' has-error' : '' }}">
                            <label for="module_type" class="col-md-4 control-label">Select Standard</label>

                            <div class="col-md-6">
                                <select class="form-control" name="module_type" id="standard_id_common" required autofocus disabled>
                                    <option value="">Select Standard</option>
                                </select>
                                @if ($errors->has('module_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('module_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                              

                        <div class="form-group{{ $errors->has('sub_module_name') ? ' has-error' : '' }}">
                            <label for="sub_module_name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="sub_module_name" type="text" class="form-control" name="sub_module_name" placeholder="Sub Module Name" value="{{ old('sub_module_name') }}" required autofocus>

                                @if ($errors->has('sub_module_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sub_module_name') }}</strong>
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
