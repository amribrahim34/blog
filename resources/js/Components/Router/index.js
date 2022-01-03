// const { createRouter } = require("vue-router");

import {createRouter , createWebHistory, creteWebHistory} from "vue-router";
// import {PostIndex } from "../Posts/PostIndex.vue";
var PostIndex = import('../Posts/PostIndex.vue')
// console.log(PostIndex);
// import PostIndex from "./Components/Posts/PostIndex";


const routes = [
    {
        path: '/dashboard',
        name: 'posts.index',
        component: PostIndex,
    }
]

export default createRouter({
    options :{
        history :createWebHistory(),
        routes
    }
})
