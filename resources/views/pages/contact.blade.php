<section class="contact-area ptb-100">
    <div class="container">

        @if(!is_null($alertTitle))
            @include('pages.inc.alert', array('alertTitle' => $alertTitle, 'alertMessage' => $alertMessage))
        @endif

        <div class="section-title">
            <span class="sub-title">
                <i class="bi bi-hash fs-4 text-primary"></i>
                Termin vereinbaren
            </span>
            <h2>Reservien Sie bequem Ihren Termin</h2>
            <p>Wir setzen uns mit Ihnen in Verbindung sofern Ihr Wunschtermin nicht verfügbar ist.</p>
        </div>

        <div class="contact-form">
            <form action="/sendRequest" method="Post" id="contactForm">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required data-error="Bitte tragen Sie Ihren Namen ein" placeholder="Name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required data-error="Bitte tragen Sie Ihre Email Adresse ein" placeholder="Email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="tel" name="phone" id="phone" required data-error="Bitte tragen Sie Ihre Telefonnummer ein" class="form-control" placeholder="Telefon">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="subject" id="subject" class="form-control" required data-error="Bitte tragen Sie Ihr Anliegen ein." placeholder="Ihr Anliegen">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Mitteilung eintragen" placeholder="Ihre Mitteilung"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">Terminanfrage senden</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>

        <div class="contact-info">
            <div class="contact-info-content">
                <h3>Sie können uns auch telefonisch erreichen:</h3>
                <h2>
                    <a href="tel:+02119849880">+49 211 984 988 0</a>
                    <span>oder per Email:</span>
                    <a href="mailto:info@firstbiodent.de">info@firstbiodent.de</a>
                </h2>

                <ul class="social">
                    <li><a href="https://www.youtube.com/@firstbiodent2817" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                    <li><a href="https://www.linkedin.com/in/dr-hansj%C3%B6rg-lammers-09a01147/?originalSubdomain=de" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                    <li><a href="https://www.instagram.com/explore/tags/firstbiodent/" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
