@extends('layouts.app')

@section('title', 'Model Papers')

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <h4 class="custom-heading">Model Papers</h4>
        @if(Auth::User()->roles->first()->name == "Admin")
            <div class="custom-fr">
                <a href="{{ route('sampleQuestionCreate') }}" class="btn btn-primary">Create</a>
            </div>  
        @endif
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
                            <span itemprop="name">Model Papers</span>
                        </a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>            
                @if (session('postSampleQuestionPaperSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('postSampleQuestionPaperSuccess') }} </strong> 
                    </div>                                               
                @endif  

                <div class="panel panel-info">
                    <div class="panel-heading">                                
                        <h3 class="panel-title"><center>Model Papers</center></h3>
                    </div>
                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Sub Module Name</th>
                                    <th>Title</th>
                                    <th>Model Papers</th>
                                    <th>Uploaded Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $key = 1; @endphp
                                @foreach($sampleQuestions as $sampleQuestion)
                                    <tr>
                                      <th scope="row">{{ $key }}</th>
                                      <th scope="row">{{ $sampleQuestion->submodule['name'] }}</th>
                                      <td> {{ $sampleQuestion->title }} </td>
                                      <td><a href="{{url('sample-question-papers')}}/{{ $sampleQuestion->file }}">{{ $sampleQuestion->file }}</a> </td>
                                        <td> {{ Carbon\Carbon::parse($sampleQuestion->created_at)->format('d-m-Y') }} </td>
                                    </tr>
                                    @php $key++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

