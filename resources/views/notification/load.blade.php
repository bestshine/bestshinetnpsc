
@if(count($notifications) > 0)
    @foreach($notifications as $notification)
        <div class="notification-content-body">
            <p><a href="{{ $notification->url }}">{{ $notification->title }}</a></p>
            <div class="">{{ Carbon\Carbon::parse($notification->created_at) }}</div>
        </div>
    @endforeach        
@else
    <p>No Notifications</p>
@endif

{{ $notifications->links() }}                