<div class="container-fluid">
  <div class="row p-5">
    <div class="col-12">

      <div class="accordion accordion-flush" id="accordionFlushExample">
        @foreach($posts as $post)
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne-{{$loop->index}}">
              <button class="accordion-button collapsed fs-3 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-{{$loop->index}}" aria-expanded="@if($loop->index == 1) true @else false @endif" aria-controls="flush-collapseOne-{{$loop->index}}">
                {{ $post->title }}
              </button>
            </h2>
            <div id="flush-collapseOne-{{$loop->index}}" class="accordion-collapse collapse @if($loop->index == 1) show @endif" aria-labelledby="flush-headingOne-{{$loop->index}}" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                {!! $post->content !!}
              </div>
            </div>
          </div>
          @endforeach
      </div>

    </div>
  </div>
</div>