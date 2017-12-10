@extends('layouts.app')

<!-- Main Content -->
@section('content')
<section class="hero is-fullheight">
    @if (session('status'))
        <div class="notification is-success">
            {{ session('status') }}
        </div>
    @endif
     <div class="hero__bg"></div>
    <div class="hero__overlay"></div>
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-6 is-offset-3">
          <h3 class="title has-text-grey">Reset password</h3>
          <p class="subtitle has-text-grey">Please fill in all the fields below.</p>
          <div class="box">
            <figure class="avatar">
            <img src={{ asset('img/logo-url.png') }}
 alt="url logo" width="128px" height="128px">
            </figure>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
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
              </div><!--email -->

              <button class="button is-block is-info is-fullwidth" type="submit">Send password reset link</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
