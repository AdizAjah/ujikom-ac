<nav x-data="{ open: false }" class="nav-gradient shadow-sm fixed w-full z-50 m-0 p-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                        <div class="relative">
                            <img src="{{ asset('images/logo.jpg') }}" alt="Mega Jaya AC Logo" class="h-10 w-auto rounded-xl shadow-md group-hover:shadow-lg transition-all duration-300 green-glow">
                            <div class="absolute inset-0 rounded-xl bg-green-500 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                        </div>
                        <span class="text-xl font-bold text-gray-800 dark:text-white">Mega Jaya AC</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-2 sm:-my-px sm:ms-10 sm:flex">
                    {{-- JIKA USER ADALAH ADMIN --}}
                    @if(Auth::user()->role === 'admin')
                        <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('admin.services.index')" :active="request()->routeIs('admin.services.*')" class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                            {{ __('Services') }}
                        </x-nav-link>
                        <x-nav-link :href="route('admin.bookings.index')" :active="request()->routeIs('admin.bookings.*')" class="nav-link {{ request()->routeIs('admin.bookings.*') ? 'active' : '' }}">
                            {{ __('Bookings') }}
                        </x-nav-link>
                        <x-nav-link :href="route('admin.gallery.index')" :active="request()->routeIs('admin.gallery.*')" class="nav-link {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">
                            {{ __('Gallery') }}
                        </x-nav-link>
                        <x-nav-link :href="route('admin.contacts.index')" :active="request()->routeIs('admin.contacts.*')" class="nav-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
                            {{ __('Messages') }}
                        </x-nav-link>

                    {{-- JIKA USER BIASA --}}
                    @else
                        <x-nav-link :href="route('my-bookings')" :active="request()->routeIs('my-bookings')" class="nav-link {{ request()->routeIs('my-bookings') ? 'active' : '' }}">
                            {{ __('My Bookings') }}
                        </x-nav-link>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <div class="relative" x-data="{ open: false }">
                    <button 
                        @click="open = !open"
                        class="flex items-center space-x-3 px-4 py-2.5 rounded-xl bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-all duration-300 green-glow"
                    >
                        <div class="user-avatar">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ Auth::user()->name }}</span>
                        <i class="fas fa-chevron-down text-xs text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div 
                        x-show="open" 
                        @click.away="open = false"
                        class="absolute right-0 mt-2 w-56 bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-200 dark:border-gray-700 overflow-hidden dropdown-content green-glow"
                        :class="{ 'show': open }"
                        x-cloak
                    >
                        <div class="p-2">
                            <div class="px-3 py-2 border-b border-gray-100 dark:border-gray-700 mb-2">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</p>
                            </div>
                            
                            <a href="{{ route('profile.edit') }}" class="flex items-center px-3 py-3 text-sm text-gray-700 dark:text-gray-300 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg transition-colors duration-200 group">
                                {{ __('Profile') }}
                            </a>
                            
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full flex items-center px-3 py-3 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors duration-200 group">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden mobile-menu">
        <div class="pt-2 pb-3 space-y-1">
            {{-- --- NAVIGASI ADMIN RESPONSIVE --- --}}
            @if(Auth::user()->role == 'admin')
                <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ __('Admin Panel') }}</div>
                    </div>
                    <div class="mt-3 space-y-1">
                         <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" class="flex items-center px-4 py-3 text-base font-medium rounded-xl transition-colors duration-300 {{ request()->routeIs('admin.dashboard') ? 'bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400' : 'text-gray-600 dark:text-gray-400 hover:bg-green-50 dark:hover:bg-green-900/20' }}">
                            {{ __('Dashboard') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('admin.services.index')" :active="request()->routeIs('admin.services.*')" class="flex items-center px-4 py-3 text-base font-medium rounded-xl transition-colors duration-300 {{ request()->routeIs('admin.services.*') ? 'bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400' : 'text-gray-600 dark:text-gray-400 hover:bg-green-50 dark:hover:bg-green-900/20' }}">
                            {{ __('Services') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('admin.bookings.index')" :active="request()->routeIs('admin.bookings.*')" class="flex items-center px-4 py-3 text-base font-medium rounded-xl transition-colors duration-300 {{ request()->routeIs('admin.bookings.*') ? 'bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400' : 'text-gray-600 dark:text-gray-400 hover:bg-green-50 dark:hover:bg-green-900/20' }}">
                            {{ __('Bookings') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('admin.gallery.index')" :active="request()->routeIs('admin.gallery.*')" class="flex items-center px-4 py-3 text-base font-medium rounded-xl transition-colors duration-300 {{ request()->routeIs('admin.gallery.*') ? 'bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400' : 'text-gray-600 dark:text-gray-400 hover:bg-green-50 dark:hover:bg-green-900/20' }}">
                            {{ __('Gallery') }}
                        </x-responsive-nav-link>
                         <x-responsive-nav-link :href="route('admin.contacts.index')" :active="request()->routeIs('admin.contacts.*')" class="flex items-center px-4 py-3 text-base font-medium rounded-xl transition-colors duration-300 {{ request()->routeIs('admin.contacts.*') ? 'bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400' : 'text-gray-600 dark:text-gray-400 hover:bg-green-50 dark:hover:bg-green-900/20' }}">
                            {{ __('Messages') }}
                        </x-responsive-nav-link>
                    </div>
                </div>
            @else
                <x-responsive-nav-link :href="route('my-bookings')" :active="request()->routeIs('my-bookings')" class="flex items-center px-4 py-3 text-base font-medium rounded-xl transition-colors duration-300 {{ request()->routeIs('my-bookings') ? 'bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400' : 'text-gray-600 dark:text-gray-400 hover:bg-green-50 dark:hover:bg-green-900/20' }}">
                    {{ __('My Bookings') }}
                </x-responsive-nav-link>
            @endif
            {{-- --- AKHIR NAVIGASI ADMIN RESPONSIVE --- --}}
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="flex items-center px-4 py-3 text-base font-medium text-gray-600 dark:text-gray-400 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-xl transition-colors duration-300">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="w-full flex items-center px-4 py-3 text-base font-medium text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-xl transition-colors duration-300">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

<style>
    .nav-gradient {
        background: linear-gradient(135deg, rgba(255,255,255,0.98) 0%, rgba(255,255,255,0.95) 100%);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(34, 197, 94, 0.1);
    }
    
    .dark .nav-gradient {
        background: linear-gradient(135deg, rgba(17,24,39,0.98) 0%, rgba(17,24,39,0.95) 100%);
        border-bottom: 1px solid rgba(34, 197, 94, 0.2);
    }
    
    .nav-link {
        @apply relative inline-flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-300 ease-out rounded-xl;
        word-spacing: 0.15em;
    }
    
    .nav-link:not(.active) {
        @apply text-gray-600 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 hover:bg-green-50 dark:hover:bg-green-900/20;
    }
    
    .nav-link.active {
        @apply text-green-600 dark:text-green-400 bg-gradient-to-r from-green-50 to-green-100 dark:from-green-900/30 dark:to-green-800/30 shadow-sm;
    }
    
    .nav-link.active::before {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 50%;
        transform: translateX(-50%);
        width: 24px;
        height: 3px;
        background: linear-gradient(90deg, #16a34a, #22c55e);
        border-radius: 2px;
    }
    
    .user-avatar {
        width: 36px;
        height: 36px;
        background: linear-gradient(135deg, #16a34a 0%, #22c55e 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 14px;
        box-shadow: 0 4px 12px rgba(34, 197, 94, 0.3);
    }
    
    .dropdown-content {
        opacity: 0;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        pointer-events: none;
    }
    
    .dropdown-content.show {
        opacity: 1;
        transform: translateY(0);
        pointer-events: all;
    }
    
    .mobile-menu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s ease;
    }
    
    .green-glow {
        box-shadow: 0 0 20px rgba(34, 197, 94, 0.3);
    }
</style>