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
            <input type="radio" name="question_{{ $question->id }}" class="checked-answer" data-id="{{$question->id}}" value="a">
            a) {{ $question->option_a }} 
        </span>  
        <span class="space"> 
            <input type="radio" name="question_{{ $question->id }}" class="checked-answer" data-id="{{$question->id}}" value="b">
            b) {{ $question->option_b }} 
        </span> 
        <span class="space"> 
            <input type="radio" name="question_{{ $question->id }}" class="checked-answer" data-id="{{$question->id}}" value="c">
            c) {{ $question->option_c }} </span> 
        <span class="space"> 
            <input type="radio" name="question_{{ $question->id }}" class="checked-answer" data-id="{{$question->id}}" value="d">
            d) {{ $question->option_d }} 
        </span> 
    </p>
    @php $index++; @endphp
@endforeach


              