<template>
    <div id="app">
        <router-view/>
		<Loading v-if="loadingCount > 0"></Loading>
		<transition name="el-fade-in-linear">
			<LoginPopup v-if="showLog"></LoginPopup>
		</transition>
		<transition name="el-fade-in-linear">
			<RegisterPopup v-if="showReg"></RegisterPopup>
		</transition>
    </div>
</template>

<script>
import LoginPopup from '@/components/LoginPopup'
import RegisterPopup from '@/components/RegisterPopup'
import Loading from '@/components/common/Loading'

export default {
	name: 'App',
	components: {
		LoginPopup,
		RegisterPopup,
		Loading
	},
	data() {
		return {
			deviceWidth: null
		}
	},
	computed: {
		showLog() {
			return this.$store.state.common.showLoginPop;
		},
		showReg() {
			return this.$store.state.common.showRegisterPop;
		},
		loadingCount() {
			return this.$store.state.loading.count;
		}
	},
	watch: {
		deviceWidth(val) {
			this.$store.commit('SET_DEVICE_WIDTH', val);
		}
	},
	mounted() {
		this.deviceWidth = window.innerWidth;
		window.onresize = () => {
			this.deviceWidth = window.innerWidth;
		};
	}
}
</script>

