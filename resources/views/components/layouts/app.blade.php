<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Modern Agency — Tailwind Landing</title>
    <meta name="description" content="Professional modern landing page built with Tailwind CSS" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/mixitup@3/dist/mixitup.min.js"></script>

    <script>
        // Tailwind config tweaks
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#FF4D6D",
              accent: "#6C63FF",
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
            background: linear-gradient(to right, #ff4d6d, #6c63ff);
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
            border: 2px solid rgba(59, 130, 246, 1);
            /* adjust color to your primary */
            color: rgba(59, 130, 246, 1);
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            display: inline-block;
            transition: background-color 180ms ease, transform 180ms ease, box-shadow 180ms ease;
        }

        .btn-secondary:hover {
            background: rgba(59, 130, 246, 0.06);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(59, 130, 246, 0.06);
        }

        .btn-secondary:active {
            transform: translateY(0);
            box-shadow: none;
        }
    </style>
    @livewireStyles
</head>

<body class="antialiased text-slate-700 bg-soft">
    @livewire('layout.nav')
    {{ $slot }}

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
</body>

</html>