<div>
    <!-- Hero with Video Background -->
    <section class="relative h-screen flex items-center justify-center text-white overflow-hidden video-bg">
        <video autoplay muted loop class="w-full h-full object-cover">
            <source src="{{ asset('assets/videos/1.mp4') }}" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6" data-aos="fade-up">
                Transform Your Digital Presence
            </h1>
            <p class="text-xl md:text-2xl mb-8" data-aos="fade-up" data-aos-delay="200">
                AI-powered solutions that drive growth and engagement
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="#contact"
                    class="px-8 py-3 bg-gradient-to-r from-primary to-accent rounded-lg text-lg font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    Get Started
                </a>
                <a href="#services"
                    class="px-8 py-3 bg-white text-gray-800 rounded-lg text-lg font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    Our Services
                </a>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28">
            <div class="grid grid-cols-12 gap-8 items-center">
                <div class="col-span-12 lg:col-span-7">
                    <h1 class="text-4xl lg:text-5xl font-extrabold leading-tight text-slate-900">
                        Ignite Your Online Success with Tailored AI Digital Marketing Solutions
                    </h1>
                    <p class="mt-6 text-lg text-slate-600 max-w-xl">
                        We offer customized AI-powered solutions from SEO to web development designed to elevate
                        your brand and drive measurable growth.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#contact"
                            class="inline-flex items-center gap-3 px-6 py-3 rounded-lg bg-gradient-to-r from-primary to-accent text-white font-medium shadow transition-all duration-300 hover:scale-105 hover:shadow-lg">
                            Book a Meeting
                        </a>
                        <a href="#services"
                            class="inline-flex items-center gap-2 px-4 py-3 rounded-lg border border-slate-200 bg-white text-sm transition-all duration-300 hover:scale-105 hover:shadow-lg">
                            Explore Services
                        </a>
                    </div>

                    <div class="mt-10 flex items-center gap-6">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-12 h-12 rounded-lg bg-white shadow flex items-center justify-center transition-all duration-300 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m4 0h-1V8m-4 0v6m6-10h.01M6 12h.01M6 20h.01" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-semibold">Trusted by businesses</div>
                                <div class="text-xs text-slate-400">
                                    200+ successful projects
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div
                                class="w-12 h-12 rounded-lg bg-white shadow flex items-center justify-center transition-all duration-300 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-accent" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                                        d="M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-semibold">Dedicated support</div>
                                <div class="text-xs text-slate-400">24/7 reachable team</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-5 relative">
                    <div class="mx-auto max-w-md lg:max-w-none text-center" data-aos="fade-up">
                        <div
                            class="rounded-2xl p-6 bg-white card-border shadow-lg animate-float transition-all duration-300 hover:shadow-xl">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1400&auto=format&fit=crop&ixlib=rb-4.0.3&s=123"
                                alt="hero"
                                class="rounded-xl w-full h-64 object-cover mx-auto transition-all duration-300 hover:scale-105" />
                            <div class="mt-4">
                                <div class="font-semibold">
                                    Full-service digital solutions
                                </div>
                                <div class="text-sm text-slate-500 mt-2">
                                    Web, SEO, PPC & Social media crafted with AI insights.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- decorative shapes -->
                    <div
                        class="hidden lg:block absolute -left-12 -bottom-12 w-48 h-48 rounded-full bg-gradient-to-br from-primary/30 to-accent/20 blur-3xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold">Our Services</h2>
                <p class="mt-3 text-slate-500 max-w-2xl mx-auto">
                    We craft AI-driven strategies and build responsive websites that convert visitors into customers.
                </p>
            </div>

            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                $services = [
                [
                'icon' => 'fas fa-laptop-code',
                'link' => 'website.development',
                'title' => 'Web Design Services',
                'description' => 'Get AI-powered web design services tailored to your needs to create websites that
                offer enhanced user experience.',
                'gradient' => 'from-primary to-accent'
                ],
                [
                'icon' => 'fas fa-users',
                'link' => 'lead.generation',
                'title' => 'Lead Generation Services',
                'description' => 'Get custom lead generation services powered by AI to attract and convert high-quality
                leads.',
                'gradient' => 'from-accent to-primary'
                ],
                [
                'icon' => 'fas fa-chart-line',
                'link' => 'paid.advertising',
                'title' => 'Digital Marketing Services',
                'description' => 'Reach your ideal audience and boost sales with AI-driven digital marketing services,
                providing smarter and personalized strategies.',
                'gradient' => 'from-primary to-accent'
                ],
                [
                'icon' => 'fas fa-search',
                'link' => 'seo',
                'title' => 'SEO Services',
                'description' => 'Enhance your website\'s performance with AI-powered SEO services, optimizing your
                content and driving organic traffic.',
                'gradient' => 'from-accent to-primary'
                ],
                [
                'icon' => 'fas fa-share-alt',
                'link' => 'social.media',
                'title' => 'Social Media Services',
                'description' => 'Leverage AI-driven social media strategies to boost brand awareness and drive
                conversions through tailored campaigns.',
                'gradient' => 'from-primary to-accent'
                ],
                [
                'icon' => 'fas fa-robot',
                'link' => 'automation',
                'title' => 'Automation Services',
                'description' => 'Streamline your marketing efforts with AI-powered automation services, enhancing
                efficiency and effectiveness.',
                'gradient' => 'from-accent to-primary'
                ]
                ];
                @endphp

                @foreach($services as $service)
                <article
                    class="p-6 bg-white card-border rounded-lg service-card-apims transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-bl {{ $service['gradient'] }} text-white flex items-center justify-center shadow transition-all duration-300 hover:scale-110">
                            <i class="{{ $service['icon'] }} fa-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold">{{ $service['title'] }}</h3>
                            <p class="mt-3 text-sm text-slate-500">
                                {{ $service['description'] }}
                            </p>
                            <div class="mt-6">
                                <a href="{{ route($service['link']) }}" wire:navigate
                                    class="p-2 rounded-lg bg-gradient-to-r from-primary to-accent text-white text-sm transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-soft">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900">Our Impact in Numbers</h2>
                <p class="mt-3 text-slate-500 max-w-2xl mx-auto">
                    Quantifiable results that demonstrate our commitment to client success
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                $stats = [
                ['number' => '200', 'suffix' => '+', 'title' => 'Successful Projects', 'description' => 'Delivered
                high-quality solutions across various industries'],
                ['number' => '60', 'suffix' => '% ↑', 'title' => 'Traffic Growth', 'description' => 'Average increase in
                organic traffic for our SEO clients'],
                ['number' => '30', 'suffix' => '% ↑', 'title' => 'Revenue Boost', 'description' => 'Average revenue
                growth for businesses we\'ve partnered with'],
                ['number' => '98', 'suffix' => '%', 'title' => 'Client Satisfaction', 'description' => 'Of our clients
                would recommend our services to others']
                ];
                @endphp

                @foreach($stats as $index => $stat)
                <div class="p-6 bg-white card-border rounded-lg text-center transition-all duration-300 hover:shadow-lg"
                    data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="text-4xl font-bold text-primary mb-2 apims-counter" data-target="{{ $stat['number'] }}"
                        data-suffix="{{ $stat['suffix'] }}">
                        {{ $stat['number'] }}
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900">{{ $stat['title'] }}</h3>
                    <p class="mt-3 text-slate-600 text-sm">
                        {{ $stat['description'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Unique / Why Us Section -->
    <section id="unique" class="py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-12 gap-8 items-center">
                <div class="col-span-12 lg:col-span-4">
                    <h3 class="text-3xl font-bold">What Makes Us Unique</h3>
                    <p class="mt-3 text-slate-500">
                        We combine creativity, data, and cutting-edge tools to deliver measurable results.
                    </p>

                    <div class="mt-8 space-y-6">
                        <div class="flex items-start gap-4 transition-all duration-300 hover:translate-x-2">
                            <div class="text-primary font-bold text-xl">01</div>
                            <div>
                                <div class="font-semibold">Problem Solvers</div>
                                <div class="text-sm text-slate-500 mt-1">
                                    Every challenge motivates us to think deeper and find solutions that matter.
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 transition-all duration-300 hover:translate-x-2">
                            <div class="text-primary font-bold text-xl">02</div>
                            <div>
                                <div class="font-semibold">Time-Conscious Delivery</div>
                                <div class="text-sm text-slate-500 mt-1">
                                    We value your time and promise timely execution without compromising quality.
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 transition-all duration-300 hover:translate-x-2">
                            <div class="text-primary font-bold text-xl">05</div>
                            <div>
                                <div class="font-semibold">Client-Centric</div>
                                <div class="text-sm text-slate-500 mt-1">
                                    Our clients are our priority; we tailor solutions to meet unique needs.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-4 text-center">
                    <div
                        class="rounded-2xl overflow-hidden shadow-lg mx-auto transition-all duration-300 hover:shadow-xl">
                        <img src="https://images.unsplash.com/photo-1557800636-894a64c1696f?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=456"
                            alt="team"
                            class="w-full h-full object-cover mx-auto transition-all duration-300 hover:scale-105" />
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-4">
                    <div class="space-y-6">
                        <div class="flex items-start gap-4 transition-all duration-300 hover:translate-x-2">
                            <div class="text-accent font-bold text-xl">03</div>
                            <div>
                                <div class="font-semibold">Insight-Driven Strategy</div>
                                <div class="text-sm text-slate-500 mt-1">
                                    We dive deep into data and insights to drive scalable results.
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 transition-all duration-300 hover:translate-x-2">
                            <div class="text-accent font-bold text-xl">04</div>
                            <div>
                                <div class="font-semibold">Creative Innovation</div>
                                <div class="text-sm text-slate-500 mt-1">
                                    Our team constantly pushes boundaries with out-of-the-box ideas.
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 transition-all duration-300 hover:translate-x-2">
                            <div class="text-accent font-bold text-xl">06</div>
                            <div>
                                <div class="font-semibold">Continuous Improvement</div>
                                <div class="text-sm text-slate-500 mt-1">
                                    We keep refining our processes to stay ahead and deliver excellence.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW SECTION: Stats with Cards -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Column: Text Content -->
                <div class="space-y-6">
                    <h2 class="text-4xl lg:text-5xl font-bold text-slate-900">
                        Grow Your Brand Where Your Audience Lives
                    </h2>
                    <p class="text-lg text-slate-600">
                        At APIMS Technology, we create content that speaks your brand's voice and engages your audience.
                        From posts to paid ads, we handle it all so you can focus on your business. Our smart and
                        creative social media strategies help you grow on Instagram, Facebook, LinkedIn, TikTok, and
                        more.
                    </p>
                    <div class="pt-4">
                        <a href="#contact"
                            class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r from-primary to-accent text-white font-medium shadow transition-all duration-300 hover:scale-105 hover:shadow-lg">
                            Get Started
                        </a>
                    </div>
                </div>

                <!-- Right Column: Two Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Card 1 -->
                    <div
                        class="p-6 bg-soft card-border rounded-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="text-4xl font-bold text-primary mb-2">+60% ↑</div>
                        <h3 class="text-xl font-semibold text-slate-900">Traffic Increase</h3>
                        <p class="mt-3 text-slate-600">
                            By optimizing your website for search engines and enhancing user experience.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="p-6 bg-soft card-border rounded-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="text-4xl font-bold text-primary mb-2">+30% ↑</div>
                        <h3 class="text-xl font-semibold text-slate-900">Revenue Increase</h3>
                        <p class="mt-3 text-slate-600">
                            Rise in revenue as more visitors convert into paying customers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section (Filterable) - FIXED VERSION -->
    <section id="portfolio" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold">Our Portfolio</h2>
                <p class="mt-3 text-slate-500">
                    Explore our diverse range of successful projects
                </p>
            </div>

            <!-- Filter buttons -->
            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <button wire:click="filterPortfolio('all')"
                    class="px-4 py-2 rounded bg-gray-200 transition-all duration-300 hover:bg-primary hover:text-white {{ $selectedFilter == 'all' ? 'bg-primary text-white' : '' }}"
                    data-filter="all">
                    All Projects
                </button>

                @foreach($portfolioCategories as $category)
                <button wire:click="filterPortfolio({{ $category->id }})"
                    class="px-4 py-2 rounded bg-gray-200 transition-all duration-300 hover:bg-primary hover:text-white {{ $selectedFilter == $category->id ? 'bg-primary text-white' : '' }}"
                    data-filter="{{ $category->id }}">
                    {{ $category->name }}
                </button>
                @endforeach
            </div>

            <!-- Portfolio Grid - FIXED CONTAINER -->
            <div class="mt-10">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 min-h-[400px]" id="apims-portfolio-container">
                    @foreach($portfolioItems as $index => $item)
                    <div class="portfolio-item bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-xl"
                        x-data="{
                            show: false,
                            init() {
                                setTimeout(() => {
                                    this.show = true;
                                }, {{ $index * 100 }});
                            }
                        }" x-show="show" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90">

                        <img src="{{ $item->image_url }}" alt="{{ $item->title }}"
                            class="w-full h-56 object-cover transition-all duration-300 hover:scale-105" />

                        <div class="p-6 text-left">
                            <h3 class="text-2xl font-semibold mb-2">{{ $item->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ $item->short_description }}</p>
                            <div class="flex justify-between items-center">
                                <span class="px-3 py-1 bg-primary/10 text-primary text-sm rounded-full capitalize">
                                    {{ $item->category->name }}
                                </span>
                                <button wire:click="showDetails({{ $item->id }})"
                                    class="view-project-btn px-4 py-2 bg-gradient-to-r from-primary to-accent text-white rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @if($portfolioItems->count() == 0)
                    <div class="col-span-3 text-center py-12">
                        <p class="text-gray-500 text-lg">No projects found for this category.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Modal -->
    @if($showModal && $selectedPortfolioItem)
    <div class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 transition-opacity duration-300"
        x-data="{ show: false, activeImage: 0 }" x-init="setTimeout(() => show = true, 100)" x-show="show"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" wire:click="closeModal">

        <div class="bg-white rounded-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto" @click.stop>
            <!-- Close Button -->
            <div class="flex justify-end p-4">
                <button wire:click="closeModal"
                    class="text-gray-500 hover:text-gray-700 transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Modal Content -->
            <div class="p-6">
                <!-- Image Gallery -->
                <div class="mb-6">
                    <div class="relative h-80 bg-gray-200 rounded-lg overflow-hidden mb-4">
                        @if($selectedPortfolioItem->itemDetails->count() > 0)
                        @foreach($selectedPortfolioItem->itemDetails as $key => $detail)
                        <img x-show="activeImage === {{ $key }}" src="{{ $detail->image_url }}"
                            alt="{{ $detail->name }}"
                            class="absolute inset-0 w-full h-full object-cover transition-opacity duration-300"
                            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        @endforeach
                        @else
                        <img src="{{ $selectedPortfolioItem->image_url }}" alt="{{ $selectedPortfolioItem->title }}"
                            class="w-full h-full object-cover">
                        @endif
                    </div>

                    @if($selectedPortfolioItem->itemDetails->count() > 1)
                    <div class="grid grid-cols-4 gap-2">
                        @foreach($selectedPortfolioItem->itemDetails as $key => $detail)
                        <button @click="activeImage = {{ $key }}"
                            class="h-20 bg-gray-200 rounded overflow-hidden transition-all duration-200 hover:opacity-80"
                            :class="{ 'ring-2 ring-primary': activeImage === {{ $key }} }">
                            <img src="{{ $detail->image }}" alt="{{ $detail->name }}"
                                class="w-full h-full object-cover">
                        </button>
                        @endforeach
                    </div>
                    @endif
                </div>

                <!-- Project Details -->
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">{{ $selectedPortfolioItem->title }}</h3>

                        <!-- Rich Text Description -->
                        <div class="text-gray-600 mb-6 leading-relaxed prose max-w-none">
                            {!! $selectedPortfolioItem->short_description !!}
                        </div>

                        <!-- If you have a full_description field with rich text -->
                        @if($selectedPortfolioItem->full_description)
                        <div class="mt-6 prose max-w-none">
                            {!! $selectedPortfolioItem->full_description !!}
                        </div>
                        @endif

                        <div class="space-y-3 mt-6">
                            <div class="flex items-center">
                                <span class="font-semibold w-32">Category:</span>
                                <span class="px-3 py-1 bg-primary/10 text-primary text-sm rounded-full">
                                    {{ $selectedPortfolioItem->category->name }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Item Details -->
                    @if($selectedPortfolioItem->itemDetails->count() > 0)
                    <div>
                        <h4 class="text-xl font-semibold mb-4">Project Details</h4>
                        <div class="space-y-4">
                            @foreach($selectedPortfolioItem->itemDetails as $detail)
                            <div class="border-l-4 border-primary pl-4 py-1">
                                <h5 class="font-semibold text-gray-800">{{ $detail->name }}</h5>
                                <!-- Rich Text for Item Detail Description -->
                                <div class="text-gray-600 text-sm mt-1 prose prose-sm max-w-none">
                                    {!! $detail->description !!}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- 🟩 Our Team -->
    <section id="team" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    Meet Our <span class="text-gradient">Leadership Team</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    The passionate experts driving innovation in real estate digital marketing
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="team-card bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-200"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-84 bg-gradient-to-br from-green-600 to-green-800 overflow-hidden">
                        <img src="{{ asset('assets/team/CEO-RealLanding.jpg') }}" alt="Sarah Chen - CEO & Founder"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-6 text-white">
                            <h3 class="text-2xl font-bold">Syed Tahir Abbas</h3>
                            <p class="text-green-100">Founder & CEO</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Former real estate developer with years experience. Sarah leads our strategic vision and
                            client partnerships.
                        </p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="team-card bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-200"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-84 bg-gradient-to-br from-green-600 to-green-800 overflow-hidden">
                        <img src="{{ asset('assets/team/CTO-CO-Founder-RealLanding.jpg') }}"
                            alt="Marcus Rodriguez - CTO & Co-Founder" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-6 text-white">
                            <h3 class="text-2xl font-bold">Syed Ali Abbas</h3>
                            <p class="text-green-100">Co-Founder & CTO</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Tech innovator with background in AI and automation. Marcus drives our technology strategy
                            and product development.
                        </p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="team-card bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-200"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-84 bg-gradient-to-br from-green-600 to-green-800 overflow-hidden">
                        <img src="{{ asset('assets/team/Managing-Director-RealLanding.jpg') }}"
                            alt="Priya Sharma - Head of Marketing" class="w-full h-full object-fill">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-6 text-white">
                            <h3 class="text-2xl font-bold">Adnan Farooq
                            </h3>
                            <p class="text-green-100">Head of Marketing</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Digital marketing expert specializing in real estate. Priya leads our campaign strategy and
                            client success teams.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials carousel - FIXED MOBILE VERSION -->
    <section id="testimonials" class="py-20 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold">What Clients Say</h2>
                <p class="mt-3 text-slate-500">Real feedback from real partners.</p>
            </div>

            <div class="mt-10 relative">
                <div class="overflow-hidden">
                    <div class="flex transition-transform duration-500 ease-in-out" id="apims-testimonial-slides">
                        @php
                        $testimonials = [
                        [
                        'name' => 'Sarah Khan',
                        'position' => 'Founder, BrightCo',
                        'image' =>
                        'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=400&auto=format&fit=crop&ixlib=rb-4.0.3&s=12',
                        'text' => '"Amazing growth in organic traffic and conversions. The team\'s strategic approach is
                        spot on."'
                        ],
                        [
                        'name' => 'Omar Latif',
                        'position' => 'Marketing Lead, Nova',
                        'image' =>
                        'https://images.unsplash.com/photo-1545996124-1a12aed5a6b8?q=80&w=400&auto=format&fit=crop&ixlib=rb-4.0.3&s=7',
                        'text' => '"They delivered on time and exceeded expectations. Highly recommended for B2B SaaS."'
                        ],
                        [
                        'name' => 'Ayesha Mir',
                        'position' => 'COO, TekWave',
                        'image' =>
                        'https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=400&auto=format&fit=crop&ixlib=rb-4.0.3&s=3',
                        'text' => '"Professional, communicative, and results-driven. Our traffic doubled in 3 months."'
                        ],
                        [
                        'name' => 'James Wilson',
                        'position' => 'CEO, TechStart',
                        'image' =>
                        'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&auto=format&fit=crop&ixlib=rb-4.0.3&s=3',
                        'text' => '"The AI-driven approach gave us insights we never would have discovered on our own."'
                        ],
                        [
                        'name' => 'Lisa Thompson',
                        'position' => 'Marketing Director, GrowthCo',
                        'image' =>
                        'https://images.unsplash.com/photo-1494790108755-2616b612b786?q=80&w=400&auto=format&fit=crop&ixlib=rb-4.0.3&s=3',
                        'text' => '"Our conversion rates improved by 45% within the first quarter of working together."'
                        ],
                        [
                        'name' => 'Michael Brown',
                        'position' => 'Founder, InnovateLabs',
                        'image' =>
                        'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=400&auto=format&fit=crop&ixlib=rb-4.0.3&s=3',
                        'text' => '"Exceptional service and measurable results. Worth every penny of our investment."'
                        ]
                        ];
                        @endphp

                        @php
                        // Show 1 testimonial per slide on mobile, 2 on tablet, 3 on desktop
                        $testimonialGroups = array_chunk($testimonials, 3);
                        @endphp

                        @foreach($testimonialGroups as $groupIndex => $group)
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach($group as $testimonialIndex => $testimonial)
                                <div
                                    class="p-6 rounded-2xl bg-soft card-border transition-all duration-300 hover:shadow-lg h-full flex flex-col">
                                    <div class="flex gap-4 items-center mb-4">
                                        <img src="{{ $testimonial['image'] }}"
                                            class="w-14 h-14 rounded-full object-cover transition-all duration-300 hover:scale-110 flex-shrink-0" />
                                        <div class="min-w-0">
                                            <div class="font-semibold truncate">{{ $testimonial['name'] }}</div>
                                            <div class="text-xs text-slate-400 truncate">{{ $testimonial['position'] }}
                                            </div>
                                            <div class="flex mt-1">
                                                @for($i = 0; $i < 5; $i++) <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.974a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.39 2.462a1 1 0 00-.364 1.118l1.286 3.974c.3.921-.755 1.688-1.54 1.118l-3.39-2.462a1 1 0 00-1.176 0l-3.39 2.462c-.784.57-1.838-.197-1.539-1.118l1.286-3.974a1 1 0 00-.364-1.118L2.034 9.4c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.974z" />
                                                    </svg>
                                                    @endfor
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-slate-600 flex-1 leading-relaxed">{{ $testimonial['text'] }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Controls -->
                <div class="flex justify-center gap-3 mt-8">
                    @php
                    $totalSlides = count($testimonialGroups);
                    @endphp
                    @for($i = 0; $i < $totalSlides; $i++) <button
                        class="apims-testimonial-dot w-3 h-3 rounded-full bg-slate-300 transition-all duration-300 hover:bg-primary {{ $i === 0 ? 'apims-active-dot bg-primary' : '' }}"
                        data-index="{{ $i }}">
                        </button>
                        @endfor
                </div>

                <!-- Navigation Arrows - Hidden on mobile -->
                <button id="apims-prev-btn"
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-lg transition-all duration-300 hover:bg-primary hover:text-white hidden md:block">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="apims-next-btn"
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-lg transition-all duration-300 hover:bg-primary hover:text-white hidden md:block">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Contact & FAQ Section -->
    <section id="contact" class="py-20 bg-gradient-to-br from-slate-50 to-gray-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-slate-900 mb-4">Get In Touch</h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    Ready to transform your digital presence? Let's discuss how our AI-powered solutions can drive your
                    business growth.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Contact Form -->
                <div class="bg-gray-800 rounded-2xl shadow-2xl p-8" data-aos="fade-right">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-2 text-white">Send Us a Message</h2>
                    <p class="text-gray-300 mb-8">
                        Fill out the form below and we'll get back to you within 24 hours with a customized digital
                        marketing strategy.
                    </p>

                    <form class="space-y-6" id="contactForm">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-300 text-sm font-medium mb-2">First Name *</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white form-input focus:outline-none focus:border-primary transition-all duration-300"
                                    placeholder="John" required>
                            </div>
                            <div>
                                <label class="block text-gray-300 text-sm font-medium mb-2">Last Name *</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white form-input focus:outline-none focus:border-primary transition-all duration-300"
                                    placeholder="Doe" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-300 text-sm font-medium mb-2">Email Address *</label>
                                <input type="email"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white form-input focus:outline-none focus:border-primary transition-all duration-300"
                                    placeholder="john@example.com" required>
                            </div>
                            <div>
                                <label class="block text-gray-300 text-sm font-medium mb-2">Phone Number</label>
                                <input type="tel"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white form-input focus:outline-none focus:border-primary transition-all duration-300"
                                    placeholder="+1 (555) 000-0000">
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Company</label>
                            <input type="text"
                                class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white form-input focus:outline-none focus:border-primary transition-all duration-300"
                                placeholder="Your Company Name">
                        </div>

                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">What services are you interested
                                in? *</label>
                            <select
                                class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white form-input focus:outline-none focus:border-primary transition-all duration-300"
                                required>
                                <option value="">Select a service</option>
                                <option>Web Design & Development</option>
                                <option>Digital Marketing</option>
                                <option>SEO Services</option>
                                <option>Social Media Marketing</option>
                                <option>PPC Advertising</option>
                                <option>Lead Generation</option>
                                <option>Multiple Services</option>
                                <option>Custom Solution</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Project Budget</label>
                            <select
                                class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white form-input focus:outline-none focus:border-primary transition-all duration-300">

                                <option value="">Select budget range</option>
                                <option>$2,000 – $5,000</option>
                                <option>$5,000 – $10,000</option>
                                <option>$10,000 – $15,000</option>
                                <option>$15,000 – $20,000</option>
                                <option>$20,000+</option>
                                <option>To be discussed</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Tell us about your project
                                *</label>
                            <textarea rows="5"
                                class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white form-input focus:outline-none focus:border-primary transition-all duration-300 resize-none"
                                placeholder="Describe your project, goals, and any specific requirements..."
                                required></textarea>
                        </div>

                        <button type="submit"
                            class="w-full px-8 py-4 rounded-xl bg-gradient-to-r from-primary to-accent text-white font-semibold shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center gap-2 hover:scale-105 group">
                            <i
                                class="fas fa-paper-plane group-hover:translate-x-1 transition-transform duration-300"></i>
                            Send Message
                        </button>

                        <p class="text-gray-400 text-sm text-center">
                            * Required fields. We respect your privacy and will never share your information.
                        </p>
                    </form>
                </div>

                <!-- FAQ Section -->
                <div class="space-y-8" data-aos="fade-left">
                    <div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4">Frequently Asked Questions</h2>
                        <p class="text-lg text-slate-600">
                            Find answers to common questions about our services and process.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <!-- FAQ 1 -->
                        <div
                            class="bg-white rounded-xl shadow-lg border border-slate-200 overflow-hidden transition-all duration-300 hover:shadow-xl">
                            <button
                                class="w-full text-left px-6 py-5 font-semibold text-lg flex justify-between items-center focus:outline-none apims-faq-btn transition-all duration-300 hover:bg-slate-50">
                                How long does it take to see results from digital marketing?
                                <span class="text-primary text-xl transition-transform duration-300">+</span>
                            </button>
                            <div class="apims-faq-content px-6 pb-5 hidden text-slate-600">
                                Results vary based on your industry and strategy. Typically, you'll see initial
                                improvements in 2-4 weeks, with significant results within 3-6 months. Our AI-powered
                                approach accelerates this timeline compared to traditional methods.
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div
                            class="bg-white rounded-xl shadow-lg border border-slate-200 overflow-hidden transition-all duration-300 hover:shadow-xl">
                            <button
                                class="w-full text-left px-6 py-5 font-semibold text-lg flex justify-between items-center focus:outline-none apims-faq-btn transition-all duration-300 hover:bg-slate-50">
                                Do you work with businesses of all sizes?
                                <span class="text-primary text-xl transition-transform duration-300">+</span>
                            </button>
                            <div class="apims-faq-content px-6 pb-5 hidden text-slate-600">
                                Absolutely! We work with startups, SMEs, and large enterprises. Our solutions are
                                scalable and tailored to meet the unique needs and budgets of businesses at every stage
                                of growth.
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div
                            class="bg-white rounded-xl shadow-lg border border-slate-200 overflow-hidden transition-all duration-300 hover:shadow-xl">
                            <button
                                class="w-full text-left px-6 py-5 font-semibold text-lg flex justify-between items-center focus:outline-none apims-faq-btn transition-all duration-300 hover:bg-slate-50">
                                What makes your AI-powered approach different?
                                <span class="text-primary text-xl transition-transform duration-300">+</span>
                            </button>
                            <div class="apims-faq-content px-6 pb-5 hidden text-slate-600">
                                Our AI algorithms analyze market trends, competitor strategies, and customer behavior to
                                create data-driven campaigns. This results in higher ROI, faster optimization, and
                                personalized strategies that traditional agencies can't match.
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div
                            class="bg-white rounded-xl shadow-lg border border-slate-200 overflow-hidden transition-all duration-300 hover:shadow-xl">
                            <button
                                class="w-full text-left px-6 py-5 font-semibold text-lg flex justify-between items-center focus:outline-none apims-faq-btn transition-all duration-300 hover:bg-slate-50">
                                Can you handle both design and development?
                                <span class="text-primary text-xl transition-transform duration-300">+</span>
                            </button>
                            <div class="apims-faq-content px-6 pb-5 hidden text-slate-600">
                                Yes, we offer full-stack digital solutions. From UI/UX design and web development to
                                digital marketing and SEO, we provide end-to-end services to ensure your digital
                                presence is cohesive and effective.
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div
                            class="bg-white rounded-xl shadow-lg border border-slate-200 overflow-hidden transition-all duration-300 hover:shadow-xl">
                            <button
                                class="w-full text-left px-6 py-5 font-semibold text-lg flex justify-between items-center focus:outline-none apims-faq-btn transition-all duration-300 hover:bg-slate-50">
                                What's included in your monthly reporting?
                                <span class="text-primary text-xl transition-transform duration-300">+</span>
                            </button>
                            <div class="apims-faq-content px-6 pb-5 hidden text-slate-600">
                                Our comprehensive monthly reports include: performance metrics, ROI analysis, competitor
                                insights, growth opportunities, and actionable recommendations. We provide transparent
                                reporting so you always know how your investment is performing.
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div
                            class="bg-white rounded-xl shadow-lg border border-slate-200 overflow-hidden transition-all duration-300 hover:shadow-xl">
                            <button
                                class="w-full text-left px-6 py-5 font-semibold text-lg flex justify-between items-center focus:outline-none apims-faq-btn transition-all duration-300 hover:bg-slate-50">
                                Do you offer ongoing support and maintenance?
                                <span class="text-primary text-xl transition-transform duration-300">+</span>
                            </button>
                            <div class="apims-faq-content px-6 pb-5 hidden text-slate-600">
                                Yes, we provide 24/7 support and maintenance packages. This includes website updates,
                                security monitoring, performance optimization, and continuous strategy refinement to
                                ensure your digital assets remain effective and secure.
                            </div>
                        </div>
                    </div>

                    <!-- Additional Contact Info -->
                    <div class="bg-gradient-to-r from-primary to-accent rounded-2xl p-6 text-white">
                        <h3 class="text-xl font-bold mb-4">Prefer to talk directly?</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="fas fa-phone text-sm"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-white/80">Call Us</div>
                                    <div class="font-semibold">+923186230122</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="fas fa-envelope text-sm"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-white/80">Email Us</div>
                                    <div class="font-semibold">info@reallanding.com</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="fas fa-clock text-sm"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-white/80">Response Time</div>
                                    <div class="font-semibold">Within 24 Hours</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="pricing" class="py-16 bg-gradient-to-r from-primary/5 to-accent/5">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h3 class="text-2xl font-bold">
                Ready to grow? Let's build something great together.
            </h3>
            <p class="mt-3 text-slate-500">
                Book a free consultation and audit — no strings attached.
            </p>
            <div class="mt-6 flex justify-center gap-4">
                <a href="#contact"
                    class="px-6 py-3 rounded-lg bg-gradient-to-r from-primary to-accent text-white transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    Book a free call
                </a>
                <a href="#contact"
                    class="px-6 py-3 rounded-lg border border-slate-200 bg-white transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    Get a quote
                </a>
            </div>
        </div>
    </section>
</div>

@stack('script')
@push('script')


<script src="//unpkg.com/alpinejs" defer></script>

<style>
    .portfolio-item {
        animation: fadeInUp 0.6s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Fix for horizontal scroll issue */
    #apims-portfolio-container {
        transition: all 0.3s ease-in-out;
        width: 100%;
        overflow: hidden;
    }

    /* Ensure proper grid layout */
    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    }

    /* Prevent horizontal overflow */
    body {
        overflow-x: hidden;
    }

    /* Ensure images don't cause overflow */
    img {
        max-width: 100%;
        height: auto;
    }

    /* Testimonial carousel styles */
    #apims-testimonial-slides {
        transition: transform 0.5s ease-in-out;
    }

    .apims-testimonial-dot {
        cursor: pointer;
    }

    .apims-testimonial-dot.apims-active-dot {
        transform: scale(1.2);
    }

    /* Mobile optimizations */
    @media (max-width: 768px) {
        #testimonials .p-6 {
            padding: 1.5rem;
        }

        #testimonials .text-lg {
            font-size: 1rem;
        }

        /* Ensure proper spacing on mobile */
        #apims-testimonial-slides>div {
            padding: 0 1rem;
        }
    }

    /* Ensure testimonials don't overflow on small screens */
    .testimonial-text {
        word-wrap: break-word;
        overflow-wrap: break-word;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Testimonial Carousel
        const testimonialSlides = document.getElementById('apims-testimonial-slides');
        const testimonialDots = document.querySelectorAll('.apims-testimonial-dot');
        const prevBtn = document.getElementById('apims-prev-btn');
        const nextBtn = document.getElementById('apims-next-btn');
        
        if (testimonialSlides && testimonialDots.length > 0) {
            let currentSlide = 0;
            const totalSlides = testimonialDots.length;
            
            function updateCarousel() {
                testimonialSlides.style.transform = `translateX(-${currentSlide * 100}%)`;
                
                // Update dots
                testimonialDots.forEach((dot, index) => {
                    dot.classList.toggle('bg-primary', index === currentSlide);
                    dot.classList.toggle('bg-slate-300', index !== currentSlide);
                });
            }
            
            // Next button
            if (nextBtn) {
                nextBtn.addEventListener('click', function() {
                    currentSlide = (currentSlide + 1) % totalSlides;
                    updateCarousel();
                });
            }
            
            // Previous button
            if (prevBtn) {
                prevBtn.addEventListener('click', function() {
                    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                    updateCarousel();
                });
            }
            
            // Dot navigation
            testimonialDots.forEach((dot, index) => {
                dot.addEventListener('click', function() {
                    currentSlide = index;
                    updateCarousel();
                });
            });
            
            // Auto-advance (optional)
            setInterval(() => {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
            }, 5000);
        }
    });
</script>

@endpush