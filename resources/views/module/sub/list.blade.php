@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-content-wrap">
    <div class="row">
  		<div class="col-md-12">
  			<h4 class="custom-heading">Sub Module Lists For {{ $mainModule->name }}</h4>
  			<!-- breadcrumb -->
  			<ol class="breadcrumb mx-border-top-bottom">
     			<li>
     				<a itemprop="item" href="{{ route('dashboard') }}">
     					<span itemprop="name">Dashboard</span>
     				</a>
     				<meta itemprop="position" content="1">
     			</li>
      		<li>
      			<a itemprop="item" href="">
      				<span itemprop="name">{{ $mainModule->name }}</span>
      			</a>
      			<meta itemprop="position" content="2">
      		</li>
        </ol>

  	    @foreach($subModules as $subModule)
  			<div class="col-md-2 sub-module-list">
          <li>
            <b>
            	<a href="{{ route('getSubModuleOverview',[$main_module_slug,$subModule->slug]) }}">
            		{{ $subModule->name }}
            	</a>
            </b>
          </li>
  	    </div>     
  	    @endforeach
      </div>	
    </div>
  </div>
</div>
@endsection
