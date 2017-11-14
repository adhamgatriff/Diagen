@extends('layouts.app')

@section('content')

<div class="row">
  <form class="col m8 offset-m2 s12 formlogin" method="POST" action="{{ route('password.email') }}">
    <h5 class="center">Reiniciar contraseña</h5>
    {{ csrf_field() }}
    <div class="row">
      <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
        <label for="email">Nombre de usuario</label>
        @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col m12" align="center">
        <button type="submit" class="waves-effect waves-light btn degradado Wradius">
            Enviar enlace para cambiar contraseña
        </button>
      </div>  
    </div>
  </form>
</div>


@endsection
