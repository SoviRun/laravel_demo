<form action="{{ route('statuses.store') }}" method="POST">
    @include('shared._error')
    {{ csrf_field() }}
    <textarea name="content" rows="3" class="form-control" placeholder="随便说点什么....">{{ old('content') }}</textarea>
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">发布</button>
    </div>
</form>