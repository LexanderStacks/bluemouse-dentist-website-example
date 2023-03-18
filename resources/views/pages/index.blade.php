@include('pages.includes.navbar')
<!-- Start Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>{{$title}}</h2>
            <ul class="pages-list">
                <li><a href="/">Startseite</a></li>
                <li>{{$title}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->
@include('pages.'.$view, array('title'=>$title))
@include('pages.includes.footer')