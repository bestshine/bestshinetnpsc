@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-content-wrap">
    <div class="row">
    	<div class="col-md-12">
  			@include('layouts.partials.top-menu')
  	    	<h4 class="custom-heading">Syllabus Details For {{ $subModule->name }}</h4>
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
	    	@if(isset($syllabus))
	    		{!! $syllabus->content !!}
	    	@else
	    		No content
	    	@endif		    	
    	</div>
    </div>
  </div>
</div>
@endsection
