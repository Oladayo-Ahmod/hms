import { createWebHistory, createRouter } from "vue-router";
import Home from '../components/UsersComponents/Home'
import About from '../components/UsersComponents/About'
// import routes from '../routes'
const routes = [

  {
      path : '/',
      component : Home,
      name : "home"
  },
  {
      path : '/about',
      component : About,
      name : "about"
  },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
  });

export default router