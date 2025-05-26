<header x-data="{ isOpen: false, userDropdownOpen: false }" class="bg-white">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800">OKEN</a>
        
        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-8">
            <a href="{{ route('about') }}" class="text-gray-700 hover:text-black transition-colors duration-200 uppercase text-sm font-medium">About</a>
            <a href="{{ route('reservation') }}" class="text-gray-700 hover:text-black transition-colors duration-200 uppercase text-sm font-medium">Reservation</a>
            <a href="{{ route('menu') }}" class="text-gray-700 hover:text-black transition-colors duration-200 uppercase text-sm font-medium">Menu</a>
            <a href="{{ route('contact') }}" class="text-gray-700 hover:text-black transition-colors duration-200 uppercase text-sm font-medium">Contact</a>
            
            <!-- Desktop Auth Menu -->
            @auth
                <div class="hidden md:block relative">
                    <button @click="userDropdownOpen = !userDropdownOpen" 
                            @click.outside="userDropdownOpen = false" 
                            class="inline-flex items-center px-4 py-2 bg-black hover:bg-gray-800 text-white rounded-lg transition-colors duration-200 uppercase text-sm font-medium">
                        <span>{{ Auth::user()->name }}</span>
                        <svg class="ml-2 h-4 w-4 transition-transform" :class="{'rotate-180': userDropdownOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="userDropdownOpen" 
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl py-2 z-50">
                        <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-black transition-colors duration-200">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Dashboard
                            </div>
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="border-t border-gray-100">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-black transition-colors duration-200">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    Logout
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            @endauth
        </nav>
        
        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button @click="isOpen = !isOpen" type="button" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                <svg x-show="!isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg x-show="isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="isOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="absolute top-full left-0 right-0 bg-white shadow-lg z-50 md:hidden">
        <nav class="py-4 px-6 space-y-4">
            <a href="{{ route('about') }}" @click="isOpen = false" class="block text-gray-700 hover:text-black transition-colors duration-200 uppercase text-sm font-medium">About</a>
            <a href="{{ route('reservation') }}" @click="isOpen = false" class="block text-gray-700 hover:text-black transition-colors duration-200 uppercase text-sm font-medium">Reservation</a>
            <a href="{{ route('menu') }}" @click="isOpen = false" class="block text-gray-700 hover:text-black transition-colors duration-200 uppercase text-sm font-medium">Menu</a>
            <a href="{{ route('contact') }}" @click="isOpen = false" class="block text-gray-700 hover:text-black transition-colors duration-200 uppercase text-sm font-medium">Contact</a>
            
            @guest
                <a href="{{ route('login') }}" @click="isOpen = false" class="block text-gray-700 hover:text-black transition-colors duration-200 uppercase text-sm font-medium">Admin Login</a>
            @else
                <a href="{{ route('admin.dashboard') }}" @click="isOpen = false" class="block text-gray-700 hover:text-black transition-colors duration-200 uppercase text-sm font-medium">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" @click="isOpen = false" class="block w-full text-left text-gray-700 hover:text-black transition-colors duration-200 uppercase text-sm font-medium">
                        Logout
                    </button>
                </form>
            @endguest
        </nav>
    </div>
</header>
