import request from '@/utils/request'

export function getMovies(data) {
	return request({
		url: '/api/movie',
		method: 'get',
		data
	})
}
