@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-content-wrap">
        <h4 class="custom-heading">Sub Module Study Material Create / Update</h4>
        <div class="row">
            <div class="col-md-12" ng-app="app" ng-controller="MyCtrl">
                <div class="panel panel-default">
                    <div class="panel-heading custom-form-heading">Sub Module Study Material Create / Update</div>
                    <div class="panel-body">
                        @if(count($studyMaterials) > 0)
                            <form class="form-inline update-form" method="POST" action="{{ route('updateSubModuleStudyMaterial') }}">

                                {{ csrf_field() }}

                                @foreach($studyMaterials as $studyMaterial)
                                    <div style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label for="subject_name">Subject Name / Book Name:</label>
                                        <input type="text" class="form-control" name="subject_name_{{ $studyMaterial->id }}" value="{{ $studyMaterial->name }}" id="subject_name">
                                    </div>

                                    <div class="form-group">
                                        <label for="url">URL</label>
                                        <input type="text" class="form-control" name="url_{{ $studyMaterial->id }}" value="{{ $studyMaterial->url }}" id="url">
                                    </div>
                                    </div>
                                @endforeach                          
                            </form>
                            <button type="submit" class="btn btn-primary" id="submit-update-form">Update</button>
                            <hr>
                        @endif

                        <form class="form-inline" method="POST" action="{{ route('postSubModuleStudyMaterial') }}">

                            {{ csrf_field() }}
                            <input type="hidden" name="angular_value">
                            <input type="hidden" name="sub_module" value="{{ $sub_module_slug }}">

                            <div ng-repeat="m in Materials" style="margin-bottom: 10px;">
                                <div class="form-group">
                                    <label for="subject_name">Subject Name / Book Name:</label>
                                    <input type="text" class="form-control" value="<%m.Name%>" id="subject_name">
                                </div>

                                <div class="form-group">
                                    <label for="url">URL</label>
                                    <input type="text" class="form-control" value="<%m.Url%>" id="url">
                                </div>

                                <input type="button" ng-click="Remove($index)" value="Remove" />
                            </div>

                            <div class="form-group">
                                <label for="subject_name">Subject Name / Book Name:</label>
                                <input type="text" class="form-control" placeholder="Subject / Book" ng-model="Name" id="subject_name">                               
                            </div>  
                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" class="form-control" placeholder="URL" ng-model="Url" id="url">
                            </div>

                            <input type="button" ng-click="Add()" value="Add" />
                            <span class="required-validation"></span>
                            <div class="form-group">
                                @if ($errors->has('angular_value'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('angular_value') }}</strong>
                                    </span>
                                @endif 
                            </div>                           
                        </form>                                       
                        <button type="button" ng-click="submit()" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


