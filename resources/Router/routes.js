const routes = [
    {
        path : '',
        component : ()=>import('../js/components/UsersComponents/Home.vue'),
        name : "home"
    },
    {
        path : '/about',
        component : ()=> import('../js/components/UsersComponents/About.vue'),
        name : "about"
    },
]
export default routes