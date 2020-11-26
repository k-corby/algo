<template>
  <div>
    <router-view />
    <Navigation />
    <Footer />
  </div>
</template>

<script>
import Navigation from "@/components/layout/AppNavigation.vue";
import Footer from "@/components/layout/AppFooter.vue";
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