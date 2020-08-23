<template>
<div class="container  my-5">
    <div class="card my-2">
        <div class="media">
            <a href="#" data-target="#addPost" data-toggle="modal">
                <span class="btn btn-primary my-2 mx-4"><i class="fal fa-plus text-danger mr-2"></i>Add New Post</span>
            </a>
        </div>
        <div class="media shadow my-4 mx-4 p-4 align-content-center">
            <table class="table table-responsive table-bordered align-content-center">
                <thead>
                  <tr>
                      <th><i class="fal fa-spin fa-home-alt"></i>#ID</th>
                      <th>Categories</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Add By</th>
                      <th>Created At</th>
                      <th>Actions</th>
                  </tr>
                </thead>

                <tbody>
                  <tr v-for="(post,index) in posts.data" :key="index">
                     <td>{{post.id}}</td>
                     <td>catt !!..</td>
                     <td>{{post.title.substr(0,20)}}</td>
                     <td>{{post.body.substr(0,20)}}</td>
                     <td>
                         <img :src="post.photo" width="60px" height="60px" :alt="post.title">
                     </td>
                     <td>add by</td>
                     <td>{{post.added}}</td>
                     <td class="text-center align-content-center">
                         <div class="flex flex-row align-content-center text-center ">
                             <router-link :to="`post/`+post.slug">
                               <span><i class="fal fa-eye ml-2 mr-2 text-primary"></i></span>
                             </router-link>

                             <router-link :to="{path:'post/edit/'+post.slug}">
                               <span><i class="fal fa-edit mr-2 text-success"></i></span>
                             </router-link>
                            <a @click="removePost(post.slug)">
                              <span><i class="fal fa-trash mr-2 text-danger"></i></span>
                            </a>
                         </div>
                     </td>
                  </tr>
                </tbody>

            </table>
        </div>
        <div class="card-footer text-center my-3">
            <pagination :data="posts" @pagination-change-page="getPosts">
                <span slot="prev-nav">&lt; Previous</span>
                <span slot="next-nav">Next &gt;</span>
            </pagination>
        </div>

    </div>
    <add-post @added="postAdded"></add-post>
</div>
</template>
<script>
import Categories from "./categories";
import addPost from "./addPost";
export default {

    data(){
        return{
            posts : {},
            currentUrl : null,
        }
    },
    components : {
      addPost,
    },
    created() {
        if (User.isLogin() && User.isAdmin()){
            this.getPosts();
        }else{
            this.$router.push({name : 'home'});
        }

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
        },
        postAdded(){
            this.getPosts();
        },
        removePost(slug){
            //alert('the post '+slug+' deleted with success')
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to delete this Post ! : "+slug,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: 'red',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    axios.delete(`api/posts/${slug}`)
                    .then(res => {
                        Swal.fire(
                            'Deleted!',
                            'Your Post has been deleted.',
                            'success'
                        )
                        this.getPosts();
                    }).catch(err => {
                        console.log(err);
                    })


                }
            })

        }
    },
}
</script>
