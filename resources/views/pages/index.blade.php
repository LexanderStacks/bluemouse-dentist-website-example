@include('pages.includes.navbar')
<!-- Start Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <div class="d-none d-xl-block">
                <h2 class="text-primary fs-1">
                    <h2>{{$title}}</h2>
                </h2>
            </div>
            <div class="d-block d-xl-none">
                <h2 class="fs-4">{{$title}}</h2>
            </div>
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