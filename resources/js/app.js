require('./bootstrap');

require('alpinejs');


window.Vue = require('vue').default;

// import { createApp } from "vue";
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

import router from "./Components/router";
// import PostIndex from "./Components/Posts/PostIndex";
var PostIndex = import('./Components/Posts/PostIndex.vue')



createApp(
    rootComponent ,{
        components :{
            PostIndex
        }
    }
).use(router).mount(rootComponent,"#app")



// const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

// createInertiaApp({
//     title: (title) => `${title} - ${appName}`,
//     resolve: (name) => require(`./Pages/${name}.vue`),
//     setup({ el, app, props, plugin }) {
//         return createApp({ render: () => h(app, props) })
//             .use(plugin)
//             .mixin({ methods: { route } })
//             .mount(el);
//     },
// });

// InertiaProgress.init({ color: '#4B5563' });
