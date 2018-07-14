<template>
    <div>
        <label for="form">Edit category</label>
        <hr>

        <form v-on:submit.prevent = "updateForm(category.id)">
            <label for="published">Status</label>
            <select class="form-control" name="published" v-model="category.published">
                <option value="0" v-bind:selected="category.published == 0" >Draft</option>
                <option value="1" v-bind:selected="category.published == 1" >Published</option>
            </select>

            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Category title" v-model="category.title"required>

           <label for="parent_id">Parent category</label>
            <select class="form-control" name="parent_id" v-model="category.parent_id">
                <option value="0">-- without parent category --</option>
                <option  v-for="cat in categories"
                         v-bind:value="cat.id"
                         v-bind:selected="cat.parent_id == category.parent_id"
                         v-if="cat.parent_id == 0"  >{{cat.title}} </option>
                <option  v-bind:value="cat.id"
                         v-bind:selected="cat.parent_id == category.parent_id"
                         v-else  >-{{cat.title}}</option>

            </select>

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
                category: {
                    title: '',
                    published: '',
                    parent_id: '',
                }
            }
        },
        created: function () {
            this.categories = this.$route.params.arr;
            this.category = this.$route.params.id
        },
        methods: {
            updateForm: function (id) {
                var app = this;
                var category = app.category;
                axios.put('/admin/category/'+ id, category)

                    .then(function (resp) {
                        app.$router.push({path: '/'});
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not edit your category");
                    });
            }
        }
    }
</script>