<div>
    <!-- NAV + HERO: (Header + Nav + Hero in top-of-file) -->
    <header class="sticky top-0 z-50 bg-white/80 backdrop-blur-sm border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <a href="#" class="flex items-center gap-3">
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
                    <a href="#services" class="text-sm hover:text-slate-900">Home</a>
                    <a href="#unique" class="text-sm hover:text-slate-900">About Us</a>
                    <a href="#portfolio" class="text-sm hover:text-slate-900">Services</a>
                    {{-- <a href="#testimonials" class="text-sm hover:text-slate-900">Testimonials</a>
                    <a href="#pricing" class="text-sm hover:text-slate-900">Pricing</a> --}}
                    <a href="#contact" class="text-sm hover:text-slate-900">Contact</a>
                    <a href="#"
                        class="ml-4 inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-gradient-to-r from-primary to-accent text-white text-sm shadow-sm">Get
                        Started</a>
                </nav>

                <!-- Mobile toggle -->
                <div class="md:hidden">
                    <button id="mobileBtn" class="p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-primary/40">
                        <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobileMenu"
            class="md:hidden transform -translate-y-1/2 opacity-0 pointer-events-none transition-all duration-300 absolute left-0 right-0 bg-white shadow-lg">
            <div class="mx-6 mb-6 bg-white card-border p-4">
                <a href="#services" class="block py-2">Services</a>
                <a href="#unique" class="block py-2">Why Us</a>
                <a href="#portfolio" class="block py-2">Portfolio</a>
                <a href="#testimonials" class="block py-2">Testimonials</a>
                <a href="#pricing" class="block py-2">Pricing</a>
                <a href="#contact" class="block py-2">Contact</a>
                <a href="#"
                    class="mt-3 inline-block w-full text-center px-4 py-2 rounded-lg bg-gradient-to-r from-primary to-accent text-white">Get
                    Started</a>
            </div>
        </div>
    </header>
</div>