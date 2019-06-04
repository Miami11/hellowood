<template>
	<div class="loading-wrapper">
		<div class="loading"></div>
	</div>
</template>

<style lang="scss" scoped>
@import '../../styles/mixins.scss';
.loading-wrapper {
	@include mask();
	.loading {
		position: absolute;
		top: 50%;
		left: 50%;
		width: 30px;
		height: 30px;
		margin: -20px 0 0 -20px;
		border-width:  5px;
		border-style: solid;
		border-color: #fff #fff rgba(255,255,255,.5) rgba(255,255,255,.5);
		opacity: .9;
		border-radius: 20px;
		animation: rotate 1s linear infinite;
	}
}
@keyframes rotate{
	0% { -webkit-transform:rotate(0deg) }
	100% { -webkit-transform:rotate(360deg) }
}
</style>
