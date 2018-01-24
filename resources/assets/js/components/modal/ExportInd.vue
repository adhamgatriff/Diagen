<template>
	<div id="mdExpInd" class="modal modal-fixed-footer tinyModal">			
	<div class="titulo-generico">
		<h4 class="opensans">Exportar Diagrama</h4>
	</div>
	<div class="modal-content">
		<div class="input-field col s12">
			<select id='langSelect' v-if="currDiag && currDiag.tipo== 0  ">
				<option value="" disabled selected>Seleccione uno</option>
				<option value='1' data-icon="img/sql2.png" class="left circle">SQL</option>
			</select>
			<select id='langSelect' v-else-if="currDiag && currDiag.tipo== 1">
				<option value="" disabled selected>Seleccione uno</option>
				<option value='2' data-icon="img/python1.png" class="left circle">Python</option>
				<option value='3' data-icon="img/p1.png" class="left circle">PHP</option>
				<option value='4' data-icon="img/java.jpg" class="left circle">Java</option>
			</select>

			<label>Seleccione lenguaje a exportar</label>
		</div>
		<input type="hidden" id="idd">
	</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat ">Cerrar</a>&nbsp;
			<a class="waves-effect waves-light btn degradado exp-single">
				<i class="material-icons left">file_download</i>Exportar
			</a>
		</div>
	</div>
</template>

<script>
export default {
	props: {
	  currDiag: {
	    required: true,
	    default: null
	  }
	},
  name: 'ExportInd',
	mounted(){
		$('#mdExpInd').modal()
  	// $('#langSelect').material_select()
  },
  watch: {
    currDiag: (val, oldVal) => {
      // $('#langSelect').material_select()
    }
  }
}
</script>

<style lang="css" scoped>
</style>