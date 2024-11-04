import * as VueRouter from 'vue-router';
import ClientComponent from "./components/ClientComponent.vue";
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
            component: ClientComponent
        },
        {
            path:'/orders',
            component: OrderComponent
        }
    ],

})
