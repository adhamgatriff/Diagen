<template>
  <div>
    <!-- <transition name="fadeLeft"> -->
      <!-- <navbar-dg :logeado="logeado"></navbar-dg> -->
    <!-- </transition> -->
      <div class="row" style="
    margin-bottom: 0px;">
    <vue-form class="col l5 m9 s12 formlogin" :state="formstate" @submit.prevent="onSubmit" style="
    background: white; height=100px; ">
    <!-- <form  method="POST" action="" > -->
      <h4 class="center">Ingresar</h4>
      <div class="row">
        <validate class="input-field col s12 ">
          <i class="material-icons prefix">account_circle</i>
          <input v-model="model.username" id="username" type="text" class="form-control" name="username" value="" required>
          <label for="username">nombre de usuario</label>

          <field-messages name="username" show="$touched || $submitted" class="form-control-feedback">
            <div slot="required" class="center-align" style="color:red;">El nombre de usuario es requerido</div>
          </field-messages>
        </validate>
      </div>

      <div class="row">
        <validate class="input-field col s12 ">
          <i class="material-icons prefix">vpn_key</i>
          <input v-model="model.pass" id="password" type="password" class="form-control" name="password" required>
          <label for="password">Contraseña</label>
        </validate>
      </div>

      <div class="row">
        <div class="col m6" align="center">
          <button type="submit" class="waves-effect waves-light btn degradado Wradius">Entrar</button>
        </div>
        <div class="col m6" align="center">
          	<router-link  class="waves-effect waves-light btn degradado Wradius" to="/registro">Registrarse</router-link>
        </div>
      </div>
    <!-- </form> -->
    </vue-form>
    </div>
  </div>
</template>
<script>

import navbarDg from './layout/Navbar'
import VueForm from 'vue-form';

  export default {
    mixins: [VueForm],
    components: {navbarDg},
    data() {
      return {
        formstate: {},
        model: {
          username: '',
          pass: ''
        }
      }
    },
    mounted(){
      // part.destroy()
 
    },
    methods: {
    onSubmit: function () { 

      

      if(this.formstate.$invalid) {
        // alert user and exit early
        return;
      }
      
      // otherwise submit form
      this.$routeLaravel('login')
        .post({ username :this.model.username, 
          password: this.model.pass
        }).then(response => {
            // console.log(response.data)
           this.$emit('select', 'incio')

        }).catch(response => {
          // console.log(this.model.username)
            // console.log(response.data)
        })
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

