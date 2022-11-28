<script>
import { useStore } from 'vuex';
import { onMounted } from 'vue';

export default {
  setup () {
    const store = useStore();
    onMounted(() => {
      store.commit('GetAllUsers');
    })
  },
  data() {
      return {
          title: '15 - CRUD Mongo'
      }
  }
}
</script>


<template>
  <svg class="w-28 h-28 mx-auto my-6" viewBox="0 0 128 128" width="24" height="24" data-v-5f26462c="">
    <path fill="#42b883" d="M78.8,10L64,35.4L49.2,10H0l64,110l64-110C128,10,78.8,10,78.8,10z" data-v-5f26462c=""></path><path fill="#35495e" d="M78.8,10L64,35.4L49.2,10H25.6L64,76l38.4-66H78.8z" data-v-5f26462c=""></path>
  </svg>

  <h1 class="text-center text-3xl font-semibold bg-gradient-to-l from-[#34495e] to-[#41b883] bg-clip-text text-transparent mb-6">{{ title }}</h1>
  
  <div class="">
    <div class="mx-auto flex items-center justify-center">
      <!-- <router-link to="/" class="mx-2 btn">Home</router-link> -->
      <router-link to="/" class="mx-2 btn bg-[#42b883] hover:bg-[#34495e] flex gap-2 text-white px-4 py-1 rounded-xl transition-all duration-150">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
        </svg>      
        Add User
      </router-link>
      <router-link to="/all" class="mx-2 btn bg-[#42b883] hover:bg-[#34495e] flex gap-2 text-white px-4 py-1 rounded-xl transition-all duration-150">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
        All Users
      </router-link>
    </div>
  </div>
  <router-view />

</template>