<script>
export default {
    name: "Index"
}
</script>

<template>

    <div>
        <router-link to="Orders">Заказы</router-link>
        <router-link to="Clients">Клиенты</router-link>
        <router-view></router-view>
    </div>
</template>

<style scoped>

</style>
