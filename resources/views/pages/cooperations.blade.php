    <!-- Cooperations -->
    <div class="container-fluid" style="background: orange;">
        @foreach($posts as $post)
                @if($loop->index%2 == 1)
                <div id="cooperation-post-{{$loop->index}}-{{$post->slug}}">
                    <div class="row py-5 text-start" style="background: blue;">
                        <div class="col-7 ms-auto" style="background: green;">
                            <img src="{{$post->image}}">
                            <h2 class="fw-bold text-primary fs-1">
                                {!! $post->title !!}
                            </h2>
                            <div style="margin-left: -40px; bakckground: magenta;">
                                {!! $post->content !!}
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div id="cooperation-post-{{$loop->index}}-{{$post->slug}}">
                    <div class="row py-5 text-start" style="background: blue;">
                    <div class="col-7 me-auto" style="background: silver;">
                        <img src="{{$post->image}}">
                        <h2 class="fw-bold text-primary fs-1">
                            {!! $post->title !!}
                        </h2>
                        <div style="margin-left: -40px; bakckground: magenta;">
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>
                </div>
                @endif
            </div>
        @endforeach 
    </div>
    <!-- ./ Cooperations -->