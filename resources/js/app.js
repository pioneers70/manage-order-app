import {createApp} from 'vue';
import router from './router';
import './bootstrap';
import App from './components/App.vue';
import IndexComponent from "./components/IndexComponent.vue";
import OrderComponent from "./components/OrderComponent.vue";
import ClientComponent from "./components/ClientComponent.vue";


const app = createApp({})
app.use(router)
app.component('App', App)
app.component('Index', IndexComponent)
app.component('Order', OrderComponent)
app.component('Client', ClientComponent)
app.mount('#app')


