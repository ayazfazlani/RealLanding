<div>

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

        .bg-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .contact-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-left: 4px solid transparent;
        }

        .contact-card:hover {
            border-left-color: #6C63FF;
            transform: translateX(8px);
        }

        .form-input:focus {
            border-color: #6C63FF;
            box-shadow: 0 0 0 3px rgba(108, 99, 255, 0.1);
        }

        .map-container {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
    </style>
    <!-- 🟦 Hero Section -->
    <section class="relative py-20 lg:py-28 bg-gradient-to-br from-slate-900 to-slate-800 overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-500/20"></div>
            <div
                class="absolute top-0 left-0 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse">
            </div>
            <div class="absolute bottom-0 right-0 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse"
                style="animation-delay: 2s;"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center text-white">
            <div
                class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/20">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">We're Here to Help Your Real Estate Business Grow</span>
            </div>

            <h1 class="text-4xl lg:text-6xl font-extrabold mb-6 leading-tight" data-aos="fade-up">
                Let's Start Your <span class="text-gradient">Real Estate Success Story</span>
            </h1>
            <p class="text-xl mb-10 leading-relaxed text-slate-300 max-w-3xl mx-auto" data-aos="fade-up"
                data-aos-delay="200">
                Ready to transform your property marketing? Get in touch with our real estate digital experts. We'll
                help you generate more leads, build your brand, and close more deals.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                data-aos-delay="400">
                <a href="#contact-form"
                    class="px-8 py-4 rounded-xl bg-gradient-to-r from-[#FF4D6D] to-[#6C63FF] text-white font-semibold shadow-lg glow hover:shadow-xl transition-all flex items-center gap-2">
                    <i class="fas fa-paper-plane"></i>
                    Send Us a Message
                </a>
                <a href="tel:+15551234567"
                    class="px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-medium hover:bg-white/20 transition-all flex items-center gap-2">
                    <i class="fas fa-phone"></i>
                    Call Now: +1 (555) 123-4567
                </a>
            </div>
        </div>
    </section>

    <!-- 🟩 Contact Methods -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    Multiple Ways to <span class="text-gradient">Connect</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Choose the communication method that works best for you. We're here to help your real estate
                    business succeed.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Contact Method 1 -->
                <div class="contact-card bg-white p-8 rounded-2xl shadow-lg border border-slate-100" data-aos="fade-up"
                    data-aos-delay="100">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-500 to-cyan-500 text-white flex items-center justify-center mb-6 text-2xl shadow-lg">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Call Us</h3>
                    <p class="text-slate-600 mb-6">
                        Speak directly with our real estate marketing specialists. We'll understand your needs and
                        provide immediate guidance.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-phone text-[#6C63FF]"></i>
                            <span class="font-medium">+1 (555) 123-4567</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-clock text-[#6C63FF]"></i>
                            <span class="font-medium">Mon-Fri: 9AM-6PM EST</span>
                        </div>
                    </div>
                    <a href="tel:+15551234567"
                        class="mt-6 inline-flex items-center gap-2 text-[#6C63FF] font-medium hover:text-[#FF4D6D] transition-colors">
                        Call Now <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>

                <!-- Contact Method 2 -->
                <div class="contact-card bg-white p-8 rounded-2xl shadow-lg border border-slate-100" data-aos="fade-up"
                    data-aos-delay="200">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 text-white flex items-center justify-center mb-6 text-2xl shadow-lg">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Email Us</h3>
                    <p class="text-slate-600 mb-6">
                        Send us your project details and requirements. We'll respond within 24 hours with a customized
                        proposal.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-envelope text-[#6C63FF]"></i>
                            <span class="font-medium">hello@modernagency.com</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-reply text-[#6C63FF]"></i>
                            <span class="font-medium">Response within 24 hours</span>
                        </div>
                    </div>
                    <a href="mailto:hello@modernagency.com"
                        class="mt-6 inline-flex items-center gap-2 text-[#6C63FF] font-medium hover:text-[#FF4D6D] transition-colors">
                        Send Email <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>

                <!-- Contact Method 3 -->
                <div class="contact-card bg-white p-8 rounded-2xl shadow-lg border border-slate-100" data-aos="fade-up"
                    data-aos-delay="300">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-emerald-500 text-white flex items-center justify-center mb-6 text-2xl shadow-lg">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Meet Us</h3>
                    <p class="text-slate-600 mb-6">
                        Schedule a free consultation call. We'll discuss your real estate marketing goals and create a
                        strategy together.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-video text-[#6C63FF]"></i>
                            <span class="font-medium">Video Call Available</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-clock text-[#6C63FF]"></i>
                            <span class="font-medium">30-60 Minute Sessions</span>
                        </div>
                    </div>
                    <a href="#contact-form"
                        class="mt-6 inline-flex items-center gap-2 text-[#6C63FF] font-medium hover:text-[#FF4D6D] transition-colors">
                        Book Meeting <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟦 Contact Form & Info -->
    <section id="contact-form" class="py-20 bg-gradient-to-br from-slate-50 to-blue-50 bg-pattern">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-2xl p-8" data-aos="fade-right">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-2">Send Us a Message</h2>
                    <p class="text-slate-600 mb-8">
                        Fill out the form below and we'll get back to you within 24 hours with a customized real estate
                        marketing strategy.
                    </p>

                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-slate-700 text-sm font-medium mb-2">First Name *</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg border border-slate-200 form-input focus:outline-none transition-all"
                                    placeholder="John" required>
                            </div>
                            <div>
                                <label class="block text-slate-700 text-sm font-medium mb-2">Last Name *</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg border border-slate-200 form-input focus:outline-none transition-all"
                                    placeholder="Doe" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-slate-700 text-sm font-medium mb-2">Email Address *</label>
                                <input type="email"
                                    class="w-full px-4 py-3 rounded-lg border border-slate-200 form-input focus:outline-none transition-all"
                                    placeholder="john@example.com" required>
                            </div>
                            <div>
                                <label class="block text-slate-700 text-sm font-medium mb-2">Phone Number</label>
                                <input type="tel"
                                    class="w-full px-4 py-3 rounded-lg border border-slate-200 form-input focus:outline-none transition-all"
                                    placeholder="+1 (555) 000-0000">
                            </div>
                        </div>

                        <div>
                            <label class="block text-slate-700 text-sm font-medium mb-2">Company</label>
                            <input type="text"
                                class="w-full px-4 py-3 rounded-lg border border-slate-200 form-input focus:outline-none transition-all"
                                placeholder="Your Real Estate Company">
                        </div>

                        <div>
                            <label class="block text-slate-700 text-sm font-medium mb-2">What services are you
                                interested in? *</label>
                            <select
                                class="w-full px-4 py-3 rounded-lg border border-slate-200 form-input focus:outline-none transition-all"
                                required>
                                <option value="">Select a service</option>
                                <option>Branding Strategy</option>
                                <option>Website Development</option>
                                <option>SEO Services</option>
                                <option>Social Media Marketing</option>
                                <option>Paid Advertising</option>
                                <option>Creative & Content</option>
                                <option>Automation & AI</option>
                                <option>Lead Generation</option>
                                <option>Multiple Services</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-slate-700 text-sm font-medium mb-2">Project Budget</label>
                            <select
                                class="w-full px-4 py-3 rounded-lg border border-slate-200 form-input focus:outline-none transition-all">
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
                            <label class="block text-slate-700 text-sm font-medium mb-2">Tell us about your project
                                *</label>
                            <textarea rows="5"
                                class="w-full px-4 py-3 rounded-lg border border-slate-200 form-input focus:outline-none transition-all"
                                placeholder="Describe your real estate project, target audience, and marketing goals..."
                                required></textarea>
                        </div>

                        <button type="submit"
                            class="w-full px-8 py-4 rounded-xl bg-gradient-to-r from-[#FF4D6D] to-[#6C63FF] text-white font-semibold shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-2">
                            <i class="fas fa-paper-plane"></i>
                            Send Message
                        </button>

                        <p class="text-slate-500 text-sm text-center">
                            * Required fields. We respect your privacy and will never share your information.
                        </p>
                    </form>
                </div>

                <!-- Contact Info & Map -->
                <div data-aos="fade-left">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-8">Visit Our Office</h2>

                    <!-- Map Placeholder -->
                    <div class="map-container mb-8">
                        <div
                            class="h-80 bg-gradient-to-br from-slate-200 to-slate-300 flex items-center justify-center text-slate-600">
                            <div class="text-center">
                                <i class="fas fa-map-marker-alt text-4xl mb-4 text-[#6C63FF]"></i>
                                <p class="font-medium">Interactive Map</p>
                                <p class="text-sm">123 Business Avenue, New York</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Details -->
                    <div class="space-y-6">
                        <div class="flex items-start gap-4 p-6 bg-white rounded-2xl shadow-lg border border-slate-100">
                            <div
                                class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Our Office</h3>
                                <p class="text-slate-600">
                                    123 Business Avenue, Suite 100<br>
                                    New York, NY 10001<br>
                                    United States
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-6 bg-white rounded-2xl shadow-lg border border-slate-100">
                            <div
                                class="w-12 h-12 rounded-xl bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Business Hours</h3>
                                <p class="text-slate-600">
                                    <strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM EST<br>
                                    <strong>Saturday:</strong> 10:00 AM - 2:00 PM EST<br>
                                    <strong>Sunday:</strong> Closed
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-6 bg-white rounded-2xl shadow-lg border border-slate-100">
                            <div
                                class="w-12 h-12 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Quick Support</h3>
                                <p class="text-slate-600 mb-3">
                                    Need immediate assistance? Our support team is here to help.
                                </p>
                                <div class="flex gap-4">
                                    <a href="tel:+15551234567"
                                        class="inline-flex items-center gap-2 text-[#6C63FF] font-medium hover:text-[#FF4D6D] transition-colors">
                                        <i class="fas fa-phone"></i>
                                        Call Support
                                    </a>
                                    <a href="https://wa.me/15551234567"
                                        class="inline-flex items-center gap-2 text-[#6C63FF] font-medium hover:text-[#FF4D6D] transition-colors">
                                        <i class="fab fa-whatsapp"></i>
                                        WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟩 FAQ Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4" data-aos="fade-up">
                    Frequently Asked <span class="text-gradient">Questions</span>
                </h2>
                <p class="text-xl text-slate-600" data-aos="fade-up" data-aos-delay="200">
                    Quick answers to common questions about working with us
                </p>
            </div>

            <div class="space-y-6">
                <!-- FAQ 1 -->
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden" data-aos="fade-up"
                    data-aos-delay="100">
                    <button
                        class="faq-question w-full text-left p-6 font-semibold text-lg flex justify-between items-center hover:bg-slate-100 transition-colors">
                        <span>How quickly can you start working on my real estate project?</span>
                        <i class="fas fa-chevron-down text-[#6C63FF] transition-transform"></i>
                    </button>
                    <div class="faq-answer p-6 border-t border-slate-200 hidden">
                        <p class="text-slate-600">
                            We can typically start within 3-5 business days after our initial consultation and
                            agreement. For urgent projects, we offer expedited onboarding that can get started within 48
                            hours.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden" data-aos="fade-up"
                    data-aos-delay="200">
                    <button
                        class="faq-question w-full text-left p-6 font-semibold text-lg flex justify-between items-center hover:bg-slate-100 transition-colors">
                        <span>Do you work with real estate agents or developers only?</span>
                        <i class="fas fa-chevron-down text-[#6C63FF] transition-transform"></i>
                    </button>
                    <div class="faq-answer p-6 border-t border-slate-200 hidden">
                        <p class="text-slate-600">
                            We work with all types of real estate professionals including individual agents, brokerages,
                            property developers, investors, and property management companies. Each receives a
                            customized strategy based on their specific goals.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden" data-aos="fade-up"
                    data-aos-delay="300">
                    <button
                        class="faq-question w-full text-left p-6 font-semibold text-lg flex justify-between items-center hover:bg-slate-100 transition-colors">
                        <span>What's your typical project timeline?</span>
                        <i class="fas fa-chevron-down text-[#6C63FF] transition-transform"></i>
                    </button>
                    <div class="faq-answer p-6 border-t border-slate-200 hidden">
                        <p class="text-slate-600">
                            Timelines vary based on project scope. Branding projects typically take 4-6 weeks, website
                            development 6-8 weeks, and ongoing marketing campaigns show initial results within 30 days
                            with optimization continuing over 3-6 months for best results.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden" data-aos="fade-up"
                    data-aos-delay="400">
                    <button
                        class="faq-question w-full text-left p-6 font-semibold text-lg flex justify-between items-center hover:bg-slate-100 transition-colors">
                        <span>Do you offer customized packages?</span>
                        <i class="fas fa-chevron-down text-[#6C63FF] transition-transform"></i>
                    </button>
                    <div class="faq-answer p-6 border-t border-slate-200 hidden">
                        <p class="text-slate-600">
                            Absolutely! We understand that every real estate business has unique needs. We create fully
                            customized packages that combine the specific services you need at the right budget for your
                            business.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12" data-aos="fade-up">
                <p class="text-slate-600 mb-6">
                    Still have questions? We're happy to help!
                </p>
                <a href="mailto:hello@modernagency.com"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-[#FF4D6D] to-[#6C63FF] text-white font-semibold shadow-lg hover:shadow-xl transition-all">
                    <i class="fas fa-envelope"></i>
                    Email Your Questions
                </a>
            </div>
        </div>
    </section>

    <!-- 🟦 Final CTA -->
    <section class="py-20 bg-gradient-to-br from-slate-900 to-slate-800 text-white">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6" data-aos="fade-up">
                Ready to Transform Your <span class="text-gradient">Real Estate Marketing</span>?
            </h2>
            <p class="text-xl mb-10 leading-relaxed text-slate-300 max-w-2xl mx-auto" data-aos="fade-up"
                data-aos-delay="200">
                Don't wait to start generating more leads and closing more deals. Contact us today and let's build your
                real estate success story together.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                data-aos-delay="400">
                <a href="#contact-form"
                    class="px-8 py-4 rounded-xl bg-gradient-to-r from-[#FF4D6D] to-[#6C63FF] text-white font-semibold shadow-lg glow hover:shadow-xl transition-all flex items-center gap-2">
                    <i class="fas fa-paper-plane"></i>
                    Start Your Project
                </a>
                <a href="tel:+15551234567"
                    class="px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-medium hover:bg-white/20 transition-all flex items-center gap-2">
                    <i class="fas fa-phone"></i>
                    Call Us Now
                </a>
            </div>
        </div>
    </section>


    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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

</div>