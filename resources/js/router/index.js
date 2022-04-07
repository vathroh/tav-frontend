import Vue from 'vue';

import VueRouter from 'vue-router';
// import NotFound from '../pages/NotFound.vue';
Vue.use(VueRouter);


const Home = require('../pages/Home.vue').default;
const Login = require('../pages/Login.vue').default;
//const About = require('../pages/About.vue').default;
//import User from '../pages/User.vue';

const routes = [
    { name: 'Home', path: '/home', component: Home },
    { name: 'Login', path: '/login', component : Login}
  ]

const router = new VueRouter({
    mode: 'history',
    routes,
})

export default router;