<nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">

    {{-- Sidebar Toggle (Topbar) --}}
    <button id="sidebarToggleTop" class="mr-3 btn btn-link d-md-none rounded-circle">
      <i class="fa fa-bars"></i>
    </button>



    {{-- Topbar Navbar --}}
    <ul class="ml-auto navbar-nav">

      {{-- Nav Item - Search Dropdown (Visible Only XS) --}}
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        {{-- Dropdown - Messages --}}
        <div class="p-3 shadow dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="searchDropdown">
          <form class="mr-auto form-inline w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="border-0 form-control bg-light small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      {{-- Nav Item - Alerts --}}
      <li class="mx-1 nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-globe fa-fw"></i>
          {{-- Counter - Alerts --}}

        </a>
        {{-- Dropdown - Alerts --}}
        <div class="shadow dropdown-list dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">
            @lang('general.langs')
          </h6>
          <a class="dropdown-item d-flex align-items-center" href="{{ route('locale.setting', 'en') }}">
            @lang('general.en')

          </a>
          <a href="{{ route('locale.setting', 'ar') }}" class="dropdown-item d-flex align-items-center">@lang('general.ar')</a>
        </div>
      </li>


      <div class="topbar-divider d-none d-sm-block"></div>

      {{-- Nav Item - User Information --}}
      @auth


      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 text-gray-600 d-none d-lg-inline small">{{ auth()->user()->name }}</span>
          <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
        </a>
        {{-- Dropdown - User Information --}}
        <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="userDropdown">


        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">

            <p><i class="mr-2 text-gray-400 fas fa-sign-out-alt fa-sm fa-fw"></i> @lang('general.Logout')</p>

        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        </div>
      </li>
      @endauth
    </ul>

  </nav>
