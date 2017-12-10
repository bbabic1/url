<nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
           <a class="navbar-logo" href="{{ url('/') }}">
              <img src={{ asset('img/logo-url.png') }}
 alt="url logo" width="80px" height="80px">
            </a>
          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroB">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroB" class="navbar-menu">
          <div class="navbar-end">
            @if (Auth::guest())
            <a class="navbar-item" href="{{ url('/login') }}">
              Login
            </a>
            <a class="navbar-item" href="{{ url('/register') }}">
              Register
            </a>
            <a class="navbar-item modal-trigger" id="about-trigger" onClick="openModal('#about-modal')">
              About
            </a>
            <a class="navbar-item modal-trigger" id="pricing-trigger" onClick="openModal('#pricing-modal')">
              Pricing
            </a>
            @else
            <a class="navbar-item" href="{{url('/recent')}}">
             Recent
            </a>
             <a class="navbar-item" href="{{url('/top')}}">
             Top
            </a>
            <a class="navbar-item modal-trigger" id="about-trigger" onClick="openModal('#about-modal')">
              About
            </a>
            <a class="navbar-item modal-trigger" id="pricing-trigger" onClick="openModal('#pricing-modal')">
              Pricing
            </a>
            <span class="navbar-item">
             <div class="dropdown is-hoverable is-right">
                <div class="dropdown-trigger">
                    <span>{{ Auth::user()->name }}</span>
                    <span class="icon is-small">
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                  <div class="dropdown-content">
                    <div class="dropdown-item">Account options</div>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-item">
                      <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </span>
          </div>
          @endif
        </div>
      </div>
    </nav>
