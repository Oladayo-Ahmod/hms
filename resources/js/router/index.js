import { createWebHistory, createRouter } from "vue-router";
import Home from '../components/UsersComponents/Home'
import About from '../components/UsersComponents/About'
import Doctors from '../components/UsersComponents/Doctors'
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
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: About,
    },
  ],
});


export default router