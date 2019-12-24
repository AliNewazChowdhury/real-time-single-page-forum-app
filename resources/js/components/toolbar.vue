<template>
  <div>
    <v-toolbar >
      <v-toolbar-title>Ishmam</v-toolbar-title>

      <v-spacer></v-spacer>

      <div > 
          <router-link
            v-model="link"
          v-for="item in item"
          :key="item.title"
          :to="item.to" 
          >
            <v-btn v-if="item.show"
                text>{{item.title}}</v-btn>
          </router-link>
      </div>

    </v-toolbar>
  </div>
</template>


<script>
export default {
  data(){
     return{ 
       link: 0,
       item:[
        {title: 'Forum', to: '/forum',show: true},
        {title: 'Ask Question', to: '/ask', show: User.loggedIn()},
        {title: 'Category', to: '/category', show: User.loggedIn()},
        {title: 'Login', to: '/login', show: !User.loggedIn()},
        {title: 'Log Out', to: '/logout', show: User.loggedIn()}
        ]    
      }
  },
  created(){
    EventBus.$on('logout',()=>{
      User.logout()
    })
  }

}
</script>
<style>

</style>