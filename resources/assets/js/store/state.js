const state  = {
  image: '',
  login: true,
  register: true,
  logout: false,
  user: false,
  count: 0,
  alert_error:false,
  products:[
    {id:'1' ,name:'Banana', price:20},
    {id:'2' ,name:'Apel', price:50},
    {id:'3' ,name:'Manggo', price:60},
    {id:'4' ,name:'Orange', price:30}
  ],
  selectProduct:[]
}
export default state;
