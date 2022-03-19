require('./bootstrap');

import { createApp } from 'vue';
import Home from './components/UsersComponents/Home';
import VueRouter from 'vue-router'
import router from './router'

// createApp(App).use(router).mount('#app')
createApp(Home).use(router).mount('#app')