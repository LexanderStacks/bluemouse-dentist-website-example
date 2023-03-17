    <!-- Cooperations -->
    <div class="container" style="background: orange;">
                    <div class="row py-5 text-start" style="background: black;">
        @foreach($posts as $post)
                @if($loop->index%2 == 0)
                        <div key="cooperation-post-{{$loop->index}}-{{$post->slug}}" id="cooperation-post-{{$loop->index}}-{{$post->slug}}" class="col-12" style="background: green;">
                            <img src="{{$post->image}}">
                            <h2 class="fw-bold text-primary fs-1">
                                {!! $post->title !!}
                            </h2>
                            <span style="background: magenta;">
                                {!! $post->content !!}
                            </span>
                        </div>
                @else
                        <div id="cooperation-post-{{$loop->index}}-{{$post->slug}}" class="col-12" style="background: silver;">
                            <img src="{{$post->image}}">
                            <h2 class="fw-bold text-primary fs-1">
                                {!! $post->title !!}
                            </h2>
                            <span style="background: magenta;">
                                {!! $post->content !!}
                            </span>
                        </div>
                @endif
            </div>
        @endforeach 
    </div>
    <!-- ./ Cooperations -->