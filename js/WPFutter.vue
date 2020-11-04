<template>
  <div>
    <wp-futter-notifications v-if="error.status" :error="error" />
    <div class="wpFutter__container" :style="{ background: bg_color }">
      <wp-futter-list
        v-if="feed"
        :loading="loading"
        :feed="mostRecentUploads"
      />
      <div v-else class="wpFutter__loaders">
        <wp-futter-loaders
          v-for="(loader, index) in parseInt(amount)"
          :key="index"
        />
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import Notifications from "./components/Notifications";
import List from "./components/List";
import Loaders from "./components/Loaders";

export default {
  components: {
    "wp-futter-notifications": Notifications,
    "wp-futter-list": List,
    "wp-futter-loaders": Loaders,
  },
  props: {
    handle: {
      type: String,
    },
    amount: {
      type: String,
    },
    bg_color: {
      type: String,
    },
  },
  data() {
    return {
      feed: null,
      loading: true,
      error: {
        status: false,
        code: null,
        message: "",
      },
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
    async fetchIgData() {
      try {
        const res = await axios.get(`https://futter.dev/${this.handle}`);
        if (res.status === 200) {
          this.feed = res.data.data;
        }
      } catch (err) {
        this.error.status = true;
        this.error.code = err.response.data.status;
        this.error.message = err.response.data.msg;
      }
    },
  },
  mounted() {
    this.fetchIgData();
  },
};
</script>
