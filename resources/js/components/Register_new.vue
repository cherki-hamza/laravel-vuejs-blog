<template>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register with vue js</div>

                    <div class="card-body">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" v-model="name"  required autocomplete="name">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control" v-model="first_name" required autocomplete="first_name">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">LastName</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control" v-model="last_name"  required autocomplete="last_name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" v-model="email"  required autocomplete="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" v-model="password" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button @click="register" type="submit" class="btn btn-primary">
                                       Register
                                    </button>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import router from "../routes/routes";

export default {
  data(){
      return{
          'first_name' : '',
          'last_name' : '',
          'name' : '',
          'email' : '',
          'password' : '',
          'logged': '',
          'picture' : '',
      }
  },
    created() {
        if(User.isLogin().logged){
            this.$router.push({ path: 'home' })
        }
    },
    methods : {
      register(){
          axios.post('/api/users/register_new' , {
              'first_name' : this.first_name,
              'last_name' : this.last_name,
              'name' : this.name,
              'email' : this.email,
              'password' : this.password
          }).then(response => {
              console.log(response.data);
              User.storeUser(JSON.stringify(response.data));
              this.$router.go();
             // this.$router.push({name:'home'});
          }).catch(err => {
              console.log(err);
          })
      },
    },
}
</script>
