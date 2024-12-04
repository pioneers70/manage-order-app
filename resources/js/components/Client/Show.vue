<script>
export default {
    name: "Show",
    data() {
        return {
            client: null
        }
    },
    mounted() {
        this.getClient()
    },
    methods: {
        getClient() {
            axios.get(`/api/leads/${this.$route.params.id}`)
                .then(res => {
                    this.client = res.data.data
                })
        },
    }
}
</script>

<template>
    <div v-if="client">Информация о клиенте
        <h2>{{ this.client.name }}</h2>
        <p>Телефон: {{ this.client.phone }}</p>
        <p>Email: {{ this.client.email }}</p>
        <p>Серия паспорта: {{ this.client.passport_series }}</p>
        <p>Номер паспорта: {{ this.client.passport_number }}</p>
        <p>Кем выдан документ: {{ this.client.passport_issued }}</p>
        <p>Адрес регистрации: {{ this.client.address_registration }}</p>
        <p>Примечание: {{ this.client.note }}</p>
        <router-link :to="{name:'client.edit', params:{ id: this.client.id}}">Изменить</router-link>
    </div>



</template>

<style scoped>

</style>
