<template>
    <div>
        <Navbar></Navbar>
        <router-view></router-view>
    </div>
</template>

<script>
import Navbar from "./menu.vue";
export default {
   components : {
       Navbar
   }
}
</script>
