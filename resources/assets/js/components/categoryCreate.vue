<template>
    <div>
         <label for="form">Create category</label>
        <hr>

        <form v-on:submit.prevent = "saveForm">

            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Category title" v-model="category.title" required>

            <label for="title">Slug</label>
            <input type="text" class="form-control" name="slug" placeholder="Category slug" v-model="category.slug" readonly="">

            <label for="parent_id">Parent category</label>
            <select class="form-control" name="parent_id" v-model="category.parent_id">
                <option selected value="0">-- without parent category --</option>
                <option  v-for="cat in categories" :value="cat.id" v-if="cat.parent_id == 0">{{cat.title}}</option>
                <option  v-else :value="cat.id"><span>-</span>{{cat.title}}</option>
            </select>

            <input type="hidden" name="created_by" v-model="user">
            <hr />
            <button type="submit" class="btn btn-primary">Save</button>
            <router-link to="/" class="btn btn-primary">Back</router-link>

        </form>
</div>
</template>

<script>
    export default {
       data: function () {
            return {
                categories:[],
                user: '',
                category: {
                    title: '',
                    id: '',
                    slug: '',
                    parent_id: '',
                },
            }
        },
        created: function () {
            this.categories = this.$route.params.arr;
            this.user = this.$route.params.user;
        },
        methods: {
            saveForm: function () {
                var app = this;
                var category = app.category;
                axios.post('/admin/category', category)

                    .then(function (resp) {
                        app.$router.push({path: '/'});
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create your category");
                    });
            }
        }
    }
</script>