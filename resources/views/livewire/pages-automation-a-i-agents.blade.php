<div>
    {{-- The whole world belongs to you. --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        :root {
            --primary: #FF4D6D;
            --accent: #6C63FF;
            --tech-blue: #4361EE;
            --tech-purple: #7209B7;
            --soft: #F6F7FB;
            --dark: #1E293B;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #4361EE 0%, #7209B7 100%);
        }

        .tech-gradient {
            background: linear-gradient(135deg, var(--tech-blue), var(--tech-purple));
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
            background: linear-gradient(90deg, var(--tech-blue), var(--tech-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glow {
            box-shadow: 0 0 20px rgba(67, 97, 238, 0.3);
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

        .tech-bg {
            background: linear-gradient(135deg, #4361EE 0%, #3A0CA3 100%);
        }

        .ai-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 20c0-11.046-8.954-20-20-20v20h20z' fill='%234361EE' fill-opacity='0.03' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .neon-glow {
            box-shadow: 0 0 10px rgba(67, 97, 238, 0.5), 0 0 20px rgba(67, 97, 238, 0.3), 0 0 30px rgba(67, 97, 238, 0.1);
        }
    </style>

    <!-- Navigation -->
    {{-- <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-sm border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <a href="index.html" class="flex items-center gap-3">
                    <div
                        class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#FF4D6D] to-[#6C63FF] flex items-center justify-center text-white font-bold shadow">
                        A
                    </div>
                    <div>
                        <div class="font-bold text-slate-900">ModernAgency</div>
                        <div class="text-xs text-slate-400 -mt-1">Digital Solutions</div>
                    </div>
                </a>

                <!-- Desktop nav -->
                <nav class="hidden md:flex items-center gap-6">
                    <a href="index.html#services"
                        class="text-sm font-medium hover:text-[#6C63FF] transition-colors">Services</a>
                    <a href="branding-strategy.html"
                        class="text-sm font-medium hover:text-[#6C63FF] transition-colors">Branding</a>
                    <a href="website-development.html"
                        class="text-sm font-medium hover:text-[#6C63FF] transition-colors">Web Development</a>
                    <a href="seo.html" class="text-sm font-medium hover:text-[#6C63FF] transition-colors">SEO</a>
                    <a href="social-media.html"
                        class="text-sm font-medium hover:text-[#6C63FF] transition-colors">Social Media</a>
                    <a href="paid-advertising.html"
                        class="text-sm font-medium hover:text-[#6C63FF] transition-colors">Paid Ads</a>
                    <a href="creative-content.html"
                        class="text-sm font-medium hover:text-[#6C63FF] transition-colors">Creative</a>
                    <a href="automation-ai-crm.html"
                        class="text-sm font-medium text-[#4361EE] transition-colors">Automation & AI</a>
                    <a href="#contact"
                        class="ml-4 inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-gradient-to-r from-[#4361EE] to-[#7209B7] text-white text-sm font-medium shadow-sm hover:shadow-md transition-all">
                        Get Started
                    </a>
                </nav>

                <!-- Mobile toggle -->
                <div class="md:hidden">
                    <button id="mobileBtn"
                        class="p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-[#4361EE]/40">
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
            <div class="mx-6 mb-6 bg-white rounded-xl shadow-lg p-4">
                <a href="index.html#services" class="block py-2 font-medium">Services</a>
                <a href="branding-strategy.html" class="block py-2 font-medium">Branding</a>
                <a href="website-development.html" class="block py-2 font-medium">Web Development</a>
                <a href="seo.html" class="block py-2 font-medium">SEO</a>
                <a href="social-media.html" class="block py-2 font-medium">Social Media</a>
                <a href="paid-advertising.html" class="block py-2 font-medium">Paid Ads</a>
                <a href="creative-content.html" class="block py-2 font-medium">Creative</a>
                <a href="automation-ai-crm.html" class="block py-2 font-medium text-[#4361EE]">Automation & AI</a>
                <a href="#contact"
                    class="mt-3 inline-block w-full text-center px-4 py-2 rounded-lg bg-gradient-to-r from-[#4361EE] to-[#7209B7] text-white font-medium">
                    Get Started
                </a>
            </div>
        </div>
    </header> --}}

    <!-- 🟦 Section 1: Hero Banner -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-purple-900/80 z-10"></div>
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="AI chatbot interface and CRM dashboard" class="w-full h-full object-cover" />
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-8 text-center text-white">
            <div
                class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/20">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">AI-Powered Real Estate Solutions</span>
            </div>

            <h1 class="text-5xl lg:text-7xl font-extrabold mb-6 leading-tight" data-aos="fade-up">
                Automate Your Real Estate Lead Management with <span class="text-gradient">AI & Smart CRM Systems</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up"
                data-aos-delay="200">
                From instant AI chat responses to automated lead tracking, we help real estate businesses save time,
                close faster, and never miss a single prospect.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                data-aos-delay="400">
                <a href="#contact"
                    class="px-8 py-4 rounded-xl bg-gradient-to-r from-[#4361EE] to-[#7209B7] text-white font-semibold shadow-lg glow hover:shadow-xl transition-all flex items-center gap-2 neon-glow">
                    <i class="fas fa-robot"></i>
                    Book a Free Automation Demo
                </a>
                <a href="#services"
                    class="px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-medium hover:bg-white/20 transition-all flex items-center gap-2">
                    <i class="fas fa-play-circle"></i>
                    See How It Works
                </a>
            </div>

            <div class="mt-16 flex justify-center">
                <div class="animate-bounce p-4 rounded-full bg-white/10 backdrop-blur-sm border border-white/20">
                    <i class="fas fa-chevron-down text-white"></i>
                </div>
            </div>
        </div>

        <!-- Floating elements -->
        <div class="absolute top-20 left-10 w-6 h-6 rounded-full bg-[#4361EE] opacity-30 floating"></div>
        <div class="absolute bottom-40 right-20 w-10 h-10 rounded-full bg-[#7209B7] opacity-20 floating"
            style="animation-delay: 1s;"></div>
        <div class="absolute top-1/3 right-1/4 w-8 h-8 rounded-full bg-white opacity-10 floating"
            style="animation-delay: 2s;"></div>
    </section>

    <!-- 🟩 Section 2: Introduction -->
    <section class="py-20 bg-white ai-pattern">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6" data-aos="fade-up">
                Why Automation is the Future of <span class="text-gradient">Real Estate Marketing</span>
            </h2>
            <div class="text-lg text-slate-600 space-y-6" data-aos="fade-up" data-aos-delay="200">
                <p>
                    Real estate marketing doesn't stop at lead generation — success depends on how quickly and
                    efficiently you respond.
                </p>
                <p>
                    Our AI-powered automation and CRM solutions ensure every inquiry is followed up instantly, every
                    lead is tracked, and your sales team always knows what's next.
                </p>
                <p>
                    From chatbots to email flows and centralized dashboards, we integrate technology that helps you
                    manage more leads with less effort — and close more deals.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-slate-50 rounded-xl border border-slate-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl font-bold text-[#4361EE] mb-2">24/7</div>
                    <div class="font-medium">Instant Response</div>
                    <p class="text-slate-600 text-sm mt-2">AI chatbots respond to leads anytime, day or night</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-xl border border-slate-100" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-3xl font-bold text-[#7209B7] mb-2">70%</div>
                    <div class="font-medium">Faster Follow-ups</div>
                    <p class="text-slate-600 text-sm mt-2">Automated systems dramatically reduce response time</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-xl border border-slate-100" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-3xl font-bold text-[#4361EE] mb-2">3x</div>
                    <div class="font-medium">More Conversions</div>
                    <p class="text-slate-600 text-sm mt-2">Automated nurturing converts more leads to clients</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟨 Section 3: Our Automation & CRM Solutions -->
    <section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Services Content -->
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold mb-8" data-aos="fade-right">
                        Our Real Estate <span class="text-gradient">Automation & AI Tools</span>
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Service 1 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="100">
                            <div class="text-3xl mb-4">🤖</div>
                            <h3 class="text-xl font-bold mb-2">AI Chat Agents & Lead Assistants</h3>
                            <p class="text-slate-600">
                                Smart AI chatbots respond to property inquiries 24/7 — answering common questions,
                                collecting contact info, and scheduling follow-ups instantly.
                            </p>
                        </div>

                        <!-- Service 2 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="200">
                            <div class="text-3xl mb-4">🔄</div>
                            <h3 class="text-xl font-bold mb-2">Lead Nurturing Automations</h3>
                            <p class="text-slate-600">
                                Automatically send follow-up messages, project details, and personalized offers via
                                email, SMS, or WhatsApp — keeping leads warm without manual effort.
                            </p>
                        </div>

                        <!-- Service 3 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="300">
                            <div class="text-3xl mb-4">📊</div>
                            <h3 class="text-xl font-bold mb-2">Real Estate CRM Integration</h3>
                            <p class="text-slate-600">
                                Centralize all your leads in one place with custom CRM systems — track every inquiry,
                                assign tasks, and monitor progress across your sales team.
                            </p>
                        </div>

                        <!-- Service 4 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="400">
                            <div class="text-3xl mb-4">✉️</div>
                            <h3 class="text-xl font-bold mb-2">WhatsApp & Email Automation</h3>
                            <p class="text-slate-600">
                                Send automated campaigns, reminders, and updates directly through WhatsApp and email for
                                higher open and response rates.
                            </p>
                        </div>

                        <!-- Service 5 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="500">
                            <div class="text-3xl mb-4">🧠</div>
                            <h3 class="text-xl font-bold mb-2">AI Analytics & Insights</h3>
                            <p class="text-slate-600">
                                Get intelligent reporting that predicts buyer behavior, tracks campaign ROI, and
                                identifies your most valuable leads.
                            </p>
                        </div>

                        <!-- Service 6 -->
                        <div class="p-6 bg-white rounded-xl shadow-lg card-hover border border-slate-100"
                            data-aos="fade-right" data-aos-delay="600">
                            <div class="text-3xl mb-4">⚙️</div>
                            <h3 class="text-xl font-bold mb-2">Workflow & Task Automation</h3>
                            <p class="text-slate-600">
                                Reduce manual workload by automating repetitive tasks — from assigning leads to updating
                                databases and triggering alerts.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right: Image -->
                <div class="relative" data-aos="fade-left">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="CRM dashboard showing lead management and analytics"
                            class="w-full h-auto object-cover" />
                    </div>

                    <!-- Floating element -->
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-[#4361EE] opacity-10 rounded-full -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟦 Section 4: Our Process -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    How We Build Your <span class="text-gradient">Automation System</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    A systematic approach to implementing AI and automation that transforms your real estate business
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                <!-- Step 1 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl border border-blue-100"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="mb-2 font-bold text-blue-600">Step 1</div>
                    <h3 class="text-xl font-bold mb-3">Consultation</h3>
                    <p class="text-slate-600">
                        Understand your sales flow, challenges, and goals.
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
                        Map out automation workflows and CRM structure.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-pink-50 to-red-50 rounded-2xl border border-pink-100"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-pink-500 to-red-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div class="mb-2 font-bold text-pink-600">Step 3</div>
                    <h3 class="text-xl font-bold mb-3">Setup</h3>
                    <p class="text-slate-600">
                        Integrate AI chatbots, CRM, and automation tools.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="process-step text-center p-6 bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl border border-green-100"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-green-500 to-teal-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="mb-2 font-bold text-green-600">Step 4</div>
                    <h3 class="text-xl font-bold mb-3">Training</h3>
                    <p class="text-slate-600">
                        Train your team to manage and track leads effectively.
                    </p>
                </div>

                <!-- Step 5 -->
                <div class="text-center p-6 bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl border border-orange-100"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-20 h-20 rounded-2xl bg-gradient-to-br from-orange-500 to-amber-500 text-white flex items-center justify-center mx-auto mb-4 text-2xl shadow-lg">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="mb-2 font-bold text-orange-600">Step 5</div>
                    <h3 class="text-xl font-bold mb-3">Optimization</h3>
                    <p class="text-slate-600">
                        Continuously refine workflows for higher conversion.
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
                    Why Choose Us for <span class="text-gradient">Real Estate Automation & CRM</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    We deliver cutting-edge automation solutions that transform how you manage real estate leads
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Real Estate–Focused Automation Expertise</h3>
                            <p class="text-slate-600">
                                We specialize in automation solutions specifically designed for real estate workflows
                                and lead management.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">AI Chatbots Trained for Property Conversations</h3>
                            <p class="text-slate-600">
                                Our AI understands real estate terminology and can handle complex property inquiries.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Seamless CRM Integration</h3>
                            <p class="text-slate-600">
                                We integrate with HubSpot, Zoho, or build custom CRM solutions tailored to your needs.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Faster Lead Response = Higher Conversions</h3>
                            <p class="text-slate-600">
                                Instant AI responses dramatically increase your lead-to-client conversion rates.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100" data-aos="fade-up"
                    data-aos-delay="500">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Complete Data Visibility & Reporting</h3>
                            <p class="text-slate-600">
                                Track every interaction and get detailed analytics on your lead pipeline performance.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="p-6 bg-white rounded-2xl shadow-lg card-hover border border-slate-100" data-aos="fade-up"
                    data-aos-delay="600">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Hands-On Support & System Maintenance</h3>
                            <p class="text-slate-600">
                                We provide ongoing support to ensure your automation systems run smoothly.
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
                    Real <span class="text-gradient">Success Stories</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Proven results from implementing our automation and AI solutions
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Case Study 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-slate-100"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="h-48 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white">
                        <div class="text-center p-6">
                            <div class="text-4xl font-bold mb-2">70%</div>
                            <div class="text-xl font-medium">Faster Response</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Luxury Project CRM Setup</h3>
                        <p class="text-slate-600 mb-4">Reduced lead response time by 70% and increased follow-ups by 40%
                            with automated CRM workflows.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-[#4361EE]">CRM Integration</span>
                            <a href="#" class="text-sm font-medium hover:text-[#7209B7] transition-colors">View Details
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
                            <div class="text-4xl font-bold mb-2">1,500+</div>
                            <div class="text-xl font-medium">Inquiries Handled</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">AI Chat Assistant Launch</h3>
                        <p class="text-slate-600 mb-4">Handled 1,500+ inquiries in first month, converting 120 leads to
                            site visits with 24/7 AI responses.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-[#4361EE]">AI Chatbot</span>
                            <a href="#" class="text-sm font-medium hover:text-[#7209B7] transition-colors">View Details
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
                            <div class="text-4xl font-bold mb-2">20+</div>
                            <div class="text-xl font-medium">Hours Saved Weekly</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Automation Workflow</h3>
                        <p class="text-slate-600 mb-4">Saved client 20+ hours per week in manual follow-up work with
                            automated lead nurturing sequences.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-[#4361EE]">Workflow Automation</span>
                            <a href="#" class="text-sm font-medium hover:text-[#7209B7] transition-colors">View Details
                                →</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="400">
                <a href="#"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-[#4361EE] to-[#7209B7] text-white font-semibold shadow-lg hover:shadow-xl transition-all neon-glow">
                    <i class="fas fa-chart-bar"></i>
                    View All Case Studies
                </a>
            </div>
        </div>
    </section>

    <!-- 🟧 Section 7: Call to Action -->
    <section id="contact" class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900 to-purple-900 opacity-95"></div>
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Modern technology interface with data visualization" class="w-full h-full object-cover" />
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-8 text-center text-white">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6" data-aos="fade-up">
                Ready to Automate Your <span class="text-gradient">Real Estate Lead Management</span>?
            </h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Let's integrate smart AI systems and CRMs that boost your sales efficiency and help your business scale
                effortlessly.
            </p>

            <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="400">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-slate-700 text-sm font-medium mb-2 text-left">Your Name</label>
                            <input type="text"
                                class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#4361EE] focus:ring-2 focus:ring-[#4361EE]/20 transition-all"
                                placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-slate-700 text-sm font-medium mb-2 text-left">Email Address</label>
                            <input type="email"
                                class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#4361EE] focus:ring-2 focus:ring-[#4361EE]/20 transition-all"
                                placeholder="john@example.com">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-slate-700 text-sm font-medium mb-2 text-left">Phone Number</label>
                            <input type="tel"
                                class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#4361EE] focus:ring-2 focus:ring-[#4361EE]/20 transition-all"
                                placeholder="+1 (555) 000-0000">
                        </div>
                        <div>
                            <label class="block text-slate-700 text-sm font-medium mb-2 text-left">Company</label>
                            <input type="text"
                                class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#4361EE] focus:ring-2 focus:ring-[#4361EE]/20 transition-all"
                                placeholder="Your Real Estate Company">
                        </div>
                    </div>
                    <div>
                        <label class="block text-slate-700 text-sm font-medium mb-2 text-left">What automation solutions
                            interest you?</label>
                        <select
                            class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#4361EE] focus:ring-2 focus:ring-[#4361EE]/20 transition-all">
                            <option>AI Chat Agents & Lead Assistants</option>
                            <option>Lead Nurturing Automations</option>
                            <option>Real Estate CRM Integration</option>
                            <option>WhatsApp & Email Automation</option>
                            <option>AI Analytics & Insights</option>
                            <option>Complete Automation System</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-slate-700 text-sm font-medium mb-2 text-left">Tell us about your
                            current lead management</label>
                        <textarea rows="4"
                            class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-[#4361EE] focus:ring-2 focus:ring-[#4361EE]/20 transition-all"
                            placeholder="Describe your current process and challenges..."></textarea>
                    </div>
                    <button type="submit"
                        class="w-full px-8 py-4 rounded-xl bg-gradient-to-r from-[#4361EE] to-[#7209B7] text-white font-semibold shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-2 neon-glow">
                        <i class="fas fa-robot"></i>
                        Request an Automation Consultation
                    </button>
                    <p class="text-slate-500 text-sm text-center">
                        No commitment required. We'll get back to you within 24 hours.
                    </p>
                </form>
            </div>
        </div>
    </section>
</div>