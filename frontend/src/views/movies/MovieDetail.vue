<template>
    <div class="movie">
        <div class="banner">
			<p class="slogan">FACTS & INFO</p>
			<h2>MOVIE DETAILS</h2>
		</div>
		<div class="container">
			<div class="title">ANT-MAN AND THE WASP</div>
			<el-row :gutter="40">
				<el-col :xs="24" :sm="6">
					<img class="w100p" src="../../assets/images/index/gallery-3.jpg">
				</el-col>
				<el-col :xs="24" :sm="6">
					<div class="movie-desc">
						<div class="ranks">
							<i class="iconfont icon-collection_fill fill"></i>
							<i class="iconfont icon-collection_fill fill"></i>
							<i class="iconfont icon-collection_fill fill"></i>
							<i class="iconfont icon-collection_fill fill"></i>
							<i class="iconfont icon-collection_fill"></i>
						</div>
						<div class="info">
							<span class="head">Genre:</span>
							<span class="body red">Action</span>
						</div>
						<div class="info">
							<span class="head">Release year:</span>
							<span class="body">2018</span>
						</div>
						<div class="info">
							<span class="head">Running time:</span>
							<span class="body">120 min</span>
						</div>
						<div class="info">
							<span class="head">Country:</span>
							<span class="body red">USA</span>
						</div>
						<p class="describe">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.<br>
							Sed velit dignissim sodales ut eu sem integer. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum.
						</p>
					</div>
				</el-col>
				<el-col :xs="24" :sm="12">
					<div class="trailor-box">
						3
					</div>
				</el-col>
			</el-row>
			<div class="title">ACTOR CAST</div>
			<div class="title">REVIEWS</div>
		</div>
    </div>
</template>

<script>
export default {
	name: 'MovieDetail'
}
</script>

<style lang="scss" scoped>
@import '../../styles/mixins.scss';
.movie {
    .banner {
		background-image: url('../../assets/images/index/bg1.jpg');
		background-size: cover;
		padding: 100px 0;
		color: #fff;
		.slogan {
			@include fz4();
			margin-bottom: 20px;
			&:before,
			&:after {
				content: '';
				display: inline-block;
				width: 80px;
				height: 2px;
				background-color: #fff;
				vertical-align: middle;
				margin: 0 20px;
			}
			@media screen and (max-width: 767px){
				&:before,
				&:after {
					display: none;
				}
			}
		}
		h2 {
			@include fz5();
		}
	}
	.title {
		@include title();
		padding-top: 50px;
	}
	.el-row {
		margin: 0 auto !important;
	}
	.movie-desc {
		text-align: left;
		@include fz2();
		.ranks {
			margin-bottom: 30px;
			.icon-collection_fill {
				color: #b7b7b7;
				font-size: 20px;
				letter-spacing: -3px;
				&.fill {
					color: #f9be30;
				}
			}
		}
		.info {
			margin-bottom: 6px;
			.head {
				font-weight: bold;
			}
			.body {
				padding-left: 8px;
				&.red {
					color: $rd1;
				}
			}
		}
		.describe {
			line-height: 1.6;
		}
	}
}
</style>
