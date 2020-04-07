import TriggerAddon from './TriggerAddon.vue';

Statamic.booting(() => {
    Statamic.$components.register('trigger-addon', TriggerAddon)
})
