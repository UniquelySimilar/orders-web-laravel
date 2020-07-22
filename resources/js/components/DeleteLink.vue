<template>
    <button class="btn btn-link btn-delete-link" v-on:click="showModal">Delete</button>
</template>

<script>
    export default {
        props: {
            customerid: {
                type: Number,
                required: true
            },
            customername: {
                type: String,
                required: true
            }
        },
        methods: {
            showModal() {
                this.$store.commit('initDeleteModal', {
                    showDeleteModal: true,
                    deleteCustomerId: this.customerid,
                    deleteCustomerName: this.customername
                });
            }

        }
    }
</script>

<style scoped>
    .btn-delete-link {
        border: none;
        padding: 0;
    }
</style>