require('./bootstrap');
import { createApp } from 'vue';
import { createRouter, createWebHistory } from "vue-router";

import Home from './components/UsersComponents/Home';
import VueRouter from 'vue-router';
import router from './router'
let app=createApp(Home)
app.use(router)
app.mount("#app")
// import components from  './components';
// createApp(App).use(router).mount('#app')
// createApp(vueRouter).use(router).mount('#app')
// const app = new Vue({

// }) 