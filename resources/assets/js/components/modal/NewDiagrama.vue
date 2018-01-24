<template>
	<div id="modaladd" class="modal">
  	<div class="titulo-generico">
  		<h4 class="opensans">
  			Nuevo diagrama
  		</h4>
  	</div>
    <div class="modal-content c1" style="">
      <div class="input-field col s12 c2" style="">
				<select id="ediSelect">
					<option value="" disabled selected>Seleccione uno</option>
					<option value="0">Modelo Entidad-Relacion</option>
					<option value="1">Diagrama de Clases</option>
				</select>
				<label>Seleccione el tipo de diagrama a crear</label>
			</div>
    </div>
    <div class="modal-footer">
      <a class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
      <a class="waves-effect waves-light btn degradado Wradius" @click="goEditor">Ir al editor</a>
    </div>
  </div>
</template>

<script>
export default {

  name: 'NewDiagrama',
  methods: {
    goEditor() {
      if($('#ediSelect').val()=='' || $('#ediSelect').val() == null ){
        Materialize.toast('Seleccione un tipo de diagrama',1000);
      }else{
        $.redirect("editor",{t: $('#ediSelect').val()},'GET');
      }
    }
  },
  mounted(){
    $('.modal').modal()
    $('#ediSelect').material_select()
  }
}
</script>

<style lang="sass" scoped>
	.c1
		padding-top: 0px

	.c2
		margin: 50px 0 70px 0

	
</style>