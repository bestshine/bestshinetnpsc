@php
use Carbon\Carbon;
@endphp

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-content-wrap">
  
        <h4 class="custom-heading">Latest discussion answers</h4>
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partials.top-menu')

                <h4 class="custom-heading">Discussions For {{ $subModule->name }}</h4>
                <!-- breadcrumb -->
                <ol class="breadcrumb mx-border-top-bottom">
                    <li>
                        <a itemprop="item" href="{{ route('dashboard') }}">
                            <span itemprop="name">Dashboard</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li>
                        <a itemprop="item" href="{{ route('getSubModules',$main_module_slug) }}">
                            <span itemprop="name">{{ $mainModule->name }}</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li>
                        <a itemprop="item" href="">
                            <span itemprop="name">{{ $subModule->name }}</span>
                        </a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>                
                @if (session('postDiscussionAnswerSuccess'))
                    <div class="alert alert-success">
                      {{ session('postDiscussionAnswerSuccess') }}
                    </div>                           
                @endif 

                <span style="color: #3097D1; font-weight: bold;"> {{ $discussionQuestion->question }}? </span>

                <form class="form-horizontal" method="POST" action="{{ route('postDiscussionAnswer') }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="question_id" value="{{ $discussionQuestion->id }}">


                    <div class="form-group{{ $errors->has('answer') ? ' has-error' : '' }}">
                        <label for="atxtQuestionText" class="col-sm-2 control-label">Your answer</label>

                        <div class="col-sm-10">
                            <textarea id="atxtQuestionText" name="answer" class="form-control" rows="4" placeholder="Type your answer here..." required autofocus> {{ old('answer') }} </textarea>

                            @if ($errors->has('answer'))    
                                <span class="help-block">
                                    <strong>{{ $errors->first('answer') }}</strong>
                                </span>
                            @endif                           
                        </div>                       
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="qtxtOName" class="col-sm-2 control-label">Your Name</label>
                        <div class="col-sm-10">
                            <input id="qtxtOName" name="name" value="{{ old('name') }}" class="form-control" type="text" placeholder="Name" required>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif  
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="qtxtEmailID" class="col-sm-2 control-label">Your Email ID</label>
                        <div class="col-sm-10">
                            <input id="qtxtEmailID" name="email" value="{{ old('email') }}" class="form-control" type="email" placeholder="Email" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif 
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">
                                Submit My Answer
                            </button>
                        </div>
                    </div>
                </form>                
           </div>
        </div>

        <!-- Answers -->
        <h4 class="custom-heading">Comments</h4>
        @if(count($discussionAnswers) > 0)
            @foreach($discussionAnswers as $discussionAnswer)
                <div class="discussion-comment-body">
                    <p><b>{{ $discussionAnswer->user_name }}</b> says:</p>
                    <div class="comment-date">{{ Carbon::parse($discussionAnswer->created_at) }}</div>
                    <p> {{ $discussionAnswer->answer }} </p>
                </div>
            @endforeach        
        @else
            <p>No Comments</p>
        @endif

        <!-- Related Questions -->        
        <h4 class="custom-heading">All Questions</h4>
        @foreach($relatedDiscussionQuestions as $relatedDiscussionQuestion)
            <p style="font-weight: bold;"> <a href="{{ route('showDiscussionQuestionWithAnswer', [$main_module_slug,$sub_module_slug,$relatedDiscussionQuestion->slug] )}}"> {{ $relatedDiscussionQuestion->question }}?</a> </p>
        @endforeach      
    </div>
</div>
@endsection

