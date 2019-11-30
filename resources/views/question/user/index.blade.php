@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-content-wrap white-bag">
        <div class="row">    
            <div class="col-md-12">
                <div id="myProgress">
                  <div id="myBar"></div>
                </div>  
                <br>          
                <div class="panel panel-default">
                    <span class="exam_slug" attr="{{ $exam_slug }}"></span>
                    <span class="total-questions" data-value="{{$totalQuestions}}"></span>
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
                                <input type="hidden" name="checkedAnswers">                        
                                <section class="articles qus-items">
                                    @include('question.user.load')
                                </section>
                                <button type="button" class="btn btn-primary next-question">Next Question</button>
                                <div class="text-right">
                                    <button type="button" class="btn btn-primary question-subt">Submit</button>
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

@section('scripts')
<script type="text/javascript">
    $(function() {
        var checkedAnswers = [];
        var page = 1;

        // $('body').on('click', '.pagination a', function(e) {
        //     e.preventDefault();
        //     // status for progress bar
        //     var attendedQuestions = parseInt(checkedAnswers.length);
        //     var totalQuestions = parseInt($('.total-questions').attr('data-value'));
        //     var percentage = attendedQuestions/totalQuestions*100;
        //     $("#myBar").css({"width":parseInt(percentage)+"%"});

        //     $('#load a').css('color', '#dfecf6');
        //     $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');

        //     var url = $(this).attr('href');
        //     console.log(url);
        //     getArticles(url);
        //     window.history.pushState("", "", url);
        // });

        $(document).on('click', '.next-question', function() {
            // e.preventDefault();
            // status for progress bar
            var exam_slug = $('.exam_slug').attr('attr');
            var attendedQuestions = parseInt(checkedAnswers.length);
            var totalQuestions = parseInt($('.total-questions').attr('data-value'));
            var percentage = attendedQuestions/totalQuestions*100;
            $("#myBar").css({"width":parseInt(percentage)+"%"});

            $('#load a').css('color', '#dfecf6');
            $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');

            var url = $(this).attr('href');
            page ++;
            getArticles(exam_slug,page);
            // window.history.pushState("", "", url);
        });        

        function getArticles(exam_slug,page) {
            var myJSON = JSON.stringify(checkedAnswers);
            $.ajax({
                type: "POST",
                url: "{{ route('ajaxCall') }}",
                data: {
                    _token : $('input[name="_token"]').val(),
                    page: page,
                    checkedAnswers: checkedAnswers,
                    exam_slug: exam_slug
                },
                success: function(data){
                    if(data != ''){
                        $('.articles').html(data);
                    }else{
                        
                    }
                }
            });            
        }

        $(document).on('click', '.checked-answer', function(e) {
            var question_id = $(this).attr('data-id');
            var answer = this.value;
            if( !lookup(question_id,answer) ) {
                checkedAnswers.push({
                    question_id: question_id,
                    answer: answer
                });
            }
        });

        function lookup(question_id,answer) {
            for(var i = 0, len = checkedAnswers.length; i < len; i++) {
                if( checkedAnswers[ i ].question_id === question_id ){
                    checkedAnswers[ i ].answer = answer;
                    return true;  
                }
            }
            return false;
        }

        $(document).on('click', '.question-subt', function(e) {
            var myJSON = JSON.stringify(checkedAnswers);
            $('input[name="checkedAnswers"]').val(myJSON);
            $('.form-horizontal').submit();
        });                                
    }); 
</script>
@endsection
