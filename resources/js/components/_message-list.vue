<template>
  <div>
    <v-list class="p-3" v-for="(message, index) in allMessages" :key="index">
      <div class="message-wrapper">
        <v-flex>
          <span class="small font-italic">{{ message.user.name }}</span>
        </v-flex>
        <div v-if="message.message" class="text-message-container" >
          <v-chip
            :color="user.id === message.user_id ? 'green' : 'red'"
            text-color="white"
            
            
          >
            {{ message.message }}
          </v-chip>
        </div>

        <div class="image-container">
          <img v-if="message.image" :src="'/storage/' + message.image" alt="" />
        </div>

        <v-flex class="caption font-italic">
          {{ message.created_at }}
        </v-flex>
      </div>
      <div v-if="offer">
        <p>You want to accept this offer</p>
        <button type="button" class="btn-yes">Yes</button>
        <button type="button" class="btn-no">Cancel</button>
      </div>
    </v-list>
  </div>
</template>

<script>
export default {
  props: ["user", "allMessages", "offer"],
};
</script>

<style scoped>
.chat-card {
  margin-bottom: 140px;
}
.floating-div {
  position: fixed;
}
.chat-card img {
  max-width: 300px;
  max-height: 200px;
}
.btn-yes {
  background: teal;
}
.btn-no {
  background: darkorange;
}
</style>