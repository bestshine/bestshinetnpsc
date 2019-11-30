@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-content-wrap">
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

                @foreach($discussionQuestions as $discussionQuestion)
                    <p style="font-weight: bold;"> <a href="{{ route('showDiscussionQuestionWithAnswer', [$main_module_slug,$sub_module_slug,$discussionQuestion->slug] )}}"> {{ $discussionQuestion->question }}?</a> </p>
                @endforeach

                {{ $discussionQuestions->links() }}

                <h4 class="custom-heading">Ask a new question</h4>
                
                @if (session('postDiscussionQuestionSuccess'))
                    <div class="alert alert-success">
                      {{ session('postDiscussionQuestionSuccess') }}
                    </div>                           
                @endif 

                <form class="form-horizontal" method="POST" action="{{ route('postDiscussionQuestion') }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="sub_module" value="{{ $sub_module_slug }}">

                    <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                        <label for="qtxtQuestionText" class="col-sm-2 control-label">Your question</label>

                        <div class="col-sm-10">
                            <textarea id="qtxtQuestionText" name="question" class="form-control" rows="4" placeholder="Type your question here..." required autofocus> {{ old('question') }} </textarea>

                            @if ($errors->has('question'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('question') }}</strong>
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
                                Submit My Question
                            </button>
                        </div>
                    </div>
                </form>                
           </div>
        </div>
    </div>
</div>
@endsection
