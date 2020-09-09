<template>
    <div class="container">
        <h1>Company Settings</h1>
        <form v-model="company">
                <div class="form-group">
                    <label for="name">Company Name</label>
                    <input class="form-control" type="text" required name="name" id="name" v-model="company.name">
                </div>
                 <div class="form-group">
                    <label for="email">Company Email</label>
                    <input class="form-control" type="email" required name="email" id="email" v-model="company.email">
                </div>
                 <div class="form-group">
                    <label for="phone">Phone #</label>
                    <input class="form-control" type="text" required name="phone" id="phone" v-model="company.phone">
                </div>
                <div class="form-group">
                    <label for="email_host">Email Host</label>
                    <input class="form-control" type="text" required name="email_host" id="email_host" v-model="company.email_host">
                </div>
                <div class="form-group">
                    <label for="email_port">Email Port</label>
                    <input class="form-control" type="number" required name="email_port" id="email_port" v-model="company.email_port">
                </div>
                 <div class="form-group">
                    <label for="email_username">Email Username</label>
                    <input class="form-control" type="text" required name="email_username" id="email_username" v-model="company.email_username">
                </div>
                 <div class="form-group">
                    <label for="email_password">Email Password</label>
                    <input class="form-control" type="password" required name="email_password" id="email_password" v-model="company.email_password">
                </div>
                 <div class="form-group">
                    <label for="g_analytics">Google Analytics Code</label>
                    <textarea class="form-control" required name="g_analytics" id="g_analytics" v-model="company.g_analytics">
                    </textarea>
    
                </div>
                 <div class="form-group">
                    <label for="fb_advertising">Facebook Advertising Code</label>
                    <textarea class="form-control"  required name="fb_advertising" id="fb_advertising" v-model="company.fb_advertising">
                    </textarea>
                </div>
            <div class="row">
                <ul class="errors">
                    <li v-for="(error, index) in errors" :key="index">
                        {{ error[0] }}
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <button type="button" class="btn btn-primary" @click="updateCompanyData()">Update</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "CompanySetupComponent",

        props: {
            companyId: {
                required: true,
            },
        },

        data() {
            return {
                company: {
                    name: '',
                    email: '',
                    phone: '',
                    email_host: '',
                    email_port: '',
                    email_username: '',
                    email_password: '',
                    g_analytics: '',
                    fb_advertising: '',
                },
                errors: [],
            };
        },

        methods: {
            getCompanyData() {
                axios.get("/api/companies/" + this.companyId).then(response => {
                    this.company.name = response.data.name;
                    this.company.email = response.data.email;
                    this.company.phone = response.data.phone;
                    this.company.email_host = response.data.email_host;
                    this.company.email_port = response.data.email_port;
                    this.company.email_username = response.data.email_username;
                    this.company.email_password = response.data.email_password;
                    this.company.g_analytics = response.data.g_analytics;
                    this.company.fb_advertising = response.data.fb_advertising;
                }).catch(({ response }) => {
                    alert("Something went wrong, try again");

                }).finally(() => {

                });
            },

            updateCompanyData() {
                axios.patch("/api/companies/" + this.companyId, this.company).then(response => {
                    this.errors = [];
                    alert("Data saved successfully");
                }).catch(({ response }) => {
                    this.errors = response.data.errors;

                }).finally(() => {
                });
            },
        },

        mounted() {
            this.getCompanyData();
        }
    }
</script>

<style scoped>
    .errors {
        color: red;
    }
</style>
