import Prueba from './components/Prueba.vue' 
import register from './components/Register.vue' 
import Login from './components/Login.vue' 
import landing from './components/Landing.vue' 

const routes = [
  {path: '/', component: landing,name: 'incio'},
  {path: '/registro', component: register },
  {path: '/ingreso', component: Login, name: 'login' },
  {path: '/Principal', component: Prueba },  
]

export default routes