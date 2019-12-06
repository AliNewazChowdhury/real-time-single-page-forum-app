<template>
  <div>
    <v-toolbar>
      <v-toolbar-title>Ishmam</v-toolbar-title>

      <v-spacer></v-spacer>

      <div>
        <router-link to='/forum'>
          <v-btn text>forum</v-btn>
        </router-link>
        <router-link to="/category">
          <v-btn text>Category</v-btn>
        </router-link>
        <router-link>
          <v-btn text>Ask Question</v-btn>
        </router-link>
        <router-link to="/login">
          <v-btn text>Log-in</v-btn>
        </router-link>
      </div>

    </v-toolbar>
  </div>
</template>


<script>
export default {
}
</script>
<style>

</style>