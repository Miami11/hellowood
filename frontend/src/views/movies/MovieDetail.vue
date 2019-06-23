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
						<img src="../../assets/images/index/trailer2.jpg">
					</div>
				</el-col>
			</el-row>
			<div class="title">ACTOR CAST</div>
			<el-row :gutter="20">
				<el-col :xs="12" :sm="6" v-for="i in 4" :key="i">
					<div class="actor-box">
						<img src="../../assets/images/index/actor1.jpg">
						<h4 class="name">David Lee</h4>
					</div>
				</el-col>
			</el-row>
			<div class="title">REVIEWS</div>
			<div class="review-wrapper">
				<el-row :gutter="20">
					<el-col :xs="24" :sm="24" v-for="i in 3" :key="i">
						<div class="review-box">
							<div class="left"></div>
							<div class="right">
								<p class="name">Jack Wilson</p>
								<p class="date">April 24, 2018 at 10:46 am</p>
								<p class="content">Quam pellentesque nec nam aliquam. Ornare lectus sit amet est placerat. At lectus urna duis convallis convallis tellus.</p>
							</div>
						</div>
					</el-col>
				</el-row>
			</div>
			<div class="your-reply">
				<h4>LEAVE YOUR COMMENT</h4>
				<textarea cols="30" rows="10"></textarea>
				<div class="submit-btn">SUBMIT</div>
			</div>
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
		@include subpage-banner();
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
	.trailor-box {
		img {
			width: 100%;
		}
	}
	.actor-box {
		position: relative;
		img {
			width: 100%;
		}
		h4 {
			color: #fff;
			@include fz3();
			position: absolute;
			bottom: 20px;
			left: 0;
			width: 100%;
		}
	}
	.review-wrapper {
		max-width: 800px;
		margin: 0 auto;
		.review-box {
			display: flex;
			margin-bottom: 20px;
			.left {
				width: 70px;
				height: 70px;
				border-radius: 50%;
				background-color: #ccc;
			}
			.right {
				flex: 1;
				padding-left: 20px;
				text-align: left;
				@include fz2();
				p {
					&.name {
						cursor: pointer;
						color: $rd1;
					}
					&.date {
						color: $gr1;
						margin-bottom: 12px;
					}
					&.content {
						line-height: 1.4;
					}
				}
			}
		}
	}
	.your-reply {
		margin-top: 50px;
		padding: 0 20px 50px;
		h4 {
			@include fz3();
			margin-bottom: 20px;
		}
		textarea {
			background-color: rgba(246,246,246,.8);
			border: none;
			border-radius: 10px;
			width: 100%;
			max-width: 600px;
			margin-bottom: 20px;
		}
		.submit-btn {
			width: 240px;
			height: 60px;
			line-height: 60px;
			border-radius: 7px;
			background-color: $rd1;
			cursor: pointer;
			color: #fff;
			transition: .5s;
			text-align: center;
			font-weight: bold;
			margin: 0 auto;
			&:hover {
				background-color: $gr2;
			}
		}
	}
}
</style>
