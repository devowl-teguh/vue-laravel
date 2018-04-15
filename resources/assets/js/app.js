
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import router from './router';
import store from './store';
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import VueFire from 'vuefire';

Vue.use(VueFire);
Vue.use(VueRouter);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('formaddbooks-component', require('./components/firebase/FirebaseFormAddBooks.vue'));
Vue.component('formlistbooks-component', require('./components/firebase/FirebaseListBooks.vue'));
Vue.component('nav-component', require('./components/NavComponent.vue'));
const User = {
  template: '<div>User</div>'
}
// const router =  new VueRouter({
//   mode: 'history',
//   routes:[
//     { path: '/', component: FirebaseComponent, name:'FirebaseComponent', meta: { requiresAuth: true }},
//     { path: '/login', component: LoginFirebase, name:'login' },
//     { path: '/register', component: RegisterFirebase, name:'register' },
//     { path: '/user', component: User}
//   ]
// })


Vue.http.headers.common['X-CSRF-TOKEN'] =  document.querySelector("meta[name=csrf-token]").getAttribute('content');
// const app = new Vue({
//     el: '#app',
//     router,store
// });

const app = new Vue({
  router,
  store
}).$mount('#app')
