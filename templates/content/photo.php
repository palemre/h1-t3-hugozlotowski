<div class="wrapper">
  <div class="main-container">
    <div class="photo-top">
      <div class="photo-top_title">
        <h1><span>Photographs</span></h1>
      </div>
      <div class="research-filter">
        <span>select :</span>
        <select id="select-year"
                onchange="filterSelection(document.getElementById('select-year').value, document.getElementById('select-country').value)">
          <option value="year" selected>Year</option>
          <option value="2018">2018</option>
          <option value="2017">2017</option>
          <option value="2016">2016</option>
          <option value="2015">2015</option>
        </select>
        <select id="select-country" onchange="filterSelection(document.getElementById('select-year').value, document.getElementById('select-country').value)">
          <option value="country" selected>Country</option>
          <option value="turkey">Turkey</option>
          <option value="italy">Italy</option>
          <option value="iran">Iran</option>
          <option value="senegal">Senegal</option>
        </select>
      </div>
    </div>


    <div class="photo-body">

      <div class="row-photo_frame turkey 2018">
        <img src="images/photographs/blueMosqueDoor.jpg" alt="description" class="image-hover">
        <div class="image-text-hover">
          <div class="image-text">Istanbul, Turkey <br/> April 2018</div>
        </div>
      </div>
      <div class="row-photo_frame italy 2017">
        <img src="images/photographs/cliffNearPolignano.jpg" alt="description" class="image-hover">
        <div class="image-text-hover">
          <div class="image-text">Polignano, Italy <br/> August 2017</div>
        </div>
      </div>
      <div class="row-photo_frame turkey 2018">
        <img src="images/photographs/istanbulFerry.jpg" alt="description" class="image-hover">
        <div class="image-text-hover">
          <div class="image-text">Istanbul Turkey <br/> April 2018</div>
        </div>
      </div>



      <div class="row-photo_frame turkey 2018">
        <img src="images/photographs/ortakoyMosque.jpg" alt="description" class="image-hover">
        <div class="image-text-hover">
          <div class="image-text">Istanbul, Turkey <br/> April 2018</div>
        </div>
      </div>
      <div class="row-photo_frame turkey 2018">
        <img src="images/photographs/manPrayingInsideOrtakoy.jpg" alt="description" class="image-hover">
        <div class="image-text-hover">
          <div class="image-text">Istanbul, Turkey <br/> April 2018</div>
        </div>
      </div>
      <div class="row-photo_frame turkey 2017">
        <img src="images/photographs/dryingClothesAlberobello.jpg" alt="description" class="image-hover">
        <div class="image-text-hover">
          <div class="image-text">Puglia, Italy <br/> August 2017</div>
        </div>
      </div>



      <div class="row-photo_frame italy 2017">
        <img src="images/photographs/pugliaNightView.jpg" alt="description" class="image-hover">
        <div class="image-text-hover">
          <div class="image-text">Puglia, Italy <br/> August 2017</div>
        </div>
      </div>
      <div class="row-photo_frame iran 2016">
        <img src="images/photographs/busyNightTehran.jpg" alt="description" class="image-hover">
        <div class="image-text-hover">
          <div class="image-text">Tehran, Iran <br/> July 2016</div>
        </div>
      </div>
      <div class="row-photo_frame iran 2016">
        <img src="images/photographs/kidInKashanGarden.jpg" alt="description" class="image-hover">
        <div class="image-text-hover">
          <div class="image-text">Kashan, Iran <br/> July 2016</div>
        </div>
      </div>

      <div class="row-photo_frame senegal 2015">
        <img src="images/photographs/peulhGirlInWidou.jpg" alt="description" class="image-hover">
        <div class="image-text-hover">
          <div class="image-text">Widou, Senegal <br/> July 2015</div>
        </div>
      </div>
      <div class="row-photo_frame iran 2016">
        <img src="images/photographs/kidInKashanGarden.jpg" alt="description" class="image-hover">
        <div class="image-text-hover">
          <div class="image-text">Widou, Senegal <br/> July 2015</div>
        </div>
      </div>
      <div class="row-photo_frame iran 2016">
        <img src="images/photographs/shopInChiraz.jpg" alt="description" class="image-hover">
        <div class="image-text-hover">
          <div class="image-text">Chiraz, Iran <br/> July 2016</div>
        </div>
      </div>
    </div>
  </div>
</div>
