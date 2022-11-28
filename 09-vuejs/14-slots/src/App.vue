<script>
import ChildComp from './ChildComp.vue'
import axios from "axios"

export default {
  components: {
    ChildComp
  },
  data() {
    return {
      title: '14 - sloes',
      msg: 'Bitcoin Price List',
      info: null
    }
  },
  filters: {
    currencydecimal (value) {
      return value.toFixed(2)
    }
  },
  mounted() {
    axios
      .get('https://api.coindesk.com/v1/bpi/currentprice.json')
      .then(response => {
        this.info = response.data.bpi
      })
      .catch(error => {
        console.log(error)
        this.errored = true
      })
      .finally(() => this.loading = false)
  }
}
</script>

<template>
  <svg class="w-28 h-28 mx-auto my-2" viewBox="0 0 128 128" width="24" height="24" data-v-5f26462c="">
    <path fill="#42b883" d="M78.8,10L64,35.4L49.2,10H0l64,110l64-110C128,10,78.8,10,78.8,10z" data-v-5f26462c=""></path><path fill="#35495e" d="M78.8,10L64,35.4L49.2,10H25.6L64,76l38.4-66H78.8z" data-v-5f26462c=""></path>
  </svg>

  

  <h1 class="text-center text-3xl font-semibold bg-gradient-to-l from-[#34495e] to-[#41b883] bg-clip-text text-transparent mb-2">{{ title }}</h1>
  <ChildComp>
    <h5 class="text-center text-xl font-bold my-4">
      {{ msg }}
    </h5>
   <section v-if="errored">
    <p>Sorry, it is not possible to obtain the information at the moment, please try again later</p>
  </section>

  <section v-else class="flex justify-center flex-col items-center">
    <div v-if="loading">Loading...</div>

    <div
      v-else
      v-for="currency in info"
      class="currency"
    >
      {{ currency.description }}:
      <span class="lighten">
        <span v-html="currency.symbol"></span>{{ currency.rate_float | currencydecimal }}
      </span>
    </div>

  </section>
  </ChildComp>
</template>

<style lang="scss">
section {
  .lighten {
    color: #42b883;
    font-weight: 600;
  }
}
</style>