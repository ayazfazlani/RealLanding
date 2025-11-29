<div>
    <!-- 🟩 Section 1: Hero Banner -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-black">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-green-500/90 to-black/80 z-10"></div>
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Advertising analytics dashboard" class="w-full h-full object-cover opacity-70" />
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-8 text-center text-white">
            <div
                class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/20">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">Paid Advertising Specialists</span>
            </div>

            <h1 class="text-5xl lg:text-7xl font-extrabold mb-6 leading-tight" data-aos="fade-up">
                Instant Traffic. Maximum <span class="text-gradient">ROI from Paid Ads</span>.
            </h1>
            <p class="text-xl lg:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up"
                data-aos-delay="200">
                We drive immediate, high-converting traffic to your real estate business through strategic paid
                advertising campaigns on Google, Facebook, and Instagram.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                data-aos-delay="400">
                <button href="{{ route('contact') }}" wire:navigate
                    class="px-8 py-4 rounded-xl bg-gradient-to-r from-green-600 to-green-800 text-white font-semibold shadow-lg glow hover:shadow-xl transition-all flex items-center gap-2">
                    <i class="fas fa-chart-line"></i>
                    Get Free Ad Audit
                </button>
                <a href="#portfolio"
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
        <div class="absolute top-20 left-10 w-6 h-6 rounded-full bg-green-500 opacity-30 floating"></div>
        <div class="absolute bottom-40 right-20 w-10 h-10 rounded-full bg-green-400 opacity-20 floating"
            style="animation-delay: 1s;"></div>
        <div class="absolute top-1/3 right-1/4 w-8 h-8 rounded-full bg-white opacity-10 floating"
            style="animation-delay: 2s;"></div>
    </section>

    <!-- 🟩 Section 2: Introduction -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6" data-aos="fade-up">
                Why Paid Ads Deliver <span class="text-gradient">Immediate Results</span>
            </h2>
            <div class="text-lg text-gray-600 space-y-6" data-aos="fade-up" data-aos-delay="200">
                <p>
                    While SEO builds long-term growth, paid advertising puts your real estate business in front of
                    ready-to-buy prospects immediately.
                    Our targeted ad campaigns reach high-intent buyers actively searching for properties, investors
                    looking for opportunities,
                    and renters in your specific market areas.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-gray-50 rounded-xl border border-gray-200" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl font-bold text-green-600 mb-2">24-48h</div>
                    <div class="font-medium">Quick Launch</div>
                    <p class="text-gray-600 text-sm mt-2">Campaigns live and driving traffic within days</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl border border-gray-200" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-3xl font-bold text-green-600 mb-2">3-5x</div>
                    <div class="font-medium">Higher CTR</div>
                    <p class="text-gray-600 text-sm mt-2">Better click-through rates than organic search</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl border border-gray-200" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-3xl font-bold text-green-600 mb-2">67%</div>
                    <div class="font-medium">More Conversions</div>
                    <p class="text-gray-600 text-sm mt-2">Higher conversion rates from targeted audiences</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟩 Section 3: Our Advertising Services -->
    <section class="py-20 bg-gradient-to-br from-green-50 to-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Services Content -->
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold mb-8" data-aos="fade-right">
                        Our Real Estate <span class="text-gradient">Advertising Services</span>
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Service 1 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-gray-200"
                            data-aos="fade-right" data-aos-delay="100">
                            <div class="text-3xl mb-4 text-green-600">🎯</div>
                            <h3 class="text-xl font-bold mb-2">Google Ads PPC</h3>
                            <p class="text-gray-600">
                                Target high-intent buyers searching for properties in your area with strategic
                                pay-per-click campaigns.
                            </p>
                        </div>

                        <!-- Service 2 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-gray-200"
                            data-aos="fade-right" data-aos-delay="200">
                            <div class="text-3xl mb-4 text-green-600">📱</div>
                            <h3 class="text-xl font-bold mb-2">Social Media Ads</h3>
                            <p class="text-gray-600">
                                Reach potential buyers on Facebook, Instagram, and LinkedIn with visually compelling
                                property ads.
                            </p>
                        </div>

                        <!-- Service 3 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-gray-200"
                            data-aos="fade-right" data-aos-delay="300">
                            <div class="text-3xl mb-4 text-green-600">🗺️</div>
                            <h3 class="text-xl font-bold mb-2">Geo-Targeting</h3>
                            <p class="text-gray-600">
                                Show your ads to users in specific neighborhoods, cities, or regions where you operate.
                            </p>
                        </div>

                        <!-- Service 4 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-gray-200"
                            data-aos="fade-right" data-aos-delay="400">
                            <div class="text-3xl mb-4 text-green-600">📹</div>
                            <h3 class="text-xl font-bold mb-2">Video Advertising</h3>
                            <p class="text-gray-600">
                                Showcase properties with stunning video tours on YouTube and social media platforms.
                            </p>
                        </div>

                        <!-- Service 5 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-gray-200"
                            data-aos="fade-right" data-aos-delay="500">
                            <div class="text-3xl mb-4 text-green-600">📊</div>
                            <h3 class="text-xl font-bold mb-2">Retargeting Campaigns</h3>
                            <p class="text-gray-600">
                                Re-engage visitors who showed interest in your properties but didn't convert.
                            </p>
                        </div>

                        <!-- Service 6 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-gray-200"
                            data-aos="fade-right" data-aos-delay="600">
                            <div class="text-3xl mb-4 text-green-600">💼</div>
                            <h3 class="text-xl font-bold mb-2">Lead Generation Ads</h3>
                            <p class="text-gray-600">
                                Capture qualified leads with optimized forms and landing pages designed for conversions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right: Image -->
                <div class="relative" data-aos="fade-left">
                    <div class="rounded-2xl overflow-hidden shadow-2xl border-2 border-green-600">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Advertising analytics dashboard" class="w-full h-auto object-cover" />
                    </div>

                    <!-- Floating element -->
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-green-600 opacity-10 rounded-full -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟩 Section 4: Our Process -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    Our <span class="text-gradient">Advertising Process</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    A strategic approach to launching and optimizing high-converting paid campaigns
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                <!-- Step 1 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-green-50 to-white rounded-2xl border border-green-200"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-green-600 to-green-800 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <div class="mb-2 font-bold text-green-600">Step 1</div>
                    <h3 class="text-xl font-bold mb-3">Audit & Strategy</h3>
                    <p class="text-gray-600">
                        Analyze your goals and define target audiences, budgets, and platforms.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-green-50 to-white rounded-2xl border border-green-200"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-green-600 to-green-800 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="mb-2 font-bold text-green-600">Step 2</div>
                    <h3 class="text-xl font-bold mb-3">Creative Development</h3>
                    <p class="text-gray-600">
                        Design compelling ad creatives and write persuasive copy that converts.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-green-50 to-white rounded-2xl border border-green-200"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-green-600 to-green-800 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="mb-2 font-bold text-green-600">Step 3</div>
                    <h3 class="text-xl font-bold mb-3">Campaign Launch</h3>
                    <p class="text-gray-600">
                        Set up and launch optimized campaigns across selected platforms.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-green-50 to-white rounded-2xl border border-green-200"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-green-600 to-green-800 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="mb-2 font-bold text-green-600">Step 4</div>
                    <h3 class="text-xl font-bold mb-3">Optimization</h3>
                    <p class="text-gray-600">
                        Continuously test and refine ads for maximum performance and ROI.
                    </p>
                </div>

                <!-- Step 5 -->
                <div class="text-center p-6 bg-gradient-to-br from-green-50 to-white rounded-2xl border border-green-200"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-green-600 to-green-800 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-analytics"></i>
                    </div>
                    <div class="mb-2 font-bold text-green-600">Step 5</div>
                    <h3 class="text-xl font-bold mb-3">Reporting & Scaling</h3>
                    <p class="text-gray-600">
                        Track results and scale successful campaigns for greater returns.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟩 Section 5: Why Choose Us -->
    <section class="py-20 bg-gradient-to-br from-black to-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    Why Choose Our <span class="text-gradient">Paid Advertising</span> Services
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Expert management of your real estate advertising campaigns for maximum ROI
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-6 bg-gray-800 rounded-2xl shadow-lg card-hover border border-gray-700" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-green-600 text-white flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2 text-white">Real Estate Expertise</h3>
                            <p class="text-gray-300">
                                We understand property buyer psychology and what drives conversions in real estate.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="p-6 bg-gray-800 rounded-2xl shadow-lg card-hover border border-gray-700" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-green-600 text-white flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2 text-white">Multi-Platform Mastery</h3>
                            <p class="text-gray-300">
                                Expertise across Google Ads, Facebook, Instagram, LinkedIn, and programmatic platforms.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="p-6 bg-gray-800 rounded-2xl shadow-lg card-hover border border-gray-700" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-green-600 text-white flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2 text-white">ROI-Focused Approach</h3>
                            <p class="text-gray-300">
                                We optimize for cost-per-lead and return on ad spend, not just clicks or impressions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="p-6 bg-gray-800 rounded-2xl shadow-lg card-hover border border-gray-700" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-green-600 text-white flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2 text-white">Advanced Tracking</h3>
                            <p class="text-gray-300">
                                Comprehensive conversion tracking and attribution modeling for accurate ROI measurement.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="p-6 bg-gray-800 rounded-2xl shadow-lg card-hover border border-gray-700" data-aos="fade-up"
                    data-aos-delay="500">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-green-600 text-white flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2 text-white">A/B Testing</h3>
                            <p class="text-gray-300">
                                Continuous testing of creatives, copy, and audiences to improve performance.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="p-6 bg-gray-800 rounded-2xl shadow-lg card-hover border border-gray-700" data-aos="fade-up"
                    data-aos-delay="600">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-green-600 text-white flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2 text-white">Transparent Reporting</h3>
                            <p class="text-gray-300">
                                Clear, monthly reports showing exactly how your ad budget is performing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟩 Section 6: Case Studies / Results -->
    <section id="portfolio" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    Real Results from Our <span class="text-gradient">Advertising Campaigns</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Proven success stories from real estate clients who achieved rapid growth with our paid ads
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Case Study 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-200"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="h-48 bg-gradient-to-br from-green-600 to-green-800 flex items-center justify-center text-white">
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold mb-2">5:1</div>
                            <div class="text-xl font-medium">ROI Achieved</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Luxury Condo Development</h3>
                        <p class="text-gray-600 mb-4">Generated $5 in sales for every $1 spent on Facebook and Google
                            Ads targeting high-net-worth investors.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-green-600">Luxury Real Estate</span>
                            <button
                                wire:click="$dispatch('openModal', { component: 'case-study', arguments: { id: 1 } })"
                                class="text-sm font-medium hover:text-green-800 transition-colors">View Details
                                →</button>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-200"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="h-48 bg-gradient-to-br from-green-600 to-green-800 flex items-center justify-center text-white">
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold mb-2">45%</div>
                            <div class="text-xl font-medium">Cost Reduction</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Real Estate Agency</h3>
                        <p class="text-gray-600 mb-4">Reduced cost-per-lead by 45% through optimized Google Ads
                            campaigns and improved landing pages.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-green-600">Property Agency</span>
                            <button
                                wire:click="$dispatch('openModal', { component: 'case-study', arguments: { id: 2 } })"
                                class="text-sm font-medium hover:text-green-800 transition-colors">View Details
                                →</button>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-200"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="h-48 bg-gradient-to-br from-green-600 to-green-800 flex items-center justify-center text-white">
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold mb-2">200+</div>
                            <div class="text-xl font-medium">Leads Monthly</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Property Developer</h3>
                        <p class="text-gray-600 mb-4">Generated 200+ qualified leads per month through targeted
                            Instagram and Google Display campaigns.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-green-600">Residential Developer</span>
                            <button
                                wire:click="$dispatch('openModal', { component: 'case-study', arguments: { id: 3 } })"
                                class="text-sm font-medium hover:text-green-800 transition-colors">View Details
                                →</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟩 Section 7: Call to Action (CTA) -->
    <section class="py-20 bg-gradient-to-r from-black to-gray-900 relative overflow-hidden">
        <!-- Background elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-green-600/10 rounded-full"></div>
            <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-green-600/5 rounded-full"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-8 text-center text-white">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6" data-aos="fade-up">
                Ready to Drive <span class="text-white">Immediate Results</span>?
            </h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Let's create a paid advertising strategy that delivers qualified leads and measurable ROI from day one.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <button href="{{ route('contact') }}" wire:navigate
                    class="px-8 py-4 rounded-xl bg-white text-green-600 font-semibold shadow-lg hover:bg-gray-100 transition-all flex items-center gap-2">
                    <i class="fas fa-bullseye"></i>
                    Get Free Campaign Audit
                </button>
                <button wire:click="$dispatch('openModal', { component: 'guide-download' })"
                    class="px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-medium hover:bg-white/20 transition-all flex items-center gap-2">
                    <i class="fas fa-file-alt"></i>
                    Download Advertising Guide
                </button>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20">
                    <div class="text-2xl font-bold mb-2">Free</div>
                    <div class="text-white/80">Campaign Audit & Strategy</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20">
                    <div class="text-2xl font-bold mb-2">24-48h</div>
                    <div class="text-white/80">Campaign Launch</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20">
                    <div class="text-2xl font-bold mb-2">Weekly</div>
                    <div class="text-white/80">Performance Reports</div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Initialize AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
        }

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
</div>