<template>
    <div id="app">
        <router-view/>
    </div>
</template>

<script>
export default {
	name: 'App',
	data() {
		return {
			deviceWidth: null
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

