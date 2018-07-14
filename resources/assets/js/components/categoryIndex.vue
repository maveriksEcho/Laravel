<template>
<div>
    <router-link :to="{name: 'categoryCreate', params: {arr: categories}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square"></i> Create category</router-link><br><br>

    <table class="table table-striped text-center">
        <thead>
        <th>Title</th>
        <th>Published</th>
        <th>Parent category</th>
        <th class="text-right">Action</th>
        </thead>
        <tbody>
        <tr v-for="category, index in categories">
            <td>{{category.title}}</td>
            <td>
                <input type="button" v-on:click="change(category.id, index, category.published)" class="btn"

                        :class="[category.published ? 'btn-success' : 'btn-secondary']"
                        :value="[category.published ? 'Published' : 'Draft']" ></input ></td>

            <td v-if="category.parent_id == 0">Without parent category</td>
            <td v-else="category.id == category.parent_id">{{categories[category.parent_id - 1].title}}</td>
            <td class="text-right">

                <!--<router-link :to="{name: 'categoryEdit', params: {id: category}}" class="btn btn-default"><i class="fa fa-eye"></i></router-link>-->
                <router-link :to="{name: 'categoryEdit', params: {id: category, arr: categories}}" class="btn btn-default"><i class="fa fa-edit"></i></router-link>
                <a href="#"  class="btn btn-xs btn-danger"  v-on:click="deleteEntry(category.id, index)"><i class="fa fa-trash"></i></a>

            </td>
        </tr>

        </tbody>
    </table>
</div>

</template>

<script>
    export default {
        data: function () {
            return {
                categories: [],
            }
        },
        mounted() {
            var app = this;
            axios.get('/admin/category')
                .then(function (resp) {
                    app.categories = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load categories");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('/admin/category/' + id)
                        .then(function (resp) {
                            app.categories.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete category");
                        });
                }
            },
            change(id, index, published) {

                    var app = this;
                    axios.post('/admin/category/' + id)
                        .then(function (resp) {
                          app.categories[index].published = !published;
                        })
                        .catch(function (resp) {
                            alert("Could not change publish");
                        });

            }

        }
    }
</script>