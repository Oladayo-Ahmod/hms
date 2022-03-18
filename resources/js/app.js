require('./bootstrap');

import { createApp } from 'vue';
import Home from './components/UsersComponents/Home';
import VueRouter from 'vue-router';
import router from './Router/index';

let app=createApp({})
app.component('home-component' , Home);

app.mount("#app")