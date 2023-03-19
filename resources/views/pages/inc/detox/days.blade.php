  <div class="row pb-3 pt-2 px-3 px-xl-5">
    <div class="col-12">
      <h2 class="text-primary fs-1">
        Wie läuft eine Entgiftungswoche ab?
      </h2>
    </div>
    <div class="col-12 mt-3">
      <div>
        <div class="card-group">
          @foreach($elements as $element)
          <div class="card">
            <img src="{{$element->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$element->title}}</h5>
              <p class="card-text">
                {!! $element->content !!}
              </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="col-12">
      <p class="text-black">
        Der obige Wochenplan veranschaulicht beispielhaft eine Therapiewoche. Natürlich wird in der Realität alles den Patientenbedürfnissen angepasst.
      </p>
    </div>
  </div>