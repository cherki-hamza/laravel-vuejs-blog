/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// get the user helper
import User from "./helpers/User";
// do the user to global injection
window.User = User;


Vue.component('app-home', require('./AppHome').default);
Vue.component('pagination', require('laravel-vue-pagination'));

import router from './routes/routes';

const app = new Vue({
    el: '#app',
    router
});
