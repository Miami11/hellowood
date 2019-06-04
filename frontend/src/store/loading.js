const loading = {
	state: {
		count: 0
	},
	mutations: {
		SET_COUNT: (state, val) => {
			state.count = val;
		},
	},
	actions: {
		showLoading({commit, state}) {
			commit('SET_COUNT', state.count + 1);
		},
		closeLoading({commit, state}) {
			commit('SET_COUNT', state.count - 1);
		}
	}
}

export default loading
