<script>
export default {
    name: "Index",
    data() {
        return {
            //
        }
    },
    mounted() {

    },
}
</script>

<template>

    <div class="container mb-2 mt-5 h3">
        <!--        <router-link to="Orders">Заказы</router-link>-->
        <router-link :to="{ name:'client.index'}">Клиенты</router-link>
    </div>
    <div class="container">
        <router-link :to="{ name:'client.create'}">Добавить клиента</router-link>
        <router-view></router-view>
    </div>

</template>

<style scoped>

</style>
