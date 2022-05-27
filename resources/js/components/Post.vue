<template>
    <div class="container">
        <div class="row mt-3">
            <div class="card mb-3 mx-2 p-0"  v-for="(post, index) in postList" :key="index">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img :src="post.img_url" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{post.title}}</h5>
                            <p class="card-text">{{post.description}}</p>
                            <p class="card-text"><small class="text-muted">{{post.author}}</small></p>
                            <p class="card-text">{{post.created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Post',
    props: ['postList'],
}
</script>

<style scoped>
    div.card{
        width: calc(100% / 2 - 2rem);
    }
</style>


