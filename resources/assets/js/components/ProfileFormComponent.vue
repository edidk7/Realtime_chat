<template>
  <b-container>
    <b-form class="m-3" action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="_token" v-model="csrfToken" />
      <b-form-group label="Correo electrónico:">
        <b-form-input
          name="email"
          v-model="user.email"
          type="email"
          disabled
          placeholder="Ingresar tu correo"
        ></b-form-input>
      </b-form-group>

      <b-form-group label="Nombre">
        <b-form-input
          name="name"
          v-model="user.name"
          type="text"
          required
          placeholder="Ingresa tu nombre"
        ></b-form-input>
      </b-form-group>

      <b-form-group label="Nueva contraseña (Sólo si se desea modificar):">
        <b-form-input
          name="password"
          type="password"
          placeholder="Ingresa tu nueva contraseña"
        ></b-form-input>
      </b-form-group>

      <b-form-group label="Imagen de perfil">
        <b-img
          :src="image"
          rounded="circle"
          width="60"
          height="60"
          alt="Imagen de perfil"
          title="Imagen de perfil"
          class="m-1"
        ></b-img>
        <b-form-file
          name="image"
          placeholder="Sube una imagen de perfil"
        ></b-form-file>
      </b-form-group>

      <b-button type="submit" variant="primary">Guardar cambios</b-button>
    </b-form>
  </b-container>
</template>

<script>
export default {
  props: {
    user: Object,
    csrfToken: String,
  },
  data() {
    return {
      show: true,
    };
  },
  computed: {
    image() {
      return `/users/${this.user.image}`;
    },
  },
};
</script>
