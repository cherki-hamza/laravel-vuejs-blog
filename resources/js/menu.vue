<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light shadow-lg" style="background-color: #e3f2fd;">
<!--            <a class="navbar-brand text-success" href="#">My Blog</a>-->
            <router-link class="navbar-brand text-success" :to="home">My Blog </router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
<!--                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
                        <router-link class="nav-link" :to="home">Home<span class="sr-only">(current)</span></router-link>
                    </li>

                    <li class="nav-item active">
                        <router-link class="nav-link" :to="blog">Blog</router-link>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <span  v-for="(category , index) in categories" :key="index">
                                <router-link class="dropdown-item" :to="`/posts/category/${category.slug}`">
                                       {{category.name}}
                                </router-link>
                                <div class="dropdown-divider"></div>
                            </span>


                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <router-link class="nav-link" :to="home">
                            <img style="border-radius:100px;width:30px;height:30px;" :src="img">
                            </router-link>
                        </li>
                        <li class="nav-item active">
                            <router-link class="nav-link" :to="home">Login</router-link>
                        </li>
                        <li class="nav-item active">
                            <router-link class="nav-link" :to="home">Register</router-link>
                        </li>

                    </ul>
                </form>
            </div>
        </nav>
    </div>
</template>

<script>
export default {

    data(){
            return{
                home : '/',
                blog : '/blog',
                img : 'https://source.unsplash.com/random',
                user : [],
                categories : {},
            }
    },
    created() {
        this.getCategories();
        axios.get('/api/users')
            .then(response => {
                console.log(response.data);
                this.user = response.data;
            }).catch(err => {
            console.log(err);
        });
    },
    methods : {
        getCategories(){
            axios.get('/api/categories')
                .then(response => {
                    console.log(response.data.categories);
                    this.categories =response.data.categories;
                })
                .catch(err => console.log(err))
        },
    }

}
</script>
