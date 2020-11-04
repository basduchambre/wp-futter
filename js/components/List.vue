<template>
  <ul class="wpFutter__list">
    <li v-for="(item, index) in feed" :key="index">
      <wp-futter-item :item="item" />
    </li>
  </ul>
</template>

<script>
import Item from "./Item";

export default {
  components: {
    "wp-futter-item": Item,
  },
  props: {
    feed: {
      type: Array,
    },
  },
};
</script>