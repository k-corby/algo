<template>
  <div class="home">
    <Navigation />
    <h1>Test</h1>
    <img alt="Vue logo" src="../assets/logo.png" />
    <HelloWorld msg="Welcome to Your Vue.js App" />
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from "@/components/HelloWorld.vue";
import Navigation from "@/components/";

export default {
  name: "Home",
  components: {
    Navigation,
    HelloWorld,
  },
};
</script>
