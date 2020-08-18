<template>
    <div class="card">
        <h3 class="card-header text-success">Categories</h3>
        <div class="card-body">
            <ul class="list-group">

                    <li class="list-group-item" v-for="(category , index) in categories" :key="index">
                        <router-link :to="`/posts/category/${category.slug}`">
                        {{category.name}}
                        </router-link>
                    </li>


            </ul>
        </div>
        <div class="card-footer">

        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            home : '/',
            categories : {},
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
    }
}
</script>
