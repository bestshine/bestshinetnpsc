@extends('layouts.app')

@section('title','Subjects List')

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <h4 class="custom-heading">Subjects List</h4>
        <div class="custom-fr">
            <a href="{{ route('createSubModule') }}" class="btn btn-primary">Create</a>
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
                            <span itemprop="name">Subject</span>
                        </a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>            
                @if (session('postSubModuleSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('postSubModuleSuccess') }} </strong> 
                    </div>                                               
                @endif 

                @if (session('updateSubModuleSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('updateSubModuleSuccess') }} </strong> 
                    </div>                                               
                @endif                 

                @if (session('activateSubModuleSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('activateSubModuleSuccess') }} </strong> 
                    </div>                                               
                @endif   

                @if (session('deactivateSubModuleSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('deactivateSubModuleSuccess') }} </strong> 
                    </div>                                               
                @endif                           

                @if (session('deleteSubModuleSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('deleteSubModuleSuccess') }} </strong> 
                    </div>                                               
                @endif

                @if (session('deleteSubModuleAlert')) 
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('deleteSubModuleAlert') }} </strong> 
                    </div>                                             
                @endif                
                 
                @if (session('subModuleDetailsCURDSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('subModuleDetailsCURDSuccess') }} </strong> 
                    </div>                                              
                @endif                 

                <div class="panel panel-info">
                    <div class="panel-heading">                                
                        <h3 class="panel-title"><center>Subjects</center></h3>                        
                    </div>
                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>State</th>
                                    <th>Board</th>
                                    <th>Medium</th>
                                    <th>Standard</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th>Activate / Deactivate</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subModules as $key => $subModule)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $subModule->mainmodule->state->name }}</td>
                                        <td>{{ $subModule->mainmodule->board->name }}</td>
                                        <td>{{ $subModule->mainmodule->medium->name }}</td>
                                        <td>{{ $subModule->mainmodule->name }}</td>
                                        <td>{{ $subModule->name }}</td>
                                        <td>
                                            @foreach($moduleDetails as $moduleDetail)
                                                <li> <a href="/dashboard/master/sub-module/{{ $subModule->slug }}/{{ $moduleDetail }}/create">{{ $moduleDetail }}</a> </li>
                                            @endforeach                                          
                                        </td>
                                        <td>
                                            @if($subModule->status == 1)
                                                <a href="{{route('deactivateSubModule', $subModule->slug)}}" class="btn btn-primary">Deactivate</a>
                                            @else
                                                <a href="{{route('activateSubModule', $subModule->slug)}}" class="btn btn-primary">Activate</a>
                                            @endif
                                        </td>                                   
                                        <td>
                                            <a href="{{route('editSubModule', $subModule->slug)}}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{route('deleteSubModule', $subModule->slug)}}" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
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

