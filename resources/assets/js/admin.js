
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//ckeditor
$ (document).ready(function(){
 CKEDITOR.replace( 'description_short' );
 CKEDITOR.replace( 'description' );
});

window.Vue = require('vue');

import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'


window.Vue.use(BootstrapVue);


import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'


import Treeselect from '@riophae/vue-treeselect'

window.Vue.use(Treeselect);

import '@riophae/vue-treeselect/dist/vue-treeselect.css'

import toastr from 'vue-toastr';

Vue.use(toastr);





/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import categoryIndex from './components/categoryIndex.vue';
import categoryCreate from './components/categoryCreate.vue';
import categoryEdit from './components/categoryEdit.vue';

window.tablesorter = require('tablesorter');

import vSelect from 'vue-select'
Vue.component('v-select', vSelect)

const routes = [
    {
        path: '/',
        components: {
            categoryIndex: categoryIndex
        }
    },
    {path: '/create', component: categoryCreate, name: 'categoryCreate'},
    {path: '/edit/:id', component: categoryEdit, name: 'categoryEdit'},
]

Vue.component('post-button-component', require('./components/post_button.vue'));
Vue.component('image-uploader-component', require('./components/ImageUploader.vue'));


const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')
