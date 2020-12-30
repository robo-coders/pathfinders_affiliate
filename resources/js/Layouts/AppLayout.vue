<template>
    <div>
        <Mobile />
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <Desktop />
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
                    <!-- END: Breadcrumb -->

                    <!-- BEGIN: Search -->
                        <!-- search goes here -->
                    <!-- END: Search -->

                    <!-- BEGIN: Notifications -->
                    <notifications />
                        <!-- notification goes here -->
                    <!-- END: Notifications -->
                    
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8 relative">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                            <img alt="Image not working" src="/theme/images/profile-12.jpg">
                        </div>
                        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                            <div class="dropdown-box__content box bg-theme-38 text-white">
                                <div class="p-4 border-b border-theme-40">
                                    <div class="font-medium">{{ $page.user.name }}</div>
                                    <div class="text-xs text-theme-41">Sales Team</div>
                                </div>
                                <div class="p-2 border-t border-theme-40">
                                    <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> 
                                    <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Affiliate Link 
                                    </a>
                                    <div class="modal" id="button-modal-preview">
                                        <div class="modal__content relative">
                                            <a data-dismiss="modal" href="javascript:;" class="absolute right-0 top-0 mt-3 mr-3"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                                            <div class="p-5 text-center">
                                                <i data-feather="check-circle" class="w-16 h-16 text-theme-9 mx-auto mt-3"></i> 
                                                <div class="text-3xl mt-5">Affiliate Link</div>
                                                <div> 
                                                    <input type="text" class="input w-full border mt-2" :value="'http://affiliate.masterpf.com/affiliate/pf?coupon_code='+$page.user.id"> 
                                                </div>
                                            </div>
                                            <div class="px-5 pb-8 text-center">
                                                <button type="button" data-dismiss="modal" class="button w-24 bg-theme-1 text-white">Ok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 border-t border-theme-40">
                                    <a href="javascript:;" @click="logout" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->

                <slot name="content"></slot>
                
            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: JS Assets-->
    </div>
</template>

<script>
    import Mobile from './Partials/Mobile'
    import Desktop from './Partials/Desktop'
    
    export default {
        components: {
            Mobile,
            Desktop
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },

        methods: {
            logout() {
                axios.post(route('logout').url()).then(response => {
                    window.location = '/';
                })
            },
        }
    }
    
</script>
