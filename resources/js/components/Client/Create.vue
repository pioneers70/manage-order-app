<script>
import router from "../../router.js";

export default {
    name: "Create",
    data() {
        return {
            name: null,
            email: null,
            phone: null,
            passport_series: null,
            passport_number: null,
            passport_issued: null,
            address_registration: null,
            note: null,
        }
    },
    mounted() {

    },
    methods: {
        addClient() {
            axios.post('/api/leads', {
                name: this.name,
                email: this.email,
                phone: this.phone,
                passport_series: this.passport_series,
                passport_number: this.passport_number,
                passport_issued: this.passport_issued,
                address_registration: this.address_registration,
                note: this.note,
            })
                .then(res => {
                    router.push({name: 'client.index'})
                })
        }
    }
}

</script>

<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" v-model="name" placeholder="Имя" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="email" placeholder="Email" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number" v-model="phone" placeholder="Телефон" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" pattern="\d*" maxlength="4" v-model="passport_series" placeholder="Серия паспорта"
                   class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" pattern="\d*" maxlength="6" v-model="passport_number" placeholder="Номер паспорта"
                   class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="passport_issued" placeholder="Кем выдан паспорт" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="address_registration" placeholder="Адрес регистрации" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="note" placeholder="Примечание" class="form-control">
        </div>
        <div class="mb-3">
            <input @click.prevent='addClient' type="submit" value="Добавить" class="btn btn-outline-primary">
        </div>
    </div>


</template>

<style scoped>

</style>
