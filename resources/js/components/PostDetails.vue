<template>
    <div class="container my-5">
        <!-- start post details -->

        <!-- end post details -->
        <div class="card">
            <div class="card-title">
                <h1 class="text-primary">{{post.title}}<span class="float-right text-success">id : {{post.id}}</span></h1>
            </div>

            <div class="content">
                <div class="card-img-top">
                    <img style="width: 100%;height: 400px;" class="img img-fluid" :src="post.photo" :alt="post.title">
                </div>
                <div class="card-body">
                    <p>{{post.body.substr(0,200)}}</p>
                    <hr style="border: #00bcd4 solid 2px;">
                    <div class="card-footer row">
                        <div class="col-md-4 text-left">Category : <span class="text-danger"> {{post.category}}</span></div>
                        <div class="col-md-4 text-center">Author : <span class="text-success">{{post.user}}</span></div>
                        <div class="col-md-4 text-right">On : <span class="text-primary">{{post.created_at}}</span></div>
                    </div>
                </div>

            </div>
        </div>

        <!-- start comments -->
        <div class="row my-3">
            <div class="col-md-12">
                <div class="media shadow my-4 p-4" v-if="logged">
                    <div class="media-body">
                        <h3 class="my-3 text-dark">Add Comment</h3>
                        <div class="form-group">
                            <label for="comment">Add new</label>
                            <textarea
                                id="comment"
                                class="form-control"
                                cols="30" rows="4"
                                v-model="comment"
                            ></textarea>
                        </div>
                        <div class="form-group">
                            <input
                                type="button"
                                class="btn btn-block btn-primary"
                                value="Add Comment"
                                @click="addComment(post.id)"
                            >

                        </div>
                    </div>
                </div>
                <div class="media shadow my-5 p-5" v-else>
                    <div class="media-body text-danger">

                       <router-link to="/login_on">Oops No Permission to add comment So Login for add Comment :)</router-link>
                    </div>
                </div>

                <!-- start comments count -->
                <h4 class="my-3">Comments <span class="badge badge-info">{{post.comments_count}}</span></h4>
                <!-- start comments count -->


                <!-- start show comments -->
                <div class="media shadow my-4 p-4" v-for="(comment,index) in post.comments" :key="index">
                    <div class="media-body">
                     <span class="text-danger"><img style="border-radius: 100%;width: 60px;height: 60px;" class="img-circle mr-3" :src="post.user_profile" :alt="post.title" ><strong>{{name}}</strong> || <strong class="text-primary text-right">On :{{comment.created_at}}</strong></span>
                     <p class="lead">{{comment.body}}</p>
                    </div>
                </div>
                <!-- end show comments -->

            </div>
        </div>
        <!-- end comments -->

    </div>
</template>

<script>

import router from "../routes/routes";

export default {
  data(){
      return {
          post : [],
          comment : '',
          logged : '',
          name : '',
      }
  },
  methods: {
      addComment(id){
          axios.post('/api/comments' , {
             'post_id' : id,
              'body' : this.comment,
              'user_id' : User.isLogin().id,
          }).then(response=> {
             this.post.comments_count +=1;
             this.post.comments.unshift(response.data);
             this.logged = User.isLogin().logged;
             this.name = User.isLogin().name;
             //this.$router.go();
             this.comment = null;
          }).catch(err => {
              console.log(err);
          })
      }
  }  ,
  created() {
      axios.get(`/api/posts/${this.$route.params.slug}`)
           .then(response => {
               console.log(response.data.post);
               this.post = response.data.post;
               this.logged = User.isLogin().logged;
               this.name = User.isLogin().name;
           }).catch(err => {
             console.log(err);
      })
  }
}
</script>
