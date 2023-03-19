<div class="container-fluid g-0 px-3 px-xl-5">
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
    @php if(!isset($imgAttachment)) {$imgAttachment = null;} @endphp
	@php if(!isset($pdfAttachmentTitle)) {$pdfAttachmentTitle = null;} @endphp
    @if(!is_null($imgAttachment))
	    <div class="row px-3 px-xl-5 pb-3">
	        <div class="col-12 text-center text-xl-start pt-2">
	        	<a @if(is_null($pdfAttachmentTitle)) style="pointer-events: none;" @endif href="/pdf/{{$pdfAttachmentTitle}}.pdf" download="{{$pdfAttachmentTitle}}">
        		@endif
	            	<img src="{{$post->image}}" class="mt-2">
	            </a>             
	        </div>
	    </div>
    @endif
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
    <div class="row my-2">
    	<div class="col-12">
    	</div>
	</div>
</div>
