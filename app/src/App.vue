<template>
  <div>
    <router-view />
    <Navigation />
    <Footer />
  </div>
</template>

<script>
import Navigation from "@/components/shared_components/TheNavigation.vue";
import Footer from "@/components/shared_components/TheFooter.vue";
export default {
  name: "app",
  components: {
    Navigation,
    Footer,
  },
};
</script>

<style>
</style>
