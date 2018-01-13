
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
const queryString = require('query-string')


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('navbarDg', require('./components/layout/Navbar.vue'));
Vue.component('footerDg', require('./components/layout/Footer.vue'));
// Vue.component('footerLand', require('./components/layout/FooterLng.vue'));
// Vue.component('landingDg', require('./components/Landing.vue'));

import VueRouter from 'vue-router'
import routes from './rutas'
import VueRouteLaravel from 'vue-route-laravel'
import isLoggedMixin from './mixins/isLogged'

var config = {
	baseroute: '/api/route/',
	axios: axios,
	queryString: queryString,
	csrf_token: document.head.querySelector("[name=csrf-token]").content
}

//create method global
Vue.use(VueRouteLaravel, config)
Vue.use(VueRouter)

const router = new VueRouter({
	routes
})

const app = new Vue({
	el: '#app',
	router,
	mixins: [isLoggedMixin],
	data(){
		return{
			isNavactive: false,
			dir:this.$route.name,
			user: false
		}
	},
	created(){
		this.checkIfLogged()
			.then(response => {
							this.user = response ? response : false;
					})                    
			.catch(error => console.log(error));
	},
	mounted(){
		if(this.dir == 'login' || this.dir == "registro"){
			this.isNavactive = true
			
		}
	},
	watch: {
		'$route' (to, from) {

			this.checkIfLogged()
			.then(response => {
					this.user = response ? response : false;
							
			})                    
			.catch(error => console.log(error));

			if(to.name=="login" ||to.name=="registro"){
				this.isNavactive = true
			}else{
				this.isNavactive = false
			}
			
			if(from.name == "incio" && (to.name=="login" ||to.name=="registro") ){
				setTimeout(() => {
					part.resizeHandler()		
				}, 1300);
			}else{
				setTimeout(() => {
					part.resizeHandler()							
				}, 0);
			}
		}
	},
	methods: {
		redirect(e){
			router.push({name: e})
		}
	}
});

router.beforeEach((to, from, next) => {
  if ((to.name == 'login' || to.name == 'registro') && app.user) {
  	Materialize.toast('No puedes acceder a esa ruta')
  	next({ name: 'incio' }) //principal
  }else if(to.name == 'princ' && !app.user){
  	Materialize.toast('No puedes acceder a esa ruta')
  	next({name: 'login'})
  }else{
  	next()	
  }
})

