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
@section('content')

<div class="row">
    <form class="col m5 offset-m7 s12 formlogin" method="POST" action="{{ route('register') }}">
      <h4 class="center">Registarse</h4>
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12 {{ $errors->has('name') ? ' has-error' : '' }}">
          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
          <label for="name">Nombre de usuario</label>
          @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 {{ $errors->has('nombre') ? ' has-error' : '' }}">
          <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('email') }}" required>
          <label for="email">Nombre</label>
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('nombre') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-field col s6 {{ $errors->has('apellido') ? ' has-error' : '' }}">
          <input id="email" type="text" class="form-control" name="apellido" value="{{ old('email') }}" required>
          <label for="email">Apellido</label>
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('apellido') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
          <label for="email">Email</label>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 {{ $errors->has('password') ? ' has-error' : '' }}">
          <input id="password" type="password" class="form-control" name="password" required>
          <label for="password">Contraseña</label>
          @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-field col s6 ">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          <label for="password-confirm">Repita la contraseña</label>
        </div>
      </div>

      <div class="row">
        <div class="col m12" align="center">
          <button type="submit" class="waves-effect waves-light btn degradado Wradius">Registrarse</button>
        </div>
      </div>
    </form>
      <img src="{{ asset('img/2.jpg') }}" style="position: fixed;">
  </div>

@endsection
