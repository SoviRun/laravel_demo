<li>
    <a href="{{ route('users.show',$user->id) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar mr-3">
    </a>

    <div class="media-body">
        <h5 class="mt-0 mb-1">{{ $user->name }} <samll> / {{ $status->created_at->diffForHumans() }}</samll></h5>
        {{ $status->content }}
    </div>
</li>