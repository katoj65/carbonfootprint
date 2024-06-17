<template>
  <div>
  <!-- <nav>
  <router-link to="/">Home</router-link> |
  <router-link to="/about">About</router-link>
  </nav> -->
  <router-view/>
  </div>
  </template>

  <style>
  @import url('./assets/main.css');
  #app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  }


  </style>




  <script>
  // import axios from 'axios';
  export default {
  data(){return{
  title:'this is the title hello',
  isLoading:false,
  response:{},



  }},

  methods:{
  // pageData(){
  // this.isLoading=true;
  // axios.get(this.$store.state.api_route+'attributes')
  // .then(response =>{
  // this.isLoading=false;
  // console.log(response);
  // })
  // .catch(error=>console.log(error));

  // }





  },



  mounted(){
  // this.pageData();

  }



  }
  </script>