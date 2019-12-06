<template > 
    <div>
        <toolbar></toolbar> 
        <router-view></router-view>
        <app-footer></app-footer>
    </div> 
</template>

<script>
import toolbar from './toolbar'
import appfooter from './AppFooter'
import Login from './login/Login'
export default {
    name: "AppHome",
    components: {
       'toolbar': toolbar,
       'app-footer': appfooter,
       'login': Login
       }
}
</script>

<style>

</style>