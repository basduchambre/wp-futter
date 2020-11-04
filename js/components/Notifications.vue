<template>
  <div class="wpFutter__notifications__wrapper">
    <h2
      class="wpFutter__notifications__wrapper--title"
      v-html="`WP Futter - Error ${error.code}`"
    ></h2>
    <p
      class="wpFutter__notifications__wrapper--notification"
      v-html="error.message"
    ></p>
    <p>Check if your profile is set correctly and is publicly accessable</p>
  </div>
</template>

<script>
export default {
  props: {
    error: {
      type: Object,
    },
  },
  mounted() {
    console.log(
      "%c WP Futter: Check if your profile is set correctly and is publicly accessable",
      "font-weight: bold; background-color: darkred; color: white; padding: 8px;"
    );
  },
};
</script>

<style>
</style>