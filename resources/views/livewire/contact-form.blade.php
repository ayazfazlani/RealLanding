<div>


    <!-- Contact Form -->
    <div class="bg-gray-800 rounded-2xl shadow-2xl p-8" data-aos="fade-right">

        {{-- <h2 class="text-3xl lg:text-4xl font-bold mb-2">Send Us a Message</h2>
        <p class="text-gray-300 mb-8">
            Fill out the form below and we'll get back to you within 24 hours.
        </p> --}}

        @if (session('success'))
        <div class="p-4 mb-4 bg-green-600 text-white rounded-xl">
            {{ session('success') }}
        </div>
        @endif

        <form wire:submit.prevent="submit" class="space-y-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-300 text-sm font-medium mb-2">First Name *</label>
                    <input type="text" wire:model="first_name"
                        class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white focus:border-green-500"
                        placeholder="John">
                    @error('first_name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-gray-300 text-sm font-medium mb-2">Last Name *</label>
                    <input type="text" wire:model="last_name"
                        class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white focus:border-green-500"
                        placeholder="Doe">
                    @error('last_name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-300 text-sm font-medium mb-2">Email Address *</label>
                    <input type="email" wire:model="email"
                        class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white focus:border-green-500"
                        placeholder="john@example.com">
                    @error('email') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-gray-300 text-sm font-medium mb-2">Phone Number</label>
                    <input type="tel" wire:model="phone"
                        class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white focus:border-green-500"
                        placeholder="+1 (555) 000-0000">
                </div>
            </div>

            <div>
                <label class="block text-gray-300 text-sm font-medium mb-2">Company</label>
                <input type="text" wire:model="company"
                    class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white focus:border-green-500"
                    placeholder="Your Real Estate Company">
            </div>

            <div>
                <label class="block text-gray-300 text-sm font-medium mb-2">What services are you interested
                    in? *</label>
                <select wire:model="service"
                    class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white focus:border-green-500">
                    <option value="">Select a service</option>
                    <option>Real Estate Lead Generation</option>
                    <option>Social Media Marketing & Advertising</option>
                    <option>Branding & Creative Design</option>
                    <option>Website & Landing Page Development</option>
                    <option>SEO & Google Ads Campaigns</option>
                    <option>Video Production & Drone Photography</option>
                    <option>Multiple Services</option>
                </select>
                @error('service') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-300 text-sm font-medium mb-2">Project Budget</label>
                <select wire:model="budget"
                    class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white focus:border-green-500">
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
                <textarea rows="5" wire:model="message"
                    class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-700 text-white focus:border-green-500"
                    placeholder="Describe your project..."></textarea>
                @error('message') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit"
                class="w-full px-8 py-4 rounded-xl bg-gradient-to-r from-green-600 to-green-800 text-white font-semibold shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                <i class="fas fa-paper-plane"></i>
                Send Message
            </button>

            <p class="text-gray-400 text-sm text-center">
                * Required fields. We respect your privacy.
            </p>
        </form>
    </div>


</div>