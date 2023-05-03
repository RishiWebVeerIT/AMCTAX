<div>
    <div class="col-sm-12 d-flex justify-content-center align-item-center">
        <img class="header-img" src="{{ asset('images\Amravati_Website_Logo4.png')}}" alt="" srcset="">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Property Assessment Department</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                <li class="nav-item">
                    {{-- <a class="nav-link" href="/logout">Logout</a> --}}
                    <a href="{{ route('logout')}}" class="nav-link" onclick="confirmation(event)">Logout</a>

                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                  </li>
                @endauth
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Languages
                </a>
                <select class="dropdown-menu changeLanguage" aria-labelledby="navbarDropdown">
                    <option class="dropdown-item" value="en" {{ session()->get('locale') == 'en' ? 'selected' : ''}}>English</option>
                    <option class="dropdown-item" value="mr_IN" {{ session()->get('locale') == 'mr_IN' ? 'selected' : ''}}>Marathi</option>
                    <option class="dropdown-item" value="hi_IN" {{ session()->get('locale') == 'hi_IN' ? 'selected' : ''}}>Hindi</option>
                </select>
              </li> --}}
            </ul>
            @yield('nav_bredcrumb')
          </div>
        </div>
      </nav>
</div>
