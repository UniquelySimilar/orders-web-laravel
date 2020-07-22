<template>
  <div class="modal" v-bind:class="{ displaymodal: showModal }" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      showModal: {
        type: Boolean,
        required: true
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