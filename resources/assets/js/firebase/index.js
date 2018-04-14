import Firebase from 'firebase'
const firebaseApp = Firebase.initializeApp({
  apiKey: 'AIzaSyCc2CYLmmzF7w3Xx_im2kATozcxPXXdwSg',
  authDomain: "vuejs-firebase-4e815.firebaseapp.com",
  databaseURL: "https://vuejs-firebase-4e815.firebaseio.com",
  projectId: "vuejs-firebase-4e815",
  storageBucket: "vuejs-firebase-4e815.appspot.com",
  messagingSenderId: "945415338414"
})
// const db = firebaseApp.database()
export default firebaseApp
