<template>
  <div class="modal" v-bind:class="{ displaymodal: showDeleteModal }" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete customer {{ deleteCustomerName }}?</h5>
          <button type="button" class="close" aria-label="Close" v-on:click="closeModal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--div class="modal-body">
          <p>Modal body text goes here.</p>
        </div-->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" v-on:click="closeModal">Close</button>
          <button type="button" class="btn btn-primary" v-on:click="deleteCustomer">Delete</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    computed: {
      showDeleteModal() {
        return this.$store.state.showDeleteModal;
      },
      deleteCustomerName() {
        return this.$store.state.deleteCustomerName;
      }
    },
    methods: {
      closeModal() {
        this.$store.commit('initDeleteModal', {
          showDeleteModal: false,
          deleteCustomerId: 0,
          deleteCustomerName: ''
        })
      },
      deleteCustomer() {
        this.closeModal();
      }
    }
  }
</script>

<style scoped>
  .displaymodal {
    display: block;
    background-color: rgba(0,0,0,0.4);
  }
</style>