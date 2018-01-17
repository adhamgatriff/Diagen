<template>
	<div id="mdExpInd" class="modal modal-fixed-footer tinyModal">			
	<div class="titulo-generico">
		<h4 class="opensans">Exportar Diagrama</h4>
	</div>
	<div class="modal-content">
		<div class="input-field col s12">
			<select id='langSelect'>
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

  name: 'ExportInd',

  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>