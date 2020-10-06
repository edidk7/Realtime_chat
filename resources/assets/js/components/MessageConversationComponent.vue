<template>
  <b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">
    <template v-slot:aside>
      <b-img
        blank
        blank-color="#ccc"
        width="48"
        height="48"
        rounded="circle"
        alt="placeholder"
      ></b-img>
    </template>
    <b-card>
      <slot></slot>
    </b-card>
  </b-media>
</template>
<script>
export default {
    props: {
        writtenByMe: Boolean
    },
    data() {
        return {
            content: 'abc'
        };
    },
    mounted() {
        //console.log('Valor de writtenByMe:', this.writtenByMe);
    }
};
</script>