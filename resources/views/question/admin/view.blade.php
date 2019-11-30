@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <h4 class="custom-heading">List Of Questions</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div style="float: left;margin: 10px;font-weight: bold;"> Exam Name : {{ $exam->name }} </div>                    
                    <div style="float: right;margin: 10px;font-weight: bold;">Time Remaining <span id="remaining-Time"> {{ $exam->time_duration }}</span></div>
                    
                    <div class="panel-body">
                        @if(count($questions) > 0)
                            @php 
                            $index = 1; 
                            @endphp
                            @foreach($questions as $question)
                                @if(in_array($question->subject,$subjectTitles))
                                    @php 
                                        $pos = array_search($question->subject, $subjectTitles);
                                        unset($subjectTitles[$pos]);
                                    @endphp                            
                                    <hr>
                                    <div class="subject-title"> PART - {{ $pos+1 }} {{ $question->subject }} </div>
                                    <hr>
                                @endif
                                <p> {{ $index }}.{{ $question->question }}</p>
                                <p> 
                                    <span class="space"> a) {{ $question->option_a }} </span>  
                                    <span class="space"> b) {{ $question->option_b }} </span> 
                                    <span class="space"> c) {{ $question->option_c }} </span> 
                                    <span class="space"> d) {{ $question->option_d }} </span> 
                                </p>
                                @php $index++; @endphp
                            @endforeach                        
                        @else
                            <div class="no-qus-data" style="text-align: center;font-weight: bold;"> No Questions Available !! </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
