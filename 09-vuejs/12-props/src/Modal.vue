<template>
    <p>{{title}}</p>
</template>

<script>
    export default {
        props: {
            title: {
                required: true,
                default : "Without title"
            }
        }
    }
</script>

<style>
 .modal-container {
    background-color: #000a;
  }
  p.modal-item {
    background-color: #fffa;
    border-radius: 10px;
    font-size: 1.4rem;
    padding: 20px;
  }
</style>