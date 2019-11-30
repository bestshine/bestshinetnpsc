
@if(count($feedbacks) > 0)
    @foreach($feedbacks as $feedback)
        <div class="discussion-comment-body">
            <p><b>{{ $feedback->name }}</b> says:</p>
            <div class="comment-date">{{ Carbon\Carbon::parse($feedback->created_at) }}</div>
            <p> {{ $feedback->content }} </p>
            <a href="{{route('sendFeedbackToDevelopmentTeam', $feedback->id)}}" class="btn btn-default btn-sm"><i class="fa fa-forward" aria-hidden="true"></i> Forward [Team]</a>
        </div>
    @endforeach        
@else
    <p>No Feedbacks</p>
@endif

{{ $feedbacks->links() }}                