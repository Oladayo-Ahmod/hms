require('./bootstrap');

import { createApp } from 'vue';
import Home from './components/UsersComponents/Home';

let app=createApp({})
app.component('home-component' , Home);

app.mount("#app")