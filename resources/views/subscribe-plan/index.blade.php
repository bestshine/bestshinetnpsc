@extends('layouts.app')

@section('title', 'Subscribe Plans List')

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <h4 class="custom-heading">Subscribe Plans List</h4>
        <div class="custom-fr">
            <a href="{{ route('subscribePlanCreate') }}" class="btn btn-primary">Create</a>
        </div>          

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
                            <span itemprop="name">Subscribe Plans</span>
                        </a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol> 

                @if (session('postSubscribePlanSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('postSubscribePlanSuccess') }} </strong> 
                    </div>                                               
                @endif  

                @if (session('deleteSubscribePlanSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('deleteSubscribePlanSuccess') }} </strong> 
                    </div>                                              
                @endif  

                <div class="panel panel-info">
                    <div class="panel-heading">                                
                        <h3 class="panel-title"><center>Subscribe Plans</center></h3>
                    </div>
                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Main Module Name</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Time Duration</th>
                                    <th>Usage Limit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subscribePlans as $key => $subscribePlan)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $subscribePlan->mainmodule->name }}</td>
                                        <td>{{ $subscribePlan->name }}</td>
                                        <td>{{ $subscribePlan->amount }}</td>
                                        <td>{{ $subscribePlan->duration }}</td>
                                        <td>{{ $subscribePlan->limit }}</td>
                                        <td>
                                            <a href="{{route('deleteSubscribePlan', $subscribePlan->id)}}" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
                                        </td>                                        
                                    </tr>
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

