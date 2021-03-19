require('./bootstrap');

import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
import { InertiaProgress } from '@inertiajs/progress'
import RouterTab from 'vue-router-tab'
import 'vue-router-tab/dist/lib/vue-router-tab.css'
import Router from 'vue-router'
Vue.use(Router)

Vue.mixin({ methods: { route } });
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
import vuetify from './plugins/vuetify'
Vue.use(RouterTab)
InertiaProgress.init({
    // The delay after which the progress bar will
    // appear during navigation, in milliseconds.
    delay: 250,

    // The color of the progress bar.
    color: '#29d',

    // Whether to include the default NProgress styles.
    includeCSS: true,

    // Whether the NProgress spinner will be shown.
    showSpinner: false,
})
const app = document.getElementById('app');


new Vue({
    vuetify,
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
