const routes = [
    {
        path : '',
        component : ()=>import('../components/UsersComponents/Home.vue'),
        name : "home"
    },
    {
        path : '/about',
        component : ()=> import('../components/UsersComponents/About.vue'),
        name : "about"
    },
]
export default routes