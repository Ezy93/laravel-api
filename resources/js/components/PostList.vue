<template>
    <div>
        <Post/>
    </div>
</template>

<script>
import Axios from 'axios'
import Post from './Post.vue'
export default {
    name: 'PostList',

    data(){
        return {
            posts: [],
        }
    },

    methods:{
        getPosts(){
            axios.get('http://localhost:8000/api/posts')
            .then((result)=>{

            })
            .catch((error)=>{
                console.warn(error);
            });
        }
    },

    components: {
        Post,
    }
}
</script>

<style>

</style>
