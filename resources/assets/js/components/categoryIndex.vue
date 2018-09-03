<template>
<div>
    <router-link :to="{name: 'categoryCreate', params: {arr: categories, user: user}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square"></i> Create category</router-link><br><br>

    <table class="table table-striped text-center tablesorter" id="myTable">
        <thead>
        <th>Title</th>
        <th>Slug</th>
        <th>Published</th>
        <th>Parent category</th>
        <th class="text-right">Action</th>
        </thead>
        <tbody>
        <tr v-for="category, index in categories">
            <td>{{category.title}}</td>
            <td>{{category.slug}}</td>
            <td>
                <input type="button" v-on:click="change(category.id, index, category.published)" class="btn"

                        :class="[category.published ? 'btn-success' : 'btn-secondary']"
                        :value="[category.published ? 'Published' : 'Draft']" ></input >
            </td>

            <td v-if="category.parent_id == 0">Without parent category</td>
            <td v-else="category.id == category.parent_id">{{categories[category.parent_id - 1].title}}</td>
            <td class="text-right">

                <!--<router-link :to="{name: 'categoryEdit', params: {id: category}}" class="btn btn-default"><i class="fa fa-eye"></i></router-link>-->
                <router-link :to="{name: 'categoryEdit', params: {id: category, arr: categories, user: user}}" class="btn btn-warning"><i class="fa fa-edit"></i></router-link>
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
                user: ''
            }
        },
        created () {

            axios.get('/admin/category')
                .then(response => {
                    this.categories = response.data.categories;
                    this.user = response.data.user;
                })
                .catch(response => {
                    this.$toastr.e('Could not load categories');
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete it?")) {

                    axios.delete('/admin/category/' + id)
                        .then(response => {
                            this.categories.splice(index, 1);
                            this.$toastr.w('Category delete');
                        })
                        .catch(response => {
                            this.$toastr.e('Could not delete category');
                        });
                }
            },
            change(id, index, published) {

                    axios.post('/admin/category/' + id)
                        .then(response => {
                          this.categories[index].published = !published;
                            if( this.categories[index].published == true){
                                this.$toastr.s('Category published');
                            }else{
                                this.$toastr.s('Category draft');
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