<template>
    <section class="col-12 col-md-6 col-lg-4">
        <div class="card shadow border-0 h-100">
            <a :href="`blog-detail.html?id=${blog.article_id}&url=${blog.article_url}`">
                <img :src="blog.image" class="card-img-top" alt="Travel Image"> 
            </a>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title fw-bold lh-base">{{ blog.subject }}</h5>
                <p class="small">{{ blog.subtitle }}</p>
                <div class="mt-auto">
                    <div class="star-rating">
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <div class="star-current" style="width: 90%">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <small class="text-muted"> 4.5 (50) </small>
                    <small class="float-end"> <i class="fas fa-eye"></i> 1,000 </small>
                    <div class="d-grid mt-2">
                        <a :href="`blog-detail.html?id=${blog.article_id}&url=${blog.article_url}`" class="btn btn-secondary btn-block fw-bold">
                            อ่านเพิ่มเติม <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    module.exports = {
        props: ['blog']
    }
</script>

<style scoped>

</style>
