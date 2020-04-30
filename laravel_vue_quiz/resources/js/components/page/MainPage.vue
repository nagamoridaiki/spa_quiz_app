<template>
  <div>
    <the-header />
    <router-view :errors="errors" />
    <the-footer />
  </div>
</template>

<script>
import TheHeader from "../layout/TheHeader";
import TheFooter from "../layout/TheFooter";

export default {
  name: "app",
  components: {
    TheHeader,
    TheFooter
  },
  props: {
    errors: {
      type: Object | Array
    }
  }
};
</script>