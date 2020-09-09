<template>
    <div class="container">
        <form>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <label for="order_no">Order No</label>
                    <input class ="form-control" type="number" name="order_no" id="order_no" v-model="content.order_no">
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <label for="title">Title</label>
                    <editor
                        v-model="content.title"
                        api-key="no-api-key"
                        :init="{
                         height: 150,
                         menubar: false,
                         plugins: [
                           'advlist autolink lists link charmap anchor',
                           'searchreplace visualblocks fullscreen',
                           'paste help wordcount'
                         ],
                         toolbar:
                           'undo redo | formatselect | bold italic backcolor | \
                           alignleft aligncenter alignright alignjustify | \
                           bullist numlist outdent indent | removeformat | help'
                       }"
                    />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <label for="text_data">Text Data</label>
                    <editor
                        v-model="content.text_data"
                        api-key="no-api-key"
                        :init="{
                         height: 300,
                         menubar: false,
                         plugins: [
                           'advlist autolink lists link charmap anchor',
                           'searchreplace visualblocks fullscreen',
                           'paste help wordcount'
                         ],
                         toolbar:
                           'undo redo | formatselect | bold italic backcolor | \
                           alignleft aligncenter alignright alignjustify | \
                           bullist numlist outdent indent | removeformat | help'
                       }"
                    />
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <ul class="errors">
                        <li v-for="(error, index) in errors" :key="index">{{ error[0] }}</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <button type="button" @click="updateContentData()" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>

    import Editor from '@tinymce/tinymce-vue';

    export default {
        name: "ContentFormComponent",

        components: {
            'editor': Editor,
        },

        props: {
            contentId: {
                required: true,
            },
        },

        data() {
            return {
                content: {
                    order_no: 0,
                    title: '',
                    text_data: '',
                },

                errors: [],
            };
        },

        mounted() {
            this.getContentData();
        },

        methods: {
            getContentData() {
                axios.get("/api/contents/" + this.contentId).then(response => {
                    this.content.order_no = response.data.order_no;
                    this.content.title = response.data.title;
                    this.content.text_data = response.data.text_data;
                }).catch(({ response }) => {
                    alert("Something went wrong,try again");
                });
            },

            updateContentData() {
                axios.patch("/api/contents/" + this.contentId, this.content).then(response => {

                    alert("Data Saved Successfully");
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
