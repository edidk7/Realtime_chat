<template>
  <b-row class="h-100">
    <b-col cols="8">
      <b-card
        footer-bg-variant="light"
        footer-border-variant="dark"
        title="Conversación activa"
      >
        <b-card-body class="card-body-scroll">
          <message-conversation-component
            v-for="message in messages"
            :key="message.id"
            :written-by-me="message.written_by_me"
          >
            {{ message.content }}
          </message-conversation-component>
        </b-card-body>

        <div id="messages-container" class=""></div>
        <div slot="footer">
          <b-form class="mb-0" @submit.prevent="postMessage" autocomplete="off">
            <b-input-group>
              <b-form-input
                type="text"
                placeholder="Escribir mensaje ..."
                v-model="newMessage"
                class="text-center"
              ></b-form-input>

              <b-input-group-append>
                <b-button type="submit" variant="primary">Enviar</b-button>
              </b-input-group-append>
            </b-input-group>
          </b-form>
        </div>
      </b-card>
    </b-col>
    <b-col cols="4" class="my-3">
      <b-img
        blank
        width="60"
        height="60"
        blank-color="#777"
        rounded="circle"
        alt="Circle image"
        class="m-1"
      ></b-img>
      <p>{{ contactName }}</p>
      <hr />
      <b-form-checkbox> Desactivar notificaciones </b-form-checkbox>
    </b-col>
  </b-row>
</template>
<style>
.card-body-scroll {
  max-height: calc(100vh - 63px);
  overflow-y: auto;
}
</style>
<script>
export default {
  props: {
    contactId: Number,
    contactName: String,
    messages: Array,
  },
  data() {
    return {
      newMessage: '',
    };
  },
  mounted() {},
  methods: {
    postMessage() {
      const params = {
        to_id: this.contactId,
        content: this.newMessage,
      };
      axios.post("/api/messages", params).then((response) => {
        if (response.data.success) {
          this.newMessage = '';
          const message = response.data.message;
          message.written_by_me = true;
          this.$emit('messageCreated', message);
        }
      });
    },
    scrollToBottom() {
      const el = document.querySelector(".card-body-scroll");
      el.scrollTop = el.scrollHeight;
    },
  },
  updated() {
    this.scrollToBottom();
    console.log("messages ha cambiado");
  },
};
</script>