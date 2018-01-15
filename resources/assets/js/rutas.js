import Panel from './components/Panel.vue' 
import register from './components/Register.vue' 
import Login from './components/Login.vue' 
import landing from './components/Landing.vue' 

const routes = [
  {path: '/', component: landing,name: 'incio'},
  {path: '/registro', component: register , name:'registro'},
  {path: '/ingreso', component: Login, name: 'login' },
  {path: '/principal', component: Panel, name: 'Panel de control' },  
]

export default routes