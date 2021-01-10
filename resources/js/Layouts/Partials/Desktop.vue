<template>
    <nav class="side-nav">
        <a href="" class="intro-x flex items-center pl-5 pt-4">
            <img alt="Image not working" class="w-6" src="/theme/images/fav.png">
            <span class="hidden xl:block text-white text-lg ml-3"> Path<span class="font-medium">Finders</span> </span>
        </a>
        <div class="side-nav__devider my-6"></div>
        <ul>
            <li>
                <inertia-link href="/dashboard" :class="[isActiveClassFunction('/dashboard')]">
                    <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                    <div class="side-menu__title"> Dashboard </div>
                </inertia-link>
            </li>
            <li>
                <inertia-link href="/profile" :class="[isActiveClassFunction('/profile')]">
                    <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                    <div class="side-menu__title"> Profile </div>
                </inertia-link>
            </li>
            <div v-if="is('administrator')">
                <li>
                    <inertia-link href="/general-commissions" :class="[isActiveClassFunction('/general-commissions')]">
                        <div class="side-menu__icon"> <i data-feather="percent"></i> </div>
                        <div class="side-menu__title"> General Commissions </div>
                    </inertia-link>
                </li>
                <li>
                    <inertia-link href="/admin-team" :class="[isActiveClassFunction('/admin-team')]">
                        <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                        <div class="side-menu__title"> Affiliate Team </div>
                    </inertia-link>
                </li>
            </div>
            
        </ul>
    </nav>
</template>
<script>
export default {
    computed: {
        currentRouteName() {
            return window.location.pathname;
        }
    },
    methods: {
         isActiveClassFunction(routename) {
            var classname = "side-menu"
            if(this.currentRouteName == routename)
                classname += ' side-menu--active'
            return classname
        }
    }
}
</script>