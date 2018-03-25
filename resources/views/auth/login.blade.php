@extends('layouts.app')

@section('titulo','Login')

@section('mascss')

<style type="text/css">
  .formlogin{
      position: fixed;
      z-index: 9;
      background: white;
      height: 100%;
      opacity: 0.7;}
</style>

@endsection
@section('content')
  
  <div class="row">
    <form class="col l5 m9 s12 formlogin" method="POST" action="{{ route('login') }}">
      <h4 class="center">Ingresar</h4>
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12 {{ $errors->has('username') ? ' has-error' : '' }}">
          <i class="material-icons prefix">account_circle</i>
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
        <div class="input-field col s11 {{ $errors->has('password') ? ' has-error' : '' }}">
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
      </div>

      <div class="row">
        <div class="col m6" align="center">
          <button type="submit" class="waves-effect waves-light btn degradado Wradius">Entrar</button>
        </div>
        <div class="col m6" align="center">
          <a href="{{ route('register') }}" class="waves-effect waves-light btn degradado Wradius">Registrarse</a>
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
  </script>
@endsection


