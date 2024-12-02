<script>

import router from "../../router.js";

export default {
    name: "Edit",
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
        this.getClient();
    },
    methods: {
        getClient() {
            axios.get('/api/leads/' + this.$route.params.id)
                .then(res => {
                        this.name = res.data.name
                        this.email = res.data.email
                        this.phone = res.data.phone
                        this.passport_series = res.data.passport_series
                        this.passport_number = res.data.passport_number
                        this.passport_issued = res.data.passport_issued
                        this.address_registration = res.data.address_registration
                        this.note = res.data.note
                })
        },
        updateClient() {
            axios.patch('/api/leads/' + this.$route.params.id,{
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
                    router.push({ name: 'client.show'});
                })
               .catch(error => {
                    console.log(error);
                });
        }
    },
}
</script>

<template>
    <div>Редактировать</div>
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
            <input @click.prevent="updateClient" type="submit" value="Обновить" class="btn btn-outline-primary">
        </div>
    </div>
</template>

<style scoped>

</style>
