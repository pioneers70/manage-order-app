import * as VueRouter from 'vue-router';
import OrderComponent from "./components/OrderComponent.vue";
import HomeComponent from "./components/HomeComponent.vue";



export default VueRouter.createRouter ({

    history: VueRouter.createWebHistory('/'),
    routes: [
        {
            path: '/',
            component: HomeComponent
        },
        {
            path:'/clients',
            component: ()  => import('./components/Client/Index.vue'),
            name: 'client.index'
        },
        {
            path:'/clients/create',
            component: ()  => import('./components/Client/Create.vue'),
            name: 'client.create'
        },
        {
            path:'/orders',
            component: OrderComponent
        }
    ],

})
