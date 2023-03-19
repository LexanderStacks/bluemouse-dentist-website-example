<section class="appointment-area bg-image ptb-100">
    <div class="container">
        <div class="appointment-form">
            <h4><i class="flaticon-calendar"></i> Online Termin vereinbaren</h4>

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

                <div class="form-group">
                    <input id="wishDateOnline" type="text" class="form-control" placeholder="Ihr Wunschdatum">
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