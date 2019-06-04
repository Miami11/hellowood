import Vue from 'vue'
import Vuex from 'vuex'
import common from './store/common'
import loading from './store/loading'

Vue.use(Vuex)

export default new Vuex.Store({
	modules: {
		common,
		loading
	}
})
