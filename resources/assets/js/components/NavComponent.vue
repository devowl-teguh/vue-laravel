<template>
    <div>
      <ul class="nav">
        <li class="nav-item">
          <router-link class="nav-link active" to="/">Firebase</router-link>
          <!-- <a class="nav-link active" href="#">Firebase</a> -->
        </li>
        <li class="nav-item">
          <router-link class="nav-link active" to="/user">User</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link active" to="/search">Search</router-link>
        </li>
      </ul>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
