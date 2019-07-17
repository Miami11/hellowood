import Vue from 'vue'
import Router from 'vue-router'
import Layout from '@/views/layout/Layout'
import Home from '@/views/Home'

Vue.use(Router)

export default new Router({
	routes: [
		{
			path: '',
			component: Layout,
			children: [
				{
					path: '/',
					component: Home,
					meta: {
						needLogin: false
					}
				},
				{
					path: '/movies',
					component: () => import('./views/movies/Movies.vue'),
					meta: {
						needLogin: false
					}
				},
				{
					path: '/movies/:id',
					component: () => import('./views/movies/MovieDetail.vue'),
					meta: {
						needLogin: false
					}
				},
				{
					path: '/news',
					component: () => import('./views/news/News.vue'),
					meta: {
						needLogin: false
					}
				},
			]
		},
		// {
		// 	path: '/movies',
		// 	component: () => import('./views/movies/Movies.vue')
		// }
	],
	scrollBehavior (to, from, savedPosition) {
		if (savedPosition) {
			return savedPosition
		} else {
			return { x: 0, y: 0 }
		}
	}
})
