<!--
<template>
  <div class="home">
    <div class="mx-auto max-w-screen-lg">
      <div class="flex items-center flex-col justify-center">
        <div class="btn" @click="$store.commit('GetRandomUser')">Get Random User</div>
        <p 
          class="mb-6 my-10 text-2xl text-center text-gray-500" 
          v-if="typeof $store.state.user._id != 'undefined'">
          <span>"{{ $store.state.user.name }}"</span><br>
          <span class="text-gray-400">- {{ $store.state.user.email }}</span>
        </p>
      </div>
    </div>
  </div>
</template>
-->
<template>
  <form action="post" class="p4 m-10 flex flex-col gap-2 justify-center items-center">
      <input type="text" placeholder="Name:"  class="border-2 border-[#42b883] p-2 rounded-md outline-none">
      <input type="text" placeholder="Email:" class="border-2 border-[#42b883] p-2 rounded-md outline-none">
      <button type="button" class="bg-[#34495e] py-2 px-4 text-white rounded-md"> Save </button>
  </form>
</template>