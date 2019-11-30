@extends('layouts.app')

@section('content')

<div class="container">
    <div class="page-content-wrap">
        <h4 class="custom-heading">List Of Questions</h4>
        <div class="current-page" data-value="question" data-count="{{ count($questions) }}"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    @if(count($questions) > 0)
                        <div style="float: left;margin: 10px;font-weight: bold;"> Exam Name : {{ $exam->name }} </div>                    
                        <div style="float: right;margin: 10px;font-weight: bold;">Time Remaining <span id="remainingTime"> {{ $exam->time_duration }}</span></div>

                        @php  
                            $time = $exam->time_duration;
                            $parsed = date_parse($time);
                            $seconds = $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];
                        @endphp
                        <div class="time-seconds" data-value="{{ $seconds }}"></div>
                    @endif
                    <div class="panel-body">
                        @if(count($questions) > 0)
                            <form class="form-horizontal" role="form" method="post" action="{{route('postAnswers',$exam->slug)}}" enctype="multipart/form-data">
                                {!! csrf_field() !!}                        
                                @php 
                                $index = 1; 
                                @endphp
                                @foreach($questions as $question)
                                    @if(in_array($question->subject,$subjectTitles))
                                        @php 
                                            $pos = array_search($question->subject, $subjectTitles);
                                            unset($subjectTitles[$pos]);
                                        @endphp                            
                                        <!-- <hr> -->
                                        <div class="subject-title"> PART - {{ $pos+1 }} {{ $question->subject }} </div>
                                        <hr>
                                    @endif
                                    <p> {{ $index }}.{{ $question->question }}</p>
                                    @if($question->image)
                                        <p><img src="/question-images/{{ $question->image }}"></p>
                                    @endif
                                    @if($question->image1)
                                        <p><img src="/question-images/{{ $question->image1 }}"></p>
                                    @endif
                                    @if($question->image2)
                                        <p><img src="/question-images/{{ $question->image2 }}"></p>
                                    @endif                                                                        
                                    <p> 
                                        <span class="space"> 
                                            <input type="radio" name="question_{{ $question->id }}" value="a">
                                            a) {{ $question->option_a }} 
                                        </span>  
                                        <span class="space"> 
                                            <input type="radio" name="question_{{ $question->id }}" value="b">
                                            b) {{ $question->option_b }} 
                                        </span> 
                                        <span class="space"> 
                                            <input type="radio" name="question_{{ $question->id }}" value="c">
                                            c) {{ $question->option_c }} </span> 
                                        <span class="space"> 
                                            <input type="radio" name="question_{{ $question->id }}" value="d">
                                            d) {{ $question->option_d }} 
                                        </span> 
                                    </p>
                                    @php $index++; @endphp
                                @endforeach
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>                            
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
