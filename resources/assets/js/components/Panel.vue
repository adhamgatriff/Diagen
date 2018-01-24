<template>
	<div class='fondo'>
		<h3 class="opensans" style="margin-left: 12px;">Tus diagramas</h3>
		<div class="row">
			<div v-for="(diagrama, index) in diagramas" >
				<div class="col l3 m6 s12" >
					<div class="card" @click="currDiagHandle(index)">
						<div class="delete-diag" style="display: none;">
							<a class="btn-floating btn-large waves-effect waves-light red a_card">
								<i class="material-icons icon_card">delete</i>
							</a>
						</div>
						<div class="card-image">
							<img :src="'diagramasImg/'+diagrama.nombreI" class="responsive-img">
							<a class="btn-floating halfway-fab waves-effect waves-light degradado" :data-id="diagrama.id">
								<i class="material-icons">edit</i>
							</a>
						</div>
						<div class="card-content card-mio">
							<p>{{diagrama.nombre}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fixed-action-btn exportMult" style="right: 100px;">
			<a style="width: 50px;height: 50px;" class="btn-floating btn-large waves-effect waves-light degradado">
				<i class="material-icons" style="line-height: 50px;">cloud_download</i>
			</a>
		</div>
		<div class="fixed-action-btn modal-trigger" href="#modaladd">
			<a id="Nuevo" class="btn-floating btn-large waves-effect waves-light degradado" @click="NewDiagModal">
				<i class="material-icons">add</i>
			</a>
		</div>
		<div class="tap-target" style="background-color: #4b367c;" data-activates="Nuevo">
			<div class="tap-target-content" style="color: white;">
				<h5>Hola!! </h5>
				<p>Veo que no tienes diagramas :( <br>puedes crear uno nuevo presionando este boton.</p>
			</div>
		</div>
		<new-diagrama></new-diagrama>
		<export-ind :currDiag="currDiagrama"></export-ind>
	</div>
</template>

<script>

import DeleteDiag from './modal/DeleteDiag'
import ExportInd from './modal/ExportInd'
import NewDiagrama from './modal/NewDiagrama'

export default {

  name: 'Panel',
  components: {DeleteDiag,ExportInd, NewDiagrama},

  data () {
    return {
    	diagramas: null,
    	currDiagrama: null,
    }
  },
  mounted(){
    axios.get('api/diagrams').then(resp => this.diagramas = resp.data )

    if(this.diagramas)
    	this.currDiagrama = this.diagramas[0]
  },
  methods: {
  	NewDiagModal(){
  		$('.modal').modal('open')
  	},
  	currDiagHandle(index){
  		this.currDiagrama = this.diagramas[index]
  		$('#mdExpInd').modal('open')
  		setTimeout(function() {
  			$('#langSelect').material_select()
  		}, 10);
  		
  	}
  }
}
</script>

<style lang="sass" scoped>
	.fondo
		width: 100%
		height: calc(100% - 50px)
		background-color: #f5f0f0
		position: absolute
		// opacity: 0.7

	.a_card
		position: absolute
		width: 35px
		height: 35px
		right: -10px
		top: -10px

	.icon_card
		line-height: 35px
		vertical-align: super

</style>