/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue').default;
import Vue from 'vue';
import router from './router';



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('banner-component', require('./components/BannerComponent.vue').default);
Vue.component('searchbox-component', require('./components/SearchBoxComponent.vue').default);
Vue.component('fullpagesearch-component', require('./components/FullPageSearchComponent.vue').default);
Vue.component('carmodal-component', require('./components/CarModalComponent.vue').default);
Vue.component('featurecar-component', require('./components/FeatureCarComponent.vue').default);
Vue.component('adventages-component', require('./components/AdventagesComponent.vue').default);
Vue.component('login-component', require('./components/LoginComponent.vue').default);




const app = new Vue({
    el: '#app',
    router
});
