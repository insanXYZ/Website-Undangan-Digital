<div class="comment">
    @if ($comment->isNotEmpty())
        @foreach ($comment as $c)
            <div class="card-comment">
                <div class="body">
                    "{{ $c->body }}"
                </div>
                <div class="footer-comment">
                    <div class="ident">
                        <div class="nama">{{ $c->nama }}</div>
                        <img src="{{ asset('imageModel/javva/'.$c->status.'.png') }}">                                    
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p class="info">Belum ada yang menyampaikan pesan</p>
    @endif
    {{$comment->links()}}
</div>