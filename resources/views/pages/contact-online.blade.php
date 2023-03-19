<section class="appointment-area bg-image ptb-100">
    <div class="container">

        @if(!is_null($alertTitle))
            @include('pages.inc.alert', array('alertTitle' => $alertTitle, 'alertMessage' => $alertMessage))
        @endif

        <div class="appointment-form">
            <h4><i class="flaticon-calendar"></i> Online Termin vereinbaren</h4>

            <form action="/sendOnlineRequest" method="Post">
            @csrf
                <div class="form-group">
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name">
                </div>

                <div class="form-group">
                    <input id="email" name="email" type="text" class="form-control" placeholder="Email">
                </div>

                <div class="form-group">
                    <input id="phone" name="phone" type="text" class="form-control" placeholder="Telefon">
                </div>

                <div class="form-group">
                    <input id="wishDateOnline" name="wishDateOnline" type="text" class="form-control" placeholder="Ihr Wunschdatum">
                </div>

                <button type="submit" class="default-btn">Termin anfragen</button>
            </form>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        flatpickr("#wishDateOnline", {
            enableTime: false,
            dateFormat: "Y-m-d",
            weekNumbers: true,
            altInput: true,
            altFormat: "j. F Y",  
            locale: "de",
        });
    });
</script>