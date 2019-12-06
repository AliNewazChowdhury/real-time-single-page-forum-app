import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import login from '../components/login/Login'
const routes =[
    {path:'/login', component: login },
]


const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})


export default router