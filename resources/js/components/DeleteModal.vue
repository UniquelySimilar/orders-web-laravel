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
          <button type="button" class="btn btn-secondary" v-on:click="closeModal">Cancel</button>
          <form method="POST" v-bind:action="deleteCustomerUrl">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" v-bind:value="getCsrf()">
            <button type="submit" class="btn btn-primary">Delete</button>
          </form>
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
      deleteCustomerId() {
        return this.$store.state.deleteCustomerId;
      },
      deleteCustomerName() {
        return this.$store.state.deleteCustomerName;
      },
      deleteCustomerUrl() {
        return '/customers/' + this.deleteCustomerId;
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
      getCsrf() {
        // Get the CSRF token from a meta tag in the head
        const metas = document.getElementsByTagName('meta');
        let metaName = 'csrf-token';
        let retVal = '';

        for (let i = 0; i < metas.length; i++) {
          if (metas[i].getAttribute('name') === metaName) {
            retVal =  metas[i].getAttribute('content');
            break;
          }
        }

        return retVal;
      }
    },
  }
</script>

<style scoped>
  .displaymodal {
    display: block;
    background-color: rgba(0,0,0,0.4);
  }
</style>