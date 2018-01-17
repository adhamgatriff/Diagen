<template>
	<div id="deleteDmodal" class="modal bottom-sheet">
    <div class="titulo-generico" >
      <h4 class="opensans">Borrar diagrama</h4>
    	</div>
    <div class="modal-content c1">
      <p class="flow-text">¿Esta seguro que desea borrar el diagrama "<strong id='ndm'></strong>"?</p>
      <input type="hidden" id="idddm">
    </div>
    <div class="modal-footer">
    	<a class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    	<a class="waves-effect waves-light btn degradado Wradius borrarDg">Eliminar</a>
    </div>
  </div>
</template>

<script>
export default {

  name: 'DeleteDiag',

  data () {
    return {

    }
  }
}
</script>

<style lang="sass" scoped>
	.c1
		padding: 1px 5px 8px 15px

</style>