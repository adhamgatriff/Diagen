<template>
<div class="navbar-fixed">
	<nav>
		<div class="nav-wrapper">
			<router-link class="brand-logo" to="/">
				<img src="img/logo2.png" style="width: 75px;margin-left: 10px;">
			</router-link>
			<a href="#" data-activates="slide-out-" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down" v-if="!logeado">
        <li>
					<router-link class="" to="/ingreso">Ingresar</router-link>
				</li>
				<li>
					<router-link class="" to="/registro">Registrarse</router-link>
				</li>
			</ul>
      <ul class="right hide-on-med-and-down" v-else>
				<li>
					<a href="#" data-activates="slide-out_" class="button_edit_user" >
						<i class="material-icons" style="line-height:inherit;height:inherit;">account_circle</i>
					</a>
				</li>
				<li>
					<router-link class="" to="/principal">{{logeado.username}}</router-link>
				</li>
				<li>
					<a href="" @click="sacalo">Salir</a>
				</li>
      </ul>

			<ul class="side-nav" id="slide-out-" v-if="!logeado">
        <li><router-link class="" to="/ingreso">Ingresar</router-link></li>
        <li><router-link class="" to="/registro">Registrarse</router-link></li>
			</ul>
			<ul class="side-nav" id="slide-out-" v-else>
					<li>
						<router-link class="" to="/principal">{{logeado.username}}</router-link>
					</li>
					<li>
						<a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a>
						<form id="logout-form" action="" method="POST" style="display: none;">
							
						</form>
					</li>
			</ul>
		</div>
	</nav>
</div>

  
</template>

<script>
export default {
  props: {
    logeado: { Required: true }
  },
  methods: {
  	sacalo(){
  		axios.post('sacalo')
        .then(function (response) {
          // console.log(response)
          this.$emit('select', 'incio')
        })
  	}
  }
}
</script>
