<template>
    <div class="col-md-10 offset-md-2">
        <br />
        <div class="row">
          <div class="card w-100">
            {{user}}
              <!-- <div class="card-header">
                User List
              </div>
              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users">
                      <td>{{user.name}}</td>
                      <td>{{user.email}}</td>
                      <td><a href="#" v-on:click="removeUser(user)"><i class="fa fa-trash"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div> -->
            </div>
        </div>
    </div>
</template>

<script>
import firebase from '../../firebase';

const db = firebase.database()
let userRef = db.ref('users');
export default {
    mounted() {
      this.$nextTick(function () {
       // Code that will run only after the
       // entire view has been rendered
       let self = this;
       firebase.auth().onAuthStateChanged(function(user) {
          if (user) {
            self.user.displayName =  user.displayName;
            // user.updateProfile({
            //   displayName: "Teguh Hadi Pratama",
            //   photoURL: "https://example.com/jane-q-user/profile.jpg"
            // }).then(function() {
            //   // Update successful.
            //   var displayName = user.displayName;
            //   console.log(displayName);
            // }).catch(function(error) {
            //   // An error happened.
            //   console.log(error);
            // });
            // User is signed in.

          } else {
            // User is signed out.
            // ...
          }
        });
        // user.updateProfile({
        //   displayName: "Teguh Hadi Pratama",
        //   photoURL: "https://example.com/jane-q-user/profile.jpg"
        // }).then(function() {
        //   // Update successful.
        //   console.log('successful');
        // }).catch(function(error) {
        //   // An error happened.
        //   console.log(error);
        // });
      })
    },
    data(){
      return{
        userRef : userRef,
        userData : []
      }
    },
    firebase: {
      users:  userRef
    },
    methods:{
      removeUser(user){
        this.userRef.child(user['.key']).remove();
      }
    }
}
</script>
