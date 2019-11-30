@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-content-wrap">
    <h4 class="custom-heading">Results</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="alert alert-success">
                          Successfully Completed Your Exam. Please Check Your Answer Given In Below.
                        </div>
                        <b>NOTE:</b>
                        <p style="color:green;font-weight: bold;">Correct Answer</p>
                        <p style="color:blue;font-weight: bold;">Selected Answer</p>
                        <p> Total Mark : {{ $mark->mark }} </p>  

                        @if($mark->mark >= 550)
                            <p style="color: green;"> Remarks : {{ $mark->remarks }} </p>
                        @elseif($mark->mark >=300 && $mark->mark <= 549)
                            <p style="color: blue;"> Remarks : {{ $mark->remarks }} </p>
                        @else
                            <p style="color: red;"> Remarks : {{ $mark->remarks }} </p>
                        @endif

                        @php $selectedAnswers = json_decode($mark->selected_answers,true);
                        @endphp
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
                            <p> {{ $index }}.{{ $question->question }}
                            @if(isset($selectedAnswers[$question->id]))
                                @if($selectedAnswers[$question->id] == $question->answer)
                                    <img src="/images/question/right.png">
                                @else
                                    <img src="/images/question/wrong.png">
                                @endif
                            @else
                                <img src="/images/question/prohibition.png" alt="not">
                            @endif
                            </p>
                            <p>    
                                @if(isset($selectedAnswers[$question->id]))
                                    @if(($question->option_a == $question->answer) && ($selectedAnswers[$question->id] == $question->answer))
                                        <span class="space" style="color: green;font-weight: bold;"> a) {{ $question->option_a }} </span>  
                                    @else 
                                        @if($question->option_a == $question->answer)
                                            <span class="space" style="color: green;font-weight: bold;"> a) {{ $question->option_a }} </span>  
                                        @else                                    
                                            @if($question->option_a == $selectedAnswers[$question->id])
                                                <span class="space" style="color: blue;font-weight: bold;"> a) {{ $question->option_a }} </span>  
                                            @else
                                                <span class="space"> a) {{ $question->option_a }} </span>  
                                            @endif
                                        @endif
                                    @endif
                                @else
                                    @if($question->option_a == $question->answer)
                                        <span class="space" style="color: green;font-weight: bold;"> a) {{ $question->option_a }} </span>  
                                    @else
                                        <span class="space"> a) {{ $question->option_a }} </span>  
                                    @endif
                                @endif  

                                @if(isset($selectedAnswers[$question->id]))
                                    @if(($question->option_b == $question->answer) && ($selectedAnswers[$question->id] == $question->answer))
                                        <span class="space" style="color: green;font-weight: bold;"> b) {{ $question->option_b }} </span>  
                                    @else 
                                        @if($question->option_b == $question->answer)
                                            <span class="space" style="color: green;font-weight: bold;"> b) {{ $question->option_b }} </span>  
                                        @else                                    
                                            @if($question->option_b == $selectedAnswers[$question->id])
                                                <span class="space" style="color: blue;font-weight: bold;"> b) {{ $question->option_b }} </span>  
                                            @else
                                                <span class="space"> b) {{ $question->option_b }} </span>  
                                            @endif
                                        @endif
                                    @endif
                                @else
                                    @if($question->option_b == $question->answer)
                                        <span class="space" style="color: green;font-weight: bold;"> b) {{ $question->option_b }} </span>  
                                    @else
                                        <span class="space"> b) {{ $question->option_b }} </span>  
                                    @endif
                                @endif 

                                @if(isset($selectedAnswers[$question->id]))
                                    @if(($question->option_c == $question->answer) && ($selectedAnswers[$question->id] == $question->answer))
                                        <span class="space" style="color: green;font-weight: bold;"> c) {{ $question->option_c }} </span>  
                                    @else 
                                        @if($question->option_c == $question->answer)
                                            <span class="space" style="color: green;font-weight: bold;"> c) {{ $question->option_c }} </span>  
                                        @else                                    
                                            @if($question->option_c == $selectedAnswers[$question->id])
                                                <span class="space" style="color: blue;font-weight: bold;"> c) {{ $question->option_c }} </span>  
                                            @else
                                                <span class="space"> c) {{ $question->option_c }} </span>  
                                            @endif
                                        @endif
                                    @endif
                                @else
                                    @if($question->option_c == $question->answer)
                                        <span class="space" style="color: green;font-weight: bold;"> c) {{ $question->option_c }} </span>  
                                    @else
                                        <span class="space"> c) {{ $question->option_c }} </span>  
                                    @endif
                                @endif

                                @if(isset($selectedAnswers[$question->id]))
                                    @if(($question->option_d == $question->answer) && ($selectedAnswers[$question->id] == $question->answer))
                                        <span class="space" style="color: green;font-weight: bold;"> d) {{ $question->option_d }} </span>  
                                    @else 
                                        @if($question->option_d == $question->answer)
                                            <span class="space" style="color: green;font-weight: bold;"> d) {{ $question->option_d }} </span>  
                                        @else                                     
                                            @if($question->option_d == $selectedAnswers[$question->id])
                                                <span class="space" style="color: blue;font-weight: bold;"> d) {{ $question->option_d }} </span>  
                                            @else
                                                <span class="space"> d) {{ $question->option_d }} </span>  
                                            @endif
                                        @endif
                                    @endif
                                @else
                                    @if($question->option_d == $question->answer)
                                        <span class="space" style="color: green;font-weight: bold;"> a) {{ $question->option_d }} </span>  
                                    @else
                                        <span class="space"> d) {{ $question->option_d }} </span>  
                                    @endif
                                @endif                                                              
                            </p>
                            <p><b>Answer Description:</b> {{ $question->answer_description }}</p>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
