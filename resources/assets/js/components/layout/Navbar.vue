<template>
<div class="navbar-fixed">
	<nav>
		<div class="nav-wrapper">
			<router-link class="brand-logo" to="/">
				<img src="img/logo2.png" style="width: 75px;margin-left: 10px;">
			</router-link>
			<a href="#" data-activates="slide-out-" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down" v-if="logeado =='0'">
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
					<li><a href="">adhamchitoj</a></li>
					<li>
						<a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a>
						
						<form id="logout-form" action="" method="POST" style="display: none;">
						</form>
					</li>
      </ul>

			<ul class="side-nav" id="slide-out-" v-if="logeado =='0'">
        <li><a href="">Ingresar</a></li>
        <li><a href="">Registrarse</a></li>
			</ul>
			<ul class="side-nav" id="slide-out-" v-else>
					<li><a href="">asdfafa</a></li>
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
    logeado: { type: Number, Required: true }
  },
}
</script>
