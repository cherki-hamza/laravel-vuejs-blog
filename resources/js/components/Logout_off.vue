<template>
<div>
    <div class="container my-5">
        Logout
    </div>
</div>
</template>

<script>
import router from "../routes/routes";

export default {
    mounted() {
        User.logout();
        window.location('/home')
        //this.$router.push({name:'home'});
        //router.push({name:'home'})
    }
}
</script>
