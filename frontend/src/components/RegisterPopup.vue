<template>
	<div class="register-pop">
		<div class="pop-body">
			<div class="pop-container">
				<h2>Register</h2>
				<img class="close-img" src="../assets/images/icons/close1.png" @click="close">
				<div class="row" :class="{'focus': emailFocus}">
					<span>e-mail</span>
					<input
						type="text"
						v-model="email"
						@focus="emailFocus = true"
						@blur="emailFocus = false"
					>
				</div>
				<div class="row" :class="{'focus': pswFocus}">
					<span>password</span>
					<input
						type="password"
						v-model="password"
						@focus="pswFocus = true"
						@blur="pswFocus = false"
					>
				</div>
				<p class="sign-up">I have a account, <span @click="toggleLoginPop">sign in</span></p>
				<div class="pop-btn" @click="register">Sign Up</div>
			</div>
		</div>
	</div>
</template>

<script>
import { register } from '@/api/member'

export default {
	name: 'RegisterPopup',
	data() {
		return {
			emailFocus: false,
			pswFocus: false,
			email: '',
			password: ''
		}
	},
	methods: {
		close() {
			this.$store.dispatch('closeRegisterPop');
		},
		toggleLoginPop() {
			this.close();
			this.$store.dispatch('showLoginPop');
		},
		register() {
			register({
				email: '123@ew.com',
				name: 'e',
				phone: '12321',
				password: '31d'
			}).then(res => {
				console.log(res);
			});
		}
	}
}
</script>

<style lang="scss" scoped>
@import '../styles/mixins.scss';
.register-pop {
	@include mask();
	text-align: left;
	.pop-body {
		width: 86%;
		max-width: 400px;
		box-sizing: border-box;
		padding: 40px 20px;
		background-color: #fff;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		border-radius: 16px;
		box-shadow: -4px -4px 0px 0px inset $rd1;
		.pop-container {
			max-width: 320px;
			margin: 0 auto;
			h2 {
				margin-bottom: 20px;
				position: relative;
				&:after {
					content: '';
					display: block;
					width: 120px;
					height: 4px;
					background-color: $rd1;
					@include ab-center();
				}
			}
			.close-img {
				width: 30px;
				position: absolute;
				top: 6px;
				right: 6px;
				cursor: pointer;
			}
			.row {
				margin-bottom: 10px;
				position: relative;
				&:after {
					content: '';
					display: block;
					width: 0%;
					height: 2px;
					background-color: $rd2;
					bottom: 0;
					left: 0;
					position: absolute;
					transition: .5s;
				}
				&.focus {
					&:after {
						width: 100%;
					}
				}
				span {
					padding-left: 0px;
				}
				input {
					display: block;
					width: 100%;
					padding: 5px;
					height: 42px;
					box-sizing: border-box;
					border: 1px solid $gr3;
				}
			}
			.sign-up {
				text-align: center;
				margin-bottom: 20px;
				margin-top: 20px;
				span {
					cursor: pointer;
					color: $rd2;
					&:hover {
						text-decoration: underline;
					}
				}
			}
			.pop-btn {
				width: 100%;
				margin: 0 auto;
				height: 42px;
				line-height: 42px;
				box-sizing: border-box;
				font-weight: bold;
				transition: .5s;
				@include fz3();
				text-align: center;
				cursor: pointer;
				background-color: $rd1;
				color: #fff;
				&:hover {
					background-color: $bk2;
				}
			}
		}
	}
}
</style>
