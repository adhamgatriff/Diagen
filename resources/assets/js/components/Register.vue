<template>
  <div>
    <div class="row" style="
    margin-bottom: 0px;">
    <vue-form  class="col l5 m9 m5 offset-l7 offset-m3 s12 formlogin" @submit.prevent="onSubmit" :state="formstate" style=" background: white;">
      <h4 class="center">Registarse</h4>
      <div class="row">

        <validate class="input-field col s12">
          <i class="material-icons prefix">account_box</i>
          <input v-model="model.username" id="usuario" type="text" class="form-control" name="usuario" required>
          <label for="usuario">Nombre de usuario</label>

          <field-messages name="usuario" show="$touched || $submitted" class="form-control-feedback">
            <div slot="required" class="center-align" style="color:red;">El nombre de usuario es requerido</div>
          </field-messages>

        </validate>
      </div>
      <div class="row">
        <validate class="input-field col s6">
          <i class="material-icons prefix">face</i>
          <input v-model="model.nombre" id="nombre" type="text" class="form-control" name="nombre" required>
          <label for="nombre">Nombre</label>
          <field-messages name="nombre" show="$touched || $submitted" class="form-control-feedback">
            <div slot="required" class="center-align" style="color:red;">El nombre  es requerido</div>
          </field-messages>
        </validate>

        <validate class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input v-model="model.apellido" id="apellido" type="text" class="form-control" name="apellido" value="" required>
          <label for="apellido">Apellido</label>
          <field-messages name="apellido" show="$touched || $submitted" class="form-control-feedback">
            <div slot="required" class="center-align" style="color:red;">El apellido es requerido</div>
          </field-messages>
        </validate>
      </div>

      <div class="row">
        <validate class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input v-model="model.correo" id="email" type="email" class="form-control" name="email" value="" required>
          <label for="email">Email</label>
          <field-messages name="email" show="$touched || $submitted" class="form-control-feedback">
            <div slot="required" class="center-align" style="color:red;">El correo es requerido</div>
            <div slot="email" class="center-align" style="color:red;">Correo no valido</div>
          </field-messages>
        </validate>
      </div>

      <div class="row">
        <validate class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          <input v-model="model.pass" id="password" type="password" class="form-control" name="password" minlength="6" required>
          <label for="password">Contraseña</label>
          <field-messages name="password" show="$touched || $submitted" class="form-control-feedback">
            <div slot="required" class="center-align" style="color:red;">Ingrese una contraseña</div>
            <div slot="minlength" class="center-align" style="color:red;">la contraseña tiene que ser mayor de 6 caracteres</div>
          </field-messages>
        </validate>

        <validate class="input-field col s6 ">
          <i class="material-icons prefix">vpn_key</i>
          <input v-model="model.pass2" id="password-confirm" type="password" class="form-control" name="password_confirmation" required :compare="model.pass" minlength="6">
          <label for="password-confirm">Repita la contraseña</label>
          <field-messages name="password_confirmation" show="$touched || $submitted" class="form-control-feedback">
            <div slot="required" class="center-align" style="color:red;">Vuelva a escribir la contraseña</div>
            <div slot="minlength" class="center-align" style="color:red;">la contraseña tiene que ser mayor de 6 caracteres</div>
          </field-messages>
        </validate>
        <field-messages name="password_confirmation" class="col m12">
          <div slot="compare" class="center-align" style="color:red;">Contraseñas no coinciden</div>
        </field-messages>
      </div>

      <div class="row">
        <div class="col m12" align="center">
          <button type="submit" class="waves-effect waves-light btn degradado Wradius">Registrarse</button>
        </div>
      </div>
    </vue-form>
  </div>
  </div>
</template>
<script>

  import VueForm from 'vue-form';

  var options = {
    validators: {
      'compare': function (value, attrValue) {
        return value === attrValue;
      }
    }
  }

  export default {
    mixins: [new VueForm(options)],
    data(){
      return{
        formstate: {},
        model: {
          username: '',
          nombre: '',
          apellido: '',
          correo: '',
          pass: '',
          pass2: ''
        }
      }
    },
    methods:{
      onSubmit: function () { 
        if(this.formstate.$invalid) {
          Materialize.toast('Corrija los errores',1300)
          return;
        }

        axios.post('register', {
          usuario :this.model.username, 
          nombre :this.model.nombre, 
          apellido :this.model.apellido, 
          email :this.model.correo, 
          nivel :'0', 
          password: this.model.pass,
          password_confirmation: this.model.pass2
        })
        .then(() => {
          this.$router.push({path: '/principal'})
        }).catch( error => {
          if (error.response.status == 422) {
            $.each(error.response.data.errors, (val, ind)=>{ 
              Materialize.toast(ind,2300)
            })
          }
        })
      },
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
