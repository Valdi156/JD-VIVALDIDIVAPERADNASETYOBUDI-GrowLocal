<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrowLocal</title>
    <link rel="shortcut icon" href="{{ asset('asset/Logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body>
    <nav x-data="{ open: false, dropdown: false }"
        class="flex items-center justify-between px-6 md:px-20 h-20 sticky top-0 z-50 bg-white/70 backdrop-blur-md border-b border-gray-100">

        <div class="text-xl md:text-2xl font-bold text-black flex items-center gap-3">
            <img src="{{ asset('asset/Logo.png') }}" alt="" class="w-8 h-8 md:w-10 md:h-10">
            GrowLocal
        </div>

        <div class="hidden md:flex items-center gap-6 lg:gap-8">
            <div class="group relative">
                <a href="/" class="flex items-center text-black hover:text-blue-600">
                    Page All <i class='bx bx-chevron-down ml-1 text-xl'></i>
                </a>
                <div
                    class="absolute left-0 mt-2 hidden w-56 rounded-md bg-white shadow-lg ring-1 ring-black/5 group-hover:block">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">coming soon</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">coming soon</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">coming soon</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">coming soon</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">coming soon</a>
                </div>
            </div>
            <a href="{{ url('/about') }}" class="text-black hover:text-blue-600">About</a>
            <a href="{{ url('/product') }}" class="text-black hover:text-blue-600">Product</a>
            <a href="{{ url('/contact') }}" class="text-black hover:text-blue-600">Contact</a>
        </div>

        <div class="hidden md:flex gap-3">
            <button class="border border-blue-600 text-blue-600 px-4 md:px-6 py-2 text-sm md:text-base rounded-lg">
                <a href="{{ url('/admin') }}">Login</a>
            </button>
            <button class="bg-blue-600 text-white px-4 md:px-6 py-2 rounded-xl">
                <a href="{{ url('/admin/register') }}">Register</a>
            </button>
        </div>
        <button @click="open = !open; dropdown = false" class="md:hidden text-3xl" aria-label="Toggle menu">
            <i :class="open ? 'bx bx-x' : 'bx bx-menu'"></i>
        </button>

        <div x-cloak x-show="open" x-transition.origin.top
            class="absolute top-20 left-0 w-full bg-white shadow-md md:hidden">
            <div class="flex flex-col space-y-4 px-6 py-5">
                <div class="group" x-data="{ show: false }">
                    <button @click="show = !show" class="flex items-center justify-between w-full text-left">
                        <span>Page All</span>
                        <i class='bx bx-chevron-down text-xl' :class="show ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="show" x-transition class="mt-3 pl-3 space-y-2 text-sm text-gray-700">
                        <a href="#" class="block hover:text-blue-600">coming soon</a>
                        <a href="#" class="block hover:text-blue-600">coming soon</a>
                        <a href="#" class="block hover:text-blue-600">coming soon</a>
                        <a href="#" class="block hover:text-blue-600">coming soon</a>
                        <a href="#" class="block hover:text-blue-600">coming soon</a>
                    </div>
                </div>

                <a href="/about" class="hover:text-blue-600">About</a>
                <a href="/product" class="hover:text-blue-600">Product</a>
                <a href="/contact" class="hover:text-blue-600">Contact</a>
                <div class="pt-2 flex gap-3">
                    <button class="flex-1 text-blue-600 px-4 py-2 rounded-lg"><a
                            href="{{ url('/admin') }}">Login</a></button>
                    <button class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg"><a
                            href="{{ url('/admin/register') }}">Register</a></button>
                </div>
            </div>
        </div>
    </nav>

    <div class="px-6 md:px-20 py-20 text-center md:text-left animate-slideUp">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl text-gray-600 text-center font-medium font-space">Contact us and start your
                business journey with GrowLocal.</h2>
            <h1 class="text-4xl md:text-5xl font-bold mt-4 leading-tight text-center font-space">
                Support your business with affordable prices.
            </h1>
            <p class="text-gray-500 mt-4 text-lg text-center font-space font-medium">
                We provide the tools, guidance, and support you need to grow your business. With innovative digital
                solutions, reliable support, and opportunities to expand your market, GrowLocal is here to help MSMEs
                grow sustainably and achieve long-term success.
            </p>
            <div class="mt-6 flex justify-center gap-4">
                <button
                    class="bg-blue-600 text-white px-6 py-3 flex rounded-lg transition-all duration-300 hover:bg-blue-700 hover:scale-105 hover:shadow-lg hover:shadow-blue-400/50">
                    See More
                    <i class='bx bx-right-arrow-alt text-2xl pt-[1px]'></i>
                </button>
                <button
                    class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg transition-all duration-300 hover:bg-blue-600 hover:text-white hover:scale-105 hover:shadow-lg hover:shadow-blue-400/50">
                    Get Started
                </button>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row animate-slideUp">
        <div class="w-full md:w-1/2 px-6 md:px-20 mt-16">
            <div class="max-w-3xl">
                <p class="text-base md:text-lg font-medium text-blue-600 font-space">LEARN MORE</p>
                <h1 class="text-3xl md:text-5xl font-bold mt-1 font-space">
                    Contact us and start your business's Digital Journey
                </h1>
                <p class="text-base md:text-2xl text-gray-400 pt-4 font-space">
                    Find quick answers about our products, features, and how to use our platform. All guides are
                    available to help your business grow.
                </p>
                <div class="mt-6">
                    <a href="#"
                        class="bg-blue-600 px-6 py-3 text-white rounded-3xl block w-fit hover:bg-blue-700 transition-all duration-300 font-space">
                        Get Started Now
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 px-6 md:px-20 py-12 md:py-20">
            <h2 class="text-2xl md:text-3xl font-bold mb-4 font-space">Help Center</h2>
            <p class="text-gray-500 mb-6 font-space font-medium">
                Find quick answers about our products, features, and how to use our platform.
            </p>
            <div class="max-w-2xl space-y-4 text-left">
                <details class="border border-gray-300 rounded-lg p-4 cursor-pointer">
                    <summary class="font-medium font-space">Can this platform help increase my sales?</summary>
                    <p class="mt-2 text-gray-500">
                        Yes, GrowLocal is specifically designed for MSMEs. With online store, product management,
                        payment, and promotion features, your sales opportunities can grow faster.
                    </p>
                </details>
                <details class="border border-gray-300 rounded-lg p-4 cursor-pointer">
                    <summary class="font-medium font-space">How do I contact the GrowLocal team?</summary>
                    <p class="mt-2 text-gray-500">
                        You can fill out the contact form on this page, send an email to hello@growlocal.id, or chat
                        directly via our WhatsApp business account.
                    </p>
                </details>
                <details class="border border-gray-300 rounded-lg p-4 cursor-pointer">
                    <summary class="font-medium font-space"> Do I need to be tech-savvy to get started?</summary>
                    <p class="mt-2 text-gray-500">
                        No, you don't. Our platform is simple and easy to use. Even for SMEs who are new to going
                        digital, we are ready to guide you through the first steps.
                    </p>
                </details>
                <details class="border border-gray-300 rounded-lg p-4 cursor-pointer">
                    <summary class="font-medium font-space">When can I expect a response from the support team?
                    </summary>
                    <p class="mt-2 text-gray-500">
                        The GrowLocal team typically responds within business hours. For customers with certain
                        packages, 24/7 priority support is also available.
                    </p>
                </details>
                <details class="border border-gray-300 rounded-lg p-4 cursor-pointer">
                    <summary class="font-medium font-space">Can I try it for free before subscribing?</summary>
                    <p class="mt-2 text-gray-500">
                        Of course. You can start with a free trial version to test the main features before deciding on
                        the package that best suits your business.
                    </p>
                </details>
            </div>
        </div>
    </div>

    <div class="grid md:grid-cols-2 gap-12 px-6 md:px-16 py-16 items-center">
        <img src="{{ asset('asset/kerja.png') }}" alt="About Us" class=" rounded-2xl shadow-lg object-cover">
        <div>
            <p class="text-blue-600 font-semibold mb-2 font-space">ABOUT US</p>
            <h2 class="text-3xl font-bold leading-snug font-space">Let's Connect with GrowLocal</h2>
            <p class="text-gray-500 mt-4 leading-relaxed">
                Help MSMEs build a strong digital presence. From product management to sales
                strategies, we are here to help your business grow faster.
            </p>
            <a href="#"
                class="mt-6 inline-block px-6 py-3 border border-blue-600 text-blue-600 rounded-full hover:bg-blue-50 transition">
                More About Us
            </a>
        </div>
    </div>

    <div class="px-6 md:px-16 py-16 grid md:grid-cols-3 gap-10 font-space">
        <form id="contactForm" action="https://formspree.io/f/xvgbaplp" method="POST"
            class="md:col-span-2 space-y-4 relative">
            <div class="grid md:grid-cols-2 gap-4">
                <input type="text" name="name" placeholder="Name :" required
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-600 outline-none">
                <input type="email" name="email" placeholder="Email :" required
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-600 outline-none">
            </div>
            <div class="grid md:grid-cols-2 gap-4">
                <input type="text" name="subject" placeholder="Subject :"
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-600 outline-none">
                <input type="text" name="phone" placeholder="No Hp :"
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-600 outline-none">
            </div>
            <textarea rows="5" name="message" placeholder="Write your problem here :" required
                class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-600 outline-none"></textarea>
            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                Send
            </button>

            <div id="toast"
                class="absolute top-[-50px] left-1/2 -translate-x-1/2 bg-green-500 text-white px-4 py-2 rounded shadow-lg opacity-0 transition-opacity duration-300">
                Form berhasil dikirim!
            </div>
        </form>

        <div class="space-y-6">
            <h3 class="text-blue-600 text-lg font-semibold font-space">Contact Us</h3>
            <p class="flex items-center gap-2 mt-2 text-xl font-medium font-space">
                <i class='bx bx-envelope text-2xl'></i>
                <a href="mailto:hello@growlocal.id">hello@growlocal.id</a>
            </p>
            <p class="flex items-center gap-2 mt-2 text-xl font-medium font-space">
                <i class='bx bx-phone text-2xl'></i>
                +62 812-3456-7890
            </p>
            <p class="flex items-start gap-2 mt-2 text-xl font-medium font-space">
                <i class='bx bx-map text-2xl'></i>
                <a href="#">GrowLocal HQ <br> Jl. Melati Raya No.123, Jakarta Selatan, Indonesia </a>
            </p>
        </div>
    </div>

    <footer class="bg-gray-50 text-gray-700 animate-slideUp font-space">
        <div class="max-w-6xl mx-auto px-6 md:px-8 py-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-8">
            <div class="flex flex-col space-y-3">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('asset/Logo.png') }}" alt="Logo" class="w-8 h-8">
                    <span class="font-bold text-lg font-space">GrowLocal</span>
                </div>
                <p class="text-sm text-gray-500 font-space">
                    Everything you need to build your business from scratch is right here.
                </p>
            </div>

            <div>
                <h4 class="font-semibold mb-3 text-gray-900">Solutions</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-blue-500 transition-colors">Freelancer</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition-colors">Data Analytics</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition-colors">Small Business</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-3 text-gray-900">Company</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-blue-500 transition-colors">About</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition-colors">Career</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition-colors">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-3 text-gray-900">Resources</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-blue-500 transition-colors">Customers</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition-colors">Strategic Finance</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition-colors">Ebooks & Guides</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-3 text-gray-900">Features</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-blue-500 transition-colors">Freelancer</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition-colors">Data Analytics</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition-colors">Small Business</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-200 py-4 text-center text-xs text-gray-500">
            © 2023 All Rights Reserved by GrowLocal
        </div>
    </footer>

    <script>
        const form = document.getElementById('contactForm');
        const toast = document.getElementById('toast');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(form);

            try {
                const response = await fetch(form.action, {
                    method: form.method,
                    body: formData,
                    headers: {
                        'Accept': 'application/json'
                    }
                });

                if (response.ok) {
                    form.reset();
                    toast.classList.remove('opacity-0');
                    toast.classList.add('opacity-100');
                    setTimeout(() => {
                        toast.classList.remove('opacity-100');
                        toast.classList.add('opacity-0');
                    }, 3000);
                } else {
                    alert("Terjadi kesalahan. Silakan coba lagi.");
                }
            } catch (error) {
                alert("Terjadi kesalahan. Silakan coba lagi.");
            }
        });
    </script>

</body>

</html>
