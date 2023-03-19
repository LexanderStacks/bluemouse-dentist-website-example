 
        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="loader">
                <div class="sbl-half-circle-spin"></div>
            </div>
        </div>
        <!-- End Preloader Area -->
        
     @include('pages.includes.navbar')

        <!-- Start Main Slides Area -->
        <div class="home-slides owl-carousel owl-theme">
            <div class="main-slides-item">
                <div class="container">

                    <div class="main-slides-content">

                        <span class="sub-title shadow">
                            <i class="bi bi-hash fs-4 text-primary"></i>
                            Zähne, Gesundheit & Wellness
                        </span>
                        <h1 class="text-uppercase fs-5 d-block d-lg-none">FirstBiodent<span> Zahnarzt</span> Düsseldorf</h1>
                        <h1 class="d-none d-lg-block">FirstBiodent<span> Zahnarzt</span> Düsseldorf</h1>
                        <p class="text-black">Buchen Sie einen Online Termin um ein ganzheitliches Konzept für die Verbesserung Ihrer Gesundheit erstellen zu lassen.</p>

                        <div class="slides-btn d-none d-lg-block">
                            <a href="/contact-online" class="optional-btn">Onlinetermin</a>
                            
                            <a href="/contact" class="default-btn ms-2">Praxistermin vereinbaren</a>
                        </div>
                        <div class="slides-btn d-block d-lg-none">
                            <a  href="tel:02119849880" class="default-btn">Jetzt anrufen</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-slides-item item-bg2">
                <div class="container">
                    <div class="main-slides-content">
                        <span class="sub-title shadow">
                            <i class="bi bi-hash fs-4 text-primary"></i>
                            Professionelle Zahnreinigung
                        </span>
                        <h1 class="fs-5 d-block d-lg-none">Für Ihr strahlendes <span>Lächeln</span></h1>
                        <h1 class="fs-1 d-none d-lg-block">Für Ihr strahlendes <span>Lächeln</span></h1>
                        <p class="text-black">Buchen Sie bei uns eine professionelle Zahnreinigung um Ihre Gesundheit und Wohlbefinden zu erhöhen.</p>
                        
                        <div class="slides-btn d-none d-lg-block">
                            <a href="/contact" class="optional-btn">Zahnreinigung buchen</a>
                            
                            <a href="/contact" class="default-btn ms-2">Beratungstermin vereinbaren</a>
                        </div>
                        <div class="slides-btn d-block d-lg-none">
                            <a  href="tel:02119849880" class="default-btn">Jetzt anrufen</a>
                        </div>

                    </div>
                </div>
            </div>

            <!--
            <div class="main-slides-item item-bg3">
                <div class="container">
                    <div class="main-slides-content">
                        <span class="sub-title">
                            <i class="bi bi-hash fs-4 text-primary"></i>
                            Zahn Detox
                        </span>
                        <h1>Entgiftung von Schadstoffen wie <span>Amalgam</span></h1>
                        <p>Lassen Sie Ihren Organismus von unnatürlichen Stoffen befreien.</p>
                        
                        <div class="slides-btn">
                            <a href="#" class="default-btn">Online Termin</a>

                            <div class="checkup-content">
                                <div class="icon">
                                    <i class="flaticon-chair"></i>
                                </div>
                                <span><a href="#">Beratungstermin</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
        </div>
        <!-- End Main Slides Area -->

         <!-- Start Features Area -->
        <section class="features-area pb-70 d-none d-xxl-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-features bg-secondary pointer" style="margin-top: -70px; min-height: 190px;">
                            <a href="/medical-detox-spa">
                            <div class="content pt-0">
                                <div class="icon">
                                    <i class="flaticon-doctor"></i>
                                </div>
                                <h3 class="text-white">
                                    MedicalDetox SPA
                                </h3>
                                <p>Mit Wellness-Bereich zur Regeneration von Körper & Seele</p>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-features bg-info pointer" style="margin-top: -70px; min-height: 190px;">
                            <div class="content pt-0">
                                <a href="/services">
                                <div class="icon">
                                    <i class="flaticon-chair"></i>
                                </div>
                                <h3 class="text-white">
                                    Leistungen<sup class="fw-bold">+</sup>
                                </h3>
                                <p>Vorsorge, Ästhetik, Diagnostik & Zahn- und Kiefer-Behandlungen</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-features pointer" style="margin-top: -70px; min-height: 190px;">
                            <div class="content pt-0">
                                <a href="/holistic-dentistry">
                                <div class="icon">
                                    <i class="flaticon-healthcare"></i>
                                </div>
                                <h3 class="text-white">
                                    Bio-Zahnmedizin
                                </h3>
                                <p>Behandlungskonzept mit Blick auf den ganzen Körper</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Area -->



        <!-- Search Modal -->
        <div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal">
                            <i class='bx bx-x'></i>
                        </button>
                    </div>
                    
                    <div class="modal-body">
                        <form class="modal-search-form">
                            <input type="search" class="search-field" placeholder="Search...">
                            
                            <button type="submit"><i class='bx bx-search-alt'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Modal -->






        <!-- Start Services Area -->
        <section class="services-area pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="section-title-warp pt-5 pt-xxl-0">
                            <span class="sub-title">
                                <i class="bi bi-hash fs-4 text-primary"></i>
                                <!--Our Best Dental Services-->
                                Leistungen
                            </span>
                            <h2 class="text-info d-none d-xl-block">Behandlungsspektrum</h2>
                            <h2 class="fs-5 text-info d-block d-xl-none">Behandlungsspektrum</h2>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="section-warp-btn">
                            <a href="/services" class="default-btn">
                                Leistungen anzeigen
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xl-4 col-md-6">
                        <div class="single-services">
                            <div class="services-image">
                                <a href="/services"><img src="/template-assets/images/services/services-3.jpg" alt="image"></a>

                                <div class="icon">
                                    <a href="/services"><i class="flaticon-dental-implant"></i></a>
                                </div>
                            </div>

                            <div class="services-content">
                                <h3>
                                    <a href="/services">Zahnersatz</a>
                                </h3>
                                <p>Als ganzheitlich ausgerichtete Zahnarztpraxis achtet Ihr Zahnarzt in Düsseldorf bei der Versorgung mit Zahnersatz nicht nur auf Funktionalität und Ästhetik, sondern berücksichtigen stets auch die individuelle Körperverträglichkeit der in die Mundhöhle eingebrachten Fremdmaterialien.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="single-services">
                            <div class="services-image">
                                <a href="/services"><img src="/template-assets/images/services/services-6.jpg" alt="image"></a>

                                <div class="icon">
                                    <a href="/services"><i class="flaticon-tooth-2"></i></a>
                                </div>
                            </div>

                            <div class="services-content">
                                <h3>
                                    <a href="/services">Zahnreinigung</a>
                                </h3>
                                <p>Die zahnmedizinische Prophylaxe umfasst präventive Maßnahmen, um Krankheiten an den Zähnen und am Zahnfleisch vorzubeugen. Die meisten Schäden im Mundraum entstehen durch weiche und harte Zahnbeläge (Plaque und Zahnstein), die Karies und Entzündungen des Zahnfleisches (Parodontitis) begünstigen.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-services">
                            <div class="services-image">
                                <a href="/services"><img src="/template-assets/images/services/services-4.jpg" alt="image"></a>

                                <div class="icon">
                                    <a href="/services"><i class="flaticon-tooth"></i></a>
                                </div>
                            </div>

                            <div class="services-content">
                                <h3>
                                    <a href="/services">Unsichtbare Zahnspange</a>
                                </h3>
                                <p>Zahnlücken und Zahnfehlstellungen sind nicht nur ein optisches Problem – Sie erhöhen das Risiko für Nischenbildung im Zahnfleisch bis hin zum Zahnverlust. Auch das Kiefergelenk wird durch Fehlstellungen unregelmäßig belastet und kann Kieferschmerzen und Muskelverspannungen (CMD) hervorrufen.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-md-6">
                        <div class="single-services">
                            <div class="services-image">
                                <a href="/services"><img src="/template-assets/images/services/services-1.jpg" alt="image"></a>

                                <div class="icon">
                                    <a href="/services"><i class="flaticon-chair"></i></a>
                                </div>
                            </div>

                            <div class="services-content">
                                <h3>
                                    <a href="/services">CMD <sup>Kieferbehandlung</sup></a>
                                </h3>
                                <p>Unter dem Oberbegriff CMD (craniomandibuläre Dysfunktion) fasst man funktionale Störungen im Kiefergelenk zusammen.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-md-6">
                        <div class="single-services">
                            <div class="services-image">
                                <a href="/services"><img src="/template-assets/images/services/services-5.jpg" alt="image"></a>

                                <div class="icon">
                                    <a href="/services">
                                        <!--
                                        <i class="flaticon-tooth-1"></i>-->
                                        <i class="flaticon-tooth"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="services-content">
                                <h3>
                                    <a href="/services">Schnarchschienen</a>
                                </h3>
                                <p>
                                    Schnarchen und gefährliche Nacht-Atemaussetzer <sup>(Obstruktive Schlafapnoe-Syndrom)</sup>, können beträchtliche gesundheitliche Auswirkungen haben.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-md-6">
                        <div class="single-services">
                            <div class="services-image">
                                <a href="/services"><img src="/template-assets/images/services/services-2.jpg" alt="image"></a>

                                <div class="icon">
                                    <a href="/services"><i class="flaticon-dental-care"></i></a>
                                </div>
                            </div>

                            <div class="services-content">
                                <h3>
                                    <a href="/services">Rot-Weiß-Ästhetik</a>
                                </h3>
                                <p>Die sogenannte Rot-Weiß-Ästhetik bezeichnet das optische Zusammenwirken der roten und weißen Gebissanteile (Zahnfleisch und Zähne).</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-md-6">
                        <div class="single-services">
                            <div class="services-image">
                                <a href="/services"><img src="/template-assets/images/services/services-9.jpg" alt="image"></a>

                                <div class="icon">
                                    <a href="/services">
                                        <i class="flaticon-tooth-1"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="services-content">
                                <h3>
                                    <a href="/services">Veneers</a>
                                </h3>
                                <p>
                                    Mit Veneers können wir auch bei starken Schäden an den Frontzähnen in der Regel wieder ein makelloses Lächeln herstellen.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Area -->

        <!-- Start Overview Area -->
        <section class="overview-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="overview-content mt-1 mt-xl-0 text-center text-lg-start">
                            <span class="sub-title">
                                <i class="bi bi-hash fs-4 text-primary"></i>
                                Zahnbehandlung
                            </span>
                            <h3 class="text-info d-none d-xl-block">Für Ihre ganzheitliche Zahngesundheit</h3>
                            <h3 class="fs-5 text-info d-block d-xl-none">Für Ihre ganzheitliche Zahngesundheit</h3>
                            <p>
                                Jetzt Termin vereinbaren 
                                <a class="text-nowrap" href="tel:02119849880">+49 211 984 988 0</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="overview-image">
                            <img src="/template-assets/images/overview.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Overview Area -->

        <!-- Start Appointment Overview Area -->
        <section class="appointment-overview-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5 my-4">

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="appointment-overview-contact">
                            <img src="/template-assets/images/appointment/appointment-1.jpg" alt="image">

                            <div class="appointment-info">
                                <ul class="call-info">
                                    <li>
                                        <i class="flaticon-emergency-call"></i>
                                        Jetzt anrufen
                                        <span><a href="tel:02119849880">+49 211 984 988 0</a></span>
                                    </li>
                                </ul>
                                <p><span class="fw-bold">Unsere Sprechzeiten:</span> Montag bis Freitag von 09:00 – 19:00 Uhr.</p>
                                <a href="/contact" class="default-btn">Mitteilung schreiben</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="appointment-overview-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="content">
                                        <h4>Ihre erste biologische Zahnarztpraxis</h4>
                                        
                                        <div class="box-image">
                                            <img src="/template-assets/images/appointment/appointment-2b.jpg" alt="image">

                                            <a href="https://www.youtube.com/watch?v=YI-mNipO2u0" class="video-btn popup-youtube">
                                                <i class='bx bx-play'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 d-block d-xl-none" style="min-height: 400px;">
                                </div>

                                <div class="col-xl-6">
                                    <div class="make-appointment-content d-none d-xl-block">
                                        <h4 class="text-center"><i class="flaticon-calendar"></i> Terminabsprache <br>Rückruf anfragen</h4>

                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Telefon">
                                            </div>
            
                                            <button type="submit" class="default-btn">  
                                                Rückruf anfragen
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Appointment Overview Area -->

        <!-- Start About Area -->
        <section class="about-area pb-100 mt-0 pt-0" style="background: rgb(238,238,238);">
            <div class="container">
                <div class="row align-items-center" style="background: rgb(238,238,238);">
                    <div class="col-lg-7">
                        <div class="about-content text-center text-lg-start">
                            <span class="sub-title mt-5">
                                <i class="bi bi-hash fs-4 text-primary"></i>
                                Zahnarztpraxis
                            </span>
                            <p class="fs-3 py-2 text-primary">Zahnarzt Düsseldorf</p>
                            <span class="fw-bold">Herzlich Willkommen bei FirstBioDent</span>
                            <p>In Zusammenarbeit mit Ihnen entwickeln wir gemeinsam Ihr individuelles Behandlungskonzept, welches an Ihre Wünsche und Bedürfnisse angepasst ist.</p>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul class="about-list">
                                        <li>
                                            <i class="flaticon-check"></i>
                                            Ganzheitlich ausgerichtete zahnärztliche Praxisklinik
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                            Im Herzen von Düsseldorf
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                            Zahnmedizin in Wohlfühlatmosphäre
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <ul class="about-list">
                                        <li>
                                            <i class="flaticon-check"></i>
                                            Einzigartige Dienstleistungen
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                            Online Termine
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                            Mit dem Fahrstuhl erreichbar
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="about-info">
                                        <i class="flaticon-doctor"></i>
                                        <h4 class="pointer">30+ Jahre Erfahrung</h4>
                                        <span class="pointer">Dr. med. dent. Hansjörg Lammers</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="about-info">
                                        <i class="flaticon-healthcare"></i>
                                        <h4 class="pointer">25+ Jahre</h4>
                                        <span class="pointer">Ganzheitliche Zahnmedizin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="about-image">
                            <img src="/template-assets/images/about/about-1.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start Core Features Area -->
        <section class="core-features-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="section-title-warp">
                            <span class="sub-title">
                                <i class="bi bi-hash fs-4 text-primary"></i>
                                Besonderheiten
                            </span>
                            <h2 class="text-info d-none d-xl-block">Besonderheiten der Praxis</h2>
                            <h2 class="fs-5 text-info d-block d-xl-none">Besonderheiten der Praxis</h2>
                        </div>
                    </div>
                    <!--
                    <div class="col-lg-4">
                        <div class="section-warp-btn">
                            <a href="services.html" class="default-btn">View All</a>
                        </div>
                    </div>
                    -->
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-core-features">
                            <div class="icon">
                                <i class="flaticon-policy"></i>
                            </div>
                            <h3>
                                <a href="/about">Meisterlabor</a>
                            </h3>
                            <p>Qualifizierte Auswertungen ganzheitlicher Zahnheilkunde aus hauseigenen Labor.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-core-features">
                            <div class="icon">
                                <i class="flaticon-red-cross"></i>
                            </div>
                            <h3>
                                <a href="/about">Barrierefreie 500m<sup>2</sup></a>
                            </h3>
                            <p>Ausreichend Raum unserer Praxis zum Auftanken und Wohlfühlen.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-core-features">
                            <div class="icon">
                                <i class="flaticon-diamond"></i>
                            </div>
                            <h3>
                                <a href="/about">1A Qualität</a>
                            </h3>
                            <p>Klimatisierte Praxisräume im Feng-Shui Design und hochwertige Einsatzmaterialien</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-core-features">
                            <div class="icon">
                                <i class="flaticon-hospitalisation"></i>
                            </div>
                            <h3>
                                <a href="/about">8 Praxisräume</a>
                            </h3>
                            <p>Unsere Praxis bietet die Möglichkeit erholsamer und ruhiger Behandlungen</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Core Features Area -->

        <!-- Start Doctor Area -->
        <section class="doctor-area pb-70 bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="section-title-warp">
                            <span class="sub-title">
                                <i class="bi bi-hash fs-4 text-primary"></i>
                                Ärztevorstellung
                            </span>
                            <h2 class="text-info">Es begrüßen Sie</h2>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="section-warp-btn">
                            <a href="/doc/main" class="default-btn">Zur Ärztevorstellung</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="single-doctor">
                            <a href="/doc/second"><img src="/template-assets/images/doctor/dent-doctor-1.jpg" alt="image"></a>

                            <div class="doctor-content">
                                <h3>
                                    <a href="/doc/second">Dr. Jan Chalupa</a>
                                </h3>
                                <span>Zahnarzt & Oralchirurg</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-md-6">
                        <div class="single-doctor text-end">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 text-start ps-5 pt-5 d-none d-xl-block">
                                    <ul class="mt-2" style="list-style: none;">
                                        <li class="py-2 fs-5 fw-bold text-primary">
                                            <i class="bi bi-check-circle-fill"></i>&nbsp;
                                            Zertifiziert in ganzheitlicher Zahnmedizin
                                        </li>
                                        <li class="py-2 fs-5 fw-bold text-primary">
                                            <i class="bi bi-check-circle-fill"></i>&nbsp;
                                            Umweltmedizin (USA)
                                        </li>
                                        <li class="py-2 fs-5 fw-bold text-primary">
                                            <i class="bi bi-check-circle-fill"></i>&nbsp;
                                            Orthomolekularer Medizin (USA)
                                        </li>
                                        <li class="py-2 fs-5 fw-bold text-primary">
                                            <i class="bi bi-check-circle-fill"></i>&nbsp;
                                            Chelattherapie
                                        </li>
                                        <li class="py-2 fs-6 text-dark">
                                            <i>Leiter der FirstBioDent-Praxis Düsseldorf</i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-6">
                                    <a href="/doc/main">
                                        <img src="/template-assets/images/doctor/dent-doctor-2.jpg" alt="image">
                                    </a>
                                </div>
                            </div>

                            <div class="doctor-content">
                                <h3 class="d-none d-xl-block">
                                    <a href="/doc/main">Dr. med. dent. Hansjörg Lammers</a>
                                </h3>
                                <h3 class="d-none d-md-block d-xl-none">
                                    <a href="/doc/main">Dr. med. Lammers</a>
                                </h3>
                                <h3 class="d-block d-md-none">
                                    <a href="/doc/main">Dr. med. Hansjörg Lammers</a>
                                </h3>
                                <span class="d-none d-md-block d-xl-none">
                                    Zahnarzt & Inhaber
                                </span>
                                <span class="d-block d-md-none d-xl-block">Zahnarzt und Inhaber von FirstBioDent</span>
                                <!--

                                <div class="share-link">
                                    <a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook'></i></a>
                                    <a href="https://twitter.com/?lang=en" target="_blank"><i class='bx bxl-twitter'></i></a>
                                    <a href="https://www.linkedin.com/" target="_blank"><i class='bx bxl-linkedin'></i></a>
                                    <a href="https://www.instagram.com/" target="_blank"><i class='bx bxl-instagram'></i></a>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-doctor">
                            <a href="dentist-details.html"><img src="/template-assets/images/doctor/doctor-3.jpg" alt="image"></a>

                            <div class="doctor-content">
                                <h3>
                                    <a href="dentist-details.html">Dr. Addison Smith</a>
                                </h3>
                                <span>Gastroenterologists</span>

                                <div class="share-link">
                                    <a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook'></i></a>
                                    <a href="https://twitter.com/?lang=en" target="_blank"><i class='bx bxl-twitter'></i></a>
                                    <a href="https://www.linkedin.com/" target="_blank"><i class='bx bxl-linkedin'></i></a>
                                    <a href="https://www.instagram.com/" target="_blank"><i class='bx bxl-instagram'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </section>
        <!-- End Doctor Area -->

        <!-- Start Review Area -->
        <section class="review-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="section-title-warp">
                            <span class="sub-title">
                                <i class="bi bi-hash fs-4 text-primary"></i>
                                Empfehlungen
                            </span>
                            <h2 class="text-info d-none d-xl-block">Rückmeldungen unserer Patienten</h2>
                            <h2 class="fs-5 text-info d-block d-xl-none">Rückmeldungen unserer Patienten</h2>
                        </div>
                    </div>
                    <!--
                    <div class="col-lg-4">
                        <div class="section-warp-btn">
                            <a href="testimonials.html" class="default-btn">View All</a>
                        </div>
                    </div>
                    -->
                </div>

                <div class="review-slides owl-carousel owl-theme">
                    <div class="single-review-item">
                        <div class="icon">
                            <i class="flaticon-left-quote"></i>
                        </div>
                        <p>
                            Dear Hansjörg
                            I arrived safely home and had no problems or sensitivity after your superb treatment. Even my partners remarked my bleached denture. I enjoyed the photo of your beautiful baby and join some pictures of „two handsome doctors“. Best regards to you and your family,
                        </p>

                        <div class="review-info">
                            <img style="width: 80px; height: 80px;" src="/images/reference-1.png" alt="image">
                            <h3 class="text-end">Dr. Joos Doornaert</h3>
                            <div class="text-end">
                                <span>Plastic Surgeon, Belgium</span>
                            </div>
                        </div>
                    </div>

                    <div class="single-review-item">
                        <div class="icon">
                            <i class="flaticon-left-quote"></i>
                        </div>
                        <p>Ich bin seit 27 Jahren begeistert und überzeugt von den ganzheitlich praktizierten Fähigkeiten von Herrn Dr. Lammers und bin ihm wegen seiner unfassbaren Kompetenz von seinem Standort Wülfrath nach Düsseldorf gefolgt. Durch seinen Durchblick konnten die Ursachen (und nicht, wie in der Schulmedizin üblich, die Symptome) meiner chronischen Erkrankungen gefunden und behandelt werden.</p>

                        <div class="review-info">
                            <!--<img style="width: 80px; height: 80px;" src="/images/anonym_profile.png" alt="image">-->
                            <h3 class="text-end">Patientin</h3>
                            <div class="text-end">
                            <span>Anonym</span>
                            </div>
                        </div>
                    </div>

                    <div class="single-review-item" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <div class="icon">
                            <i class="flaticon-left-quote"></i>
                        </div>
                        <p>
                            Herr Dr. Lammers ist mit Abstand der beste Arzt, den ich kenne. Er war der einzige, der die Ursache meiner Beschwerden gefunden hat und diese nun therapieren kann. Er weiß sehr viel und kann einem immer seine Behandlungen nachvollziehbar erklären. Erst bei ihm habe ich verstanden, dass Krankheiten nicht isoliert zu betrachten sind, sondern stets aus der Summation von mehreren Faktoren hervorgehen...
                            <span class="collapse" id="collapseExample">
                                und auch dementsprechend zu behandeln sind. Herr Dr. Lammers ist das beste Beispiel dafür, dass die Integrativmedizin (ganzheitliche Medizin) maßgebliche Beiträge zur Genesung leistet und, um die besten Ergebnisse zu erzielen, auch herangezogen werden muss. 
                            </span>
                        </p>
                        <div class="review-info">
                            <!--<img style="width: 80px; height: 80px;" src="/images/anonym_profile.png" alt="image">-->
                            <h3 class="text-end">Patient</h3>
                            <div class="text-end">
                            <span>Anonym</span>
                            </div>
                        </div>
                    </div>

                    <div class="single-review-item">
                        <div class="icon">
                            <i class="flaticon-left-quote"></i>
                        </div>
                        <p>Herr Dr. Lammers ist ein super Zahnarzt! Ich bin von seinem breiten Fachwissen fasziniert, und seiner Achtsamkeit in Bezug auf ökologische Heilmedizin. Bei der Auswahl und Qualität seiner Materialien und Vorgehensweisen habe ich ein ausgesprochen gutes Gefühl! Eine super besondere und einzigartige Zahnarztpraxis, die ich jedem nur empfehlen kann.</p>

                        <div class="review-info">
                            <!--<img src="/template-assets/images/review/review-1.jpg" alt="image">-->
                            <h3 class="text-end">Alexander</h3>
                            <div class="text-end">
                                <span>IT-Spezialist</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Review Area -->

        <!-- Start Blog Area -->
        <section class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="section-title-warp">
                            <span class="sub-title">
                                <i class="bi bi-hash fs-4 text-primary"></i>
                                Blog
                            </span>
                            <h2 class="text-info d-none d-xl-block">In unserem Blog erfahren Sie mehr...</h2>
                            <h2 class="fs-5 text-info d-block d-xl-none">In unserem Blog erfahren Sie mehr...</h2>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="section-warp-btn">
                            <a href="/blog" class="default-btn">Zum Blog</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="/blog/"><img src="/template-assets/images/blog/blog-1.jpg" alt="image"></a>

                                <div class="tag">10 Jun</div>
                                <div class="tag-two"><a href="/blog">Ganzheitliche Zahnmedizin</a></div>
                            </div>
                            <div class="blog-content">
                                <h3>
                                    <a href="/blog">Ganzheitliche Zahnmedizin in Düsseldorf</a>
                                </h3>
                                <p>Ganzheitliche Zahnmedizin betrachtet Zähne, Mundhöhle und Kiefer nicht isoliert vom restlichen Organismus.</p>
                                <div class="text-end">
                                    <a href="/blog" class="blog-btn">Mehr Lesen</a>
                                </div>

                                <ul class="entry-meta">
                                    <li>
                                        <i class='bx bxs-user'></i>
                                        <span>Von <a href="/doc/main">Dr. Med. Hansjörg Lammers</a></span>
                                    </li>
                                    <!--
                                    <li>
                                        <i class='bx bxs-comment'></i>
                                        2 Comments
                                    </li>
                                    -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="/blog"><img src="/template-assets/images/blog/blog-2.jpg" alt="image"></a>

                                <div class="tag">11 Jun</div>
                                <div class="tag-two"><a href="/blog">Zahnzusatzversicherung</a></div>
                            </div>
                            <div class="blog-content">
                                <h3>
                                    <a href="/blog">Zahnzusatz-Versicherung in Düsseldorf </a>
                                </h3>
                                <p>Worauf Sie achten müssen, um nicht leer auszugehen. Durch die ständig steigenden Eigenanteilskosten bei...</p>
                                <div class="text-end">
                                    <a href="/blog" class="blog-btn">Mehr Lesen</a>
                                </div>

                                <ul class="entry-meta">
                                    <li>
                                        <i class='bx bxs-user'></i>
                                        <span>Von <a href="/doc/main">Dr. Med. Hansjörg Lammers</a></span>
                                    </li>
                                    <!--
                                    <li>
                                        <i class='bx bxs-comment'></i>
                                        2 Comments
                                    </li>
                                    -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="/blog"><img src="/template-assets/images/blog/blog-3.jpg" alt="image"></a>

                                <div class="tag">12 Jun</div>
                                <div class="tag-two"><a href="/blog">Detox</a></div>
                            </div>
                            <div class="blog-content">
                                <h3>
                                    <a href="/blog">DETOX in Düsseldorf – Körper und Mundraum entgiften</a>
                                </h3>
                                <p>Schwermetalle, wie Palladium, aus Zahngoldlegierungen, Quecksilber in Amalgamfüllungen, Arsen im Reis...</p>
                                <div class="text-end">
                                    <a href="/blog" class="blog-btn">Mehr Lesen</a>
                                </div>

                                <ul class="entry-meta">
                                    <li>
                                        <i class='bx bxs-user'></i>
                                        <span>Von <a href="/doc/main">Dr. Med. Hansjörg Lammers</a></span>
                                    </li>
                                    <!--
                                    <li>
                                        <i class='bx bxs-comment'></i>
                                        2 Comments
                                    </li>
                                    -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->





@include('pages.includes.footer')
