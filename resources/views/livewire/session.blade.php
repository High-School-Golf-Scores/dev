<div>
    @if ($user)
        <h3>User Information</h3>
        <p><strong>Name:</strong> {{ $user->first_name }} {{ $user->last_name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Created At:</strong> {{ $user->created_at->toFormattedDateString() }}</p>
        <p><strong>Last Login:</strong> {{ $user->last_login_at ? $user->last_login_at->toFormattedDateString() : 'Never' }}</p>
        <!-- Add more attributes as needed -->
    @else
        <p>No user logged in.</p>
    @endif
</div>
