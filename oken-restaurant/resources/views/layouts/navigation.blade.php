<header class="bg-white">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800">OKEN</a>
        
        <nav class="hidden md:flex space-x-8">
            <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-900 uppercase text-sm">About</a>
            <a href="{{ route('reservation') }}" class="text-gray-600 hover:text-gray-900 uppercase text-sm">Reservation</a>
            <a href="{{ route('menu') }}" class="text-gray-600 hover:text-gray-900 uppercase text-sm">Menu</a>
            <a href="{{ route('contact') }}" class="text-gray-600 hover:text-gray-900 uppercase text-sm">Contact</a>
        </nav>
        
        <div class="md:hidden">
            <button type="button" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
</header>
