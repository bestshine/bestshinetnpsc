@extends('layouts.app')

@section('title', 'Exam Edit')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading custom-form-heading">Exam Edit</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('updateExam', $exam->slug)}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">Select State</label>

                            <div class="col-md-6">
                                <select class="form-control" name="state" required autofocus readonly>
                                <option value="{{ $exam->submodule->mainmodule->state->id }}">{{ $exam->submodule->mainmodule->state->name }}</option>
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
                                <option value="{{ $exam->submodule->mainmodule->board->id }}">{{ $exam->submodule->mainmodule->board->name }}</option>
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
                                    <option value="{{ $exam->submodule->mainmodule->medium->id }}">{{ $exam->submodule->mainmodule->medium->name }}</option>
                                </select>
                                @if ($errors->has('medium'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('medium') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('module_type') ? ' has-error' : '' }}">
                            <label for="module_type" class="col-md-4 control-label">Select Module</label>

                            <div class="col-md-6">
                                <select class="form-control" id="sel1" name="module_type" required autofocus readonly>
                                    <option value="{{ $subModule->id }}">{{ $subModule->name }}</option>
                                </select>
                                @if ($errors->has('module_type'))
                                    <span class="error-help-block">
                                        <strong>{{ $errors->first('module_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                         

                        <div class="form-group{{ $errors->has('exam_name') ? ' has-error' : '' }}">
                            <label for="exam_name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="exam_name" type="text" class="form-control" name="exam_name" placeholder="Exam Name" value="{{ $exam->name }}" required autofocus>

                                @if ($errors->has('exam_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('exam_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @php  
                            $time = $exam->time_duration;
                            $parsed = date_parse($time);
                            $seconds = $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];
                        @endphp
                        <div class="form-group{{ $errors->has('exam_duration') ? ' has-error' : '' }}">
                            <label for="exam_duration" class="col-md-4 control-label">Exam Duration</label>

                            <div class="col-md-6">
                                <input id="duration" type="text" class="form-control" name="exam_duration" placeholder="Exam Duration" value="{{ $seconds }}" required>

                                @if ($errors->has('exam_duration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('exam_duration') }}</strong>
                                    </span>
                                @endif
                                <div style="font-weight: bold;border-top: 1px solid #ccc;margin: 5px;">Time Duration : {{ $exam->time_duration }}</div>
                            </div>
                        </div>                        

                        <div class="form-group{{ $errors->has('exam_date') ? ' has-error' : '' }}">
                            <label for="exam_date" class="col-md-4 control-label">Exam Date</label>

                            <div class="col-md-6">
                                <input id="datepicker" type="text" class="form-control" name="exam_date" placeholder="Exam Date" value="{{ $exam->exam_date }}" required>

                                @if ($errors->has('exam_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('exam_date') }}</strong>
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
