@extends('layouts.app')

@section('title', 'Development Team')

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <h4 class="custom-heading">Development Team List</h4>
        <div class="custom-fr">
            <a href="{{ route('createDeveloper') }}" class="btn btn-primary">Create</a>
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
                        <a itemprop="item" href="">
                            <span itemprop="name">Development Team</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>            
                @if (session('postDeveloperSuccess'))
                    <div class="alert alert-success">
                      {{ session('postDeveloperSuccess') }}
                    </div>                           
                @endif 

                @if (session('updateDeveloperSuccess'))
                    <div class="alert alert-success">
                      {{ session('updateDeveloperSuccess') }}
                    </div>                           
                @endif                 

                @if (session('activateDeveloperSuccess'))
                    <div class="alert alert-success">
                      {{ session('activateDeveloperSuccess') }}
                    </div>                           
                @endif   

                @if (session('deactivateDeveloperSuccess'))
                    <div class="alert alert-success">
                      {{ session('deactivateDeveloperSuccess') }}
                    </div>                           
                @endif                           

                @if (session('deleteDeveloperSuccess'))
                    <div class="alert alert-success">
                      {{ session('deleteDeveloperSuccess') }}
                    </div>                           
                @endif                 

                <div class="panel panel-info">
                    <div class="panel-heading">                                
                        <h3 class="panel-title"><center>Developers</center></h3>                           
                    </div>
                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Developer Name</th>
                                    <th>Developer Code</th>
                                    <th>Developer Designation</th>
                                    <th>Activate / Deactivate</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teams as $key => $team)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $team->name }}</td>
                                        <td>{{ $team->code }}</td>
                                        <td>{{ $team->designation }}</td>
                                        <td>
                                            @if($team->status == 1)
                                                <a href="{{route('deactivateDeveloper', $team->slug)}}" class="btn btn-primary">Deactivate</a>
                                            @else
                                                <a href="{{route('activateDeveloper', $team->slug)}}" class="btn btn-primary">Activate</a>
                                            @endif
                                        </td>                                      
                                        <td>
                                            <a href="{{route('editDeveloper', $team->slug)}}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{route('deleteDeveloper', $team->slug)}}" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
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

