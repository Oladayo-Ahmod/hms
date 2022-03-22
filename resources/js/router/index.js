import { createWebHistory, createRouter } from "vue-router";
import Home from '../components/UsersComponents/Home'
import About from '../components/UsersComponents/About'
import Doctors from '../components/UsersComponents/Doctors'
import Contact from '../components/UsersComponents/Contact'
import Dashboard from '../components/AdminComponents/Dashboard'
// import routes from '../routes'
const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: "/",
      name: "home",
      component: Home,
      alias : '/home'
    },
    {
      path: "/doctors",
      name: "doctors",
      component: Doctors,
      // alias : '/home'
    },
    {
      path: "/about",
      name: "about",
      component: About,
    },
    {
      path: "/contact",
      name: "contact",
      component: Contact,
    },
  ],
});


export default router