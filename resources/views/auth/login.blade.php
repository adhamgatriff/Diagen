@extends('layouts.app')

@section('mascss')

<style type="text/css">
  .formlogin{
      position: fixed;
      z-index: 9;
      background: white;
      height: 100%;
      opacity: 0.9;
  }
</style>

@endsection
@section('content')
  
  <div class="row">
    <form class="col m5 s12 formlogin" method="POST" action="{{ route('login') }}">
      <h4 class="center">Ingresar</h4>
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12 {{ $errors->has('username') ? ' has-error' : '' }}">
          <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>
          <label for="username">nombre de usuario</label>
          @if ($errors->has('username'))
              <span class="help-block">
                  <strong>{{ $errors->first('username') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
          <input id="password" type="password" class="form-control" name="password" required>
          <label for="password">Password</label>
          @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="col m6">
          <button type="submit" class="waves-effect waves-light btn degradado Wradius">Entrar</button>
        </div>
        <div class="col m6">
          <a href="{{ route('password.request') }}" class="waves-effect waves-light btn degradado Wradius">Olvido su contraseña</a>
        </div>
      </div>
{{--       <div class="row">
        <div class="col m12">
          <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
          </label>
      </div>
    </div> --}}
    </form>
      <img src="{{ asset('img/1.jpg') }}" style="position: fixed;">
  </div>
@endsection
