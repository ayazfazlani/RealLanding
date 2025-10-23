<header class="sticky top-0 z-50 bg-white/80 backdrop-blur-sm border-b border-slate-100"
    x-data="{ open: false, servicesOpen: false }">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between py-4">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <div
                    class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-accent flex items-center justify-center text-white font-bold shadow">
                    A
                </div>
                <div>
                    <div class="font-bold text-slate-900">ModernAgency</div>
                    <div class="text-xs text-slate-400 -mt-1">Digital Solutions</div>
                </div>
            </a>

            <!-- Desktop nav -->
            <nav class="hidden md:flex items-center gap-6">
                <a href="{{ route('home') }}" class="text-sm hover:text-slate-900">Home</a>
                <a href="{{ route('about') }}" class="text-sm hover:text-slate-900">About Us</a>

                <!-- Services dropdown -->
                <div class="relative" @click.away="servicesOpen = false">
                    <button type="button" @click="servicesOpen = !servicesOpen"
                        class="text-sm flex items-center gap-1 hover:text-slate-900 focus:outline-none">
                        Services
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 transform transition-transform duration-200"
                            :class="{ 'rotate-180': servicesOpen }" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown content -->
                    <div x-show="servicesOpen" x-transition.origin.top.left
                        class="absolute left-0 mt-2 w-52 bg-white shadow-lg rounded-md py-2 ring-1 ring-slate-100 z-50">
                        <a href="{{ route('website.development') }}"
                            class="block px-4 py-2 text-sm hover:bg-slate-50">Web Development</a>
                        <a href="{{ route('social.media') }}" class="block px-4 py-2 text-sm hover:bg-slate-50">Social
                            Media Management</a>
                        <a href="{{ route('seo') }}" class="block px-4 py-2 text-sm hover:bg-slate-50">SEO Services</a>
                        <a href="{{ route('automation') }}" class="block px-4 py-2 text-sm hover:bg-slate-50">Creative
                            Automation</a>
                        <a href="{{ route('creative.content') }}"
                            class="block px-4 py-2 text-sm hover:bg-slate-50">Consulting</a>
                        <a href="{{ route('lead.generation') }}" class="block px-4 py-2 text-sm hover:bg-slate-50">Lead
                            Generation</a>
                        <a href="{{ route('paid.advertising') }}" class="block px-4 py-2 text-sm hover:bg-slate-50">Paid
                            Ads</a>
                        <a href="{{ route('creative.contentservices') }}"
                            class="block px-4 py-2 text-sm hover:bg-slate-50">Creative
                            Content</a>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="text-sm hover:text-slate-900">Contact</a>
                <a href="{{ route('contact') }}"
                    class="ml-4 inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-gradient-to-r from-primary to-accent text-white text-sm shadow-sm">
                    Get Started
                </a>
            </nav>

            <!-- Mobile toggle -->
            <div class="md:hidden">
                <button @click="open = !open"
                    class="p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-primary/40">
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" x-transition.duration.300ms
        class="md:hidden bg-white shadow-lg border-t border-slate-100 overflow-hidden">
        <div class="mx-6 mb-6 p-4 space-y-2">
            <a href="{{ route('home') }}" class="block py-2">Home</a>
            <a href="{{ route('about') }}" class="block py-2">About Us</a>
            <a href="{{ route('contact')}}" class="block py-2">Contact</a>

            <!-- Dropdown inside mobile -->
            <details class="py-2">
                <summary class="cursor-pointer text-sm font-medium">Services</summary>
                <div class="pl-4 mt-2 space-y-1">
                    <a href="{{ route('services') }}" class="block text-sm">Services</a>
                    <a href="{{ route('website.development') }}" class="block text-sm">Web Development</a>
                    <a href="{{ route('social.media') }}" class="block text-sm">Social Media</a>
                    <a href="{{ route('seo') }}" class="block text-sm">SEO</a>
                    <a href="{{ route('automation') }}" class="block text-sm">Automation</a>
                    <a href="{{ route('creative.contentservices') }}" class="block text-sm">Creative Content</a>
                    <a href="{{ route('lead.generation') }}" class="block text-sm">Lead Generation</a>
                    <a href="{{ route('paid.advertising') }}" class="block text-sm">Paid Advertising</a>
                    <a href="{{ route('creative.content') }}" class="block text-sm">Consulting</a>
                </div>
            </details>

            <a href="{{ route('contact') }}"
                class="mt-3 inline-block w-full text-center px-4 py-2 rounded-lg bg-gradient-to-r from-primary to-accent text-white">
                Get Started
            </a>
        </div>
    </div>
</header>