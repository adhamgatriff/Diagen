<ul id="slide-out_" class="side-nav">
  <div class="row">
      <h4 class="center opensans" style="color: white;">Actualizar Datos</h4>
      <div class="row">
        <div class="input-field col s12">
          <input id="user_name" type="text" class="form-control" style="color: white"  value="{{ $userData->username}}" required>
          <label class="label-principal" for="name">Nombre de usuario</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="user_nombre" type="text" class="form-control" style="color: white" value="{{ $userData->nombre}}" required>
          <label class="label-principal" for="email">Nombre</label>
        </div>
        <div class="input-field col s6 ">
          <input id="user_apellido" type="text" class="form-control" style="color: white" value="{{ $userData->apellido}}" required>
          <label class="label-principal" for="email">Apellido</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 ">
          <input id="user_email" type="email" class="form-control" style="color: white" value="{{ $userData->email}}" required>
          <label class="label-principal" for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="user_password" type="password" class="form-control" style="color: white">
          <label class="label-principal" for="password">Contraseña</label>
          
        </div>
        <div class="input-field col s6 ">
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

