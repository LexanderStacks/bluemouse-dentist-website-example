@foreach($posts as $post)
    @if($loop->index%2 == 0)
        <div class="container-fluid g-0 mx-0 px-0">
            <div class="row py-5 text-center text-xl-start">
                <div class="col-xl-1"></div>
                <div id="cooperation-post-{{$loop->index}}-{{$post->slug}}" class="col-xl-7">
                    <div class="position-relative p-3">

                        <div class="d-none d-xl-block">
                            <div class="text-start" style="margin-left: 30px;">
                                <img class="rounded rounded-3 @if($uriTitle == 'materials') shadow @endif" src="{{$post->image}}">
                            </div>
                            <div class="position-absolute bg-light rounded rounded-3 p-3 shadow text-end" style="margin-top: -110px; right: 0;">
                                <h2 class="fw-bold text-primary fs-1">
                                    {!! $post->title !!}
                                </h2>
                            </div>
                        </div>

                        <div class="d-block d-xl-none text-center">
                            <div class="text-center">
                                <img class="rounded rounded-3 @if($uriTitle == 'materials') shadow @endif" src="{{$post->image}}">
                            </div>
                            <div class="position-absolute bg-light rounded rounded-3 p-3 shadow text-center" style="@if($uriTitle == 'materials') margin-top: -200px; width:  100%; @else margin-top: -110px; @endif">
                                <h2 class="fw-bold text-primary fs-1">
                                    {!! $post->title !!}
                                </h2>
                            </div>
                        </div>

                    </div>
                    <div class="bg-white shadow p-3 rounded rounded-3 mt-2 text-black text-start" style="color: black;">
                        {!! $post->content !!}
                    </span>
                </div>
                <div class="col-xl-4"></div>
            </div>
        </div>
    @endif
    @if($loop->index%2 == 1)
        <div class="container-fluid g-0 mx-0 px-0">
            <div class="row py-5 text-center text-xl-start">
                <div class="col-xl-4"></div>
                <div id="cooperation-post-{{$loop->index}}-{{$post->slug}}" class="col-xl-7">
                    <div class="position-relative p-3">

                        <div class="d-none d-xl-block">
                            <div class="text-end" style="margin-right: 30px;">
                                <img class="rounded rounded-3 @if($uriTitle == 'materials') shadow @endif" src="{{$post->image}}">
                            </div>
                            <div class="position-absolute bg-light rounded rounded-3 p-3 shadow text-start" style="margin-top: -110px; margin-left: -16px;">
                                <h2 class="fw-bold text-primary fs-1">
                                    {!! $post->title !!}
                                </h2>
                            </div>
                        </div>

                        <div class="d-block d-xl-none text-center">
                            <div class="text-center">
                                <img class="rounded rounded-3 @if($uriTitle == 'materials') shadow @endif" src="{{$post->image}}">
                            </div>
                            <div class="position-absolute bg-light rounded rounded-3 p-3 shadow text-start" style="@if($uriTitle == 'materials') margin-top: -200px;  width:  100%; @else margin-top: -110px; @endif">
                                <h2 class="fw-bold text-primary fs-1">
                                    {!! $post->title !!}
                                </h2>
                            </div>
                        </div>

                    </div>
                    <div class="bg-white shadow p-3 rounded rounded-3 mt-2 text-start" style="color: black;">
                        {!! $post->content !!}
                    </span>
                </div>
                <div class="col-xl-1"></div>
            </div>
        </div>
    @endif
@endforeach 
<div class="container-fluid g-0 mx-0 px-0 py-5">
    <div class="row">
        <div class="col-12 my-3">
        </div>
    </div>
</div>