<template>
    <div>
        <div class="flex items-center justify-between">
            <div class="pr-4">
                <h2 class="font-bold">Deploy Site</h2>
                <p class="my-1 text-sm text-grey">Deploy your site</p>
            </div>
            <button @click.prevent="confirming = true" class="btn">Deploy</button>
        </div>
        <confirmation-modal
            v-if="confirming"
            title="Deploy your site"
            bodyText="Are you sure you want to deploy your site?"
            buttonText="Deploy"
            danger="true"
            @confirm="submit"
            @cancel="confirming = false"
        />
    </div>
</template>

<script>
  export default {
    props: {
      route: {
        type: String,
        default: '',
      },
    },

    data() {
      return {
        confirming: false,
      }
    },

    methods: {
      submit() {
        this.$axios.post(this.route)
          .then(response => {
            this.confirming = false;
            this.$toast.success(__('Trigger successfull'))
          })
          .catch((error) => {
            this.$toast.error(__('Trigger failed'))
            console.log(error)
          })
      },
    },
  }
</script>
