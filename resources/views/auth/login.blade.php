@extends('layouts.app')

@section('content')
 <section class="hero is-fullheight">
     <div class="hero__bg"></div>
    <div class="hero__overlay"></div>
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-6 is-offset-3">
          <h3 class="title has-text-grey">Login</h3>
          <p class="subtitle has-text-grey">Please login to proceed.</p>
          <div class="box">
            <figure class="avatar">
            <img src={{ asset('img/logo-url.png') }}
 alt="url logo" width="128px" height="128px">
            </figure>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
              <div class="field">
                <div class="control">
                  <input class="input{{$errors->has('email') ? ' is-danger' : ''}}" name="email" id="email" type="email" placeholder="Your Email" autofocus required value="{{ old('email') }}">
                  @if ($errors->has('email'))
                        <p class="help is-danger">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <input class="input{{$errors->has('password') ? ' is-danger' : ' '}}" type="password" name="password" id="password" placeholder="Your Password" required>
                </div>
                @if ($errors->has('password'))
                    <span class="help is-danger">
                        {{ $errors->first('password') }}
                    </span>
                @endif
              </div><!--password-->

              <div class="field">
                <label class="checkbox">
                  <input type="checkbox" name="remember">
                  Remember me
                </label>
              </div><!-- remember me -->

              <button class="button is-block is-info is-fullwidth" type="submit">Login</a>
            </form>
          </div>
          <p class="has-text-grey">
            <a href="{{ url('/register') }}">Sign Up</a> &nbsp;·&nbsp;
            <a href="{{ url('/password/reset') }}">
                Forgot Your Password?
            </a>&nbsp;·&nbsp;
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection
