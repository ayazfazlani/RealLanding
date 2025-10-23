<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
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

        .bg-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .paid-ads-bg {
            background: linear-gradient(135deg, #667eea 0%, #f093fb 100%);
        }
    </style>

    <!-- 🟦 Section 1: Hero Banner -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-purple-900/80 z-10"></div>
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Digital advertising dashboards and analytics" class="w-full h-full object-cover" />
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-8 text-center text-white">
            <div
                class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/20">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">Real Estate Paid Advertising Experts</span>
            </div>

            <h1 class="text-5xl lg:text-7xl font-extrabold mb-6 leading-tight" data-aos="fade-up">
                Generate Qualified Real Estate Leads Through <span class="text-gradient">High-Performance Paid
                    Ads</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up"
                data-aos-delay="200">
                From Google to TikTok, we manage paid campaigns that bring your real estate projects in front of the
                right buyers — fast, measurable, and ROI-driven.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                data-aos-delay="400">
                <a href="#contact"
                    class="px-8 py-4 rounded-xl bg-gradient-to-r from-[#FF4D6D] to-[#6C63FF] text-white font-semibold shadow-lg glow hover:shadow-xl transition-all flex items-center gap-2">
                    <i class="fas fa-chart-line"></i>
                    Get a Free Ad Strategy Session
                </a>
                <a href="#services"
                    class="px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-medium hover:bg-white/20 transition-all flex items-center gap-2">
                    <i class="fas fa-play-circle"></i>
                    View Case Studies
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
                Why Paid Advertising Works for <span class="text-gradient">Real Estate</span>
            </h2>
            <div class="text-lg text-slate-600 space-y-6" data-aos="fade-up" data-aos-delay="200">
                <p>
                    Organic reach is powerful, but paid advertising gives your real estate projects instant visibility.
                    With the right targeting, creatives, and strategy, you can reach serious buyers within hours — not
                    weeks.
                </p>
                <p>
                    We create, manage, and optimize ad campaigns across all major platforms to help you generate
                    verified property leads and boost project sales.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-soft rounded-xl" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl font-bold text-[#6C63FF] mb-2">5x</div>
                    <div class="font-medium">Faster Results</div>
                    <p class="text-slate-600 text-sm mt-2">Paid ads deliver leads faster than organic methods</p>
                </div>
                <div class="p-6 bg-soft rounded-xl" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-3xl font-bold text-[#FF4D6D] mb-2">300%</div>
                    <div class="font-medium">Higher Intent</div>
                    <p class="text-slate-600 text-sm mt-2">Targeted ads reach buyers actively searching</p>
                </div>
                <div class="p-6 bg-soft rounded-xl" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-3xl font-bold text-[#6C63FF] mb-2">24/7</div>
                    <div class="font-medium">Lead Generation</div>
                    <p class="text-slate-600 text-sm mt-2">Your ads work around the clock to generate leads</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟨 Section 3: Our Paid Advertising Services -->
    <section class="py-20 bg-gradient-to-br from-amber-50 to-orange-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Services Content -->
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold mb-8" data-aos="fade-right">
                        Our Real Estate <span class="text-gradient">Paid Advertising Solutions</span>
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Service 1 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="100">
                            <div class="text-3xl mb-4">🎯</div>
                            <h3 class="text-xl font-bold mb-2">Google Ads (PPC Campaigns)</h3>
                            <p class="text-slate-600">
                                We design data-driven Google Ads campaigns that put your properties at the top of search
                                results — reaching buyers actively looking for homes, apartments, or investments.
                            </p>
                        </div>

                        <!-- Service 2 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="200">
                            <div class="text-3xl mb-4">📱</div>
                            <h3 class="text-xl font-bold mb-2">Meta Ads (Facebook & Instagram)</h3>
                            <p class="text-slate-600">
                                Reach massive audiences through engaging property visuals and lead generation ads on
                                Facebook and Instagram. Perfect for branding and project launches.
                            </p>
                        </div>

                        <!-- Service 3 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="300">
                            <div class="text-3xl mb-4">🎥</div>
                            <h3 class="text-xl font-bold mb-2">YouTube Video Ads</h3>
                            <p class="text-slate-600">
                                Showcase your projects with high-quality video tours and brand stories — targeted to
                                specific demographics and interests on YouTube.
                            </p>
                        </div>

                        <!-- Service 4 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="400">
                            <div class="text-3xl mb-4">💼</div>
                            <h3 class="text-xl font-bold mb-2">LinkedIn Ads</h3>
                            <p class="text-slate-600">
                                Ideal for commercial real estate and investor audiences. We run professional LinkedIn
                                campaigns that connect you with high-value clients and partners.
                            </p>
                        </div>

                        <!-- Service 5 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="500">
                            <div class="text-3xl mb-4">🎬</div>
                            <h3 class="text-xl font-bold mb-2">TikTok Real Estate Ads</h3>
                            <p class="text-slate-600">
                                Tap into short-form video trends to attract younger property buyers and renters. We
                                produce creative TikTok ad campaigns that generate real engagement and leads.
                            </p>
                        </div>

                        <!-- Service 6 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="600">
                            <div class="text-3xl mb-4">🔁</div>
                            <h3 class="text-xl font-bold mb-2">Retargeting & Remarketing</h3>
                            <p class="text-slate-600">
                                We bring back interested visitors who didn't convert the first time — using smart
                                retargeting strategies across Google and social platforms.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right: Image -->
                <div class="relative" data-aos="fade-left">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Multiple advertising platform dashboards" class="w-full h-auto object-cover" />
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
                    How We Run Successful <span class="text-gradient">Ad Campaigns</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    A systematic approach to maximizing your advertising ROI and generating qualified real estate leads
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
                    <h3 class="text-xl font-bold mb-3">Research & Planning</h3>
                    <p class="text-slate-600">
                        We study your project, audience, and competitors to create a tailored ad strategy.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl border border-purple-100"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <div class="mb-2 font-bold text-purple-600">Step 2</div>
                    <h3 class="text-xl font-bold mb-3">Ad Creation</h3>
                    <p class="text-slate-600">
                        We design visuals, write ad copy, and set up campaign structures.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-pink-50 to-red-50 rounded-2xl border border-pink-100"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-pink-500 to-red-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="mb-2 font-bold text-pink-600">Step 3</div>
                    <h3 class="text-xl font-bold mb-3">Launch</h3>
                    <p class="text-slate-600">
                        We go live across your selected platforms (Google, Meta, TikTok, LinkedIn, YouTube).
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl border border-green-100"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-green-500 to-teal-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="mb-2 font-bold text-green-600">Step 4</div>
                    <h3 class="text-xl font-bold mb-3">Optimization</h3>
                    <p class="text-slate-600">
                        We track clicks, leads, and conversions — improving performance daily.
                    </p>
                </div>

                <!-- Step 5 -->
                <div class="text-center p-6 bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl border border-orange-100"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-orange-500 to-amber-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="mb-2 font-bold text-orange-600">Step 5</div>
                    <h3 class="text-xl font-bold mb-3">Reporting</h3>
                    <p class="text-slate-600">
                        You receive detailed reports on ad spend, leads, and ROI.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟩 Section 5: Why Choose Us -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50 bg-pattern relative">
        <div class="absolute inset-0 bg-white/50"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    Why Choose Our <span class="text-gradient">Real Estate Ad Management</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    We deliver measurable results through expert paid advertising strategies
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Real Estate–Focused Advertising Experts</h3>
                            <p class="text-slate-600">
                                We understand the unique needs and buyer psychology of the real estate market.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Certified Google & Meta Ad Specialists</h3>
                            <p class="text-slate-600">
                                Our team holds official certifications and stays updated with platform changes.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Data-Driven Targeting for Verified Buyers</h3>
                            <p class="text-slate-600">
                                We use advanced targeting to reach serious property buyers and investors.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Transparent Budgets & ROI Reporting</h3>
                            <p class="text-slate-600">
                                Clear reporting shows exactly where your ad spend goes and what results it generates.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100" data-aos="fade-up"
                    data-aos-delay="500">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Multi-Platform Expertise</h3>
                            <p class="text-slate-600">
                                Google, Meta, TikTok, LinkedIn, YouTube — we master all major advertising platforms.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100" data-aos="fade-up"
                    data-aos-delay="600">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Continuous Optimization & Lead Tracking</h3>
                            <p class="text-slate-600">
                                We constantly refine campaigns based on performance data to maximize results.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟦 Section 6: Case Studies / Results -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    Real <span class="text-gradient">Campaign Results</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Proven advertising success stories from our real estate clients
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Case Study 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-slate-100"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="h-48 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white">
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold mb-2">650+</div>
                            <div class="text-xl font-medium">Verified Leads</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Residential Project</h3>
                        <p class="text-slate-600 mb-4">650+ verified leads generated in 45 days through targeted Meta
                            Ads and compelling property visuals.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-[#6C63FF]">Meta Ads Campaign</span>
                            <a href="#" class="text-sm font-medium hover:text-[#FF4D6D] transition-colors">View Details
                                →</a>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-slate-100"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="h-48 bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-white">
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold mb-2">4x</div>
                            <div class="text-xl font-medium">ROI Achieved</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Luxury Villa Launch</h3>
                        <p class="text-slate-600 mb-4">4x ROI on Google Ads in 60 days through strategic keyword
                            targeting and compelling ad copy.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-[#6C63FF]">Google PPC Campaign</span>
                            <a href="#" class="text-sm font-medium hover:text-[#FF4D6D] transition-colors">View Details
                                →</a>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-slate-100"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="h-48 bg-gradient-to-br from-green-500 to-teal-500 flex items-center justify-center text-white">
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold mb-2">2.5x</div>
                            <div class="text-xl font-medium">More Conversions</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Commercial Property</h3>
                        <p class="text-slate-600 mb-4">Achieved 2.5x more LinkedIn conversions than industry average
                            through professional B2B targeting.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-[#6C63FF]">LinkedIn Ads</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="400">
                <a href="#"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-[#FF4D6D] to-[#6C63FF] text-white font-semibold shadow-lg hover:shadow-xl transition-all">
                    <i class="fas fa-chart-bar"></i>
                    View All Case Studies
                </a>
            </div>
        </div>
    </section>

    <!-- 🟨 Section 7: FAQ -->
    <section class="py-20 bg-gradient-to-br from-amber-50 to-orange-50">
        <div class="max-w-4xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    Frequently Asked <span class="text-gradient">Questions</span>
                </h2>
                <p class="text-xl text-slate-600" data-aos="fade-up" data-aos-delay="200">
                    Everything you need to know about our paid advertising services
                </p>
            </div>

            <div class="space-y-6">
                <!-- FAQ 1 -->
                <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden" data-aos="fade-up"
                    data-aos-delay="100">
                    <button
                        class="faq-question w-full text-left p-6 font-semibold text-lg flex justify-between items-center hover:bg-slate-50 transition-colors">
                        <span>How quickly can I expect to see results from paid ads?</span>
                        <i class="fas fa-chevron-down text-[#6C63FF] transition-transform"></i>
                    </button>
                    <div class="faq-answer p-6 border-t border-slate-100 hidden">
                        <p class="text-slate-600">
                            Paid advertising delivers immediate visibility, but optimal results typically come within
                            2-4 weeks as we gather data and optimize campaigns. You'll see initial leads within days,
                            with performance improving steadily as we refine targeting and creatives based on real-time
                            data.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden" data-aos="fade-up"
                    data-aos-delay="200">
                    <button
                        class="faq-question w-full text-left p-6 font-semibold text-lg flex justify-between items-center hover:bg-slate-50 transition-colors">
                        <span>What's the minimum budget for real estate paid advertising?</span>
                        <i class="fas fa-chevron-down text-[#6C63FF] transition-transform"></i>
                    </button>
                    <div class="faq-answer p-6 border-t border-slate-100 hidden">
                        <p class="text-slate-600">
                            We recommend starting with a minimum budget of $1,500-$2,500 per month for meaningful
                            results in competitive real estate markets. This allows for proper testing, optimization,
                            and scaling across platforms while generating qualified leads.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden" data-aos="fade-up"
                    data-aos-delay="300">
                    <button
                        class="faq-question w-full text-left p-6 font-semibold text-lg flex justify-between items-center hover:bg-slate-50 transition-colors">
                        <span>Which platform works best for real estate lead generation?</span>
                        <i class="fas fa-chevron-down text-[#6C63FF] transition-transform"></i>
                    </button>
                    <div class="faq-answer p-6 border-t border-slate-100 hidden">
                        <p class="text-slate-600">
                            Google Ads typically delivers highest-intent buyers actively searching for properties, while
                            Meta (Facebook/Instagram) excels at building brand awareness and reaching specific
                            demographics. We often recommend a multi-platform approach starting with Google for
                            immediate leads and Meta for broader reach.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden" data-aos="fade-up"
                    data-aos-delay="400">
                    <button
                        class="faq-question w-full text-left p-6 font-semibold text-lg flex justify-between items-center hover:bg-slate-50 transition-colors">
                        <span>Do you work with real estate agents or developers only?</span>
                        <i class="fas fa-chevron-down text-[#6C63FF] transition-transform"></i>
                    </button>
                    <div class="faq-answer p-6 border-t border-slate-100 hidden">
                        <p class="text-slate-600">
                            We work with all types of real estate professionals including individual agents, brokerages,
                            property developers, investors, and property management companies. Each receives a
                            customized strategy based on their specific goals and target audience.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden" data-aos="fade-up"
                    data-aos-delay="500">
                    <button
                        class="faq-question w-full text-left p-6 font-semibold text-lg flex justify-between items-center hover:bg-slate-50 transition-colors">
                        <span>How do you track and measure campaign success?</span>
                        <i class="fas fa-chevron-down text-[#6C63FF] transition-transform"></i>
                    </button>
                    <div class="faq-answer p-6 border-t border-slate-100 hidden">
                        <p class="text-slate-600">
                            We implement comprehensive tracking including phone calls, form submissions, chat
                            interactions, and offline conversions. You'll receive detailed monthly reports showing cost
                            per lead, return on ad spend, and other key performance indicators specific to your real
                            estate goals.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟦 Section 8: CTA -->
    <section id="contact" class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900 to-purple-900 opacity-95"></div>
            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Modern office workspace" class="w-full h-full object-cover" />
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-8 text-center text-white">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6" data-aos="fade-up">
                Ready to Generate <span class="text-gradient">Quality Real Estate Leads</span>?
            </h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Book a free strategy session with our paid advertising experts. We'll analyze your current situation and
                create a customized plan to drive qualified buyers to your properties.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="text-center p-6 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl mb-4">🎯</div>
                    <h3 class="text-xl font-bold mb-2">Free Audit</h3>
                    <p class="text-white/80">We'll review your current advertising efforts</p>
                </div>
                <div class="text-center p-6 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="text-3xl mb-4">📈</div>
                    <h3 class="text-xl font-bold mb-2">Custom Strategy</h3>
                    <p class="text-white/80">Receive a tailored paid advertising plan</p>
                </div>
                <div class="text-center p-6 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20"
                    data-aos="fade-up" data-aos-delay="500">
                    <div class="text-3xl mb-4">💰</div>
                    <h3 class="text-xl font-bold mb-2">ROI Forecast</h3>
                    <p class="text-white/80">See potential returns on your ad investment</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="600">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-slate-700 text-sm font-medium mb-2 text-left">Your Name</label>
                            <input type="text"
                                class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#6C63FF] focus:ring-2 focus:ring-[#6C63FF]/20 transition-all"
                                placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-slate-700 text-sm font-medium mb-2 text-left">Email Address</label>
                            <input type="email"
                                class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#6C63FF] focus:ring-2 focus:ring-[#6C63FF]/20 transition-all"
                                placeholder="john@example.com">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-slate-700 text-sm font-medium mb-2 text-left">Phone Number</label>
                            <input type="tel"
                                class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#6C63FF] focus:ring-2 focus:ring-[#6C63FF]/20 transition-all"
                                placeholder="+1 (555) 000-0000">
                        </div>
                        <div>
                            <label class="block text-slate-700 text-sm font-medium mb-2 text-left">Company</label>
                            <input type="text"
                                class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#6C63FF] focus:ring-2 focus:ring-[#6C63FF]/20 transition-all"
                                placeholder="Your Real Estate Company">
                        </div>
                    </div>
                    <div>
                        <label class="block text-slate-700 text-sm font-medium mb-2 text-left">What are your advertising
                            goals?</label>
                        <select
                            class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#6C63FF] focus:ring-2 focus:ring-[#6C63FF]/20 transition-all">
                            <option>Generate more property leads</option>
                            <option>Increase project awareness</option>
                            <option>Drive website traffic</option>
                            <option>Boost open house attendance</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-slate-700 text-sm font-medium mb-2 text-left">Additional
                            Message</label>
                        <textarea rows="4"
                            class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#6C63FF] focus:ring-2 focus:ring-[#6C63FF]/20 transition-all"
                            placeholder="Tell us about your current challenges..."></textarea>
                    </div>
                    <button type="submit"
                        class="w-full px-8 py-4 rounded-xl bg-gradient-to-r from-[#FF4D6D] to-[#6C63FF] text-white font-semibold shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-calendar-check"></i>
                        Book My Free Strategy Session
                    </button>
                    <p class="text-slate-500 text-sm text-center">
                        No commitment required. We'll get back to you within 24 hours.
                    </p>
                </form>
            </div>
        </div>
    </section>
</div>

@stack('scripts')
<script>
    // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Mobile menu toggle
        const mobileBtn = document.getElementById('mobileBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');

        mobileBtn.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('opacity-0');
            
            if (isOpen) {
                mobileMenu.classList.remove('opacity-0', 'pointer-events-none', '-translate-y-1/2');
                mobileMenu.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('opacity-0', 'pointer-events-none', '-translate-y-1/2');
                mobileMenu.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });

        // FAQ functionality
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                const icon = button.querySelector('i');
                
                // Toggle current answer
                answer.classList.toggle('hidden');
                icon.classList.toggle('fa-chevron-down');
                icon.classList.toggle('fa-chevron-up');
                
                // Close other open FAQs
                document.querySelectorAll('.faq-question').forEach(otherButton => {
                    if (otherButton !== button) {
                        const otherAnswer = otherButton.nextElementSibling;
                        const otherIcon = otherButton.querySelector('i');
                        otherAnswer.classList.add('hidden');
                        otherIcon.classList.remove('fa-chevron-up');
                        otherIcon.classList.add('fa-chevron-down');
                    }
                });
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
</script>