import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        showDeleteModal: false,
        deleteCustomerId: 0
    },
    mutations: {
        initDeleteModal(state, payload) {
            state.showDeleteModal = payload.showDeleteModal;
            state.deleteCustomerId = payload.deleteCustomerId;
        }
    }
});