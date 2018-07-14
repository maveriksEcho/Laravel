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

                var app = this;
                axios.post('/admin/post/' + id)
                    .then(function (resp) {
                        app.post.published = !published;
                    })
                    .catch(function (resp) {
                        alert("Could not change publish");
                    });

            }

        }
    }
</script>
