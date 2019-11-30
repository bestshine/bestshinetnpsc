@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-content-wrap">
    <div class="row">
      <div class="col-md-12">
        @include('layouts.partials.top-menu')

        <h4 class="custom-heading">Online Test For {{ $subModule->name }}</h4>
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

        <div class="panel panel-default">
          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Duration</th>
                  <th>Total Questions</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @php $key = 1; @endphp
                @foreach($exams as $exam)
                  <tr>
                    <th scope="row">{{ $key }}</th>
                    <td> {{ $exam->name }} </td>
                    <td>{{ $exam->time_duration }} </td>
                    @php $questionCount = getQuestionCount($exam->id); @endphp
                    <td> {{ $questionCount }} </td>
                    @php $count = currentUserExamTakenCount($exam->id); @endphp
                    @if($count == 0)
                      @if($questionCount > 0)
                        <td><a href="{{route('viewQuestions', [$sub_module_slug,$exam->slug])}}" class="btn btn-primary">Take Test</a></td>
                      @else                        
                        <td>Question Not Available</td>
                      @endif
                    @else
                      <td><a href="{{route('viewQuestions', [$sub_module_slug,$exam->slug])}}" class="btn btn-primary">Take Test</a> <a href="{{ route('getSubModuleResult',[$main_module_slug,$sub_module_slug]) }}">(Result Link)</a></td>
                    @endif
                  </tr>
                  @php $key++; @endphp
                @endforeach
              </tbody>
            </table>
            {{ $exams->links() }}
          </div>
        </div>
      </div>
    </div>    
  </div>
</div>
@endsection
