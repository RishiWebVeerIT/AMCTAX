<div class="row col-sm-6">

    <div class="col-sm-6">
        <div class="card text-white" style="background: #642629;">
          <a href="/add-resident">
            <div class="card-body text-center">
            <h5 class="card-title"><i class="fa-sharp fa-solid fa-plus"></i></h5>
            <p class="card-text">{{ GoogleTranslate::trans('Add Resident',\App::getLocale()) }}</p>
            </div>
        </a>
      </div>
    </div>

    <div class="col-sm-6">
        <div class="card text-white" style="background: #FAD85A;">
          <a href="/existing-resident">
            <div class="card-body text-center">
            <h5 class="card-title"><i class="fa-solid fa-users"></i></h5>
            <p class="card-text">{{ GoogleTranslate::trans('Existing Resident',\App::getLocale()) }}</p>
            </div>
        </a>
      </div>
    </div>

  </div>
