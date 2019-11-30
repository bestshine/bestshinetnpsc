@extends('layouts.app')

@section('title','Standard')

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <h4 class="custom-heading">Standards List</h4>
        <div class="custom-fr">
            <a href="{{ route('createMainModule') }}" class="btn btn-primary">Create</a>
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
                            <span itemprop="name">Standard</span>
                        </a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>            
                @if (session('postMainModuleSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('postMainModuleSuccess') }} </strong> 
                    </div>                                        
                @endif 

                @if (session('updateMainModuleSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('updateMainModuleSuccess') }} </strong> 
                    </div>                                               
                @endif                 

                @if (session('activateMainModuleSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('activateMainModuleSuccess') }} </strong> 
                    </div>                                               
                @endif   

                @if (session('deactivateMainModuleSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('deactivateMainModuleSuccess') }} </strong> 
                    </div>                                               
                @endif                           

                @if (session('deleteMainModuleSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('deleteMainModuleSuccess') }} </strong> 
                    </div>                                               
                @endif

                @if (session('deleteMainModuleAlert'))
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('deleteMainModuleAlert') }} </strong> 
                    </div>                                              
                @endif  

                <div class="panel panel-info">
                    <div class="panel-heading">                                
                        <h3 class="panel-title"><center>Standard</center></h3>                        
                    </div>
                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>State</th>
                                    <th>Board</th>
                                    <th>Medium</th>
                                    <th>Name</th>
                                    <th>Activate / Deactivate</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mainModules as $key => $mainModule)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $mainModule->state->name }}</td>
                                        <td>{{ $mainModule->board->name }}</td>
                                        <td>{{ $mainModule->medium->name }}</td>
                                        <td>{{ $mainModule->name }}</td>
                                        <td>
                                            @if($mainModule->status == 1)
                                                <a href="{{route('deactivateMainModule', $mainModule->slug)}}" class="btn btn-primary">Deactivate</a>
                                            @else
                                                <a href="{{route('activateMainModule', $mainModule->slug)}}" class="btn btn-primary">Activate</a>
                                            @endif
                                        </td>                                   
                                        <td>
                                            <a href="{{route('editMainModule', $mainModule->slug)}}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{route('deleteMainModule', $mainModule->slug)}}" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
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

