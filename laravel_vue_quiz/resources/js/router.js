import Vue from 'vue'
import Router from 'vue-router'
import Home from './components/page/Home'
import Quiz from './components/page/Quiz'

Vue.use(Router)

export default new Router({
  mode: 'history', // SPAのURLにはhistoryモード(#ハッシュが付かないタイプを使います)
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home // URL「/」に対してHomeコンポーネントを使うという意味です
    },
    {
      path: '/quiz',
      name: 'quiz',
      component: Quiz // URL「/quiz」に対してQuizコンポーネントを使うという意味です
    },
  ]
})