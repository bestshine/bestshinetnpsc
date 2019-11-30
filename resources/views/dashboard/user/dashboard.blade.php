@extends('layouts.app')

@section('title','Dashboard')

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

                @foreach($subModules as $subModule)
                    <div class="col-md-2 sub-module-list">
                  <li>
                    <b>
                        <a href="{{ route('getSubModuleOverview',[$subModule->mainmodule->slug,$subModule->slug]) }}">
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