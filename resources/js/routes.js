    import Home from './components/UsersComponents/Home'
    import About from './components/UsersComponents/About'
 
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
export default routes