<template>
    <app-layout>
        <template #content>
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    General Commissions
                </h2>
            </div>
             <div class="rounded-md flex items-center px-5 py-4 mb-2 border border-theme-6 text-theme-6" v-bind:class="{hidden:hasError}"> 
                <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> 
                Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i> 
            </div>
        <!-- Form starts -->
            <!-- First row starts -->
            <div class="grid grid-cols-2 gap-2">
                <div class="intro-y box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                            Coordinator
                        </h2>
                    </div>
                    <div class="p-5" id="vertical-form">
                        <div class="preview">
                            <div>
                                <label>Point</label>
                                <input type="text" name="coordinator point" class="input w-full border mt-2" placeholder="00" v-model="createGeneralCommissions.coordinator_point">
                            </div>
                            <div>
                                <label>Direct Sale Commision</label>
                                <input type="text" name="coordinator direct sale commission" class="input w-full border mt-2" placeholder="00" 
                                v-model="createGeneralCommissions.coordinator_direct_sale_commission">
                            </div>
                            <div>
                                <label>Inter Sale Commission</label>
                                <input type="text" name="coordinator inter sale commission" class="input w-full border mt-2" placeholder="00" v-model="createGeneralCommissions.coordinator_inter_sale_commission">
                            </div>
                            <div>
                                <label>Main Dealer Commission</label>
                                <input type="text" name="coordinator main dealer commission" class="input w-full border mt-2" placeholder="00" v-model="createGeneralCommissions.coordinator_main_dealer_commission">
                            </div>
                            <div>
                                <label>Sub Dealer Commission</label>
                                <input type="text" name="coordinator sub dealer commission" class="input w-full border mt-2" placeholder="00" v-model="createGeneralCommissions.coordinator_sub_dealer_commission">
                            </div>
                            <div>
                                <label>Sale Rep Commission</label>
                                <input type="text" name="coordinator sales rep commission" class="input w-full border mt-2" placeholder="00" v-model="createGeneralCommissions.coordinator_sales_rep_commission">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second coloumn starts-->
                 <div class="intro-y box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                            Main Dealer
                        </h2>
                    </div>
                    <div class="p-5" id="vertical-form">
                        <div class="preview">
                            <div>
                                <label>Point</label>
                                <input type="text" name="main_dealer_point"  v-model="createGeneralCommissions.main_dealer_point" class="input w-full border mt-2" placeholder="00">
                            </div>
                            <div>
                                <label>Direct Sale Commision</label>
                                <input type="text" name="main_dealer_direct_sale_commission" v-model="createGeneralCommissions.main_dealer_direct_sale_commission" class="input w-full border mt-2" placeholder="00">
                            </div>
                            <div>
                                <label>Inter Sale Commission</label>
                                <input type="text" name="main_dealer_inter_sale_commission" v-model="createGeneralCommissions.main_dealer_inter_sale_commission" class="input w-full border mt-2" placeholder="00">
                            </div>
                            <div>
                                <label>Sub Dealer Commission</label>
                                <input type="text" name="main_dealer_sub_dealer_commission" v-model="createGeneralCommissions.main_dealer_sub_dealer_commission" class="input w-full border mt-2" placeholder="00">
                            </div>
                            <div>
                                <label>Sale Rep Commission</label>
                                <input type="text" name="main_dealer_sales_rep_commission" v-model="createGeneralCommissions.main_dealer_sales_rep_commission" class="input w-full border mt-2" placeholder="00">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second coloumn end-->
            </div>
            <!-- First row ends -->
                <br>
            <!-- Second row starts -->
            <div class="grid grid-cols-2 gap-2">
                <div class="intro-y box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                            Sub Dealer
                        </h2>
                    </div>
                    <div class="p-5" id="vertical-form">
                        <div class="preview">
                            <div>
                                <label>Point</label>
                                <input type="text" name="sub_dealer_point" v-model="createGeneralCommissions.sub_dealer_point" class="input w-full border mt-2" placeholder="00">
                            </div>
                            <div>
                                <label>Direct Sale Commision</label>
                                <input type="text" name="sub_dealer_direct_sale_commission" v-model="createGeneralCommissions.sub_dealer_direct_sale_commission" class="input w-full border mt-2" placeholder="00">
                            </div>
                            <div>
                                <label>Inter Sale Commission</label>
                                <input type="text" name="sub_dealer_inter_sale_commission" v-model="createGeneralCommissions.sub_dealer_inter_sale_commission" class="input w-full border mt-2" placeholder="00">
                            </div>
                            <div>
                                <label>Sale Rep Commission</label>
                                <input type="text" name="sub_dealer_sales_rep_commission" v-model="createGeneralCommissions.sub_dealer_sales_rep_commission" class="input w-full border mt-2" placeholder="00">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second coloumn starts-->
                 <div class="intro-y box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                            Sales Rep
                        </h2>
                    </div>
                    <div class="p-5" id="vertical-form">
                        <div class="preview">
                            <div>
                                <label>Point</label>
                                <input type="text" name="sales_rep_point" v-model="createGeneralCommissions.sales_rep_point" class="input w-full border mt-2" placeholder="00">
                            </div>
                            <div>
                                <label>Direct Sale Commision</label>
                                <input type="text" name="sales_rep_direct_sale_commission" v-model="createGeneralCommissions.sales_rep_direct_sale_commission" class="input w-full border mt-2" placeholder="00">
                            </div>
                            <div>
                                <label>Inter Sale Commission</label>
                                <input type="text" name="sales_rep_inter_sale_commission" v-model="createGeneralCommissions.sales_rep_inter_sale_commission" class="input w-full border mt-2" placeholder="00">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second coloumn end-->
            </div>
            <!-- second row ends -->
            
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
                <button type="button" class="button text-white bg-theme-1 shadow-md mr-2" @click="saveGeneralCommissions()">Save</button>
            </div>
        <!-- Form ends -->
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
                createGeneralCommissions: {
                    'coordinator_point'                  :'',
                    'coordinator_direct_sale_commission' :'',
                    'coordinator_inter_sale_commission'  :'',
                    'coordinator_main_dealer_commission' :'',
                    'coordinator_sub_dealer_commission'  :'',
                    'coordinator_sales_rep_commission'   :'',
                    'main_dealer_point'                  :'',
                    'main_dealer_direct_sale_commission' :'',
                    'main_dealer_inter_sale_commission'  :'',
                    'main_dealer_sub_dealer_commission'  :'',
                    'main_dealer_sales_rep_commission'   :'',
                    'sub_dealer_point'                   :'',
                    'sub_dealer_direct_sale_commission'  :'',
                    'sub_dealer_inter_sale_commission'   :'',
                    'sub_dealer_sales_rep_commission'    :'',
                    'sales_rep_point'                    :'',
                    'sales_rep_direct_sale_commission'   :'',
                    'sales_rep_inter_sale_commission'    :'',
                },
                hasError:true,
                getCommissionsData: [],
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
            },
            saveGeneralCommissions: function (){
                var input = this.createGeneralCommissions;
                var _this = this;
                if(
                    input['coordinator_point'] == ''                  
                    // input['coordinator_direct_sale_commission'] == '' ||
                    // input['coordinator_inter_sale_commission'] == ''  ||
                    // input['coordinator_main_dealer_commission'] == '' ||
                    // input['coordinator_sub_dealer_commission'] == ''  ||
                    // input['coordinator_sales_rep_commission'] == ''   ||
                    // input['main_dealer_point'] == ''                  ||
                    // input['main_dealer_direct_sale_commission'] == '' ||
                    // input['main_dealer_inter_sale_commission'] == ''  ||
                    // input['main_dealer_sub_dealer_commission'] == ''  ||
                    // input['main_dealer_sales_rep_commission'] == ''   ||
                    // input['sub_dealer_point'] == ''                   ||
                    // input['sub_dealer_direct_sale_commission'] == ''  ||
                    // input['sub_dealer_inter_sale_commission'] == ''   ||
                    // input['sub_dealer_sales_rep_commission'] == ''    ||
                    // input['sales_rep_point'] == ''                    ||
                    // input['sales_rep_direct_sale_commission'] == ''   ||
                    // input['sales_rep_inter_sale_commission'] == ''
                    ){
                        this.hasError = false;
                    }else{
                        this.hasError = true;
                        axios.post('/save-general-commissions', input).then(function (response){
                            // if(!response.hasError) {
                            //     this.$notify({
                            //     group: 'foo',
                            //     title: 'Important message',
                            //     text: 'Hello user! This is a notification!'
                            //     });
                            // }
                            this.createGeneralCommissions ={
                                'coordinator_point'                  :'',
                                'coordinator_direct_sale_commission' :'',
                                'coordinator_inter_sale_commission'  :'',
                                'coordinator_main_dealer_commission' :'',
                                'coordinator_sub_dealer_commission'  :'',
                                'coordinator_sales_rep_commission'   :'',
                                'main_dealer_point'                  :'',
                                'main_dealer_direct_sale_commission' :'',
                                'main_dealer_inter_sale_commission'  :'',
                                'main_dealer_sub_dealer_commission'  :'',
                                'main_dealer_sales_rep_commission'   :'',
                                'sub_dealer_point'                   :'',
                                'sub_dealer_direct_sale_commission'  :'',
                                'sub_dealer_inter_sale_commission'   :'',
                                'sub_dealer_sales_rep_commission'    :'',
                                'sales_rep_point'                    :'',
                                'sales_rep_direct_sale_commission'   :'',
                                'sales_rep_inter_sale_commission'    :'',
                            }
                            _this.getCommissionsView();
                    });
                }
            }
        }
    }
</script>
