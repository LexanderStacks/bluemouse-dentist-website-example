<!-- Cooperations -->
@foreach($posts as $post)
    @if($loop->index%2 == 0)
        <div class="container">
            <div class="row py-5 text-start">
                <div class="col-1"></div>
                <div id="cooperation-post-{{$loop->index}}-{{$post->slug}}" class="col-7">
                    <img src="{{$post->image}}">
                    <h2 class="fw-bold text-primary fs-1">
                        {!! $post->title !!}
                    </h2>
                    <div class="bg-white shadow p-3 rounded rounded-3">
                        {!! $post->content !!}
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    @endif
    @if($loop->index%2 == 1)
        <div class="container">
            <div class="row py-5 text-start">
                <div class="col-4"></div>
                <div id="cooperation-post-{{$loop->index}}-{{$post->slug}}" class="col-7">
                    <div class="position-relative p-3">
                        <div class="text-end">
                            <img src="{{$post->image}}">
                        </div>
                        <div class="position-absolute bg-primary" style="margin-top: -110px; margin-right: 80px;">
                            <h2 class="fw-bold text-white fs-1">
                                {!! $post->title !!}
                            </h2>
                        </div>
                    </div>
                    <div class="bg-white shadow p-3 rounded rounded-3">
                        {!! $post->content !!}
                    </span>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    @endif
@endforeach 
<!-- ./ Cooperations -->