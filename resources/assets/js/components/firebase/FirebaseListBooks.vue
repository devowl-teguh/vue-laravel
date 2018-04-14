<template>
  <div class="card w-100">
      <div class="card-header">
        Book List
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Url</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="book in books">
              <td>{{book.title}}</td>
              <td>{{book.author}}</td>
              <td>{{book.url}}</td>
              <td><a href="#" v-on:click="removeBook(book)"><i class="fa fa-trash"></i></a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</template>

<script>
export default {
    mounted() {
      //do something after mounting vue instance
    },
    data(){
      return{
        Hello: ''
      }
    },
    props:['bookRef', 'books'],
    methods:{
      removeBook(book){
        this.bookRef.child(book['.key']).remove();
      }
    }
}
</script>
