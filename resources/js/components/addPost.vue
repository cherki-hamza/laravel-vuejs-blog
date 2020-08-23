<template>
    <!-- start Modal -->
    <div class="modal fade"
         id="addPost"
         data-backdrop="static"
         data-keyboard="false"
         tabindex="-1"
         aria-labelledby="addPost"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add New Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form @submit="savePost"  enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="category">Post Category</label>
                            <select v-model="category"  name="category" class="form-control" id="category">
                                <option disabled selected>Select Category</option>
                                <option v-for="(category,index) in categories" :key="index" :value="category.id">{{category.name}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input v-model="title" type="text" name="title" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label for="body">Post Description</label>
                            <textarea v-model="body" name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">Post Photo</label>
                            <input v-on:change="onImageChange" type="file" name="photo" class="form-control" id="photo">
                        </div>
                        <div class="form-group float-right">
                            <input type="submit" class="btn btn-success" value="Save Post">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
          title : '',
          category : '',
          body : '',
          user : '',
          categories : {},
          photo : null,
      }
  },
    created() {
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
        onImageChange(e){
            console.log(e.target.files[0]);
            this.photo = e.target.files[0];
        },
        savePost(e){
            console.log('saved !!');
            e.preventDefault();
            const config = {
                headers : {"content-type" : "multipart/form-data"}
            }
            let formData = new FormData();
            formData.append('photo',this.photo);
            formData.append('title',this.title);
            formData.append('body',this.body);
            formData.append('category_id',this.category);
            formData.append('user_id',User.isLogin().id);
            axios.post("/api/posts" , formData , config)
                 .then(res => {
                     $('#addPost').modal('hide');
                     router.go();
                     this.title = '';
                     this.body = '';
                     this.category = '';
                     this.photo = null;
                     Swal.fire({
                         position: 'center',
                         icon: 'success',
                         title: 'The Post added with success',
                         showConfirmButton: false,
                         timer: 3500
                     });
                     this.$emit("added");
                 }).catch(err => {
                console.log(err);
                })
        }
    },
}
</script>
