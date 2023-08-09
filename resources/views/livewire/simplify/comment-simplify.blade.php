<div class="wishes" id="wishes">
    <p class="header-wishes">Harapan & do'a</p>
    <div class="form">
        <livewire:simplify.create-simplify :posts="$id"></livewire:simplify.create-simplify>
    </div>
    <div class="wishes-comment">
        @isset($comment)
            @if ($comment->count() > 0)
                @foreach ($comment as $c)
                    <div class="card-comment">
                        <div class="header-comment">
                            <div class="nama">{{ $c->nama }}</div>
                            <div class="status {{ $c->status }}">{{ $c->status }}</div>
                        </div>
                        <div class="create-at">
                            {{ $c->created_at->locale('id')->diffForHumans() }}
                        </div>
                        <div class="body">
                            {{ $c->body }}
                        </div>
                        <div class="btn-reply" data-header="{{ $c->nama }}" data-body="{{ $c->body }}" data-id="{{ $c->id }}">balas</div>
                        @if ($replies->count() > 0)
                            @foreach ($replies as $reply)
                                @if ($reply->parent_id == $c->id)
                                    <div class="replyComment">
                                        <div class="nama">{{ $reply->nama }}</div>
                                        <div class="create-at">{{ $reply->created_at->locale('id')->diffForHumans() }}</div>
                                        <div class="body">{{ $reply->body }}</div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        <div class="line" data-id="{{ $c->id }}"></div>
                    </div>
                @endforeach
            @else
                <p class="info">Belum ada yang menyampaikan pesan</p>
            @endif
        @endisset
    </div>
    {{$comment->links()}}
</div>

