
const actions  = {
  alertErrorCommit({commit}, val){
    commit('alert_error_update',val)
  },
  increment({commit}){
    commit('increment')
  },
  createUser(){
    this.$http.get('/api/users',
    {name: this.name, email: this.email, password: this.password}).then(response => {
      // this.$router.push({ path: '/' });
      console.log(response.body);
    }, response => {
      console.log(response);
    });
  },
  productSelectCommit({commit}, val){
    commit('product_select_update',val)
  },
}
export default actions;
