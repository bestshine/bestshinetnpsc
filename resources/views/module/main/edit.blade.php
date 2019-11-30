@extends('layouts.app')

@section('title','Standard Edit')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading custom-form-heading">Standard Edit</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('updateMainModule', $edit->slug)}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">Select State</label>

                            <div class="col-md-6">
                                <select class="form-control" name="state" required autofocus readonly>
                                <option value="{{ $edit->state->id }}">{{ $edit->state->name }}</option>
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
                                <select class="form-control" name="board_type" required autofocus readonly>
                                <option value="{{ $edit->board->id }}">{{ $edit->board->name }}</option>
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
                                <select class="form-control" name="medium" required autofocus readonly>
                                    <option value="{{ $edit->medium->id }}">{{ $edit->medium->name }}</option>
                                </select>
                                @if ($errors->has('medium'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('medium') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('main_module_name') ? ' has-error' : '' }}">
                            <label for="main_module_name" class="col-md-4 control-label">Standard Name</label>

                            <div class="col-md-6">
                                <input id="main_module_name" type="text" class="form-control" name="main_module_name" placeholder="Standard Name" value="{{ $edit->name }}" required autofocus>

                                @if ($errors->has('main_module_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('main_module_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                              

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
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
