<template>
  <ais-index
    app-id="N40D9JHVMN"
    api-key="6cfda334ecafdd4fdeeaccdbf52598d6"
    index-name="users"
    :cache="false"
  >
    <ais-search-box>
      <div class="input-group">
        <ais-input placeholder="Search Users" :class-names="{'ais-input': 'form-control'}" autofocus></ais-input>
         <span class="input-group-btn">
           <ais-clear :class-names="{'ais-clear': 'btn btn-primary'}"></ais-clear>
           <!-- <button @click="searchStore.refresh()">Refresh</button> -->
         </span>
      </div>
    </ais-search-box>

    <ais-results inline-template :results-per-page="10">
      <table-results></table-results>
    </ais-results>
  </ais-index>
</template>

<script>
export default{
  mounted(){

  },
  data(){
    return{

    }
  },
  methods:{
  }
}
</script>
