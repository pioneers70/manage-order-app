<script>
export default {
    name: "Index",
    data() {
        return {leads: null,}
    },
    mounted() {
        this.getClient()
    },
    methods: {
        getClient() {
            axios.get('/api/leads/')
                .then(res => {
                    this.leads = res.data.data
                })
        },
        deleteClient(id) {
            axios.delete(`/api/leads/${id}`)
               .then(res => {
                    this.getClient()
                })
               .catch(err => {
                    console.log(err)
                })
        }
    }
}
</script>

<template>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ФИО</th>
                <th scope="col">Почта</th>
                <th scope="col">Телефон</th>
                <th scope="col">Серия паспорта</th>
                <th scope="col">Номер паспорта</th>
                <th scope="col">Кем выдан документ</th>
                <th scope="col">Адрес регистрации</th>
                <th scope="col">Примечание</th>
                <th scope="col">Настройки</th>
                <th scope="col">Удалить</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="client in leads">
                <td>
                    <router-link :to="{ name: 'client.show', params:{id: client.id}}">{{ client.name }}</router-link>
                    </td>
                <td>{{ client.email }}</td>
                <td>{{ client.phone }}</td>
                <td>{{ client.passport_series }}</td>
                <td>{{ client.passport_number }}</td>
                <td>{{ client.passport_issued }}</td>
                <td>{{ client.address_registration }}</td>
                <td>{{ client.note }}</td>
                <td>
                    <router-link :to="{name:'client.edit', params:{ id:client.id}}" class="btn btn-success">Изменить</router-link>
                </td>
                <td>
                    <button @click.prevent="deleteClient(client.id)" class="btn btn-danger">Удалить</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>

</style>
