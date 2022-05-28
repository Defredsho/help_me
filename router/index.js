import { createRouter, createWebHistory } from 'vue-router'
import Shark from '../components/Shark.vue'
import Library from '../components/Library.vue'
const routes = [
	{
		path: '/shark',
		name: 'Shark',
		component : Shark,
	},
	{
		path: '/library',
		name: 'Library',
		component : Library,
	},
	{
		path: '/login',
		name: 'Login',
		component : () => import('../views/Login.vue')
	},
	{
		path: '/',
		name: 'path',
		component : () => import('../views/Login.vue')
	}
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
