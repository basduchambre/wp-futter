<template>
  <div class="wpFutter__list__item--overlay-count">
    <ul>
      <li>
        <svg
          aria-hidden="true"
          focusable="false"
          data-prefix="fas"
          data-icon="heart"
          class="svg-inline--fa fa-heart fa-w-16"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 512 512"
        >
          <path
            fill="#ffffff"
            d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"
          ></path>
        </svg>
        <span v-html="counts.likes"></span>
      </li>
      <li>
        <svg
          aria-hidden="true"
          focusable="false"
          data-prefix="fas"
          data-icon="comments"
          class="svg-inline--fa fa-comments fa-w-18"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 576 512"
        >
          <path
            fill="#ffffff"
            d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"
          ></path>
        </svg>
        <span v-html="counts.comments"></span>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    counts: {
      type: Object,
    },
  },
};
</script>

<style lang="scss" scoped>
ul {
  display: flex;
  margin: 0;
  padding: 0;
  list-style: none;
  li {
    display: flex;
    justify-content: flex-end;
    padding: 0 0.5rem;
    svg {
      width: 1.33rem;
      margin: 0 0.33rem;
    }
    span {
      font-weight: bold;
      color: #fff;
    }
  }
}
</style>