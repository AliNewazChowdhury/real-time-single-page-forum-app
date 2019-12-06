import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


const routes =[
    {path:'/foo', component: foo },
    {path: '/path', component: path }
]


const router = new VueRouter({
    routes
})


export default router