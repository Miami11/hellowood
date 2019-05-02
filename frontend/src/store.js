import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
	state: {
		deviceWidth: null,
		showLoginPop: false
	},
	mutations: {
		SET_DEVICE_WIDTH: (state, val) => {
			state.deviceWidth = val;
		},
		SET_LOGIN_POP: (state, val) => {
			state.showLoginPop = val;
		}
	},
	actions: {
		showLoginPop({commit}) {
			commit('SET_LOGIN_POP', true);
		},
		closeLoginPop({commit}) {
			commit('SET_LOGIN_POP', false);
		}
	}
})
