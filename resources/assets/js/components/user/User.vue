

<template>
  <div class="container">
    <algolia-component></algolia-component>
    <div class="row justify-content-center">
      <div class="col-6 form-user-list">
        <form method="post" action="/user"  @submit="checkForm">
          <p v-if="errors.length">
            <ul>
              <li v-for="error in errors">
                  {{error}}
              </li>
            </ul>
          </p>
          <div class="form-group">
            <label >Email address</label>
            <input type="email" v-model="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label >Name</label>
            <input type="text" v-model="name" class="form-control" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" v-model="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary" :disabled="disabled == 1? true:false">
            Submit
          </button>
          <i class="fa fa-spinner" v-show="spin"></i>
        </form>
      </div>
    </div>
    <div class="row justify-content-center table-user-list">
        <table class="table">
         <thead>
           <tr>
             <th scope="col">Name</th>
             <th scope="col">Email</th>
             <th scope="col">#</th>
           </tr>
         </thead>
         <tbody>
           <tr v-for="user in users">
             <td>{{user.name}}</td>
             <td>{{user.email}}</td>
             <td><a href="#" v-on:click="userDelete(user)" ><i class="fa fa-trash"></i></a></td>
           </tr>
         </tbody>
        </table>
    </div>
  </div>
</template>

<script>
export default{
  mounted(){

  },
  created(){
    this.fetchData();
  },
  data(){
    return{
      errors:[],
      email:'',
      name:'',
      password:'',
      users:[],
      disabled: 0,
      spin: 0
    }
  },
  methods:{
    checkForm(e){
      e.preventDefault();
      this.errors=[];
      if(!this.email) this.errors.push("Email required.");
      if(!this.name) this.errors.push("Name required.");
      if(!this.password) this.errors.push("Password required.");
      if(!this.errors.length){
        this.disabled = 1;
        this.spin = 1;
        this.$http.post('/api/user',
        {name: this.name, email: this.email, password: this.password}).then(response => {
          this.disabled = 0;this.spin = 0;
          // get body data
          this.fetchData();
          console.log(response.body);
        }, response => {
          console.log(response);
          // error callback
        });
      }
    },
    fetchData(){
      this.$http.get('/api/user',{})
      .then(response => {
        this.users = response.body;
        console.log(response.body);
      }, response => {
        console.log(response);
        // error callback
      });
    },
    userDelete(user){
      console.log(user);
      let userid = user.id;
      this.$http.delete('/api/user/'+userid,{})
      .then(response => {
        this.users = response.body;
        this.fetchData();
        console.log(response.body);
      }, response => {
        console.log(response);
      });
    }
  }
}
</script>
