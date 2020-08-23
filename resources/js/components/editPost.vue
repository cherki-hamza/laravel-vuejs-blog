<template>
    <!-- start Modal -->
    <div class="container mx-auto my-5">
        <div class="col-md-8 align-content-center">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" id="staticBackdropLabel">Edit Post</h3>
                </div>
                <div class="card-body">
                    <form @submit="updatePost"  enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="category_id">Post Category</label>
                            <select  v-model="post.category_id"  name="category_id" class="form-control" id="category_id">
                                <option :value="post.category_id" selected>{{post.category}}</option>
                                <option v-for="(category,index) in categories" :key="index" v-model="post.category_id" :value="category.id">{{category.name}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input v-model="post.title" type="text" name="title" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label for="body">Post Description</label>
                            <textarea v-model="post.body" name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="photo">Post Photo</label>
                                    <input v-on:change="onImageChange" type="file" name="photo" class="form-control" id="photo">
                                </div>
                                <div class="col-md-6">
                                    <h4>your Image</h4>
                                    <span class="text-danger"><img style="width: 200px;height: 50px;" v-model="post.photo" class="img-thumbnail mx-auto" :src="post.photo" ></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group float-right">
                            <input type="submit" class="btn btn-success" value="Update Post">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal -->
</template>
<script>
import router from "../routes/routes";

export default {
    data() {
        return{
            post : {title : '', category_id : '' ,body : '', user : ''},
            categories : {},
            photo : null,
            dashboard : '/dashboard',
        }
    },
    created() {
        this.getPost();
        this.getCategories();
    },
    methods: {
        getCategories(){
            axios.get('/api/categories')
                .then(response => {
                    console.log(response.data.categories);
                    this.categories =response.data.categories;
                })
                .catch(err => console.log(err))
        },
        getPost(){
          axios.get(`/api/posts/${this.$route.params.slug}`)
               .then(response => {
                   console.log(response.data.post);
                   this.post = response.data.post;
               }).catch(err => {
              console.log(err);
          })
        },
        onImageChange(e){
            console.log(e.target.files[0]);
            this.photo = e.target.files[0];
        },
        updatePost(e){
            console.log('saved !!');
            e.preventDefault();
            const config = {
                headers : {"content-type" : "multipart/form-data"}
            }
            let formData = new FormData();
            formData.append('photo',this.photo);
            formData.append('title',this.post.title);
            formData.append('body',this.post.body);
            formData.append('category_id',this.post.category_id);
            formData.append('user_id',User.isLogin().id);
            formData.append("_method" , "put");
            axios.post(`/api/posts/${this.post.slug}` , formData , config)
                .then(res => {
                    this.title = '';
                    this.body = '';
                    this.category_id = '';
                    this.photo = null;
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'The Post updated with success',
                        showConfirmButton: false,
                        timer: 3500
                    });
                    this.$router.push({name:"dashboard"});
                }).catch(err=>{
                console.log(err);
            })
        }
    },
}
</script>
