<template>
  <div class="container">
    <div class="row">
      <div class="col-3">
        <button class="btn btn-primary btn-lg" v-on:click="pushEmail" >Push Email</button>
      </div>
      <div class="col-3">
        <button class="btn btn-primary btn-lg">Facebook</button>
      </div>
      <div class="col-3">
        <button class="btn btn-danger btn-lg">Google</button>
      </div>

    </div>
  </div>
</template>

<script>
export default{
  mounted(){

  },
  created(){
  },
  data(){
    return{
      errors:[],
      email:'',
      name:'',
      password:'',
      users:[]
    }
  },
  methods:{
    checkForm(e){
      e.preventDefault;
    },
    pushEmail(){
      this.$http.get('/api/send-mail',{})
      .then(response => {
        alert(response.body);
      }, response => {
        console.log(response);
        // error callback
      });
    }
  }
}
</script>
