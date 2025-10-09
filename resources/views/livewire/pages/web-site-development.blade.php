<div>
    {{-- Stop trying to control. --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        :root {
            --primary: #FF4D6D;
            --accent: #6C63FF;
            --soft: #F6F7FB;
            --dark: #1E293B;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .process-step {
            position: relative;
        }

        .process-step:not(:last-child):after {
            content: '';
            position: absolute;
            top: 50%;
            right: -20px;
            width: 40px;
            height: 2px;
            background: #E2E8F0;
            z-index: 1;
        }

        .floating {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0% {
                transform: translate(0, 0px);
            }

            50% {
                transform: translate(0, 15px);
            }

            100% {
                transform: translate(0, -0px);
            }
        }

        .text-gradient {
            background: linear-gradient(90deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glow {
            box-shadow: 0 0 20px rgba(108, 99, 255, 0.3);
        }

        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #E2E8F0, transparent);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            margin-bottom: 20px;
        }
    </style>



    <!-- 🟦 Section 1: Hero Banner -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-purple-900/80 z-10"></div>
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Modern real estate website on laptop" class="w-full h-full object-cover" />
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-8 text-center text-white">
            <div
                class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/20">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">Real Estate Web Development</span>
            </div>

            <h1 class="text-5xl lg:text-7xl font-extrabold mb-6 leading-tight" data-aos="fade-up">
                Real Estate Website Design That <span class="text-gradient">Turns Visitors into Buyers</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up"
                data-aos-delay="200">
                We build high-performing, mobile-friendly websites designed specifically for real estate businesses —
                helping you showcase properties, capture leads, and close more deals.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                data-aos-delay="400">
                <a href="#contact"
                    class="px-8 py-4 rounded-xl bg-gradient-to-r from-[#FF4D6D] to-[#6C63FF] text-white font-semibold shadow-lg glow hover:shadow-xl transition-all flex items-center gap-2">
                    <i class="fas fa-search"></i>
                    Get a Free Website Audit
                </a>
                <a href="#services"
                    class="px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-medium hover:bg-white/20 transition-all flex items-center gap-2">
                    <i class="fas fa-play-circle"></i>
                    View Our Work
                </a>
            </div>

            <div class="mt-16 flex justify-center">
                <div class="animate-bounce p-4 rounded-full bg-white/10 backdrop-blur-sm border border-white/20">
                    <i class="fas fa-chevron-down text-white"></i>
                </div>
            </div>
        </div>

        <!-- Floating elements -->
        <div class="absolute top-20 left-10 w-6 h-6 rounded-full bg-[#FF4D6D] opacity-30 floating"></div>
        <div class="absolute bottom-40 right-20 w-10 h-10 rounded-full bg-[#6C63FF] opacity-20 floating"
            style="animation-delay: 1s;"></div>
        <div class="absolute top-1/3 right-1/4 w-8 h-8 rounded-full bg-white opacity-10 floating"
            style="animation-delay: 2s;"></div>
    </section>

    <!-- 🟩 Section 2: Introduction -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6" data-aos="fade-up">
                Why Your Real Estate Website <span class="text-gradient">Matters</span>
            </h2>
            <div class="text-lg text-slate-600 space-y-6" data-aos="fade-up" data-aos-delay="200">
                <p>
                    Your website is your online sales center — it's where potential buyers explore your projects, trust
                    your brand, and decide to connect.
                </p>
                <p>
                    A well-designed real estate website not only looks stunning but also functions as a powerful
                    marketing tool. It helps you generate leads, manage property listings, and build long-term
                    credibility in a competitive market.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-soft rounded-xl" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl font-bold text-[#6C63FF] mb-2">24/7</div>
                    <div class="font-medium">Sales Center</div>
                    <p class="text-slate-600 text-sm mt-2">Your website works for you around the clock</p>
                </div>
                <div class="p-6 bg-soft rounded-xl" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-3xl font-bold text-[#FF4D6D] mb-2">3x</div>
                    <div class="font-medium">More Leads</div>
                    <p class="text-slate-600 text-sm mt-2">Optimized sites generate significantly more inquiries</p>
                </div>
                <div class="p-6 bg-soft rounded-xl" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-3xl font-bold text-[#6C63FF] mb-2">60%</div>
                    <div class="font-medium">Mobile Traffic</div>
                    <p class="text-slate-600 text-sm mt-2">Most property searches happen on mobile devices</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟨 Section 3: Our Website Development Services -->
    <section class="py-20 bg-gradient-to-br from-amber-50 to-orange-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Services Content -->
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold mb-8" data-aos="fade-right">
                        Our Real Estate <span class="text-gradient">Website Solutions</span>
                    </h2>

                    <div class="space-y-8">
                        <!-- Service 1 -->
                        <div class="flex gap-4" data-aos="fade-right" data-aos-delay="100">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-[#FF4D6D] to-[#6C63FF] text-white flex items-center justify-center text-xl">
                                🏡
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Custom Real Estate Website Design</h3>
                                <p class="text-slate-600">
                                    Beautiful, responsive, and tailored to your brand. We design websites that highlight
                                    your projects and make navigation easy for buyers.
                                </p>
                            </div>
                        </div>

                        <!-- Service 2 -->
                        <div class="flex gap-4" data-aos="fade-right" data-aos-delay="200">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-[#6C63FF] to-[#FF4D6D] text-white flex items-center justify-center text-xl">
                                🧭
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Property Listing & Search Integration</h3>
                                <p class="text-slate-600">
                                    We build dynamic property pages with search filters, maps, image galleries, and
                                    project details to help visitors find the right property quickly.
                                </p>
                            </div>
                        </div>

                        <!-- Service 3 -->
                        <div class="flex gap-4" data-aos="fade-right" data-aos-delay="300">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-[#FF4D6D] to-purple-500 text-white flex items-center justify-center text-xl">
                                ⚡
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Lead Capture & CRM Integration</h3>
                                <p class="text-slate-600">
                                    Convert visitors into leads with smart inquiry forms, WhatsApp chat buttons, and
                                    full CRM integration for automated follow-ups.
                                </p>
                            </div>
                        </div>

                        <!-- Service 4 -->
                        <div class="flex gap-4" data-aos="fade-right" data-aos-delay="400">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-[#6C63FF] text-white flex items-center justify-center text-xl">
                                🌐
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">SEO-Optimized Website Structure</h3>
                                <p class="text-slate-600">
                                    Every website is built to rank well on Google — with clean code, fast loading, and
                                    optimized metadata.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Image -->
                <div class="relative" data-aos="fade-left">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?q=80&w=2064&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Property dashboard on a screen" class="w-full h-auto object-cover" />
                    </div>

                    <!-- Floating element -->
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-[#6C63FF] opacity-10 rounded-full -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟦 Section 4: Our Process -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    How We Build Your <span class="text-gradient">Real Estate Website</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    A streamlined process designed to deliver exceptional results for your real estate business
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                <!-- Step 1 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl border border-blue-100"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="mb-2 font-bold text-blue-600">Step 1</div>
                    <h3 class="text-xl font-bold mb-3">Discovery</h3>
                    <p class="text-slate-600">
                        We understand your goals, target audience, and property portfolio.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl border border-purple-100"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="mb-2 font-bold text-purple-600">Step 2</div>
                    <h3 class="text-xl font-bold mb-3">Planning</h3>
                    <p class="text-slate-600">
                        We define layout, structure, and functionality.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-pink-50 to-red-50 rounded-2xl border border-pink-100"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-pink-500 to-red-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <div class="mb-2 font-bold text-pink-600">Step 3</div>
                    <h3 class="text-xl font-bold mb-3">Design & Development</h3>
                    <p class="text-slate-600">
                        We create the site using modern design and clean code.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl border border-green-100"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-green-500 to-teal-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="mb-2 font-bold text-green-600">Step 4</div>
                    <h3 class="text-xl font-bold mb-3">Optimization</h3>
                    <p class="text-slate-600">
                        We test for speed, SEO, and mobile performance.
                    </p>
                </div>

                <!-- Step 5 -->
                <div class="text-center p-6 bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl border border-orange-100"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-orange-500 to-amber-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="mb-2 font-bold text-orange-600">Step 5</div>
                    <h3 class="text-xl font-bold mb-3">Launch & Support</h3>
                    <p class="text-slate-600">
                        We go live and offer ongoing maintenance.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟩 Section 5: Why Choose Us -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    Why Choose Our <span class="text-gradient">Web Development</span> Services
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    We specialize in creating websites that deliver real business results for real estate professionals
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100 text-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#FF4D6D] to-[#6C63FF] text-white flex items-center justify-center mx-auto mb-4 text-2xl">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Mobile-First Design</h3>
                    <p class="text-slate-600">
                        Over 60% of property searches happen on mobile. We ensure your site looks perfect on all
                        devices.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100 text-center"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#6C63FF] to-[#FF4D6D] text-white flex items-center justify-center mx-auto mb-4 text-2xl">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Lightning Fast</h3>
                    <p class="text-slate-600">
                        Fast-loading websites rank higher and convert better. We optimize for maximum performance.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100 text-center"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#FF4D6D] to-purple-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">SEO Optimized</h3>
                    <p class="text-slate-600">
                        Built with SEO best practices to help you rank higher in search results and attract more
                        visitors.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100 text-center"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-[#6C63FF] text-white flex items-center justify-center mx-auto mb-4 text-2xl">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Secure & Reliable</h3>
                    <p class="text-slate-600">
                        We implement security best practices to protect your site and your visitors' data.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟦 Section 6: Portfolio / Case Studies -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    Real Estate Website <span class="text-gradient">Portfolio</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Explore some of our recent real estate website projects
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-slate-100"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1973&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Luxury Realty Website" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Luxury Realty Group</h3>
                        <p class="text-slate-600 mb-4">High-end property showcase with virtual tours and advanced search
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-[#6C63FF]">+45% Lead Increase</span>
                            <a href="#" class="text-sm font-medium hover:text-[#FF4D6D] transition-colors">View Project
                                →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-slate-100"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Urban Apartments Website" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Urban Apartments</h3>
                        <p class="text-slate-600 mb-4">Apartment rental platform with booking system and tenant portal
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-[#6C63FF]">+60% Mobile Conversions</span>
                            <a href="#" class="text-sm font-medium hover:text-[#FF4D6D] transition-colors">View Project
                                →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-slate-100"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1973&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Commercial Properties Website" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Commercial Properties Inc.</h3>
                        <p class="text-slate-600 mb-4">B2B commercial real estate with investor portal and analytics</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-[#6C63FF]">+80% Inquiry Quality</span>
                            <a href="#" class="text-sm font-medium hover:text-[#FF4D6D] transition-colors">View Project
                                →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟧 Section 7: Call to Action (CTA) -->
    <section class="py-20 bg-gradient-to-r from-blue-500 to-blue-600 relative overflow-hidden">
        <!-- Background elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-white/10 rounded-full"></div>
            <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-white/5 rounded-full"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-8 text-center text-white">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6" data-aos="fade-up">
                Ready to Build a Website That <span class="text-white">Sells Your Properties 24/7</span>?
            </h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Let's create a modern, lead-focused website that makes your real estate brand stand out online.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="#contact"
                    class="px-8 py-4 rounded-xl bg-white text-blue-600 font-semibold shadow-lg hover:bg-gray-100 transition-all flex items-center gap-2">
                    <i class="fas fa-code"></i>
                    Let's Build My Website
                </a>
                <a href="#"
                    class="px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-medium hover:bg-white/20 transition-all flex items-center gap-2">
                    <i class="fas fa-calendar-alt"></i>
                    Schedule a Demo
                </a>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20">
                    <div class="text-2xl font-bold mb-2">2-4 Weeks</div>
                    <div class="text-white/80">Average Project Timeline</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20">
                    <div class="text-2xl font-bold mb-2">Free</div>
                    <div class="text-white/80">Website Audit</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20">
                    <div class="text-2xl font-bold mb-2">30 Days</div>
                    <div class="text-white/80">Support Included</div>
                </div>
            </div>
        </div>
    </section>
</div>