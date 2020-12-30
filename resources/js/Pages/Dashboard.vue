<template>
    <app-layout>
        <template #content>
            <div v-if="is('administrator')">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        General Commissions Table
                    </h2>
                </div>
                <!-- First row starts -->
                <div class="grid grid-cols-2 gap-2">
                    <!-- Cooridnator Commission starts -->
                    <div class="intro-y box">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                            <h2 class="font-medium text-base mr-auto">
                                Coordinator
                            </h2>
                        </div>
                        <div class="p-5" id="head-options-table">
                            <div class="preview">
                                <div class="overflow-x-auto">
                                    <table class="table">
                                        <tbody>
                                            <!-- <tr class="bg-gray-700 text-white"> -->
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Points</th>
                                                <td class="border-b"> {{getCommissionsData.coordinator_point}} </td>
                                            </tr>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Direct Sale Commission</th>
                                                <td class="border-b"> {{getCommissionsData.coordinator_dsc}} </td>
                                            </tr>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Inter Sale Commission</th>
                                                <td class="border-b"> {{getCommissionsData.coordinator_idsc}} </td>
                                            </tr>
                                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                                <h2 class="font-medium text-base mr-auto">
                                                    Group Sale Commission
                                                </h2>
                                            </div>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Main Dealer</th>
                                                <td class="border-b"> {{getCommissionsData.coordinator_gmdc}} </td>
                                            </tr>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Sub Dealer</th>
                                                <td class="border-b"> {{getCommissionsData.coordinator_gsdc}} </td>
                                            </tr>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Sale Rep</th>
                                                <td class="border-b"> {{getCommissionsData.coordinator_gsrc}} </td>
                                            </tr>
                                        </tbody>
                                        <!-- <tbody> 
                                            <tr>
                                                <td class="border-b"> {{getCommissionsData.id}} </td>
                                            </tr>
                                        </tbody> -->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cooridnator Commission ends -->

                    <!-- Main Dealer Commission starts -->
                    <div class="intro-y box">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                            <h2 class="font-medium text-base mr-auto">
                                Main Dealer
                            </h2>
                        </div>
                        <div class="p-5" id="head-options-table">
                            <div class="preview">
                                <div class="overflow-x-auto">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Points</th>
                                                <td class="border-b"> {{getCommissionsData.main_dealer_point}} </td>
                                            </tr>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Direct Sale Commission</th>
                                                <td class="border-b"> {{getCommissionsData.main_dealer_dsc}} </td>
                                            </tr>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Inter Sale Commission</th>
                                                <td class="border-b"> {{getCommissionsData.main_dealer_idsc}} </td>
                                            </tr>
                                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                                <h2 class="font-medium text-base mr-auto">
                                                    Group Sale Commission
                                                </h2>
                                            </div>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Sub Dealer</th>
                                                <td class="border-b"> {{getCommissionsData.main_dealer_gsdc}} </td>
                                            </tr>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Sale Rep</th>
                                                <td class="border-b"> {{getCommissionsData.main_dealer_gsrc}} </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Main Dealer Commission ends -->
                </div>
                <!-- First row ends -->
                <br>
                <!-- Second row starts -->
                <div class="grid grid-cols-2 gap-2">
                    <!-- Sub Dealer Commission starts -->
                    <div class="intro-y box">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                            <h2 class="font-medium text-base mr-auto">
                                Sub Dealer
                            </h2>
                        </div>
                        <div class="p-5" id="head-options-table">
                            <div class="preview">
                                <div class="overflow-x-auto">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Points</th>
                                                <td class="border-b"> {{getCommissionsData.sub_dealer_point}} </td>
                                            </tr>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Direct Sale Commission</th>
                                                <td class="border-b"> {{getCommissionsData.sub_dealer_dsc}} </td>
                                            </tr>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Inter Sale Commission</th>
                                                <td class="border-b"> {{getCommissionsData.sub_dealer_idsc}} </td>
                                            </tr>
                                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                                <h2 class="font-medium text-base mr-auto">
                                                    Group Sale Commission
                                                </h2>
                                            </div>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Sale Rep</th>
                                                <td class="border-b"> {{getCommissionsData.sub_dealer_gsrc}} </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sub Dealer Commission ends -->
                    <!-- Sale Rep Commission starts -->
                    <div class="intro-y box">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                            <h2 class="font-medium text-base mr-auto">
                                Sale Rep
                            </h2>
                        </div>
                        <div class="p-5" id="head-options-table">
                            <div class="preview">
                                <div class="overflow-x-auto">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Points</th>
                                                <td class="border-b"> {{getCommissionsData.sales_rep_point}} </td>
                                            </tr>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Direct Sale Commission</th>
                                                <td class="border-b"> {{getCommissionsData.sales_rep_dsc}} </td>
                                            </tr>
                                            <tr>
                                                <th class="border-b whitespace-no-wrap">Inter Sale Commission</th>
                                                <td class="border-b"> {{getCommissionsData.sales_rep_idsc}} </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sale Rep Commission ends -->
                </div>
                <!-- Second row ends -->
            </div>
        </template>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    export default {
        // props: ['sessions'],
        components: {
            AppLayout,
        },
        data(){
            return{
                getCommissionsData:[],
            }
        },
        created() { 
            this.getCommissionsView()
        },
        methods: {
            getCommissionsView() {
                axios.get('/get-general-commissions').then(({data}) => {
                    this.getCommissionsData = data;
                })
            }
        }
    }
</script>
