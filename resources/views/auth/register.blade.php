@extends('layouts.app')

@section('content')
 <section class="hero is-fullheight">
     <div class="hero__bg"></div>
    <div class="hero__overlay"></div>
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-6 is-offset-3">
          <h3 class="title has-text-grey">Register</h3>
          <p class="subtitle has-text-grey">Please fill all the fields to proceed.</p>
          <div class="box">
            <figure class="avatar">
            <img src={{ asset('img/logo-url.png') }}
 alt="url logo" width="128px" height="128px">
            </figure>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="field">
                    <div class="control">
                        <input id="name" type="text" class="input{{$errors->has('name') ? ' is-danger' : ''}}" name="name" value="{{ old('name') }}" required autofocus placeholder="Your name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                    </div>
                </div><!-- name -->

              <div class="field">
                <div class="control">
                  <input class="input{{$errors->has('email') ? ' is-danger' : ''}}" name="email" id="email" type="email" placeholder="Your Email" autofocus required value="{{ old('email') }}">
                  @if ($errors->has('email'))
                        <p class="help is-danger">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
              </div><!--email -->

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
                  <div class="control">
                    <input id="password-confirm" type="password" class="input{{$errors->has('password_confirmation') ? ' is-danger' : ' '}}" name="password_confirmation" required placeholder="Confirm password">
                  </div>
                  @if ($errors->has('password_confirmation'))
                    <span class="help is-danger">
                        {{ $errors->first('password') }}
                    </span>
                @endif
              </div><!-- confirm pass -->

              <button class="button is-block is-info is-fullwidth" type="submit">Register</a>
            </form>
          </div>
          <p class="has-text-grey">
            <a href="{{ url('/login') }}">Login</a> &nbsp;·&nbsp;
            <a href="{{ url('/password/reset') }}">
                Forgot Your Password?
            </a>&nbsp;·&nbsp;
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection
