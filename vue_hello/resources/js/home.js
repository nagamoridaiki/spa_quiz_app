import Vue from 'vue'
import App from './components/page/Home'
import SocialSharing from 'vue-social-sharing'

Vue.use(SocialSharing);
new Vue({
  el: 'app',
  components: {
    app: App
  }
})