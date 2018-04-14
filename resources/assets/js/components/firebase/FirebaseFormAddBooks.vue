<template>
    <div class="card w-100">
        <div class="card-header">
          Add New Books
        </div>
        <div class="card-body">
          <form v-on:submit.prevent="addBook">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-8">
                <input v-model="newBook.title" type="text" class="form-control" placeholder="Title">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Author</label>
              <div class="col-sm-8">
                <input v-model="newBook.author" type="text" class="form-control" placeholder="Author">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Url</label>
              <div class="col-sm-8">
                <input v-model="newBook.url" type="text" class="form-control" placeholder="Url">
              </div>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </form>
        </div>
      </div>
</template>

<script>
export default {
    mounted() {
      console.log(this.bookRef);
    },
    data(){
      return{
        newBook :
        {title: '',
        author: '',
        url: ''}
      }
    },
    props:['bookRef'],
    methods:{
      addBook(){
        this.bookRef.push(this.newBook);
      }
    }
}
</script>
