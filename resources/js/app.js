require('./bootstrap');

import { createApp } from 'vue';
import Home from './components/UsersComponents/Home';
import VueRouter from 'vue-router'
import router from './Router'

// createApp(App).use(router).mount('#app')
let app=createApp({})
app.component('home-component' , Home);
app.use(router)
app.mount("#app")