require('./bootstrap');

require('moment');

import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
import Notifications from 'vue-notification';
import LaravelPermissionToVueJS from 'laravel-permission-to-vuejs';
import jQuery from 'jquery'
window.jQuery = window.$ = jQuery

import feather from 'feather-icons'

window.feather = feather

Vue.mixin({ methods: { route } });
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
Vue.use(LaravelPermissionToVueJS);
Vue.use(Notifications);

const app = document.getElementById('app');

new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
