@extends('layouts.app')

@section('title', 'Exams List')

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <h4 class="custom-heading">Exams List</h4>
        <div class="custom-fr">
            <a href="{{ route('examCreate') }}" class="btn btn-primary">Create</a>
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
                            <span itemprop="name">Exam</span>
                        </a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>            
                @if (session('postExamSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('postExamSuccess') }} </strong> 
                    </div>                                               
                @endif 

                @if (session('updateExamSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('updateExamSuccess') }} </strong> 
                    </div>                                              
                @endif                 

                @if (session('activateExamSuccess'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('activateExamSuccess') }} </strong> 
                    </div>                                                
                @endif   

                @if (session('deactivateExamSuccess')) 
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('deactivateExamSuccess') }} </strong> 
                    </div>                                              
                @endif                           

                @if (session('deleteExamSuccess')) 
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('deleteExamSuccess') }} </strong> 
                    </div>                                              
                @endif

                @if (session('deleteExamAlert'))
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ session('deleteExamAlert') }} </strong> 
                    </div>                                                
                @endif                  

                <div class="panel panel-info">
                    <div class="panel-heading">                                
                        <h3 class="panel-title"><center>Exams List</center></h3>                           
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
                                    <th>Subject</th>
                                    <th>Exam Type</th>
                                    <th>Time Duration</th>
                                    <th>Exam Date</th>
                                    <th>Activate / Deactivate</th>
                                    <th>View Question</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($exams as $key => $exam)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $exam->submodule->mainmodule->state->name }}</td>
                                        <td>{{ $exam->submodule->mainmodule->board->name }}</td>
                                        <td>{{ $exam->submodule->mainmodule->medium->name }}</td>
                                        <td>{{ $exam->submodule->mainmodule->name }}</td>
                                        <td>{{ $exam->submodule->name }}</td>
                                        <td>{{ $exam->name }}</td>
                                        <td>{{ $exam->time_duration }}</td>
                                        <td>{{ $exam->exam_date }}</td>
                                        <td>
                                            @if($exam->status == 1)
                                                <a href="{{route('deactivateExam', $exam->slug)}}" class="btn btn-primary">Deactivate</a>
                                            @else
                                                <a href="{{route('activateExam', $exam->slug)}}" class="btn btn-primary">Activate</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('viewQuestions', [$exam->submodule['slug'],$exam->slug])}}" class="btn btn-primary">View Question</a>
                                        </td>                                        
                                        <td>
                                            <a href="{{route('editExam', $exam->slug)}}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{route('deleteExam', $exam->slug)}}" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
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

