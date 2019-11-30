@extends('layouts.app')

@section('title', 'Exam Create')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading custom-form-heading">Exam Create</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('postExam') }}">
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
                                <select class="form-control" id="standard_id_common" name="module_type" required autofocus disabled>
                                    <option value="">Select Standard</option>
                                </select>
                                @if ($errors->has('module_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('module_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sub_module_type') ? ' has-error' : '' }}">
                            <label for="sub_module_type" class="col-md-4 control-label">Select Subject</label>

                            <div class="col-md-6">
                                <select class="form-control" id="subject_id_common" name="sub_module_type" required autofocus disabled>
                                    <option value="">Select Subject</option>
                                </select>
                                @if ($errors->has('sub_module_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sub_module_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                  

                        <div class="form-group{{ $errors->has('exam_name') ? ' has-error' : '' }}">
                            <label for="exam_name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="exam_name" type="text" class="form-control" name="exam_name" placeholder="Exam Name" value="{{ old('exam_name') }}" required autofocus>

                                @if ($errors->has('exam_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('exam_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('exam_duration') ? ' has-error' : '' }}">
                            <label for="exam_duration" class="col-md-4 control-label">Exam Duration</label>

                            <div class="col-md-6">
                                <input id="duration" type="text" class="form-control" name="exam_duration" placeholder="Exam Duration" value="{{ old('exam_duration') }}" required>

                                @if ($errors->has('exam_duration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('exam_duration') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group{{ $errors->has('exam_date') ? ' has-error' : '' }}">
                            <label for="exam_date" class="col-md-4 control-label">Exam Date</label>

                            <div class="col-md-6">
                                <input id="datepicker" type="text" class="form-control" name="exam_date" placeholder="Exam Date" value="{{ old('exam_date') }}" required>

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
