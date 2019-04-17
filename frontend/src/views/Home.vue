<template>
    <div class="home">
		<el-carousel type="card" :autoplay="false" trigger="click" arrow="never" :height="sliderHeight">
			<el-carousel-item v-for="item in sliderList" :key="item.name">
				<div class="slider-img" :style="{'background-image': `url(${item.img})`}"></div>
				<h2>{{item.name}}</h2>
				<h3>{{item.description}}</h3>
			</el-carousel-item>
		</el-carousel>
		<div class="area area1">
			<h2>WATCH MOVIES ONLINE</h2>
			<div class="tab-wrapper">
				<div class="tab active">Top Rated</div>
				<div class="tab">New Releases</div>
				<div class="tab">Comming Soon</div>
			</div>
			<el-row :gutter="20">
				<el-col :xs="12" :sm="6" :md="6" v-for="i in 6" :key="i">
					<el-card :body-style="{ padding: '0px 0px 15px' }" shadow="hover">
						<img src="../assets/images/index/gallery-1.jpg">
						<h4>Ant-Man and the Wasp</h4>
						<p class="info">2018, USA, Action</p>
						<i class="iconfont icon-collection_fill fill"></i>
						<i class="iconfont icon-collection_fill fill"></i>
						<i class="iconfont icon-collection_fill fill"></i>
						<i class="iconfont icon-collection_fill fill"></i>
						<i class="iconfont icon-collection_fill"></i>
					</el-card>
				</el-col>
			</el-row>
		</div>
		<div class="area area2">
			<h2>COMING SOON</h2>
			<el-row :gutter="20">
				<el-col :xs="24" :sm="12">
					<div class="trailer-box">
						<img src="../assets/images/index/trailer1.jpg">
						<p><span class="movie-name">Deadpool 2</span>The Trailer</p>
					</div>
				</el-col>
				<el-col :xs="24" :sm="12">
					<div class="trailer-info">
						<h3>DEADPOOL 2</h3>
						<div class="detail">
							<span class="lr">1h 59min</span>
							<span class="lr">Action, Adventure, Comedy</span>
							<span>May 18, 2018 (USA)</span>
						</div>
						<p class="story">After losing Vanessa (Morena Baccarin), the love of his life, 4th-wall breaking mercenary Wade Wilson aka Deadpool (Ryan Reynolds) must assemble a team and protect a young, full-figured mutant Russell Collins aka Firefist (Julian Dennison) from Cable (Josh Brolin).</p>
						<div class="other">
							<p><span class="title">Director:</span>David Leitch</p>
							<p><span class="title">Writers:</span>Rhett Reese, Paul Wernick</p>
							<p><span class="title">Stars:</span>Ryan Reynolds, Josh Brolin, Morena Baccarin</p>
						</div>
					</div>
				</el-col>
				<el-col :xs="24" :sm="24">
					<div class="add-btn">ADD TO WATCHLIST</div>
				</el-col>
			</el-row>
		</div>
		<div class="area area3">
			<h2>TOP BOX OFFICE</h2>
			<el-row :gutter="20">
				<el-col :xs="12" :sm="6" :md="6" v-for="i in 4" :key="i">
					<el-card :body-style="{ padding: '0px 0px 15px' }" shadow="hover">
						<img src="../assets/images/index/gallery-2.jpg">
						<h4>Ant-Man and the Wasp</h4>
						<p class="info">2018, USA, Action</p>
						<i class="iconfont icon-collection_fill fill"></i>
						<i class="iconfont icon-collection_fill fill"></i>
						<i class="iconfont icon-collection_fill fill"></i>
						<i class="iconfont icon-collection_fill fill"></i>
						<i class="iconfont icon-collection_fill"></i>
						<div class="buy-block">
							<div class="prize">$29.00</div>
							<div class="btn">BUY MOVIE</div>
						</div>
					</el-card>
				</el-col>
			</el-row>
		</div>
		<div class="area area4">
			<h2>NEWSLETTER</h2>
			<div class="sub-wrapper">
				<p class="sub-txt">Enter your email address to receive all news, updates on new arrivals, special offers and other discount information.</p>
				<el-row :gutter="10">
					<el-col :xs="24" :sm="14">
						<input class="emi" type="text" placeholder="Your e-mail...">
					</el-col>
					<el-col :xs="24" :sm="10">
						<div class="sub-btn">SUBSCRIBE</div>
					</el-col>
				</el-row>
			</div>
		</div>
		<div class="area area5">
			<h2>RECENT NEWS</h2>
			<el-row :gutter="20">
				<el-col :xs="24" :sm="8" v-for="i in 3" :key="i">
					<el-card :body-style="{ padding: '0px' }">
						<img src="../assets/images/index/news1.jpg" class="news-img">
						<h3>"Better Call Saul" Writer Offers Advice</h3>
						<p class="date">December 26, 2018</p>
						<p class="content">“Better Call Saul” writer Gennifer Hutchison offered some advice to Jason Blum after the Blumhouse Productions chief said in an interview that he’s “trying” to hire a woman...</p>
					</el-card>
				</el-col>
			</el-row>
			<div class="blog-btn">view all blog posts</div>
		</div>
    </div>
</template>

<script>
export default {
	name: 'Home',
	data() {
		return {
			sliderList: [
				{
					name: 'Black Mirror',
					description: '2011, USA, Drama, Sci-Fi, Thriller',
					img: require('../assets/images/index/slider1.jpg')
				},
				{
					name: 'First Man (2018)',
					description: '2018, USA, Biography, Drama, History',
					img: require('../assets/images/index/slider2.jpg')
				},
				{
					name: 'Daredevil',
					description: '2015, USA, Drama, Sci-Fi, Thriller',
					img: require('../assets/images/index/slider3.jpg')
				}
			]
		}
	},
	computed: {
		deviceWidth() {
			return this.$store.state.deviceWidth;
		},
		sliderHeight() {
			if (this.deviceWidth < 768) {
				return '250px';
			} else if (this.deviceWidth < 1700) {
				return '540px';
			} else {
				return '660px';
			}
		}
	}
}
</script>

<style lang="scss" scoped>
@import '../styles/mixins.scss';
.home {
	.el-carousel {
		padding: 20px 0px;
		box-sizing: border-box;
		background-image: url('../assets/images/index/bg1.jpg');
		background-size: cover;
		.el-carousel__item {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			text-align: left;
			box-sizing: border-box;
			padding: 0 10px;
			background-color: #170201;
			.slider-img {
				width: 100%;
				padding-bottom: 60%;
				box-sizing: border-box;
				background-size: cover;
				background-position: center center;
			}
			h2, h3 {
				width: 100%;
			}
			h2 {
				color: #fff;
				@include fz3();
				margin-top: 10px;
			}
			h3 {
				color: #ccc;
				@include fz2();
				font-weight: 400;
			}
		}
	}
	.area {
		box-sizing: border-box;
		padding: 40px 20px;
		h2 {
			font-size: 45px;
			margin-bottom: 50px;
			position: relative;
			&:after {
				content: '';
				display: block;
				width: 100px;
				height: 2px;
				background-color: #555;
				margin: 20px auto 0;
			}
		}
		&.area1,
		&.area3 {
			background-color: #fff;
			.el-row {
				max-width: 1200px;
				margin: 0 auto !important;
			}
			.tab-wrapper {
				display: flex;
				justify-content: center;
				margin-bottom: 40px;
				.tab {
					color: $rd1;
					background-color: #fff;
					border: 2px solid $rd1;
					padding: 15px 30px;
					margin: 5px 10px;
					border-radius: 5px;
					cursor: pointer;
					transition: .5s;
					font-weight: bold;
					@include fz2();
					&.active,
					&:hover {
						color: #fff;
						background-color: $rd1;
					}
				}
			}
			.el-card {
				text-align: left;
				margin-bottom: 30px;
				img {
					width: 100%;
					margin-bottom: 20px;
				}
				h4 {
					margin-bottom: 10px;
					transition: .5s;
					cursor: pointer;
					&:hover {
						color: $rd1;
					}
				}
				.info {
					color: $gr1;
				}
				.buy-block {
					display: flex;
					justify-content: space-between;
					@include fz3();
					margin-top: 10px;
					.btn {
						color: $rd1;
						cursor: pointer;
						transition: .5s;
						font-weight: bold;
						&:hover {
							color: #000;
						}
					}
					@media screen and (max-width: 767px) {
						flex-direction: column;
					}
				}
			}
		}
		&.area2,
		&.area4 {
			background-color: $bk1;
			h2 {
				color: #fff;
				&:after {
					background-color: $rd1;
				}
			}
		}
		&.area2 {
			.el-row {
				max-width: 1200px;
				margin: 0 auto !important;
				.trailer-box {
					position: relative;
					color: #fff;
					img {
						width: 100%;
					}
					p {
						@include fz3();
						position: absolute;
						left: 20px;
						bottom: 20px;
						.movie-name {
							cursor: pointer;
							transition: .5s;
							border-right: 2px solid #fff;
							padding-right: 10px;
							margin-right: 10px;
							&:hover {
								color: $rd1;
							}
						}
					}
				}
				.trailer-info {
					text-align: left;
					color: #fff;
					h3 {
						letter-spacing: 3px;
						font-weight: 400;
						@include fz4();
						margin-bottom: 20px;
						cursor: pointer;
						display: inline-block;
						transition: .5s;
						&:hover {
							color: $rd1;
						}
					}
					.detail {
						margin-bottom: 20px;
						color: $gr2;
						span {
							margin-right: 10px;
							&.lr {
								&:after {
									content: '';
									display: inline-block;
									width: 2px;
									height: 12px;
									background-color: $rd1;
									margin-left: 10px;
								}
							}
						}
					}
					.story {
						margin-bottom: 20px;
						line-height: 1.6;
					}
					.other {
						color: $gr1;
						p {
							line-height: 2;
							.title {
								color: #fff;
								font-weight: bold;
								margin-right: 10px;
							}
						}
					}
				}
				.add-btn {
					border: 2px solid $rd1;
					color: #fff;
					display: inline-block;
					padding: 20px 40px;
					font-weight: bold;
					cursor: pointer;
					border-radius: 5px;
					margin: 50px 0;
					transition: .5s;
					&:hover {
						background-color: $rd1;
					}
				}
			}
		}
		&.area4 {
			background-image: url('../assets/images/index/bg2.jpg');
			background-size: cover;
			.sub-wrapper {
				max-width: 570px;
				margin: 0 auto;
				@include fz3();
				.sub-txt {
					color: #fff;
					line-height: 1.8;
					margin-bottom: 30px;
				}
				.emi {
					width: 100%;
					border-radius: 7px;
					background-color: rgba(white, .3);
					border: none;
					height: 60px;
					line-height: 60px;
					margin-bottom: 10px;
					box-sizing: border-box;
					padding: 10px;
					color: #fff;
					&::placeholder {
						color: #fff;
					}
				}
				.sub-btn {
					background-color: $rd1;
					color: #fff;
					cursor: pointer;
					transition: .5s;
					border-radius: 7px;
					height: 60px;
					line-height: 60px;
					box-sizing: border-box;
					border: 2px solid $rd1;
					&:hover {
						background-color: transparent;
					}
				}
			}
		}
		&.area5 {
			.el-row {
				max-width: 1200px;
				margin: 0 auto !important;
				text-align: left;
				.el-col {
					margin-bottom: 20px;
				}
				.news-img {
					width: 100%;
					margin-bottom: 15px;
				}
				h3 {
					@include fz3();
					transition: .5s;
					cursor: pointer;
					margin-bottom: 12px;
					&:hover {
						color: $rd1;
					}
				}
				.date {
					@include fz2();
					color: #ccc;
					margin-bottom: 12px;
				}
				.content {
					@include fz2();
					line-height: 1.4;
				}
			}
			.blog-btn {
				border: 2px solid $rd1;
				color: $rd1;
				display: inline-block;
				padding: 20px 40px;
				font-weight: bold;
				cursor: pointer;
				border-radius: 5px;
				margin: 50px 0;
				transition: .5s;
				@include fz3();
				&:hover {
					background-color: $rd1;
					color: #fff;
				}
			}
		}
	}
	.icon-collection_fill {
		color: #b7b7b7;
		font-size: 20px;
		letter-spacing: -3px;
		&.fill {
			color: #f9be30;
		}
	}
	@media screen and (max-width: $sm) {
		.area {
			h2 {
				font-size: 24px;
				margin-bottom: 30px;
			}
		}
        .area1 {
			.tab-wrapper {
				flex-direction: column;
			}
		}
    }
}
</style>

<style lang="scss">
.el-carousel__mask {
	background-color: transparent !important;
}
</style>
