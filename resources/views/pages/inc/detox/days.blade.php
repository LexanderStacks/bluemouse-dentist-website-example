  <div class="row pb-3 pt-2 px-3 px-xl-5">
    <div class="col-12">
      <h2 class="text-primary fs-1">
        Wie läuft eine Entgiftungswoche ab?
      </h2>
    </div>
    <div class="col-12 mt-3">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-3 row-cols-xxl-5 g-0">
        @foreach($elements as $element)
        <div id="element-{{$loop->index}}-{{$element->slug}}" class="col" style="border: none;">
          <div class="card h-100">
            <img src="{{$element->image}}" class="card-img-top" alt="...">
            <div class="card-body">
               <h3 class="card-title fs-2 text-primary">{{$element->title}}</h3>
              <p class="card-text">{!! $element->content !!}</p>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="col-12">
      <p class="text-black fs-5 pt-2">
        Der obige Wochenplan veranschaulicht beispielhaft eine Therapiewoche. Natürlich wird in der Realität alles den Patientenbedürfnissen angepasst.
      </p>
    </div>
  </div>