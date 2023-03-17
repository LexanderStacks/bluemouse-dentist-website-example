    <!-- Cooperations -->
    <div class="container-fluid">
        @foreach($posts as $post)
            <div class="row py-5 text-start">
                <div class="col-7 @if($loop->index%2 == 1) me-auto @else ms-auto @endif">
                    <img src="{{$post->image}}">
                    <h2 class="fw-bold text-primary fs-1">
                        {!! $post->title !!}
                    </h2>
                    <div style="margin-left: -40px">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        @endforeach 
    </div>
    <!-- ./ Cooperations -->