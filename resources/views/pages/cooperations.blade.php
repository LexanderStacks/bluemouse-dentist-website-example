    <!-- Test -->
    <div class="row py-5 text-start">
        <div class="col-12">
            @foreach($posts as $post)
            <img src="{{$post->image}}">
            <h2 class="fw-bold text-primary fs-1">
                {!! $post->title !!}
            </h2>
            <p>
                {!! $post->content !!}
            </p>
            @endforeach 
        </div>
    </div>
    <!-- ./ Test -->