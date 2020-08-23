import Vue from 'vue'
import VueRouter from 'vue-router'
import home from "../components/Home";
import blog from "../components/Blog";
import PostDetails from "../components/PostDetails";
import PostCategory from "../components/PostCategory";

import Register from "../components/Register_new";
import Login from "../components/Login_on";
import Logout from "../components/Logout_off";
import Dashboard from "../components/Dashboard";
import Profile from "../components/Profile";
import editPost from "../components/editPost";

Vue.use(VueRouter)

const routes = [
    {
        path : '/' ,
        component: home,
        name: 'home'
    },
    {
        path : '/register_new' ,
        component: Register,
        name: 'register_new'
    },
    {
        path : '/login_on' ,
        component: Login,
        name: 'login_on'
    },
    {
        path : '/logout_off' ,
        component: Logout,
        name: 'logout_off'
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
        path : '/post/edit/:slug',
        component: editPost,
        name: 'editPost'
    },
    {
        path : '/posts/category/:slug',
        component: PostCategory,
        name: 'postCategory'
    },
    {
        path : '/profile',
        component: Profile,
        name: 'profile'
    },
    {
        path : '/dashboard',
        component: Dashboard,
        name: 'dashboard'
    }
];

const router = new VueRouter({
   routes,
   hashbang : false,
   mode : 'history'
});

export default router;
