import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';

import DefaultLayout from "./components/layouts/DefaultLayout.vue";
import { ZiggyVue } from "ziggy-js/dist/vue.m";

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', {eager: true});

        let page = pages[`./Pages/${name}.vue`];

        page.default.layout = DefaultLayout;

        return page;
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    }
}).then(r => {

});
