@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-content-wrap">
    <div class="row">
      <div class="col-md-12">
        @include('layouts.partials.top-menu')

        <h4 class="custom-heading">Results For {{ $subModule->name }}</h4>
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
                  <th>Exam Name</th>
                  <th>Duration</th>
                  <th>Total Questions</th>
                  <th>Attended Questions</th>
                  <th>Not Attended Questions</th>
                  <th>Total Mark</th>
                  <th>Wrong Answer</th>
                  <th>Taken Date</th>
                </tr>
              </thead>
              <tbody>
                @php $key = 1; @endphp
                @foreach($attendedExams as $attendedExam)
                  <tr>
                    <th scope="row">{{ $key }}</th>
                    <td> {{ $attendedExam->name }} </td>
                    <td>{{ $attendedExam->time_duration }} </td>
                      @php $mark = currentUserExamTakenMark($attendedExam->id); @endphp
                      <td> {{ $mark->total_questions }} </td>  
                      <td> {{ $mark->attended_questions }} </td>  
                      <td> {{ $mark->not_attended_questions }} </td>  
                      <td> {{ $mark->mark }} </td>  
                      <td> {{ $mark->negative_mark }} </td>  
                      <td> {{ Carbon\Carbon::parse($mark->written_date)->format('d-m-Y') }} </td>  
                  </tr>
                  @php $key++; @endphp
                @endforeach
              </tbody>
            </table>

            {{ $attendedExams->links() }}
          </div>
        </div>
      </div>
    </div>		
  </div>
</div>
@endsection
