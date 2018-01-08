<template>
  <div>
    <!-- <transition name="fadeLeft"> -->
      <!-- <navbar-dg :logeado="logeado"></navbar-dg> -->
    <!-- </transition> -->
    <div class="row" style="
    margin-bottom: 0px;">
    <form class="col l5 m9 m5 offset-l7 offset-m3 s12 formlogin" method="POST" action="" style=" background: white;">
      <h4 class="center">Registarse</h4>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_box</i>
          <input id="usuario" type="text" class="form-control" name="usuario" value="" required>
          <label for="usuario">Nombre de usuario</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">face</i>
          <input id="nombre" type="text" class="form-control" name="nombre" value="" required>
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="apellido" type="text" class="form-control" name="apellido" value="" required>
          <label for="apellido">Apellido</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="form-control" name="email" value="" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="form-control" name="password" required>
          <label for="password">Contraseña</label>
        </div>
        <div class="input-field col s6 ">
          <i class="material-icons prefix">vpn_key</i>
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
  </div>
  </div>
</template>
<script>

  import navbarDg from './layout/Navbar'

  export default {

    components: {navbarDg},
    data(){

      return{

      }
    }

  }

</script>
<style lang="sass" scoped>
  .formlogin
    position: fixed;
    z-index: 9;
    background: white;
    height: 100%;
    opacity: 0.7;
</style>
