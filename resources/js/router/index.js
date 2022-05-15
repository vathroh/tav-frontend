import Vue from 'vue';

import VueRouter from 'vue-router';
// import NotFound from '../pages/NotFound.vue';
Vue.use(VueRouter);


const Home = require('../pages/Home.vue').default;
const JualMobil = require('../pages/Jual-Mobil.vue').default;
const Frenchise = require('../pages/Frenchise.vue').default;
const Tentang = require('../pages/Tentang.vue').default;
const Faq = require('../pages/Faq.vue').default;
const Hubungi = require('../pages/Hubungi.vue').default;

//const About = require('../pages/About.vue').default;
//import User from '../pages/User.vue';


const routes = [ 
    { name: 'Home', path: '/', component: Home },
    { name: 'Jual', path: '/Jual', component : JualMobil},
    { name: 'Frenchise', path: '/Frenchise', component: Frenchise},
    { name: 'Tentang', path:'/Tentang', component: Tentang},
    { name: 'Faq', path:'/Faq', component: Faq},
    { name: 'Hubungi', path: '/Hubungi', component: Hubungi},
    { name: 'Artikel', path: '/Artikel', beforeEnter() {location.href = 'http://artikel.tavmobil.id'}}
  ]

const router = new VueRouter({
    mode: 'history',
    routes,
    linkExactActiveClass: "active"
})

export default router;