<template>
    <div class="container">
            <form enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Page Name</label>
                        <input class="form-control" type="text" name="name" id="name" v-model="page.name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cover_image">Cover Image</label>
                        <input class="form-control" accept="image/*" type="file" name="cover_image" id="cover_image" v-on:change="fileChange">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="meta_title">Meta Title</label>
                        <input class="form-control" type="text" name="meta_title" id="meta_title" v-model="page.meta_title">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="meta_description">Meta Description</label>
                        <input class="form-control" name="meta_description" id="meta_description" v-model="page.meta_description">
    
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="is_public">Indexable</label>
                        <input type="checkbox" name="is_public" id="is_public" v-model="page.is_public">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="is_password_protected">Log In Required</label>
                        <input type="checkbox" name="is_password_protected" id="is_password_protected" v-model="page.is_password_protected">
                    </div>
                </div>
                <div class="form-group">
                    <ul class="errors">
                        <li v-for="(error, index) in errors" :key="index">
                            {{ error[0] }}
                        </li>
                    </ul>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" @click="updatePageData()">Update</button>
                </div>
            </form>
    </div>
</template>

<script>
    export default {
        name: "PageFormComponent",

        props: {
            pageId: {
                required: true,
            },
        },

        data() {
            return {
                page: {
                    name: '',
                    cover_image: '',
                    is_public: false,
                    is_password_protected: true,
                    meta_title: '',
                    meta_description: '',
                },

                errors: [],
            };
        },

        mounted() {
            this.getPageData();
        },

        methods: {
            fileChange(e) {
                this.page.cover_image = this.file = e.target.files[0];
            },
            getPageData() {

                axios.get('/api/pages/' + this.pageId).then(response => {
                    this.page.name = response.data.name;
                    this.page.is_public = response.data.is_public;
                    this.page.is_password_protected = response.data.is_password_protected;
                    this.page.meta_title = response.data.meta_title;
                    this.page.meta_description = response.data.meta_description;

                }).catch(({ error }) => {
                    alert("Something went wrong. Please try later");
                });
            },

            updatePageData() {
                let formData = new FormData();
                formData.append('name', this.page.name);
                formData.append('is_public', this.page.is_public == true ? 1 : 0);
                formData.append('meta_title', this.page.meta_title);
                formData.append('meta_description', this.page.meta_description);
                if (this.page.cover_image !== '') {
                    formData.append('cover_image', this.page.cover_image);
                }
                formData.append('_method', 'PATCH');

                axios.post('/api/pages/' + this.pageId, formData, {
                    headers: {
                        'content-type': 'multipart/form-data',
                    }
                }).then(response => {
                    this.errors = [];
                    alert("Page updated!");
                }).catch(({ response }) => {
                    this.errors = response.data.errors;
                });
            },
        },
    }
</script>

<style scoped>
    .errors {
        color: red;
    }
</style>
