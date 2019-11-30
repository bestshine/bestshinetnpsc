@extends('layouts.app')

@section('styles')
    {!! Charts::styles() !!}
@endsection

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <h4 class="custom-heading">Chart</h4>       
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
                        <a itemprop="item" href="">
                            <span itemprop="name">Chart</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                </ol> 

                <div class="tttttt">
                    <center>
                        {!! $chart->html() !!}
                    </center>
                </div>                                          
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {!! Charts::scripts() !!}
    {!! $chart->script() !!} 
@endsection

