/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');

import ElementUI from 'element-ui';
import UserCreate from './components/user/Create.vue'
import UserList from './components/user/List.vue'
import UserEdit from './components/user/Edit.vue'
import UserView from './components/user/View.vue'
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(ElementUI);
Vue.component('user-create', UserCreate);
Vue.component('user-list', UserList);
Vue.component('user-edit', UserEdit);
Vue.component('user-view', UserView);

new Vue({
    el: '#app'
});
