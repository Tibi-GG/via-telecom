<nav x-data="{ open: false }" class="bg-white border-b border-via-100 fixed-top" style="padding:15px" >
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
              <title>{{ config('app.name', 'VIA TELECOM') }}</title>
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-10 w-auto logo" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" style="text-decoration: none;">
                      <b>   {{ __('Home') }} </b>
                    </x-nav-link>





                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                                      <x-dropdown align="right" width="48" class="form-inline my-2 my-lg-0">
                                          <x-slot name="trigger" clas="form-control mr-sm-2">
                                              <button class="flex items-center text-sm font-medium text-via-500 hover:text-via-500 hover:border-via-300 focus:outline-none focus:text-via-500 focus:border-via-300 transition duration-150 ease-in-out">
                                                  <div>
                                                      <b>  {{ __('Products') }} </b>
                                                  </div>

                                                  <div class="ml-1">
                                                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                      </svg>
                                                  </div>
                                                </button>
                                            </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('products/broadband')" :active="request()->routeIs('products/broadband')" style="text-decoration: none;">
                                            {{ __('Broadband') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('products/phone-and-voip')" :active="request()->routeIs('products/phone-and-voip')" style="text-decoration: none;">
                                            {{ __('Phone and VoIP') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('products/digital-payments')" :active="request()->routeIs('products/digital-payments')" style="text-decoration: none;">
                                            {{ __('Digital payments') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('products/mobile-phones')" :active="request()->routeIs('products/mobile-phones')" style="text-decoration: none;">
                                            {{ __('Mobile Phones') }}
                                        </x-dropdown-link>

                                    </x-slot>
                                </x-dropdown>


                        </div>





















                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">

                          @auth

                          <x-dropdown align="right" width="48" class="form-inline my-2 my-lg-0">


                              <x-slot name="trigger" clas="form-control mr-sm-2">
                                  <button class=" flex items-center text-sm font-medium text-via-500 hover:text-via-700 hover:border-via-300 focus:outline-none focus:text-via-700 focus:border-via-300 transition duration-150 ease-in-out">

                                      <div>
                                        <!--
                                        Personal Account
                                        <i class="bi bi-person"></i>


                                        Business Account
                                        <i class="bi bi-person-badge"></i>
                                              -->
                                      <b>  <i class="bi bi-person text-lg"></i>
                                            {{ Auth::user()->name }} </b>
                                      </div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->





                            <x-dropdown-link :href="route('profile')" :active="request()->routeIs('profile')" style="text-decoration: none;">
                            <i class="bi bi-person text-lg"></i>    {{ __('Profile') }}
                            </x-dropdown-link>



                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();" style="text-decoration: none;">
                                <i class="bi bi-box-arrow-right text-lg"></i>    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>

                          @else
                              <a href="{{ route('login') }}" class="text-sm  text-via-500 dark:text-via-500 underline " style="text-decoration: none;">Log in</a>

                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}" class="ml-4 text-sm text-via-500 dark:text-via-500 underline" style="text-decoration: none;">Register</a>
                              @endif
                          @endauth


            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-via-500 hover:text-via-500 hover:bg-via-100 focus:outline-none focus:bg-via-100 focus:text-via-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" style="text-decoration: none;">
                {{ __('Home') }}
            </x-responsive-nav-link>







            <div class="dropdown">
                <x-responsive-nav-link onclick="dropfunc()" class="dropbtn">
                  {{ __('Products') }} <i class="bi bi-caret-down-fill dropbtn-arrow"></i>
                </x-responsive-nav-link>

                <div id="products-dropdown" class="dropdown-content">
                  <x-responsive-nav-link :href="route('products/broadband')" :active="request()->routeIs('products/broadband')" style="text-decoration: none;">
                      {{ __('Broadband') }}
                  </x-responsive-nav-link>
                  <x-responsive-nav-link :href="route('products/phone-and-voip')" :active="request()->routeIs('products/phone-and-voip')" style="text-decoration: none;">
                      {{ __('Phone and VoIP') }}
                  </x-responsive-nav-link>
                  <x-responsive-nav-link :href="route('products/mobile-phones')" :active="request()->routeIs('products/mobile-phones')" style="text-decoration: none;">
                      {{ __('Mobile Phones') }}
                  </x-responsive-nav-link>
                </div>
              </div>



          </div>
          <hr>

        @auth
        <div class="pt-4 pb-1 border-t border-via-200">
            <div class="px-4">
              <x-responsive-nav-link :href="route('profile')" :active="request()->routeIs('profile')" style="text-decoration: none;">
                  <div class="font-medium text-base text-via-500">{{ Auth::user()->name }}</div>
                  <div class="font-medium text-sm text-via-500">{{ Auth::user()->email }}</div>
              </x-responsive-nav-link>

            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" style="text-decoration: none;">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @else
          <div class="pt-2 pb-3 space-y-1">
              <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')" style="text-decoration: none;">
                  {{ __('Login') }}
              </x-responsive-nav-link>
                  <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')" style="text-decoration: none;">
                      {{ __('Register') }}
                  </x-responsive-nav-link>
          </div>




        @endauth





    </div>
</nav>
