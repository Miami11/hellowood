<template>
    <div id="app">
        <router-view/>
		<transition name="el-fade-in-linear">
			<LoginPopup v-if="show"></LoginPopup>
		</transition>
    </div>
</template>

<script>
import LoginPopup from '@/components/LoginPopup'

export default {
	name: 'App',
	components: {
		LoginPopup
	},
	data() {
		return {
			deviceWidth: null
		}
	},
	computed: {
		show() {
			return this.$store.state.showLoginPop;
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

