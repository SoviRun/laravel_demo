<li class="media mt-4 md-4">
    <a href="{{ route('users.show',$user->id) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar mr-3">
    </a>

    <div class="media-body">
        <h5 class="mt-0 mb-1">{{ $user->name }}
            <samll> / {{ $status->created_at->diffForHumans() }}</samll>
        </h5>
        {{ $status->content }}
    </div>

    @can('destroy',$status)
        <form action="{{ route('statuses.destroy',$status->id) }}" method="POST" onsubmit="return confirm('您确定确定要删除吗？');" class="status_destroy">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-sm btn-danger">删除</button>
        </form>
    @endcan
</li>