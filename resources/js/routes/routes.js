import Vue from 'vue'
import VueRouter from 'vue-router'
import home from "../components/Home";
import blog from "../components/Blog";
import PostDetails from "../components/PostDetails";
import PostCategory from "../components/PostCategory";

Vue.use(VueRouter)

const routes = [
    {
        path : '/' ,
        component: home,
        name: 'home'
    },
    {
        path : '/blog' ,
        component: blog,
        name: 'blog'
    },
    {
        path : '/post/:slug',
        component: PostDetails,
        name: 'postDetails'
    },
    {
        path : '/posts/category/:slug',
        component: PostCategory,
        name: 'postCategory'
    }
];

const router = new VueRouter({
   routes,
   hashbang : false,
   mode : 'history'
});

export default router;
