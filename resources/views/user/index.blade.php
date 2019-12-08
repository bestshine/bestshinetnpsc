@extends('layouts.app')

@section('title','Users')

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <h4 class="custom-heading">User Lists</h4>
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
                            <span itemprop="name">Users</span>
                        </a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                            
                            <li><a href="{{ route('register') }}">New Admission</a></li>
                    </ul>
                </div>
                <form class="form-inline" action="{{ route('usersSearch') }}" method="GET">

                    <div class="form-group">
                        <input type="input" class="form-control" id="user_from_date" placeholder="Select From Date" name="from_date">
                    </div>

                    <div class="form-group">
                        <input type="input" class="form-control" id="user_to_date" placeholder="Select To Date" name="to_date">
                    </div>

                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
                <br>  

                <div class="panel panel-info">
                    <div class="panel-heading">                                
                        <h3 class="panel-title"><center>Users</center></h3>
<!--                         <ul class="panel-controls">
                            <li>
                                <a href="#" class="panel-collapse">
                                    <span class="fa fa-angle-down"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="panel-refresh">
                                    <span class="fa fa-refresh"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="panel-remove">
                                    <span class="fa fa-times"></span>
                                </a>
                            </li>
                        </ul>    -->                             
                    </div>
                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Subscription Plan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone_no }}</td>
                                        <td>{{ $user->plans['plan_name'] }}</td>
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

