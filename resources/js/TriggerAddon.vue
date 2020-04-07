<template>
  <div>
    <div class="flex items-center justify-between">
      <div class="pr-4">
        <h2 class="font-bold">{{ lang.heading }}</h2>
        <p class="my-1 text-sm text-grey">{{ lang.text }}</p>
      </div>
      <button @click.prevent="confirming = true" class="btn">
        <span v-if="firing">{{ lang.firing }}</span>
        <span v-else>{{ lang.action }}</span>
      </button>
    </div>
    <confirmation-modal
      v-if="confirming"
      :title="lang.heading"
      :bodyText="lang.confirmation"
      :buttonText="lang.confirm"
      danger="true"
      @confirm="submit"
      @cancel="confirming = false"
    />
  </div>
</template>

<script>
  export default {
    props: {
      lang: {
        type: Object,
        default: () => [],
      },
      route: {
        type: String,
        default: '',
      },
    },

    data() {
      return {
        confirming: false,
        firing: false,
      }
    },

    methods: {
      submit() {
        this.confirming = false
        this.firing = true

        this.$axios.post(this.route)
          .then(response => {
            this.$toast.success(this.lang.success)
          })
          .catch((error) => {
            this.$toast.error(this.lang.failed)
            console.log(error)
          })
          .finally(() => {
            this.firing = false
          })
      },
    },
  }
</script>
