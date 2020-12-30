<x-guest-layout>
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="image not loaded" class="w-6" src="{{ asset('theme/images/fav.png') }}">
                    <span class="text-white text-lg ml-3"> Path<span class="font-medium">Finders</span> </span>
                </a>
                <div class="my-auto">
                    <img alt="image not loaded" class="-intro-x w-1/2 -mt-16" src="{{asset('theme/images/illustration.svg')}}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        A few more clicks to 
                        <br>
                        sign up to your account.
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white">Manage all your affiliate marketing here</div>
                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Sign Up
                    </h2>
                    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                    <x-jet-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('signup') }}">

                        @csrf
                        <div class="intro-x mt-8">
                            <input type="text" id="name" name="first_name" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="First Name" :value="old('name')" required autofocus>
                            <input type="text" name="last_name" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Last Name">
                            <input type="text" name="email" id="email" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Email" :value="old('email')" required>
                            <input type="password" name="password" id="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password" required autocomplete="new-password">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password Confirmation" required autocomplete="new-password">
                        </div>
                        <div class="intro-x flex items-center text-gray-700 mt-4 text-xs sm:text-sm">
                            <input type="hidden" name="coupon_code" value={{ request('coupon_code', '') }} />
                            <input type="checkbox" class="input border mr-2" id="remember-me">
                            <label class="cursor-pointer select-none" for="remember-me">I agree to the Affiliate System</label>
                            <a class="text-theme-1 ml-1" href="">Privacy Policy</a>. 
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Register</button>
                        <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0" onclick="window.location='{{url('/login')}}'">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: Register Form -->
        </div>
    </div>
</x-guest-layout>