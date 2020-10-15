
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */
import App from './App.vue';
import ElementUI from 'element-ui';
<<<<<<< HEAD
import VueRouter from 'vue-router';
import 'element-ui/lib/theme-chalk/index.css';
import routers from './routers.js';
=======
import VueRouter from 'vue-router'
import 'element-ui/lib/theme-chalk/index.css';
import routers from './routers.js'
>>>>>>> cd7d4f2c56d8a81be5c90ef662019cfc1542d815

Vue.use(ElementUI);
Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes: routers
});

const app = new Vue({
  el: '#app',
  router,
  render: h => h(App),
});
