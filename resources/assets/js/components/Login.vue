<template>
  <div>
    <navbar-dg :logeado="logeado"></navbar-dg>
      <div class="row">
    <form class="col l5 m9 s12 formlogin" method="POST" action="">
      <h4 class="center">Ingresar</h4>
      <div class="row">
        <div class="input-field col s12 ">
          <i class="material-icons prefix">account_circle</i>
          <input id="username" type="text" class="form-control" name="username" value="" required>
          <label for="username">nombre de usuario</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 ">
          <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="form-control" name="password" required>
          <label for="password">Contraseña</label>
        </div>
      </div>

      <div class="row">
        <div class="col m6" align="center">
          <button type="submit" class="waves-effect waves-light btn degradado Wradius">Entrar</button>
        </div>
        <div class="col m6" align="center">
          <a href="" class="waves-effect waves-light btn degradado Wradius">Registrarse</a>
        </div>
      </div>
    </form>
    </div>
  </div>
</template>
<script>

import navbarDg from './layout/Navbar'
  export default {

    props: {
      logeado: { type: Number, Required: true }
    },
    components: {navbarDg},
    data() {
      return {

      }
    },
    mounted(){
      // part.destroy()
 
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

