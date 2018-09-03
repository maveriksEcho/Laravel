<template>
    <input type="button" v-on:click="change(post.id, post.published)" class="btn"

           :class="[post.published ? 'btn-success' : 'btn-secondary']"
           :value="[post.published ? 'Published' : 'Draft']" ></input >
</template>

<script>
    export default {
        props: ['p'],
        data: function () {
            return {
                post:'',
            }
        },
        mounted() {
           this.post = this.p
        },
        methods: {
            change(id, published) {
                axios.post('/admin/post/' + id)
                    .then(response => {

                        this.post.published = !published;
                        if( this.post.published == true){
                            this.$toastr.s('Post published');
                        }else{
                            this.$toastr.s('Post draft');
                        }

                    })
                    .catch(response => {
                        this.$toastr.e('Could not change publish');
                    });

            }

        }
    }
</script>
<style lang="scss">
    @import '~vue-toastr/src/vue-toastr.scss';
</style>
