@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-content-wrap white-bag">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (session('registerSuccess'))
                    <div class="alert alert-success">
                        {{ session('registerSuccess') }}
                    </div>
                @endif                   
            </div>
        </div>

        <div class="row">    
            <div class="col-md-12">
                <!-- breadcrumb -->
                <ol  class="breadcrumb mx-border-top-bottom">
                    <li>
                        <a itemprop="item" href="{{ route('dashboard') }}">
                            <span itemprop="name">Dashboard</span>
                        </a>
                    </li>
                </ol>  

                @php
                    $numOfCols = 3;
                    $rowCount = 0;
                    $bootstrapColWidth = 12 / $numOfCols;
                @endphp 
                <div class="row">                    
                @foreach($mainModules as $mainModule)
            		<div class="col-md-{{$bootstrapColWidth}}">
                    	<div class="div-module">
                			<div class="mx-green mx-bold boxtitle">{{ $mainModule->name }}</div>
            		        <ul class="exam-list">
            		        	@php $subModules = getActivatedSubModules($mainModule->id); @endphp
                                @if(count($subModules) > 0)
                                    @foreach($subModules as $subModule)
                                        <li><b><a href="{{ route('getSubModuleOverview',[$mainModule->slug,$subModule->slug]) }}">{{ $subModule->name }}</a></b></li>
                                    @endforeach
                                    <li><b><a href="{{ route('getSubModules',$mainModule->slug) }}" title="{{ $mainModule->name }}"><u>See all exams...</u></a></b></li>
                                @else
                                    No Data Available
                                @endif
            		        </ul>
                		</div>
                	</div>
                    @php $rowCount++;
                    if($rowCount % $numOfCols == 0) echo '</div><div class="row">'; @endphp                        
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style type="text/css">
	
.div-module {
    border: 1px solid #ddd;
    margin: 5px 0px;
    background-color: #fff;
}

.div-module .boxtitle {
    background-color: #efefef;
    padding: 5px;
}

.mx-bold {
    font-weight: bold;
}

.mx-green {
    color: #5eac1a;
}

.div-module ul.exam-list {
    background-image: url(/images/dashboard/paper.png);
    background-repeat: no-repeat;
    padding-left: 60px;
    margin-left: 10px;
    margin-top: 10px;
}	

</style>