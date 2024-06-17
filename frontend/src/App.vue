<template>
<div>
<user-layout v-if="session==true"/>
<guest-layout v-else/>
</div>
</template>

<style>
#app {

}
</style>
<script>
// import axios from 'axios';
import GuestLayout from './GuestLayout.vue';
import UserLayout from './UserLayout.vue';

export default {
components:{
GuestLayout,
UserLayout
},

data(){return{
session:this.$store.state.session,

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
<style scoped>
div{
    font-family: system-ui;
}
</style>