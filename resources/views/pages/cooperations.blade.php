<!-- Cooperations -->
@foreach($posts as $post)
    @if($loop->index%2 == 0)
        <div class="container-fluid">
            <div class="row py-5 text-start">
                <div class="col-1"></div>
                <div id="cooperation-post-{{$loop->index}}-{{$post->slug}}" class="col-7">
                    <div class="position-relative p-3">
                        <div class="text-start" style="margin-left: 30px;">
                            <img src="{{$post->image}}">
                        </div>
                        <div class="position-absolute bg-light rounded rounded-3 p-3 shadow" style="margin-top: -110px; margin-right: 16px;">
                            <h2 class="fw-bold text-primary fs-1 text-end">
                                {!! $post->title !!}
                            </h2>
                        </div>
                    </div>
                    <div class="bg-white shadow p-3 rounded rounded-3 mt-2">
                        {!! $post->content !!}
                    </span>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    @endif
    @if($loop->index%2 == 1)
        <div class="container-fluid">
            <div class="row py-5 text-start">
                <div class="col-4"></div>
                <div id="cooperation-post-{{$loop->index}}-{{$post->slug}}" class="col-7">
                    <div class="position-relative p-3">
                        <div class="text-end" style="margin-right: 30px;">
                            <img src="{{$post->image}}">
                        </div>
                        <div class="position-absolute bg-light rounded rounded-3 p-3 shadow" style="margin-top: -110px; margin-left: -16px;">
                            <h2 class="fw-bold text-primary fs-1">
                                {!! $post->title !!}
                            </h2>
                        </div>
                    </div>
                    <div class="bg-white shadow p-3 rounded rounded-3 mt-2">
                        {!! $post->content !!}
                    </span>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    @endif
@endforeach 
<!-- ./ Cooperations -->