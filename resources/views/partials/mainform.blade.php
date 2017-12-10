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
    @include ('partials.nav')
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
