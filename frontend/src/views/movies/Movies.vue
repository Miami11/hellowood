<template>
	<div class="movies">
		<div class="banner">
			<p class="slogan">BROWSE OUR MOVIES</p>
			<h2>CATALOG</h2>
		</div>
		<div class="search">
			<h3>WATCH MOVIES ONLINE</h3>
			<el-row>
				<el-col :xs="24" :sm="10">
					<input type="text" placeholder="Find Movies..." class="movie-input">
				</el-col>
				<el-col :xs="24" :sm="6">
					<div class="selectors">
						<span class="selected" @click="toggleSelect = true">{{category}}</span>
						<div class="options-box" v-show="toggleSelect">
							<div class="option" @click="switchCategory('All Categories')">All Categories</div>
							<div class="option" @click="switchCategory('Action')">Action</div>
							<div class="option" @click="switchCategory('Comedy')">Comedy</div>
							<div class="option" @click="switchCategory('Love')">Love</div>
							<div class="option" @click="switchCategory('Drama')">Drama</div>
						</div>
						<div class="option-mask" v-if="toggleSelect" @click="toggleSelect = false"></div>
					</div>
				</el-col>
				<el-col :xs="24" :sm="8">
					<div class="search-btn">SEARCH</div>
				</el-col>
			</el-row>
		</div>
		<div class="movie-list">
			<el-row :gutter="20">
				<el-col :xs="12" :sm="6" :md="6" v-for="i in 6" :key="i">
					<el-card :body-style="{ padding: '0px 0px 15px' }" shadow="hover">
						<img src="../../assets/images/index/gallery-1.jpg">
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
	</div>
</template>

<script>
import { getMovies } from '@/api/movie'

export default {
	name: 'Movies',
	data() {
		return {
			toggleSelect: false,
			category: 'All Categories'
		}
	},
	mounted() {
		getMovies().then(res => {
			console.log(res);
		});
	},
	methods: {
		switchCategory(type) {
			this.category = type;
			this.toggleSelect = false;
		}
	}
}
</script>

<style lang="scss" scoped>
@import '../../styles/mixins.scss';
.movies {
	.banner {
		@include subpage-banner();
	}
	.search {
		padding-top: 50px;
		h3 {
			@include title-underbar();
		}
		.el-row {
			max-width: 760px;
			margin: 0 auto 100px;
			@include fz2();
			.el-col {
				height: 60px;
			}
			.movie-input {
				width: 100%;
				height: 100%;
				box-sizing: border-box;
				padding: 0 20px;
				color: $gr3;
				background-color: rgba(246,246,246,.8);
				border: none;
				border-radius: 8px 0 0 8px;
				&::placeholder {
					color: $gr3;
				}
			}
			.selectors {
				height: 100%;
				background-color: #e7e7e7;
				border-radius: 0 8px 8px 0;
				position: relative;
				.selected {
					position: relative;
					z-index: 1;
					height: 100%;
					display: flex;
					justify-content: center;
					align-items: center;
					cursor: pointer;
				}
				.options-box {
					width: 100%;
					position: absolute;
					z-index: 1;
					left: 0;
					bottom: -108px;
					background-color: #f8f9fa;
					box-sizing: border-box;
					padding: 4px;
					height: 108px;
					overflow-y: auto;
					text-align: left;
					.option {
						height: 25px;
						line-height: 25px;
						cursor: pointer;
						&:hover {
							background-color: $rd1;
							color: #fff;
						}
					}
				}
				.option-mask {
					position: fixed;
					top: 0;
					left: 0;
					width: 100vw;
					height: 100vh;
					z-index: 0;
				}
			}
			.search-btn {
				color: #fff;
				background-color: $rd1;
				box-sizing: border-box;
				height: 100%;
				line-height: 60px;
				cursor: pointer;
				border-radius: 8px;
				transition: .5s;
				@include fz3();
				width: 92%;
				margin: 0 auto;
				&:hover {
					background-color: $bk1;
				}
			}
		}
	}
	.movie-list {
		.el-row {
			max-width: 1200px;
			margin: 0 auto !important;
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
</style>
