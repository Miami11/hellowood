<template>
    <div id="app">
        <router-view/>
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

export default {
	name: 'App',
	components: {
		LoginPopup,
		RegisterPopup
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

