import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
	state: {
		deviceWidth: null
	},
	mutations: {
		SET_DEVICE_WIDTH: (state, val) => {
			state.deviceWidth = val;
		},
	},
	actions: {

	}
})
