import Vue from 'vue'
import Router from 'vue-router'
import Layout from '@/views/layout/Layout'
import Home from '@/views/Home'

Vue.use(Router)

export default new Router({
	routes: [
		{
			path: '/',
			component: Layout,
			children: [
				{
					path: '',
					component: Home
				},
				{
					path: 'movies',
					component: () => import('./views/movies/Movies.vue')
				}
			]
		},
		// {
		// 	path: '/movies',
		// 	component: () => import('./views/movies/Movies.vue')
		// }
	]
})
