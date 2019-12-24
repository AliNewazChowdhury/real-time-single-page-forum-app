import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import login from '../components/login/Login'

import Signup from '../components/login/signup'
import Logout from '../components/login/Logout'
import Forum from '../components/forum/Forum'
const routes =[
    {path:'/login', component: login },
    {path:'/signup', component: Signup },
    {path:'/logout', component: Logout },
    {path:'/forum', component: Forum, name:'forum' }
]


const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})


export default router 