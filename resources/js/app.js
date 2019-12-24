/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)

import User from './helpers/User'

window.User = User

window.EventBus = new Vue();

import AppHome from './components/AppHome.vue';
Vue.component('app-home', AppHome);

import router from './Router/router.js'

const app = new Vue({
    el: '#app',
    router,
    vuetify: new Vuetify({})
});
