<template>
    <div class="container my-5">
        <div class="justify-content-center">
            <div class="row">
                    <div class="col-md-8">
                        <div class="card shadow my-3" v-for="(post,index) in posts.data" :key="index">
                            <img :src="post.photo" :alt="post.title" class="card-img-top img-thumbnail">
                            <div class="card-body">
                                <router-link :to="post.path">
                                    <h5 class="card-title">{{post.title}}</h5>
                                </router-link>
                                <p class="card-text">  </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Author : <span class="text-primary"></span>{{post.user.name}}</li>
                                <li class="list-group-item">Category : <span class="text-danger">{{post.category.name}}</span></li>
                                <li class="list-group-item">Created At : <span class="text-success">{{post.added}}</span></li>
                            </ul>
                            <div class="card-body">
                                <router-link :to="post.path">
                                    <span>id : {{post.id}}</span>
                                    <a class="card-link"><span class="float-right">Read More ...</span></a>
                                </router-link>
                            </div>
                        </div>

                        <div class="card-footer text-center my-5">
                            <pagination :data="posts" @pagination-change-page="getPosts">
                                <span slot="prev-nav">&lt; Previous</span>
                                <span slot="next-nav">Next &gt;</span>
                            </pagination>
                        </div>

                    </div>
                    <div class="col-md-4 my-2">
                       <div class="card">
                           <h3 class="card-header">Categories</h3>
                           <div class="card-body">
                               <Categories></Categories>
                           </div>
                       </div>
                    </div>
                    </div>
            </div>
        </div>
</template>

<script>
import Categories from './categories.vue';
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
