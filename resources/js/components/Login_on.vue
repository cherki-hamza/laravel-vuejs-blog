<template>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login with vue js</div>

                    <div class="card-body">

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
                                <button @click="login" type="submit" class="btn btn-primary">
                                    Login
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
            'email' : '',
            'password' : ''
        }
    },
    created() {
        if(User.isLogin().logged){
            this.$router.push({ name: 'home' })
        }
    },
    methods : {
        login(){
            //console.log('login !!!..')
           axios.post('/api/users/login_to' , {
               'email' : this.email,
               'password' : this.password
           }).then(response => {
               console.log(response.data);
               User.storeUser(JSON.stringify(response.data));
               this.$router.go();
               this.$router.push({name:'home'});
               //router.push({name:'home'})
           }).catch(err => {
               console.log(err);
               router.push({name:'login_on'})
           })
        }
    }
}
</script>
