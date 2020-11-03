<template>
  <div>
    <div class="wpFutter__notifications__wrapper" v-if="!hasHandle">
      <h2 class="wpFutter__notifications__wrapper--title">WP Futter</h2>
      <p class="wpFutter__notifications__wrapper--notification">
        Please fill in your username in the WP Futter settings and make sure
        your account is on public
      </p>
    </div>
    <div class="wpFutter__container">
      <ul class="wpFutter__list">
        <li v-for="(item, index) in mostRecentUploads" :key="index">
          <img :src="item.thumbnails[1].src" alt="" />
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  props: {
    hasHandle: {
      type: Boolean,
      default: false,
    },
    handle: {
      type: String,
    },
  },
  data() {
    return {
      feed: null,
    };
  },
  computed: {
    mostRecentUploads() {
      if (this.feed) {
        return this.feed.slice(0, 3);
      }
    },
  },
  methods: {
    async fetchIgFeed() {
      const res = await axios.get(`https://futter.dev/${this.handle}`);

      if (res.status === 200) {
        this.feed = res.data.data;
      }
    },
  },
  mounted() {
    if (!this.hasHandle) {
      console.log(
        "%c WP Futter: Fill in your username in the WP Futter settings",
        "font-weight: bold; background-color: darkred; color: white; padding: 8px;"
      );
    } else {
      this.fetchIgFeed();
    }
  },
};
</script>
