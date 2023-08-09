<div class="comment">
    @if ($comment->count() > 0)
        @foreach ($comment as $c)
            <div class="messageComment">
                <div class="headerMessage">
                    <div class="nameMessage">{{$c->nama}} </div>
                    <img src="{{asset('svg/luxus/'.$c->status.'.svg')}}">
                </div>
                <div class="bodyMessage">
                    {{$c->body}}
                </div>
                <div class="footerMessage">
                    <div class="dateMessage">{{$c->created_at->locale('id')->diffForHumans()}} </div>
                    <div class="replyButton" data-name="{{$c->nama}}" data-body="{{$c->body}}" data-idreply="{{$c->id}}">Balas</div>
                </div>
            </div>
                @if ($replies->count() > 0)
                    @foreach ($replies as $reply)
                        @if ($reply->parent_id == $c->id)
                        <div class="reply">
                            <div class="replyComment">
                                <div class="headerMessage">
                                    {{$reply->nama}} 
                                </div>
                                <div class="bodyMessage">
                                    {{$reply->body}}
                                </div>
                                <div class="footerMessage">
                                    {{$reply->created_at->locale('id')->diffForHumans()}}
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endif
        @endforeach
    @else 
        <p class="info">Belum ada yang menyampaikan pesan</p>
    @endif
    {{$comment->links()}}
</div>