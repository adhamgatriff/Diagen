<ul id="slide-out_" class="side-nav">
  <div class="titulo-generico">
    <h4 class="center opensans" style="color: white;">Actualizar Datos</h4>
  </div>
  <div class="row">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_box</i>
          <input id="user_name" type="text" class="form-control" style="color: white"  value="{{ $userData->username}}" required>
          <label class="label-principal" for="name">Nombre de usuario</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">face</i>
          <input id="user_nombre" type="text" class="form-control" style="color: white" value="{{ $userData->nombre}}" required>
          <label class="label-principal" for="email">Nombre</label>
        </div>
        <div class="input-field col s6 ">
          <i class="material-icons prefix">perm_identity</i>
          <input id="user_apellido" type="text" class="form-control" style="color: white" value="{{ $userData->apellido}}" required>
          <label class="label-principal" for="email">Apellido</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 ">
          <i class="material-icons prefix">email</i>
          <input id="user_email" type="email" class="form-control" style="color: white" value="{{ $userData->email}}" required>
          <label class="label-principal" for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          <input id="user_password" type="password" class="form-control" style="color: white">
          <label class="label-principal" for="password">Contraseña</label>
        </div>
        <div class="input-field col s6 ">
          <i class="material-icons prefix">vpn_key</i>
          <input id="user_password-confirm" type="password" class="form-control" style="color: white">
          <label class="label-principal" for="password-confirm">Repita la contraseña</label>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col m12" align="center">
          <button class="waves-effect waves-light btn degradado Wradius actUser">Actualizar</button>
        </div>
      </div>
  </div>
</ul>

