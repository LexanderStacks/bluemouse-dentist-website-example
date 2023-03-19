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

        <form action="/sendRequest" method="Post" class="php-email-form">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <input data-error="Dies ist ein Pflichtfeld" type="text" name="name" class="form-control bg-white" id="name" placeholder="Ihr voller Name" value="" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input data-error="Dies ist ein Pflichtfeld" type="email" class="form-control bg-white" name="email" id="email" placeholder="Ihre Email" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input data-error="Dies ist ein Pflichtfeld" type="tel" class="form-control bg-white" name="phone" id="phone" placeholder="Ihre Telefonnummer" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input data-error="Dies ist ein Pflichtfeld" type="text" class="form-control bg-white" name="subject" id="subject" placeholder="Anliegen" required>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control bg-white" name="message" rows="5" placeholder="Mitteilung" required></textarea>
            </div>
            <div class="text-center mt-3">
                <input id="submit-request-btn" class="btn btn-lg btn-primary" type="submit" value="Abschicken">
            </div>
        </form>

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
