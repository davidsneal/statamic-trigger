import DeploySite from './DeploySite.vue';

Statamic.booting(() => {
    Statamic.$components.register('deploy-site', DeploySite);
});