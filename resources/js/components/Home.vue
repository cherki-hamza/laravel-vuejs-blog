<template>
    <div class="container my-5">
        <div class=" justify-content-center">
            <div class="row">
                <div class="col-md-8">
                   <div class="card shadow">
                            <div class="card-body text-danger" v-for="(post,index) in posts.data" :key="index">

                                <router-link :to="post.path">
                                    <h1 class="text-primary">{{post.title}}<span class="float-right text-danger">id : {{post.id}}</span></h1>
                                </router-link>

                                <img class="img img-thumbnail" style="width: 100%;height: 150px;" :src="post.photo" :alt="post.title">
                                <p class="text-info">{{post.body.substr(0,100)}}</p>
                                <div class="row">
                                    Author : <div class="text-danger"> <span class="ml-5">{{post.user.name}}</span></div>
                                    <div class="text-success"><span class="ml-5"> On : {{post.added}}</span></div>
                                    <div class="text-success"><span class="ml-5">Category : {{post.category.name}}</span></div>

                                </div>
                                <hr style="border: goldenrod solid 2px;">
                            </div>
                        </div>
                    <div class="card-footer text-center my-5">
                        <pagination :data="posts" @pagination-change-page="getPosts">
                            <span slot="prev-nav">&lt; Previous</span>
                            <span slot="next-nav">Next &gt;</span>
                        </pagination>
                    </div>
                </div>
                <div class="col-md-4">
                  <Categories></Categories>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import Categories from "./categories.vue";

    export default {

        data(){
          return{
              posts : {}
          }
        },
        components : {
            Categories
        },
        created() {
            this.getPosts();
        },
        methods: {
            getPosts(page){
                if(typeof page === 'undefined'){
                    page = 1;
                }
                axios.get('/api/posts?page='+page)
                     .then(response => {
                         console.log(response.data);
                         this.posts =response.data;
                     })
                     .catch(err => console.log(err))
            }
        }

    }
</script>
