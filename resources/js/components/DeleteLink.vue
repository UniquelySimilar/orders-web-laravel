<template>
    <button class="btn btn-link btn-delete-link" v-on:click="showModal">Delete</button>
</template>

<script>
    export default {
        methods: {
            showModal() {
                this.$store.commit('initDeleteModal', {
                    showDeleteModal: true,
                    deleteCustomerId: 0
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