import { createStore } from 'vuex'

export default createStore({
  state: {
    user: {},
    users: []
  },
  mutations: {
    GetRandomUser (state) {
      fetch("http://localhost:3001/users/random")
        .then(res => res.json())
        .then(data => {
          if (state.user._id != data._id) {
            state.user = data;
          } else {
            console.log("Duplicate");
            this.commit('GetRandomUser');
          }
        });
    },
    GetAllUsers (state) {
      fetch("http://localhost:3001/users")
        .then(res => res.json())
        .then(data => {
          state.users = data;
        });
    }
  },
  getters: {
    GetSpecificUser: state => id => {
      return state.users.filter(q => q._id == id)[0]
    }
  }
})