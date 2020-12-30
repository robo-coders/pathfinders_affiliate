<template>
    <app-layout>
        <template #content>
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Affiliate Team
                </h2>
                                <!-- BEGIN: Datatable -->
                <div class="intro-y datatable-wrapper box p-5 mt-5">
                    <table class="table table-report table-report--bordered display datatable w-full">
                        <thead>
                            <tr>
                                <th class="border-b-2 whitespace-no-wrap">#</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">Name</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">Email</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">Coupon Code</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">Role</th>
                            </tr>
                        </thead>
                        <tbody v-for="(item, index) in getAllUsersData" :key="item">
                            <tr>
                                <td class="border-b">
                                    {{index}}
                                </td>
                                <td class="text-center border-b">
                                    <div class="font-medium whitespace-no-wrap">{{item.first_name}}</div>
                                    <div class="text-gray-600 text-xs whitespace-no-wrap">{{item.last_name}}</div>
                                </td>
                                <td class="w-40 border-b">
                                    {{item.email}}
                                </td>
                                <td class="border-b w-5">
                                    {{item.id}}
                                </td>
                                <td class="border-b w-5">
                                    {{item.roles['0']['name']}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- END: Datatable -->
            </div>
        </template>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
   
    export default {
        props: ['sessions'],

        components: {
            AppLayout,
        },data(){
            return{
                getAllUsersData:[],
            }
        },
        created() { 
            this.getAllUserView()
        },
        methods: {
            getAllUserView() {
                axios.get('/get-all-users').then(({data}) => {
                    this.getAllUsersData = data;
                })
            }
        }
    }
</script>
