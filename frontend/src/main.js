import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import './plugins/element.js'
import './styles/style.scss'
import './assets/fonts/iconfont.css'

Vue.config.productionTip = false

Vue.prototype.$loading = {
	show: () => {
		store.dispatch('showLoading');
	},
	hide: () => {
		store.dispatch('closeLoading');
	}
}

new Vue({
	router,
	store,
	render: h => h(App)
}).$mount('#app')
