<script>
import ChildComp from './ChildComp.vue'

export default {
  components: {
    ChildComp
  },
  data() {
    return {
      childMsg: 'No child msg yet'
    }
  }
}
</script>

<template>
  <svg class="w-28 h-28 mx-auto my-2" viewBox="0 0 128 128" width="24" height="24" data-v-5f26462c="">
    <path fill="#42b883" d="M78.8,10L64,35.4L49.2,10H0l64,110l64-110C128,10,78.8,10,78.8,10z" data-v-5f26462c=""></path><path fill="#35495e" d="M78.8,10L64,35.4L49.2,10H25.6L64,76l38.4-66H78.8z" data-v-5f26462c=""></path>
  </svg>

  

  <h1 class="text-center text-3xl font-semibold bg-gradient-to-l from-[#34495e] to-[#41b883] bg-clip-text text-transparent mb-2">{{ childMsg }}</h1>
  <ChildComp @response="(msg) => childMsg = msg" />
</template>