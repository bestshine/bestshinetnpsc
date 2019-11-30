
@if(count($reports) > 0)
    @foreach($reports as $report)
        <div class="discussion-comment-body">
            <p><b>{{ $report->name }}</b> says:</p>
            <div class="comment-date">{{ Carbon\Carbon::parse($report->created_at) }}</div>
            <p> {{ $report->content }} </p>
            <a href="{{route('sendReportToDevelopmentTeam', $report->id)}}" class="btn btn-default btn-sm"><i class="fa fa-forward" aria-hidden="true"></i> Forward [Team]</a>            
        </div>
    @endforeach        
@else
    <p>No report errors</p>
@endif

{{ $reports->links() }}                