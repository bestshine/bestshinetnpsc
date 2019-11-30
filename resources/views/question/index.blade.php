@extends('layouts.app')

@section('title', 'Upload Question')

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <h4 class="custom-heading">Upload Questions</h4>
        <div class="row">
            <div class="col-md-12">
                <!-- breadcrumb -->
                <ol class="breadcrumb mx-border-top-bottom">
                    <li>
                        <a itemprop="item" href="{{ route('dashboard') }}">
                            <span itemprop="name">Dashboard</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li>
                        <a itemprop="item" href="{{ route('masterIndex') }}">
                            <span itemprop="name">Master</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li>
                        <a itemprop="item" href="">
                            <span itemprop="name">Upload Questions</span>
                        </a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>  

            	<form class="form-horizontal" role="form" method="post" action="{{route('importQuestions')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading custom-form-heading">
                            <h3 class="panel-title"><strong>Upload Questions</strong></h3>
                        </div>

                        <div class="panel-body">

		                    @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <strong>{{ session('error') }} </strong> 
                                </div>                                                          
		                    @endif    

		                    @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <strong>{{ session('success') }} </strong> 
                                </div>                                                          
		                    @endif    

                        	<div class="row">
                        		<div class="col-md-6">
                        			<div class="col-md-8 col-md-offset-2">
                        				<div class="col-md-12">
                                            <div class="form-group">
                                                <label for="sel1">Select Exam Type</label>
                                                <select class="form-control" id="sel1" name="exam_type">
                                                    <option value="">Select Exam Type</option>
                                                    @foreach($exams as $exam)
                                                        <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('exam_type'))
                                                    <span class="error-help-block">
                                                        <strong>{{ $errors->first('exam_type') }}</strong>
                                                    </span>
                                                @endif                                                   
                                            </div>                                        
                        					<div class="form-group">
                                                <label for="sel1">Upload File</label>
                        						<input type="file" name="file" class="form-control">
                                                @if ($errors->has('file'))
                                                    <span class="error-help-block">
                                                        <strong>{{ $errors->first('file') }}</strong>
                                                    </span>
                                                @endif                                                 
                        					</div>                                       
                        					<div class="form-group text-right">
                        						<button type="submit" class="btn btn-primary">Import Questions</button>
                        					</div>
                        				</div>
                        			</div>
                        		</div>
                        		<div class="col-md-6">
                        			<div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Sample Files</hz>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="{{url('data-manager/question.xlsx')}}" class="btn btn-primary">Sample File</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        			</div>
                        		</div>
                        	</div>
                            <div class="row">
                                <div class="col-md-offset-6 col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title text-center"><b>Trems and conductions</b></hz>
                                        </div>
                                        <div class="panel-body">
                                            <h5 class="text-danger"><b>Excel sheet</b></h5>
                                            <div class="row">
                                                <p class="margin-lft" style="margin-left: 16px;">1. All red colored colouns are mandatory fields</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
