import Vue from 'vue'
import router from './router.js'
import SocialSharing from 'vue-social-sharing'
import axios from 'axios'
import jQuery from "jquery";
import MainPage from './components/page/MainPage'

window.$ = window.jQuery = jQuery;
require('bootstrap');

Vue.prototype.$http = axios; 

Vue.use(SocialSharing);

new Vue({
  router: router, 
  components: {
    app: MainPage
  }

 }).$mount('#app') 