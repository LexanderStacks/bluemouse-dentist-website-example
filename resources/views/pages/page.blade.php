<div class="container-fluid g-0 px-3 px-xl-5">

    <!-- wp content -->
    <div class="row py-5 px-3 px-xl-5">
    	<div class="col-12">
    		<h2 class="text-primary fs-1">
				{{ $post->title }}
			</h2>
    	</div>
    	<div class="col-12 mt-3">
			<div>
				{!! $post->content !!}
			</div>
    	</div>
    </div>
    <!-- ./wp content -->

    <!-- attached image -->
    @php if(!isset($imgAttachment)) {$imgAttachment = null;} @endphp
	@php if(!isset($pdfAttachmentTitle)) {$pdfAttachmentTitle = null;} @endphp
    @if(!is_null($imgAttachment))
	    <div class="row px-3 px-xl-5 pb-3">
	        <div class="col-12 text-center text-xl-start">
	        	<a @if(is_null($pdfAttachmentTitle)) style="pointer-events: none;" @endif href="/pdf/{{$pdfAttachmentTitle}}.pdf" download="{{$pdfAttachmentTitle}}">
	            	<img src="{{$post->image}}" @if($imgType == 'normal') style="max-width: 320px; height: auto;" @endif>
	            </a>             
	        </div>
	    </div>
    @endif
    <!-- ./ attached image -->

    <!-- service contact -->
    @include('pages.inc.service-contact')
    <!-- ./ service contact -->

    <!-- attached btn -->
    @php if(!isset($btnUri) && !isset($btnTitle)) {$btnUri = null; $btnTitle = null;} @endphp
    @if(!is_null($btnUri))
    	@if(!is_null($btnTitle))
	    <div class="row px-3 px-xl-5 pb-3">
	        <div class="col-12 text-end pt-2 pb-5">
	            <a href="{{$btnUri}}" class="btn btn-primary mt-3">
	                {{$btnTitle}}
	            </a>                 
	        </div>
	    </div>
	    @endif
    @endif
    <!-- ./ attached btn -->

    <!-- vertical padding -->
    <div class="row my-2">
    	<div class="col-12">
    	</div>
	</div>
    <!-- ./ vertical padding -->

</div>
