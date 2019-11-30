@extends('layouts.app')

@section('title', 'Test')

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <h3>Exam Lists</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Duration</th>
                                    <th>Status</th>
                                    <th>Total Questions</th>
                                    <th>Attended Questions</th>
                                    <th>Not Attended Questions</th>
                                    <th>Total Mark</th>
                                    <th>Negative Mark</th>
                                    <th>Remarks</th>
                                    <th>Taken Date</th>
                                </tr>
                            </thead>
                          <tbody>
                            @php $key = 1; @endphp
                            @foreach($exams as $exam)
                                <tr>
                                  <th scope="row">{{ $key }}</th>
                                  <td> {{ $exam->name }} </td>
                                  <td>{{ $exam->time_duration }} </td>
                                  @php $count = currentUserExamTakenCount($exam->id); @endphp
                                  @if($count == 0)
<!--                                         @php $validate = validateExamDateWithCurrentDate($exam->exam_date); @endphp
                                    @if($validate == "active")
                                        <td><a href="{{route('viewQuestions', $exam->id)}}" class="btn btn-info">Take Test</a></td>
                                    @else
                                        <td>Exam Date Expired</td>
                                    @endif -->
                                    <td><a href="{{route('viewQuestions', $exam->id)}}" class="btn btn-primary">Take Test</a></td>                                        
                                    <td> -- </td>                                      
                                    <td> -- </td>                                      
                                    <td> -- </td>                                      
                                  @else
                                    @php $mark = currentUserExamTakenMark($exam->id); @endphp
                                    <td>Completed</td>
                                    <td> {{ $mark->total_questions }} </td>  
                                    <td> {{ $mark->attended_questions }} </td>  
                                    <td> {{ $mark->not_attended_questions }} </td>  
                                    <td> {{ $mark->mark }} </td>  
                                    <td> {{ $mark->negative_mark }} </td>  
                                    <td> {{ $mark->remarks }} </td>  
                                    <td> {{ Carbon\Carbon::parse($mark->written_date)->format('d-m-Y') }} </td>  
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
