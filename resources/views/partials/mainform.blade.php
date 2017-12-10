<section class="hero  is-fullheight">
  <div class="hero__bg"></div>
  <div class="hero__overlay"></div>
  <div class="hero-head">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
           <a class="navbar-item is-active" href="{{ url('/') }}">
              {{ config('app.name', 'Laravel') }}
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
            @else
            <a class="navbar-item" href="{{url('/recent')}}">
             Recent
            </a>
             <a class="navbar-item" href="{{url('/top')}}">
             Top
            </a>
            <span class="navbar-item">
             <div class="dropdown is-hoverable">
                <div class="dropdown-trigger">
                  <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                    <span>{{ Auth::user()->name }}</span>
                    <span class="icon is-small">
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </span>
                  </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                  <div class="dropdown-content">
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
      <form class="form-horizontal" action="/create" method="post">
          {{ csrf_field() }}

          <div class="field has-addons">
            <label for="url" class="label">URL to Shorten:</label>
              <div class="control">
                <input type="text" class="input" name="url" id="url" placeholder="https://google.com">
              </div>
              <div class="control">
                <input type="submit" class="button is-info" value="Shorten url" />
              </div>
          </div><!-- shorten -->

          <div class="field has-addons">
             <label for="desired_id" class="label">Desired id</label>
             <div class="control">
              <a class="button is-static">
                http://third.dev/
              </a>
            </div>

            <div class="control">
              <input type="text" class="input" name="desired_id" id="desired_id" placeholder="123">
            </div>
          </div><!-- desired id -->

          <div class="field">
            <div class="control">
              <div class="g-recaptcha" data-sitekey="6LdQZDsUAAAAADry7S1Xzxp-c5XrSVb3jO1u39ol"></div>
            </div>
          </div><!--recaptcha -->

          
        </form>
    </div>
  </div>
</section>
