@extends('layouts.app')
@section('titulo','Registrarse')
@section('mascss')

<style type="text/css">
  .formlogin{
      position: fixed;
      z-index: 9;
      background: white;
      height: 100%;
      opacity: 0.7;
  }
</style>
@section('content')
<div class="row">
    <form class="col l5 m9 m5 offset-l7 offset-m3 s12 formlogin" method="POST" action="{{ route('register') }}">
      <h4 class="center">Registarse</h4>
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12 {{ $errors->has('usuario') ? ' has-error' : '' }}">
          <i class="material-icons prefix">account_box</i>
          <input id="usuario" type="text" class="form-control" name="usuario" value="{{ old('usuario') }}" required>
          <label for="usuario">Nombre de usuario</label>
          @if ($errors->has('usuario'))
              <span class="help-block">
                  <strong>{{ $errors->first('usuario') }}</strong>
              </span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 {{ $errors->has('nombre') ? ' has-error' : '' }}">
          <i class="material-icons prefix">face</i>
          <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>
          <label for="nombre">Nombre</label>
          @if ($errors->has('nombre'))
            <span class="help-block">
              <strong>{{ $errors->first('nombre') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-field col s6 {{ $errors->has('apellido') ? ' has-error' : '' }}">
          <i class="material-icons prefix">perm_identity</i>
          <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required>
          <label for="apellido">Apellido</label>
          @if ($errors->has('apellido'))
            <span class="help-block">
              <strong>{{ $errors->first('apellido') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
          <i class="material-icons prefix">email</i>
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
        <div class="input-field col s5 {{ $errors->has('password') ? ' has-error' : '' }}">
          <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="form-control" name="password" required>
          <label for="password">Contraseña</label>
          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
        <div class="col s1">
          <i class="material-icons pasw_changer" style="line-height: 70px;color:#E91E63;cursor: pointer;">visibility</i>
        </div>
        <div class="input-field col s5 ">
          <i class="material-icons prefix">vpn_key</i>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          <label for="password-confirm">Repita la contraseña</label>
        </div>
        <div class="col s1">
          <i class="material-icons pasw_changer_" style="line-height: 70px;color:#E91E63;cursor: pointer;">visibility</i>
        </div>
      </div>

      <div class="row">
        <div class="col m12" align="center">
          <button type="submit" class="waves-effect waves-light btn degradado Wradius">Registrarse</button>
        </div>
      </div>
    </form>
  </div>
@endsection

@section('morescript')

  <script type="text/javascript">
    $('.pasw_changer').on('click',()=>{
      if($('.pasw_changer').text()=='visibility'){
        $('.pasw_changer').text('visibility_off')
        $('#password')[0].type='text';
      }else{
        $('.pasw_changer').text('visibility')
        $('#password')[0].type='password';
      }
    })


    $('.pasw_changer_').on('click',()=>{
      if($('.pasw_changer_').text()=='visibility'){
        $('.pasw_changer_').text('visibility_off')
        $('#password-confirm')[0].type='text';
      }else{
        $('.pasw_changer_').text('visibility')
        $('#password-confirm')[0].type='password';
      }
    })

  </script>
@endsection