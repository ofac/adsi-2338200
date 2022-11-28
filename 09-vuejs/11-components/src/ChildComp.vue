<template>
  <h2 class="text-center font-medium">A Child Component!</h2>
  <div class="search-box">
    <input type="text" placeholder="Search..." maxlength="14" class="font-light">
    <a href="#" class="icon">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    </a>
  </div>
</template>

<style scoped>
  div.search-box {
    background-color: #34495e;
    border-radius: 40px;
    height: 60px;
    left: 50%;
    padding: 10px;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
  }

  div.search-box input {
    background: none;
    border: none;
    color: #fff;
    font-size: 1.1rem;
    line-height: 40px;
    outline: none;
    padding: 0;
    transition: 0.5s ease;
    width: 40px;
  }

  div.search-box:hover > input {
    padding: 0 10px;
    width: 240px;
  }

  div.search-box:hover > .icon {
    background: #fff;
    right: 10px;
    top: 10px;
  }

  a.icon:hover {
    transform: rotate(360deg) scale(1.4);
  }

  a.icon {
    position: absolute;
    right: 10px;
    top: 10px;
    align-items: center;
    background: #34495e;
    border-radius: 50%;
    color: #41b883;
    cursor: pointer;
    display: flex;
    justify-content: center;
    font-size: 1.3rem;
    height: 40px;
    transition: 0.4s;
    text-decoration: none;
    width: 40px;
  }
</style>