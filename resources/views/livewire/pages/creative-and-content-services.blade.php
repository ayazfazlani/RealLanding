<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
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

        .creative-bg {
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
        }
    </style>

    <!-- 🟦 Section 1: Hero Banner -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-900/90 to-pink-800/80 z-10"></div>
            <img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Creative team editing visuals and content" class="w-full h-full object-cover" />
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-8 text-center text-white">
            <div
                class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/20">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">Visual Storytelling for Real Estate</span>
            </div>

            <h1 class="text-5xl lg:text-7xl font-extrabold mb-6 leading-tight" data-aos="fade-up">
                Creative Content That Brings <span class="text-gradient">Real Estate Projects to Life</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up"
                data-aos-delay="200">
                From high-quality visuals to powerful storytelling, we craft creative content that helps real estate
                brands capture attention, build emotion, and sell properties faster.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                data-aos-delay="400">
                <a href="#contact"
                    class="px-8 py-4 rounded-xl bg-gradient-to-r from-[#FF4D6D] to-[#6C63FF] text-white font-semibold shadow-lg glow hover:shadow-xl transition-all flex items-center gap-2">
                    <i class="fas fa-palette"></i>
                    Get a Free Creative Consultation
                </a>
                <a href="#services"
                    class="px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-medium hover:bg-white/20 transition-all flex items-center gap-2">
                    <i class="fas fa-play-circle"></i>
                    View Our Portfolio
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
                Why Creative Content Matters in <span class="text-gradient">Real Estate</span>
            </h2>
            <div class="text-lg text-slate-600 space-y-6" data-aos="fade-up" data-aos-delay="200">
                <p>
                    Real estate is all about visuals — buyers decide with their eyes before they contact you.
                </p>
                <p>
                    Strong creative content turns your property into an experience — through stunning photos, videos, 3D
                    walkthroughs, and compelling copy.
                </p>
                <p>
                    Our creative team combines design, storytelling, and real estate expertise to produce content that
                    not only looks beautiful but also drives real buyer action.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-soft rounded-xl" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl font-bold text-[#6C63FF] mb-2">90%</div>
                    <div class="font-medium">Visual Decision Making</div>
                    <p class="text-slate-600 text-sm mt-2">Buyers decide based on property visuals first</p>
                </div>
                <div class="p-6 bg-soft rounded-xl" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-3xl font-bold text-[#FF4D6D] mb-2">3x</div>
                    <div class="font-medium">More Engagement</div>
                    <p class="text-slate-600 text-sm mt-2">Quality visuals generate 3x more engagement</p>
                </div>
                <div class="p-6 bg-soft rounded-xl" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-3xl font-bold text-[#6C63FF] mb-2">40%</div>
                    <div class="font-medium">Faster Sales</div>
                    <p class="text-slate-600 text-sm mt-2">Properties with quality content sell faster</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟨 Section 3: Our Creative & Content Services -->
    <section class="py-20 bg-gradient-to-br from-amber-50 to-orange-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Services Content -->
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold mb-8" data-aos="fade-right">
                        Our Real Estate <span class="text-gradient">Creative & Content Solutions</span>
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Service 1 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="100">
                            <div class="text-3xl mb-4">📸</div>
                            <h3 class="text-xl font-bold mb-2">Property Photography & Videography</h3>
                            <p class="text-slate-600">
                                Professional shoots that highlight your project's architecture, interiors, and
                                lifestyle. Includes drone footage, model apartments, and architectural stills.
                            </p>
                        </div>

                        <!-- Service 2 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="200">
                            <div class="text-3xl mb-4">🚁</div>
                            <h3 class="text-xl font-bold mb-2">Drone Shoots & 3D Walkthroughs</h3>
                            <p class="text-slate-600">
                                Give potential buyers a stunning aerial and virtual experience of your property —
                                perfect for marketing campaigns and website showcases.
                            </p>
                        </div>

                        <!-- Service 3 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="300">
                            <div class="text-3xl mb-4">🎬</div>
                            <h3 class="text-xl font-bold mb-2">Video Ads & Reels Production</h3>
                            <p class="text-slate-600">
                                Short, engaging videos and reels designed for platforms like Instagram, YouTube, and
                                TikTok — optimized to boost engagement and lead generation.
                            </p>
                        </div>

                        <!-- Service 4 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="400">
                            <div class="text-3xl mb-4">✍️</div>
                            <h3 class="text-xl font-bold mb-2">Copywriting & Content Writing</h3>
                            <p class="text-slate-600">
                                From property listings and brochures to blogs and ad copies, we write persuasive,
                                SEO-optimized content that sells.
                            </p>
                        </div>

                        <!-- Service 5 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="500">
                            <div class="text-3xl mb-4">🧠</div>
                            <h3 class="text-xl font-bold mb-2">Graphic Design & Branding Materials</h3>
                            <p class="text-slate-600">
                                Brochures, hoardings, digital posts, and brand assets — everything your real estate
                                brand needs for consistent, premium visuals.
                            </p>
                        </div>

                        <!-- Service 6 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="600">
                            <div class="text-3xl mb-4">📱</div>
                            <h3 class="text-xl font-bold mb-2">Creative Campaign Concepts</h3>
                            <p class="text-slate-600">
                                We plan and design full creative campaigns for project launches, brand awareness, and
                                property promotions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right: Image -->
                <div class="relative" data-aos="fade-left">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1545235617-9465d2a55698?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Creative workspace with camera, laptop, and design materials"
                            class="w-full h-auto object-cover" />
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
                    How We Create Winning <span class="text-gradient">Real Estate Content</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    A systematic approach to producing high-quality, engaging content that converts
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
                        Understand your project, audience, and visual goals.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl border border-purple-100"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="mb-2 font-bold text-purple-600">Step 2</div>
                    <h3 class="text-xl font-bold mb-3">Concept Planning</h3>
                    <p class="text-slate-600">
                        Create moodboards, storyboards, and campaign ideas.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-pink-50 to-red-50 rounded-2xl border border-pink-100"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-pink-500 to-red-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-camera"></i>
                    </div>
                    <div class="mb-2 font-bold text-pink-600">Step 3</div>
                    <h3 class="text-xl font-bold mb-3">Production</h3>
                    <p class="text-slate-600">
                        Capture photos, videos, and visuals with a professional team.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl border border-green-100"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-green-500 to-teal-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="mb-2 font-bold text-green-600">Step 4</div>
                    <h3 class="text-xl font-bold mb-3">Editing & Design</h3>
                    <p class="text-slate-600">
                        Refine visuals and ensure they align with your brand.
                    </p>
                </div>

                <!-- Step 5 -->
                <div class="text-center p-6 bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl border border-orange-100"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-orange-500 to-amber-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    <div class="mb-2 font-bold text-orange-600">Step 5</div>
                    <h3 class="text-xl font-bold mb-3">Delivery & Distribution</h3>
                    <p class="text-slate-600">
                        Provide final content and assist with campaign rollout.
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
                    Why Real Estate Brands Choose Our <span class="text-gradient">Creative Team</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    We deliver exceptional creative content that drives real estate sales
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
                            <h3 class="text-xl font-bold mb-2">Real Estate–Specialized Creative Team</h3>
                            <p class="text-slate-600">
                                Our team understands real estate buyer psychology and what visuals drive action.
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
                            <h3 class="text-xl font-bold mb-2">High-End Visual Quality (Drone, 4K, 3D)</h3>
                            <p class="text-slate-600">
                                We use professional equipment and techniques for stunning property visuals.
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
                            <h3 class="text-xl font-bold mb-2">Storytelling that Builds Buyer Emotion</h3>
                            <p class="text-slate-600">
                                We create narratives that connect buyers emotionally with your properties.
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
                            <h3 class="text-xl font-bold mb-2">Quick Turnaround & Consistent Branding</h3>
                            <p class="text-slate-600">
                                Fast delivery without compromising on quality or brand consistency.
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
                            <h3 class="text-xl font-bold mb-2">Seamless Integration with Marketing Strategy</h3>
                            <p class="text-slate-600">
                                Our content works perfectly with your overall marketing and sales efforts.
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
                            <h3 class="text-xl font-bold mb-2">Proven Track Record of Results</h3>
                            <p class="text-slate-600">
                                We have case studies showing how our content drives real estate sales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟦 Section 6: Portfolio / Samples -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    Our <span class="text-gradient">Creative Work</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Real examples of how our creative content drives results for real estate clients
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Portfolio 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-slate-100"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="h-48 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white">
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold mb-2">5x</div>
                            <div class="text-xl font-medium">More Inquiries</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Luxury Apartments Campaign</h3>
                        <p class="text-slate-600 mb-4">High-end photos + video ad = 5x more inquiries and faster sales
                            for luxury apartment project.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-[#6C63FF]">Photography & Video</span>
                            <a href="#" class="text-sm font-medium hover:text-[#FF4D6D] transition-colors">View Project
                                →</a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-slate-100"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="h-48 bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-white">
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold mb-2">120k+</div>
                            <div class="text-xl font-medium">YouTube Views</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Villa Project Launch</h3>
                        <p class="text-slate-600 mb-4">Drone tour video reached 120k+ views on YouTube, generating
                            high-quality international leads.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-[#6C63FF]">Drone & Video Production</span>
                            <a href="#" class="text-sm font-medium hover:text-[#FF4D6D] transition-colors">View Project
                                →</a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-slate-100"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="h-48 bg-gradient-to-br from-green-500 to-teal-500 flex items-center justify-center text-white">
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold mb-2">40%</div>
                            <div class="text-xl font-medium">More Visits</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Commercial Project</h3>
                        <p class="text-slate-600 mb-4">3D walkthrough and virtual tour increased on-site visits by 40%
                            for commercial property launch.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-[#6C63FF]">3D & Virtual Tours</span>
                            <a href="#" class="text-sm font-medium hover:text-[#FF4D6D] transition-colors">View Project
                                →</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="400">
                <a href="#"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-[#FF4D6D] to-[#6C63FF] text-white font-semibold shadow-lg hover:shadow-xl transition-all">
                    <i class="fas fa-images"></i>
                    View Full Portfolio
                </a>
            </div>
        </div>
    </section>

    <!-- 🟧 Section 7: Call to Action -->
    <section id="contact" class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900 to-purple-900 opacity-95"></div>
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Creative team collaborating" class="w-full h-full object-cover" />
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-8 text-center text-white">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6" data-aos="fade-up">
                Ready to Create Stunning Visuals for Your <span class="text-gradient">Real Estate Brand</span>?
            </h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Let's produce content that inspires, connects, and converts — from photos and videos to complete
                campaign visuals.
            </p>

            <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="400">
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
                        <label class="block text-slate-700 text-sm font-medium mb-2 text-left">What creative services
                            are you interested in?</label>
                        <select
                            class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#6C63FF] focus:ring-2 focus:ring-[#6C63FF]/20 transition-all">
                            <option>Property Photography & Videography</option>
                            <option>Drone Shoots & 3D Walkthroughs</option>
                            <option>Video Ads & Reels Production</option>
                            <option>Copywriting & Content Writing</option>
                            <option>Graphic Design & Branding Materials</option>
                            <option>Full Creative Campaign</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-slate-700 text-sm font-medium mb-2 text-left">Tell us about your
                            project</label>
                        <textarea rows="4"
                            class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#6C63FF] focus:ring-2 focus:ring-[#6C63FF]/20 transition-all"
                            placeholder="Describe your property, target audience, and creative needs..."></textarea>
                    </div>
                    <button type="submit"
                        class="w-full px-8 py-4 rounded-xl bg-gradient-to-r from-[#FF4D6D] to-[#6C63FF] text-white font-semibold shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-palette"></i>
                        Book a Free Creative Strategy Call
                    </button>
                    <p class="text-slate-500 text-sm text-center">
                        No commitment required. We'll get back to you within 24 hours.
                    </p>
                </form>
            </div>
        </div>
    </section>
</div>