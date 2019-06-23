<template>
    <div class="news">
		<div class="banner">
			<p class="slogan">OUR LATEST NEWS</p>
			<h2>BLOG</h2>
		</div>
		<div class="content">
			<el-row>
				<el-col :xs="24" :sm="12" v-for="i in 4" :key="i">
					<img class="news-img" src="@/assets/images/index/news1.jpg">
					<p class="date">October 7, 2018  by Walter Myers</p>
					<h3 class="title">"BETTER CALL SAUL" WRITER OFFERS ADVICE</h3>
					<p class="describe">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nulla facilisi etiam dignissim diam quis enim. Scelerisque eleifend donec pretium vulputate sapien. Diam quis enim lobortis scelerisque fermentum dui faucibus in ornare. Vulputate mi sit amet mauris commodo quis imperdiet.
					</p>
				</el-col>
			</el-row>
		</div>
	</div>
</template>

<script>
export default {
	name: 'News'
}
</script>

<style lang="scss" scoped>
@import '../../styles/mixins.scss';
.news {
	.banner {
		@include subpage-banner();
	}
	.content {
		max-width: 1200px;
		margin: 0 auto;
		padding-top: 60px;
		.news-img {
			width: 100%;
			margin-bottom: 20px;
			cursor: pointer;
		}
		.date {
			color: $gr3;
			margin-bottom: 10px;
		}
		.title {
			font-weight: 400;
			transition: .3s;
			@include fz3();
			margin-bottom: 30px;
			cursor: pointer;
			&:hover {
				color: $rd1;
			}
		}
		.describe {
			text-align: left;
			margin-bottom: 30px;
		}
		.el-col {
			padding: 0px 15px;
		}
	}
}
</style>
