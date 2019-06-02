const common = {
	state: {
		deviceWidth: null,
		showLoginPop: false,
		showRegisterPop: false
	},
	mutations: {
		SET_DEVICE_WIDTH: (state, val) => {
			state.deviceWidth = val;
		},
		SET_LOGIN_POP: (state, val) => {
			state.showLoginPop = val;
		},
		SET_REGISTER_POP: (state, val) => {
			state.showRegisterPop = val;
		}
	},
	actions: {
		showLoginPop({commit}) {
			commit('SET_LOGIN_POP', true);
		},
		closeLoginPop({commit}) {
			commit('SET_LOGIN_POP', false);
		},
		showRegisterPop({commit}) {
			commit('SET_REGISTER_POP', true);
		},
		closeRegisterPop({commit}) {
			commit('SET_REGISTER_POP', false);
		}
	}
}

export default common
