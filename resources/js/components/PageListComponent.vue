<template>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Indexable</th>
                    <th>Last Updated</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(page, index) in pages" :key="index">
                    <td>{{ page.name }}</td>
                    <td>{{ page.is_public ? "Yes" : "No" }}</td>
                    <td>
                        {{ lastUpdated(page.updated_at) }}
                    </td>
                    <td>
                        <a :href="pageRoute(page.id)" class="btn btn-primary">Edit</a>

                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    </div>
</template>

<script>
    import moment from 'moment';
    export default {
        name: "PageListComponent",

        data() {
            return {
                pages: [],
            };
        },

        mounted() {
            this.getPageList();
        },

        methods: {
            getPageList() {
                axios.get("/api/pages").then(response => {
                    this.pages = response.data;
                }).catch(({ error }) => {
                    alert("Something went wrong, try again");
                });
            },

            lastUpdated(date) {
                return moment(date).format("MMM D YYYY, h:mm a")
            },

            pageRoute(id) {
                return "/admin/pages/" + id;
            }
        },
    }
</script>

<style scoped>

</style>
