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
                    class="px-8 py-3 bg-gradient-to-r  from-primary to-accent rounded-lg text-lg font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
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
                        We offer customized AI-powered solutions — from SEO to web development — designed to elevate
                        your brand and drive measurable growth.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#contact"
                            class="inline-flex items-center gap-3 px-6 py-3 rounded-lg bg-gradient-to-r  from-primary to-accent text-white font-medium shadow transition-all duration-300 hover:scale-105 hover:shadow-lg">
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
                                        d="M13 16h-1v-4h-1m4 0h-1V8m-4 4v6m6-10h.01M6 12h.01M6 20h.01" />
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
                                <a href="{{ route($service['link']) }}"
                                    class="p-2 rounded-lg bg-gradient-to-r  from-primary to-accent text-white text-sm transition-all duration-300 hover:scale-105 hover:shadow-lg">
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
                        0{{ $stat['suffix'] }}
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
                            class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r  from-primary to-accent text-white font-medium shadow transition-all duration-300 hover:scale-105 hover:shadow-lg">
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

    <!-- Portfolio Section (Filterable) -->
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
                @php
                $filters = [
                ['filter' => 'all', 'label' => 'All Projects'],
                ['filter' => 'villa', 'label' => 'Villas'],
                ['filter' => 'apartment', 'label' => 'Apartments'],
                ['filter' => 'office', 'label' => 'Offices']
                ];
                @endphp

                @foreach($filters as $filter)
                <button
                    class="apims-filter-btn px-4 py-2 rounded bg-gray-200 transition-all duration-300 hover:bg-primary hover:text-white {{ $filter['filter'] == 'all' ? 'apims-active-filter bg-primary text-white' : '' }}"
                    data-filter=".{{ $filter['filter'] }}">
                    {{ $filter['label'] }}
                </button>
                @endforeach
            </div>

            <!-- Portfolio Grid -->
            <div class="grid md:grid-cols-3 gap-8 mt-10" id="apims-portfolio-container">
                @php
                $portfolioItems = [
                ['type' => 'villa', 'title' => 'Luxury Villa', 'description' => 'Modern villa with breathtaking views.',
                'image' => 'house,luxury', 'delay' => 0],
                ['type' => 'apartment', 'title' => 'Modern Apartment', 'description' => 'Elegant apartments designed for
                comfort.', 'image' => 'apartment,modern', 'delay' => 100],
                ['type' => 'office', 'title' => 'Commercial Office', 'description' => 'Premium office spaces for
                business growth.', 'image' => 'office,building', 'delay' => 200],
                ['type' => 'villa', 'title' => 'Lakeside Mansion', 'description' => 'Sprawling estate with private
                lake.', 'image' => 'mansion,estate', 'delay' => 0],
                ['type' => 'apartment', 'title' => 'Urban Condo', 'description' => 'Stylish condos in the heart of the
                city.', 'image' => 'condo,realestate', 'delay' => 100],
                ['type' => 'office', 'title' => 'Coworking Space', 'description' => 'Flexible spaces for modern teams.',
                'image' => 'coworking,space', 'delay' => 0]
                ];
                @endphp

                @foreach($portfolioItems as $item)
                <div class="apims-portfolio-item {{ $item['type'] }} bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-xl"
                    data-aos="zoom-in" data-aos-delay="{{ $item['delay'] }}">
                    <img src="https://source.unsplash.com/600x400/?{{ $item['image'] }}" alt="{{ $item['title'] }}"
                        class="w-full h-56 object-cover transition-all duration-300 hover:scale-105" />
                    <div class="p-6 text-left">
                        <h3 class="text-2xl font-semibold mb-2">{{ $item['title'] }}</h3>
                        <p class="text-gray-600">{{ $item['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials carousel -->
    <section id="testimonials" class="py-20 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold">What Clients Say</h2>
                <p class="mt-3 text-slate-500">Real feedback from real partners.</p>
            </div>

            <div class="mt-10 relative">
                <div id="apims-testimonial-carousel" class="overflow-hidden">
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
                        ]
                        ];
                        @endphp

                        @foreach($testimonials as $index => $testimonial)
                        <div class="w-full flex-shrink-0 px-4">
                            <div
                                class="p-8 rounded-2xl bg-soft card-border transition-all duration-300 hover:shadow-lg">
                                <div class="flex gap-4 items-center">
                                    <img src="{{ $testimonial['image'] }}"
                                        class="w-14 h-14 rounded-full object-cover transition-all duration-300 hover:scale-110" />
                                    <div>
                                        <div class="font-semibold">{{ $testimonial['name'] }}</div>
                                        <div class="text-xs text-slate-400">{{ $testimonial['position'] }}</div>
                                    </div>
                                </div>
                                <p class="mt-4 text-slate-600">{{ $testimonial['text'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Controls -->
                <div class="flex justify-center gap-3 mt-6">
                    @foreach($testimonials as $index => $testimonial)
                    <button
                        class="apims-testimonial-dot w-3 h-3 rounded-full bg-slate-300 transition-all duration-300 hover:bg-primary {{ $index === 0 ? 'apims-active-dot bg-primary' : '' }}"
                        data-index="{{ $index }}"></button>
                    @endforeach
                </div>

                <!-- Navigation Arrows -->
                <button id="apims-prev-btn"
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg transition-all duration-300 hover:bg-primary hover:text-white">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="apims-next-btn"
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg transition-all duration-300 hover:bg-primary hover:text-white">
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
                                <option>₹50,000 - ₹1,00,000</option>
                                <option>₹1,00,000 - ₹2,50,000</option>
                                <option>₹2,50,000 - ₹5,00,000</option>
                                <option>₹5,00,000 - ₹10,00,000</option>
                                <option>₹10,00,000+</option>
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
                            class="w-full px-8 py-4 rounded-xl bg-gradient-to-r  from-primary to-accent text-white font-semibold shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center gap-2 hover:scale-105 group">
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
                    <div class="bg-gradient-to-r  from-primary to-accent rounded-2xl p-6 text-white">
                        <h3 class="text-xl font-bold mb-4">Prefer to talk directly?</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="fas fa-phone text-sm"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-white/80">Call Us</div>
                                    <div class="font-semibold">+1 (555) 123-4567</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="fas fa-envelope text-sm"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-white/80">Email Us</div>
                                    <div class="font-semibold">hello@apimstech.com</div>
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

    @push('scripts')
    <script>
        // FAQ Accordion Functionality
    document.addEventListener('DOMContentLoaded', function() {
        // FAQ Accordion
        document.querySelectorAll('.apims-faq-btn').forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('span');
                
                // Toggle current FAQ
                const isHidden = content.classList.toggle('hidden');
                icon.textContent = isHidden ? '+' : '−';
                icon.style.transform = isHidden ? 'rotate(0deg)' : 'rotate(180deg)';
                
                // Close other FAQs
                document.querySelectorAll('.apims-faq-content').forEach(otherContent => {
                    if (otherContent !== content && !otherContent.classList.contains('hidden')) {
                        otherContent.classList.add('hidden');
                        const otherIcon = otherContent.previousElementSibling.querySelector('span');
                        otherIcon.textContent = '+';
                        otherIcon.style.transform = 'rotate(0deg)';
                    }
                });
            });
        });

        // Form submission handling
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Add your form submission logic here
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                
                // Show loading state
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
                submitBtn.disabled = true;
                
                // Simulate form submission
                setTimeout(() => {
                    // Show success message (you can replace this with actual form submission)
                    alert('Thank you for your message! We will get back to you within 24 hours.');
                    contactForm.reset();
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 2000);
            });
        }

        // Add focus effects to form inputs
        const formInputs = document.querySelectorAll('.form-input');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-primary/20');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-primary/20');
            });
        });
    });
    </script>

    <style>
        /* Custom styles for better form appearance */
        .form-input {
            transition: all 0.3s ease;
        }

        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        /* Smooth FAQ animations */
        .apims-faq-content {
            transition: all 0.3s ease-in-out;
        }

        /* Gradient text for headings */
        .text-gradient {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
    @endpush

    <!-- CTA -->
    <section id="pricing" class="py-16 bg-gradient-to-r  from-primary/5 to-accent/5">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h3 class="text-2xl font-bold">
                Ready to grow? Let's build something great together.
            </h3>
            <p class="mt-3 text-slate-500">
                Book a free consultation and audit — no strings attached.
            </p>
            <div class="mt-6 flex justify-center gap-4">
                <a href="#contact"
                    class="px-6 py-3 rounded-lg bg-gradient-to-r  from-primary to-accent text-white transition-all duration-300 hover:scale-105 hover:shadow-lg">
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

@push('script')
@stack('script')



<style>
    /* Additional styles for better animations */
    .apims-portfolio-item {
        transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    .mixitup-animating .apims-portfolio-item {
        opacity: 0.7;
        transform: scale(0.95);
    }

    /* Ensure proper carousel sizing */
    #apims-testimonial-carousel {
        max-width: 800px;
        margin: 0 auto;
    }

    #apims-testimonial-slides>div {
        flex-shrink: 0;
    }

    /* Smooth transitions for count-up */
    .apims-counter {
        transition: all 0.3s ease;
    }

    /* Hover effects for service cards */
    .service-card-apims:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
</style>
@endpush