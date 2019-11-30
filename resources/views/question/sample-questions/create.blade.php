@extends('layouts.app')

@section('title', 'Model Papers Upload')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading custom-form-heading">Model Papers Upload</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('postSampleQuestion') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('module_type') ? ' has-error' : '' }}">
                            <label for="module_type" class="col-md-4 control-label">Select Module</label>

                            <div class="col-md-6">
                                <select class="form-control" id="sel1" name="module_type" required autofocus>
                                    <option value="">Select Module Type</option>
                                    @foreach($subModules as $subModule)
                                        <option value="{{ $subModule->id }}">{{ $subModule->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('module_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('module_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                          

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                      

                        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <label for="file" class="col-md-4 control-label">File</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file" value="{{ old('file') }}" required>

                                @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Upload Model Paper
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
