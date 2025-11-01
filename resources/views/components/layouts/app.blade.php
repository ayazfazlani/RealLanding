<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Modern Agency — Tailwind Landing</title>
  <meta name="description" content="Professional modern landing page built with Tailwind CSS" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/index.css" />
  {{--
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" /> --}}
  <script src="https://cdn.jsdelivr.net/npm/mixitup@3/dist/mixitup.min.js"></script>
  <!-- JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  @livewireStyles

  <script>
    // Tailwind config tweaks

tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary: "#01BF60",
        accent: "#01BF60",
        soft: "#F6F7FB",
      },
      boxShadow: {
        "soft-lg": "0 10px 30px rgba(16,24,40,0.08)",
      },
      keyframes: {
        float: {
          "0%,100%": { transform: "translateY(0)" },
          "50%": { transform: "translateY(-6px)" },
        },
      },
      animation: {
        float: "float 4s ease-in-out infinite",
      },
    },
  },
};
  </script>

  <style>
    /* small custom styles */
    .glass {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(6px);
    }

    .card-border {
      box-shadow: 0 6px 18px rgba(17, 24, 39, 0.06);
      border-radius: 0.6rem;
    }

    .accent-line {
      background: linear-gradient(90deg, var(--tw-gradient-stops));
    }

    /* testimonial dots */
    .dot {
      width: 10px;
      height: 10px;
      border-radius: 9999px;
      display: inline-block;
    }

    .video-bg video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .active-filter {
      background: linear-gradient(to right, #01BF60, #01BF60);
      color: white;
    }

    /* Optional: Improve button spacing and alignment */
    .filter-btn {
      min-width: 60px;
      /* Ensure buttons are wide enough */
      text-align: center;
    }

    /* Outline / secondary button used site-wide */
    .btn-secondary {
      background: transparent;
      border: 2px solid #01BF60;
      color: #01BF60;
      padding: 0.75rem 1.5rem;
      border-radius: 0.5rem;
      font-weight: 500;
      display: inline-block;
      transition: background-color 180ms ease, transform 180ms ease, box-shadow 180ms ease;
    }

    .btn-secondary:hover {
      background: rgba(1, 191, 96, 0.06);
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(1, 191, 96, 0.06);
    }

    .btn-secondary:active {
      transform: translateY(0);
      box-shadow: none;
    }
  </style>

</head>

<body class="antialiased text-slate-700 bg-soft">
  <!-- NAV + HERO: (Header + Nav + Hero in top-of-file) -->
  {{-- <header class="sticky top-0 z-50 bg-white/80 backdrop-blur-sm border-b border-slate-100">
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
          <a href="#services" class="text-sm hover:text-slate-900">Services</a>
          <a href="#unique" class="text-sm hover:text-slate-900">Why Us</a>
          <a href="#portfolio" class="text-sm hover:text-slate-900">Portfolio</a>
          <a href="#testimonials" class="text-sm hover:text-slate-900">Testimonials</a>
          <a href="#pricing" class="text-sm hover:text-slate-900">Pricing</a>
          <a href="#contact" class="text-sm hover:text-slate-900">Contact</a>
          <a href="#"
            class="ml-4 inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-gradient-to-r  from-primary to-accent text-white text-sm shadow-sm">Get
            Started</a>
        </nav>

        <!-- Mobile toggle -->
        <div class="md:hidden">
          <button id="mobileBtn" class="p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-primary/40">
            <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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
          class="mt-3 inline-block w-full text-center px-4 py-2 rounded-lg bg-gradient-to-r  from-primary to-accent text-white">Get
          Started</a>
      </div>
    </div>
  </header> --}}

  @livewire('layout.nav')

  {{ $slot }}

  <!-- Contact / Footer -->
  <footer id="contact" class="bg-white p-4 lg:p-8 border-t border-slate-100 align-between ">
    <div class="max-w-7xl mx-auto  lg:px-4 py-8 grid grid-cols-1 md:grid-cols-4 gap-6">
      <div>
        <div class="flex items-center gap-3">
          <img class="h-14" src="{{ asset('assets/logo/reallanding-marketing-agency.png') }}" alt="">
        </div>
        <p class="mt-4 text-sm text-slate-500">
          We build modern, high-performance websites and digital strategies
          powered by data and creativity.
        </p>
        {{-- social links with icons --}}
        <div class="mt-6 flex items-center gap-3 text-slate-500">
          <a href="https://www.facebook.com/RealLanding1
" class="text-slate-400 hover:text-slate-600">
            <i class="fab fa-facebook-f"></i>
            <span class="sr-only hover:scale-105">Facebook</span>
          </a>
          <a href=" https://www.linkedin.com/company/real-landing/posts/ "
            class="text-slate-400 hover:text-slate-600"><i class="fab fa-linkedin"></i> <span
              class="sr-only">LinkedIn</span></a>
          <a href="https://www.instagram.com/real.landing/
" class="text-slate-400 hover:text-slate-600"><i class="fab fa-instagram"></i> <span
              class="sr-only hover:scale-105">Instagram</span></a>
        </div>
      </div>
      <div class="flex flex-col">
        <h4 class="font-semibold">Services</h4>
        <ul class="mt-4 space-y-3 text-sm text-slate-500">
          <li class="hover:scale-1.5 transition-transform duration-150"><a href="{{ route('website.development') }}">Web
              Development</a></li>
          <li class="hover:scale-104 transition-transform duration-150"><a href="{{ route('social.media') }}">Social
              Media Marketing</a></li>
          <li class="hover:scale-104 transition-transform duration-150"><a href="{{ route('seo') }}">SEO Services</a>
          </li>
          <li class="hover:scale-104 transition-transform duration-150"><a href="{{ route('lead.generation') }}">Lead
              Generation</a></li>
          <li class="hover:scale-104 transition-transform duration-150"><a href="{{ route('paid.advertising') }}">Paid
              Ads</a></li>
        </ul>
      </div>

      <div>
        <h4 class="font-semibold">Contact</h4>
        <ul class="mt-4 space-y-3 text-sm text-slate-500">
          <li>123 Business St, Lahore, Pakistan</li>
          <li>+92 300 0000000</li>
          <li>hello@modernagency.com</li>
        </ul>
      </div>

      <div>
        <h4 class="font-semibold">Newsletter</h4>
        <p class="text-sm text-slate-500 mt-2">
          Get monthly insights and growth tips.
        </p>
        <form class="mt-4 flex flex-col">
          <div>
            <input class="flex-1  w-full rounded-lg border border-slate-200 p-3 my-3 text-sm"
              placeholder="Your email" />
            <button class="px-4 py-2 rounded-lg bg-accent text-white hover:scale-105 transition-transform duration-150">
              Subscribe
            </button>
          </div>

        </form>


      </div>
    </div>

    <div class="border-t border-slate-100">
      <div class="max-w-7xl mx-auto px-6 lg:px-8 py-6 text-sm text-slate-400 flex flex-col md:flex-row justify-between">
        <div>
          © <span id="year"></span> ModernAgency. All rights reserved.
        </div>
        <div class="mt-3 md:mt-0">
          Made with ♥ — <span class="font-medium">RealLanding</span>
        </div>
      </div>
    </div>
  </footer>

  @livewireScripts
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Scripts: mobile menu + carousel + reveal animations -->
  <script>
    document.getElementById("year").innerText = new Date().getFullYear();

      // Mobile menu toggle
      const mobileBtn = document.getElementById("mobileBtn");
      const mobileMenu = document.getElementById("mobileMenu");
      const menuIcon = document.getElementById("menuIcon");
      const closeIcon = document.getElementById("closeIcon");
      let open = false;
      mobileBtn.addEventListener("click", () => {
        open = !open;
        if (open) {
          mobileMenu.classList.remove(
            "-translate-y-1/2",
            "opacity-0",
            "pointer-events-none"
          );
          mobileMenu.classList.add("translate-y-0", "opacity-100");
          menuIcon.classList.add("hidden");
          closeIcon.classList.remove("hidden");
        } else {
          mobileMenu.classList.add(
            "-translate-y-1/2",
            "opacity-0",
            "pointer-events-none"
          );
          mobileMenu.classList.remove("translate-y-0", "opacity-100");
          menuIcon.classList.remove("hidden");
          closeIcon.classList.add("hidden");
        }
      });

      // Simple testimonial carousel
      const slides = document.getElementById("slides");
      const dots = document.querySelectorAll(".dot");
      let idx = 0;
      function goTo(i) {
        idx = i % 3;
        slides.style.transform = `translateX(-${(idx * 100) / 3}%)`;
        dots.forEach(
          (d, di) =>
            (d.style.backgroundColor = di === idx ? "#FF4D6D" : "#CBD5E1")
        );
      }
      dots.forEach((d, i) => d.addEventListener("click", () => goTo(i)));
      // init dots
      dots.forEach(
        (d, di) => (d.style.backgroundColor = di === 0 ? "#FF4D6D" : "#CBD5E1")
      );
      // auto rotate
      setInterval(() => {
        goTo((idx + 1) % 3);
      }, 5000);

      // Reveal on scroll
      const io = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add("animate-fadeIn");
              entry.target.style.opacity = 1;
              io.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.12 }
      );
      document
        .querySelectorAll("section, article, .card-border")
        .forEach((el) => {
          el.style.opacity = 0;
          el.classList.add("transition", "duration-700");
          io.observe(el);
        });

      AOS.init({ duration: 1000, once: true });

      // MixItUp Init
      var mixer = mixitup("#mix-container", {
        animation: {
          enable: false, // Disable animation when filtering
        },
      });

      // Filter button active state
      document.querySelectorAll(".filter-btn").forEach((btn) => {
        btn.addEventListener("click", function () {
          // Remove active class from all buttons
          document.querySelectorAll(".filter-btn").forEach((b) => {
            b.classList.remove("active-filter");
            if (!b.classList.contains("active-filter")) {
              b.classList.add("bg-gray-200");
            }
          });

          // Add active class to clicked button
          this.classList.add("active-filter");
          this.classList.remove("bg-gray-200");
        });
      });

      // FAQ Toggle
      document.querySelectorAll(".faq-btn").forEach((btn) => {
        btn.addEventListener("click", () => {
          const content = btn.nextElementSibling;
          content.classList.toggle("hidden");
          btn.querySelector("span").textContent = content.classList.contains(
            "hidden"
          )
            ? "+"
            : "-";
        });
      });

      // tiny css-in-js animation class for fadeIn
      const style = document.createElement("style");
      style.innerHTML = `@keyframes fadeIn{from{opacity:0;transform:translateY(8px)}to{opacity:1;transform:none}} .animate-fadeIn{animation:fadeIn .7s ease forwards}`;
      document.head.appendChild(style);
  </script>

  <script>
    // Initialize AOS
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Initialize MixItUp with proper configuration
        var apimsMixer = mixitup('#apims-portfolio-container', {
            selectors: {
                target: '.apims-portfolio-item'
            },
            animation: {
                duration: 400,
                effects: 'fade scale(0.9)',
                easing: 'cubic-bezier(0.645, 0.045, 0.355, 1)'
            },
            load: {
                filter: 'all'
            }
        });

        // Update active filter button styling
        document.querySelectorAll('.apims-filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.apims-filter-btn').forEach(b => {
                    b.classList.remove('apims-active-filter', 'bg-primary', 'text-white');
                    b.classList.add('bg-gray-200');
                });
                this.classList.remove('bg-gray-200');
                this.classList.add('apims-active-filter', 'bg-primary', 'text-white');
            });
        });

        // Testimonial Carousel - Fixed Version
        let apimsCurrentSlide = 0;
        const apimsSlides = document.getElementById('apims-testimonial-slides');
        const apimsDots = document.querySelectorAll('.apims-testimonial-dot');
        const apimsTotalSlides = document.querySelectorAll('#apims-testimonial-slides > div').length;
        
        // Set initial slide width
        if (apimsSlides) {
            apimsSlides.style.width = `${apimsTotalSlides * 100}%`;
            document.querySelectorAll('#apims-testimonial-slides > div').forEach(slide => {
                slide.style.width = `${100 / apimsTotalSlides}%`;
            });
        }

        function apimsUpdateCarousel() {
            if (!apimsSlides) return;
            
            const translateX = -apimsCurrentSlide * (100 / apimsTotalSlides);
            apimsSlides.style.transform = `translateX(${translateX}%)`;
            
            // Update dots
            apimsDots.forEach((dot, index) => {
                if (index === apimsCurrentSlide) {
                    dot.classList.add('apims-active-dot', 'bg-primary');
                    dot.classList.remove('bg-slate-300');
                } else {
                    dot.classList.remove('apims-active-dot', 'bg-primary');
                    dot.classList.add('bg-slate-300');
                }
            });
        }

        // Dot click events
        apimsDots.forEach(dot => {
            dot.addEventListener('click', function() {
                apimsCurrentSlide = parseInt(this.getAttribute('data-index'));
                apimsUpdateCarousel();
            });
        });

        // Navigation arrows
        document.getElementById('apims-prev-btn')?.addEventListener('click', function() {
            apimsCurrentSlide = (apimsCurrentSlide - 1 + apimsTotalSlides) % apimsTotalSlides;
            apimsUpdateCarousel();
        });

        document.getElementById('apims-next-btn')?.addEventListener('click', function() {
            apimsCurrentSlide = (apimsCurrentSlide + 1) % apimsTotalSlides;
            apimsUpdateCarousel();
        });

        // Auto slide
        let apimsAutoSlideInterval = setInterval(() => {
            apimsCurrentSlide = (apimsCurrentSlide + 1) % apimsTotalSlides;
            apimsUpdateCarousel();
        }, 5000);

        // Pause auto-slide on hover
        const apimsCarousel = document.getElementById('apims-testimonial-carousel');
        if (apimsCarousel) {
            apimsCarousel.addEventListener('mouseenter', () => clearInterval(apimsAutoSlideInterval));
            apimsCarousel.addEventListener('mouseleave', () => {
                apimsAutoSlideInterval = setInterval(() => {
                    apimsCurrentSlide = (apimsCurrentSlide + 1) % apimsTotalSlides;
                    apimsUpdateCarousel();
                }, 5000);
            });
        }

        // Initialize carousel
        apimsUpdateCarousel();

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

        // Count Up Animation - Fixed Version
        function apimsStartCountUp() {
            const counters = document.querySelectorAll('.apims-counter');
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const suffix = counter.getAttribute('data-suffix');
                let count = 0;
                const duration = 2000;
                const increment = target / (duration / 16);
                
                // Reset counter
                counter.textContent = '0' + suffix;

                const updateCount = () => {
                    count += increment;
                    
                    if (count < target) {
                        counter.textContent = Math.ceil(count) + suffix;
                        requestAnimationFrame(updateCount);
                    } else {
                        counter.textContent = target + suffix;
                    }
                };

                updateCount();
            });
        }

        // Intersection Observer for count-up animation
        const apimsStatsSection = document.querySelector('.bg-soft');
        if (apimsStatsSection) {
            const apimsObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        apimsStartCountUp();
                        apimsObserver.unobserve(entry.target);
                    }
                });
            }, { 
                threshold: 0.5,
                rootMargin: '0px 0px -100px 0px'
            });

            apimsObserver.observe(apimsStatsSection);
        }
    });
  </script>
</body>

</html>