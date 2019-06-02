import axios from 'axios'

const service = axios.create({
	// baseURL: '',
	timeout: 30 * 1000
})

service.interceptors.request.use(
	config => {
		// config.headers['content-type'] = 'application/json';
		// config.headers['X-XSRF-TOKEN'] = 'eyJpdiI6ImkrTkNmVTVBcEVPc0UzaVVBcDgzN1E9PSIsInZhbHVlIjoiYnRQd280MVwvSHBuM0ZNTVZvMTF2enlhZDJMeDU2UUU3NU4xc0g4YVZOazVvMlwvRTlneVJaM28yVUE2OWdKWnE2IiwibWFjIjoiY2EwMjk3YTVkNTVhMDUzN2ZjOWZhMjZkMWFmMjllMzMxOGI3ODViZjhhZGIwOGM2M2ZkYTU0OGQ3ZjNmOTgwMCJ9';
		return config;
	},
	error => {
		return Promise.reject(error)
	}
)

service.interceptors.response.use(
	response => {
		return response.data
	},
	error => {
		return Promise.reject(error)
	}
)

export default service
