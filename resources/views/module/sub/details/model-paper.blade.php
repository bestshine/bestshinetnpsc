@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12"> 
		        @include('layouts.partials.top-menu') 

                <h4 class="custom-heading">Model Papers For {{ $subModule->name }}</h4>
                <!-- breadcrumb -->
                <ol class="breadcrumb mx-border-top-bottom">
                    <li>
                        <a itemprop="item" href="{{ route('dashboard') }}">
                            <span itemprop="name">Dashboard</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li>
                        <a itemprop="item" href="{{ route('getSubModules',$main_module_slug) }}">
                            <span itemprop="name">{{ $mainModule->name }}</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li>
                        <a itemprop="item" href="">
                            <span itemprop="name">{{ $subModule->name }}</span>
                        </a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol> 

                <div class="panel panel-info">
                    <div class="panel-heading">                                
                        <h3 class="panel-title"><center>Model Papers</center></h3>
                    </div>
                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
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
