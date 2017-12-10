<section class="hero is-medium">
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
      <h1 class="title">Recent URL'S</h1>
    </div>
  </div><!-- hero body -->

</div><!-- hero section -->
<section id="recent" class="section">
<table class="table is-striped is-hoverable is-fullwidth">
  <h1 class="is-size-4">Recent urls statistics</h1>
  <thead>
    <tr>
      <td>ID</td>
      <td>Count</td>
      <td>Actual URL</td>
      <td>Ip</td>
    </tr>
  </thead>
  <tbody>
    @foreach($urls as $url)
      <tr>
        <td><a href={{$url->tag}}>{{$url->tag}}</a></td>
        <td>{{ $url->counter }}</td>
        <td>{{ $url->url }}</td>
        <td>{{ $url->created_by_ip}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
</section>
@include ('partials.footer')

