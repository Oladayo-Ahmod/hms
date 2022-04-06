require('./bootstrap');
import { createApp } from 'vue';
import { createRouter, createWebHistory } from "vue-router";


import Home from './components/UsersComponents/Home.vue';
import About from './components/UsersComponents/About.vue';
import Doctors from './components/UsersComponents/Doctors.vue';
import Register from './components/UsersComponents/Register.vue';
import Login from './components/UsersComponents/Login.vue';

// admin components
import Dashboard from './components/AdminComponents/Dashboard.vue';
import VueRouter from 'vue-router';
import router from './router'
let app=createApp({
    components : {
        Home,
        About,
        Doctors,
        Register,
        Login,
        Dashboard
    }
})
app.use(router)
app.mount("#app")
