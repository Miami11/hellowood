<template>
    <el-container>
        <el-header>
            <div class="header-container">
                <img class="logo" src="@/assets/images/common/logo.png">
                <div class="menu" :class="{'open': menuOpen}">
                    <div class="tab active">Home</div>
                    <div class="tab">Movies</div>
                    <div class="tab">News</div>
                    <div class="tab">Shop</div>
                    <div class="tab">Cart</div>
                </div>
                <div class="ham" :class="{'open': menuOpen}" @click="toggleMenu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
        </el-header>
        <el-main>
            <router-view/>
        </el-main>
        <el-footer>
            FOOTER<br>
            Logo通過<a href="https://www.designevo.com/tw/" title="免費線上logo製作軟體">DesignEvo</a>設計製作
        </el-footer>
    </el-container>
</template>

<script>
export default {
	name: 'Layout',
	data() {
		return {
			menuOpen: false
		}
	},
	methods: {
		toggleMenu() {
			this.menuOpen = !this.menuOpen;
		}
	}
}
</script>

<style lang="scss" scoped>
@import '../../styles/mixins.scss';
.el-container {
    width: 100%;
    box-sizing: border-box;
    margin: 0 auto;
    @media screen and (min-width: 768px) {
		min-width: 1200px;
    }
    .el-header {
        background-color: $bk1;
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            img {
                &.logo {
                    width: 150px;
                    cursor: pointer;
                }
            }
            .menu {
                display: flex;
                font-size: $fz3;
                font-weight: bold;
                color: #fff;
                transition: 1s;
                .tab {
                    padding: 0 15px;
                    position: relative;
                    cursor: pointer;
                    transition: .5s;
                    &:after {
                        content: '';
                        display: block;
                        position: absolute;
                        bottom: -10px;
                        left: 0;
                        width: 100%;
                        height: 4px;
                        background-color: $rd1;
                        border-radius: 0 2px 2px 0;
                        transition: .5s;
                        transform: scaleX(0);
                        transform-origin: left;
                        opacity: 0;
                    }
                    &:hover,
                    &.active {
                        color: $rd1;
                        &:after {
                            transform: scaleX(1);
                            opacity: 1;
                        }
                    }
                }
                @media screen and (max-width: $sm) {
                    position: fixed;
                    width: calc(100vw - 80px);
                    height: 100vh;
                    background-color: $bk1;
                    top: 0;
                    left: calc(80px - 100vw);
                    flex-direction: column;
					justify-content: space-evenly;
					z-index: 100;
                }
                &.open {
                    left: 0;
                }
            }
            .ham {
                display: none;
                position: relative;
                width: 48px;
                height: 48px;
                @media screen and (max-width: $sm) {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }
                .bar {
                    width: 30px;
                    height: 4px;
                    background-color: #fff;
                    margin: 3px 0;
                    transition: .5s;
                }
                &.open {
                    .bar {
                        &:first-child {
                            transform: rotateZ(45deg);
                            transform-origin: top left;
                        }
                        &:nth-child(2) {
                            transform: translateX(30px);
                            opacity: 0;
                        }
                        &:last-child {
                            transform: rotateZ(-45deg);
                            transform-origin: bottom left;
                        }
                    }
                }
            }
        }
    }
    .el-main {
		min-height: calc(100vh - 120px);
		padding: 0;
    }
}
</style>
