<template>
  <a :href="item.url" target="_blank">
    <div class="wpFutter__list__item">
      <img
        class="wpFutter__list__item--thumbnail"
        :src="item.thumbnails[1].src"
        :alt="item.text"
      />
      <div class="wpFutter__list__item--overlay">
        <p class="wpFutter__list__item--overlay-text" v-html="item.text"></p>
        <wp-futter-counts :counts="item.counts" />
      </div>
    </div>
  </a>
</template>

<script>
import Counts from "./Counts";

export default {
  components: {
    "wp-futter-counts": Counts,
  },
  props: {
    item: {
      type: Object,
    },
  },
};
</script>

<style lang="scss" scoped>
.wpFutter__list__item {
  $this: &;
  position: relative;
  height: 380px;
  overflow: hidden;
  &--thumbnail {
    transition: transform 0.3s ease-in-out;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
    transform: scale(1.05);
  }
  &:hover {
    #{$this}--overlay {
      opacity: 1;
    }
    #{$this}--thumbnail {
      transform: scale(1);
    }
  }
  &--overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.32);
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    padding: 1rem;
    &-text {
      font-weight: bold;
      color: #fff;
    }
  }
}
</style>