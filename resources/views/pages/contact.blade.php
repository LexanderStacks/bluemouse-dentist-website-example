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

        <form action="/sendRequest" method="Post">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <input style="border: none; min-height: 40px;" data-error="Dies ist ein Pflichtfeld" type="text" name="name" class="form-control bg-white shadow no-border" id="name" placeholder="Ihr voller Name" value="" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input style="border: none; min-height: 40px;" data-error="Dies ist ein Pflichtfeld" type="email" class="form-control bg-white shadow no-border" name="email" id="email" placeholder="Ihre Email" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input style="border: none; min-height: 40px;" data-error="Dies ist ein Pflichtfeld" type="tel" class="form-control bg-white shadow no-border" name="phone" id="phone" placeholder="Telefonnummer" required>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                  <select class="bg-white shadow" id="subject" name="subject" required style="max-height: 380px; overflow-y: scroll; width: 100%;">
                    <option class="w-100" value="Anliegen nicht geschildert">Anliegen</option>
                    <option class="w-100" value="3-D-Röntgen (DVT)">3-D-Röntgen (DVT)</option>
                    <option class="w-100" value="abgebrochener Zahn">abgebrochener Zahn</option>
                    <option class="w-100" value="Amalgamsanierung">Amalgamsanierung</option>
                    <option class="w-100" value="empfindliche Zähne">empfindliche Zähne</option>
                    <option class="w-100" value="Entfernung von Wurzelfüllungen">Entfernung von Wurzelfüllungen</option>
                    <option class="w-100" value="Entgiftungstherapie (Detox)">Entgiftungstherapie (Detox)</option>
                    <option class="w-100" value="ganzheitliches Problem">ganzheitliches Problem</option>
                    <option class="w-100" value="Implantatsprechstunde (Zirkon)">Implantatsprechstunde (Zirkon)</option>
                    <option class="w-100" value="Kariesbehandlung">Kariesbehandlung</option>
                    <option class="w-100" value="Kieferherdverdacht (Ostitis, NICO)">Kieferherdverdacht (Ostitis, NICO)</option>
                    <option class="w-100" value="Kiefergelenkknacken (CMD)">Kiefergelenkknacken (CMD)</option>
                    <option class="w-100" value="Metallsanierung">Metallsanierung</option>
                    <option class="w-100" value="Prophylaxe">Prophylaxe</option>
                    <option class="w-100" value="Schnarcherschiene">Schnarcherschiene</option>
                    <option class="w-100" value="Umweltzahnmedizin">Umweltzahnmedizin</option>
                    <option value="Weisheitszähne">Weisheitszähne</option>
                    <option value="weiße Füllungen">weiße Füllungen</option>
                    <option value="Zahnersatz">Zahnersatz</option>
                    <option value="Zahnfleischbluten">Zahnfleischbluten</option>
                    <option class="w-100" value="Zähneknirschen">Zähneknirschen</option>
                    <option class="w-100" value="Zahnkontrolle">Zahnkontrolle</option>
                    <option class="w-100" value="Zweitmeinung">Zweitmeinung</option>
                    <option class="w-100" value="Ich habe ein anderes Anliegen">Ich habe ein anderes Anliegen</option>
                  </select>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea style="border: none;" class="form-control bg-white shadow no-border" name="message" rows="5" placeholder="Mitteilung" required></textarea>
            </div>
            <div class="row mt-3 px-3">
                <div class="form-check">
                    <input data-error="Dies ist ein Pflichtfeld" type="checkbox" class="form-check-input" id="terms-privacy" name="terms-privacy" required>
                    <label class="form-check-label" for="same-address">
                        Ich habe die <a href="/privacy" target="_blank" style="text-decoration: underline;">Datenschutzerklärung</a> gelesen und bin mit dem Speichern meiner Daten für zum Zweck der Kontaktaufnahme einverstanden.
                    </label>
                </div>
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
