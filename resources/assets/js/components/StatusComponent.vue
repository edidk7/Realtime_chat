<template>
  <b-img
    blank
    width="10"
    height="10"
    :title="online ? 'Conectado' : 'Desconectado'"
    :blank-color="online ? 'green' : 'gray'"
    rounded="circle"
    alt="Circle image"
  ></b-img>
</template>
<script>
export default {
  props: {
    online: Boolean,
  },
  data() {
    return {};
  },
  mounted() {},
};
</script>
