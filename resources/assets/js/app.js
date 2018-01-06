
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


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

Vue.use(VueRouter)

const router = new VueRouter({
	routes
})

const app = new Vue({
	el: '#app',
	router,
	watch: {
		'$route' (to, from) {
			setTimeout(() => {
				part.resizeHandler()							
			}, 0);
		}
	}
});
