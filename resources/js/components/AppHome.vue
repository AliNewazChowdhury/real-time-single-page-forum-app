<template > 
    <div>
        <toolbar></toolbar> 
        <app-footer></app-footer>
    </div> 
</template>

<script>
import toolbar from './toolbar'
import appfooter from './AppFooter'
export default {
    name: "AppHome",
    components: {
       'toolbar': toolbar,
       'app-footer': appfooter
       }
}
</script>

<style>

</style>