// const { createRouter } = require("vue-router");

import {createRouter , createWebHistory, creteWebHistory} from "vue-router";
import {PostIndex } from "../Posts/PostIndex";

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
