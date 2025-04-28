<div>
    <nav class="fixed z-30 w-full bg-background/80 py-3 px-4 h-[6.5rem]">
        <div class="flex justify-between items-center max-w-screen-2xl mx-auto">
            <div class="flex justify-start items-center">
                <!-- Hamburger menu-->
                <button type="button"
                        class="lg:hidden flex items-center bg-background rounded-full h-8 w-8 justify-center text-primary"
                        data-drawer-target="drawer-navigation"
                        data-drawer-toggle="drawer-navigation"
                        aria-controls="drawer-navigation">
                    <span class="sr-only">Open menu</span>
                    <x-lucide-align-left class="w-5 h-5"/>
                </button>
                <x-tbv-logo/>
                <!-- Desktop menu -->
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1 ml-6">
                    <div class="flex flex-col mt-4 space-x-6 text-sm font-medium lg:flex-row xl:space-x-8 lg:mt-0">
                        <x-tbv-mainmenu/>
                    </div>
                </div>
            </div>
            <div class="flex items-center lg:order-2">


                @if (Route::has('login'))
                    @auth
                        <livewire:appearance-selector/>
                        <x-lucide-minus class="w-auto h-8 rotate-90 text-secondary/30 "/>
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button type="button"
                                    class="flex -mx-1 text-sm bg-gray-800 rounded-full md:mr-0 flex-shrink-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                    id="userMenuDropdownButton" aria-expanded="false"
                                    data-dropdown-toggle="userMenuDropdown">
                                <span class="sr-only">Open user menu</span>

                                <img class="w-8 h-8 rounded-full object-cover"
                                     src="{{ Auth::user()->profile_photo_url }}"
                                     alt="{{ Auth::user()->username }}">
                            </button>
                        @else
                            <button type="button"
                                    class="flex px-3 py-2 text-sm bg-gray-800 rounded-full md:mr-0 flex-shrink-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                    id="userMenuDropdownButton" aria-expanded="false"
                                    data-dropdown-toggle="userMenuDropdown">
                                <span class="sr-only">Open user menu</span>

                                <div>{{ Auth::user()->username }}</div>
                            </button>
                        @endif
                        <!-- Dropdown menu -->
                        <div class="hidden z-50 my-4 w-56 text-base list-none bg-background rounded divide-y divide-border/30 shadow"
                             id="userMenuDropdown">
                            <div class="py-3 px-4">
                                <span class="block text-sm font-bold text-secondary">Neil Sims</span>
                                <span class="block text-sm font-light text-primary truncate">name@flowbite.com</span>
                            </div>
                            <div class="py-1 flex flex-col gap-2"
                                 aria-labelledby="userMenuDropdownButton">

                                <x-ui.tbv-link-dropdown class="block" href="{{ route('profile.show') }}"
                                                        :active="request()->routeIs('profile')">
                                    Profile
                                </x-ui.tbv-link-dropdown>


                                <x-ui.tbv-link-dropdown class="block" href="#">
                                    Settings
                                </x-ui.tbv-link-dropdown>

                            </div>

                            <div class="py-1 font-light text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <x-ui.tbv-link-dropdown href="{{ route('logout') }}"
                                                            @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-ui.tbv-link-dropdown>
                                </form>
                            </div>
                        </div>
                    @endauth
                @endif
            </div>
        </div>
    </nav>


    <!-- Drawer component -->
    <div id="drawer-navigation"
         class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-background/95 w-80 lg:hidden"
         tabindex="-1"
         aria-labelledby="drawer-navigation-label">
        <x-tbv-logo/>
        <button type="button"
                data-drawer-hide="drawer-navigation"
                aria-controls="drawer-navigation"
                class="text-secondary bg-transparent hover:bg-accent hover:text-accent-foreground rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <div class="flex flex-col gap-4 font-medium">
                <x-tbv-mainmenu/>
            </div>
        </div>
    </div>
</div>

