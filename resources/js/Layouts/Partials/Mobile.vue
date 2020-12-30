<template>
    <div>
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="/theme/images/logo.svg">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="/dashboard" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="/profile" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Profile </div>
                    </a>
                </li>
                <div v-if="is('administrator')">
                    <li>
                        <a href="/general-commissions" class="menu menu--active">
                            <div class="menu__icon"> <i data-feather="home"></i> </div>
                            <div class="menu__title"> General Commissions </div>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-team" class="menu menu--active">
                            <div class="menu__icon"> <i data-feather="users"></i> </div>
                            <div class="menu__title"> Affiliate Team </div>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</template>