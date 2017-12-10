<section class="hero is-fullheight">
  @if (session('status'))
    <div class="notification is-warning">
      {!! session('status') !!}
    </div>
  @endif
  @if (count($errors) > 0)
    <div class="notification is-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <div class="hero__bg"></div>
  <div class="hero__overlay"></div>
  <div class="hero-head">
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
  </div>

  <div class="hero-body">
    <div class="container has-text-centered">
      
      <form class="panel" action="/create" method="post">
          {{ csrf_field() }}
          <div class="panel-heading">

          <div class="field has-addons">
              <div class="control control--url">
                <input type="text" class="input is-large" name="url" id="url" placeholder="https://google.com">
              </div>
              <div class="control">
                <input type="submit" class="button is-info is-large" value="Shorten url" />
              </div>
          </div><!-- shorten -->
          
          <div class="field has-addons">
            <div class="control">
              <a class="button is-static is-medium">
                http://third.dev/
              </a>
            </div>

            <div class="control">
              <input type="text" class="input is-medium" name="desired_id" id="desired_id" placeholder="123">
            </div>
            <p class="control">
              <div class="g-recaptcha" data-sitekey="6LdQZDsUAAAAADry7S1Xzxp-c5XrSVb3jO1u39ol"></div>
            </p>
          </div><!-- desired id -->

          <div class="control">
            <div class="g-recaptcha" data-sitekey="6LdQZDsUAAAAADry7S1Xzxp-c5XrSVb3jO1u39ol"></div>
          </div>
          
        </div><!-- panel-heading -->
          
        </form>
    </div>
  </div>
</section><!-- hero section -->
<section class="main">
  @include('modals.about')
  @include('modals.pricing')
</section>
@include('partials.contact')
@include('partials.footer')
