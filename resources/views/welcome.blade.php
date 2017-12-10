@extends('layouts.app')

@section('content')
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

      @include('partials.mainform')
      
@endsection
