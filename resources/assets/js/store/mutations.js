const mutations = {
  hideLogin(state){
    state.login = false,
    state.register = false,
    state.logout = true,
    state.user = true
  },
  showLogin(state){
    state.login = true,
    state.register = true,
    state.logout = false,
    state.user = false
  },
  fetch_users(state, users){
    state.users = users
  },
  increment (state) {
    state.count++
  },
  alert_error_update(state, val){
    state.alert_error = val
  },
  product_select_update(state, val){
    state.selectProduct = val
  }
}

export default mutations;
