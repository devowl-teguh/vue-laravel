<template>
    <div class="container">
      <div class="row">
          <div class="col-md-3 offset-m-3">
            <img :src="'./image/kingfisher.jpg'" alt="..." class="img-thumbnail">
          </div>
      </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
