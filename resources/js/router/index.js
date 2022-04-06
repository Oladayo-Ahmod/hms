import { createWebHistory, createRouter } from "vue-router";
import Home from '../components/UsersComponents/Home'
import About from '../components/UsersComponents/About'
import Doctors from '../components/UsersComponents/Doctors'
import Contact from '../components/UsersComponents/Contact'
import Register from '../components/UsersComponents/Register'
import Login from '../components/UsersComponents/Login'

// admin components
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
    {

    path: "/register",
    name: "register",
    component: Register,
    },
    {

    path: "/login",
    name: "login",
    component: Login,
    },
    // admin routes
    {
      path : "/admin",
      name : "admin",
      component : Dashboard
    }
  ],
});


export default router