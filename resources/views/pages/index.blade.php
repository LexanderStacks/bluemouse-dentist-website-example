@include('pages.includes.navbar')
<div class="container py-2">
	<div class="row">
		<div class="col-12">
			<h1>{{$title}}</h1>
			<p>Testausgabe... Inhalt folgt.</p>
		</div>
	</div>
</div>
@include('pages.'.$uri, array('title'=>$title))
@include('pages.includes.footer')