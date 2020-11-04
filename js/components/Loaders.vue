<template>
  <div>
    <Skeleton height="420px" />
  </div>
</template>

<script>
import { Skeleton } from "vue-loading-skeleton";

export default {
  components: {
    Skeleton: Skeleton,
  },
};
</script>
