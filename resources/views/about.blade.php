<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrowLocal</title>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{ asset('asset/Logo.png') }}" type="image/x-icon">
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
                <a href="{{ url('/admin')}}">Login</a>
            </button>
            <button class="bg-blue-600 text-white px-4 md:px-6 py-2 rounded-xl">
                <a href="{{ url('/admin/register')}}">Register</a>
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
                            href="{{ url('/admin')}}">Login</a></button>
                    <button class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg"><a
                            href="{{ url('/admin/register')}}">Register</a></button>
                </div>
            </div>
        </div>
    </nav>

        <div class="px-6 md:px-20 py-20 text-center md:text-left animate-slideUp">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl text-gray-600 text-center font-medium font-space">Shaping tomorrow with
                smarter, human-centered design.</h2>
            <h1 class="text-4xl md:text-5xl font-bold mt-4 leading-tight text-center font-space">
                Support your business.<br>At an affordable price.
            </h1>
            <p class="text-gray-500 mt-4 text-lg text-center font-space font-medium">
                We provide the tools, resources, and guidance you need to unlock your full potential.
                With innovative solutions, reliable support, and opportunities to expand,
                we aim to empower you to achieve sustainable growth and long-term success.
            </p>
            <div class="mt-6 flex justify-center gap-4">
                <button
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg transition-all duration-300 hover:bg-blue-700 hover:scale-105 hover:shadow-lg hover:shadow-gray-300">
                    See More
                </button>

                <button
                    class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg transition-all duration-300 hover:bg-blue-600 hover:text-white hover:scale-105 hover:shadow-lg hover:shadow-blue-400/50">
                    Get Started
                </button>
            </div>
        </div>
    </div>

        <div x-data="{ activePlan: null }" class="w-full py-12 px-4 text-white animate-slideUp">
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <div @click="activePlan = 'basic'"
                :class="activePlan === 'basic' ? 'ring-2 ring-blue-500 scale-105' : 'scale-100'"
                class="bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col justify-between cursor-pointer transform transition-all duration-300 hover:scale-105">
                <div class="space-y-4">
                    <h2 class="text-4xl font-bold">$99</h2>
                    <p class="text-gray-400 text-sm">Per month, 1 people</p>
                    <span class="inline-block px-3 py-1 rounded-md bg-gray-700 text-xs font-semibold">BASIC</span>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Max. 2 Products</span></li>
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Online Store Setup Assistance</span></li>
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Basic Access to Sales Features</span></li>
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>20 Marketing Prompts per month</span></li>
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Users can Online Store</span></li>
                    </ul>
                    <button
                        :class="activePlan === 'basic'
                            ?
                            'bg-blue-500 text-white' :
                            'bg-transparent border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white'"
                        class="w-full mt-6 rounded-2xl font-semibold py-2 transition-all duration-300">
                        Subscribe Basic
                    </button>
                </div>
            </div>

            <div @click="activePlan = 'platinum'"
                :class="activePlan === 'platinum' ? 'ring-2 ring-blue-500 scale-105' : 'scale-100'"
                class="bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col justify-between cursor-pointer transform transition-all duration-300 hover:scale-105">
                <div class="space-y-4">
                    <h2 class="text-4xl font-bold">$8,000</h2>
                    <p class="text-gray-400 text-sm">Per month, 3 people</p>
                    <span class="inline-block px-3 py-1 rounded-md bg-gray-700 text-xs font-semibold">Platinum</span>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Unlimited Products</span></li>
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Setup Support + Sales Optimization</span></li>
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Full Access to All Features</span></li>
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Custom Sales Training & Strategy</span></li>
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Priority Support (24/7)</span></li>
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Users can have an Online Store</span></li>
                    </ul>
                    <button
                        :class="activePlan === 'platinum'
                            ?
                            'bg-blue-500 text-white' :
                            'bg-transparent border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white'"
                        class="w-full mt-6 rounded-2xl font-semibold py-2 transition-all duration-300">
                        Subscribe Platinum
                    </button>
                </div>
            </div>

            <div @click="activePlan = 'gold'"
                :class="activePlan === 'gold' ? 'ring-2 ring-blue-500 scale-105' : 'scale-100'"
                class="bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col justify-between cursor-pointer transform transition-all duration-300 hover:scale-105">
                <div class="space-y-4">
                    <h2 class="text-4xl font-bold">$99</h2>
                    <p class="text-gray-400 text-sm">Per month, 1 people</p>
                    <span class="inline-block px-3 py-1 rounded-md bg-gray-700 text-xs font-semibold">GOLD</span>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Manage up to 10 products</span></li>
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Access all sales features</span></li>
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Access ready-to-use store templates</span></li>
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>20 Marketing Prompts per month</span></li>
                        <li class="flex items-start gap-2"><i class='bx bx-check text-blue-400 text-lg mt-1'></i>
                            <span>Users can create online stores</span></li>
                    </ul>
                    <button
                        :class="activePlan === 'gold'
                            ?
                            'bg-blue-500 text-white' :
                            'bg-transparent border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white'"
                        class="w-full mt-6 rounded-2xl font-semibold py-2 transition-all duration-300">
                        Subscribe GOLD
                    </button>
                </div>
            </div>

        </div>
    </div>

       <div class="flex flex-col md:flex-row animate-slideUp">
  <div class="w-full md:w-1/2 px-6 md:px-20 mt-16">
    <div class="max-w-3xl">
      <p class="text-base md:text-lg font-medium text-blue-600">About Us</p>
      <h1 class="text-3xl md:text-5xl font-bold mt-1">
        Start Your Business'<br class="hidden md:block">Digital Journey
      </h1>
      <p class="text-lg md:text-2xl text-gray-400 pt-4">
        Digital solutions that will help MSMEs sell their 
        <br class="hidden md:block"> 
        products more easily and grow faster.
      </p>
      <div class="mt-6">
        <a href="#" class="bg-blue-600 px-6 py-3 text-white rounded-3xl block w-fit hover:bg-blue-700 transition">
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
        <summary class="font-medium font-space">Can this platform help me succeed in sales?</summary>
        <p class="mt-2 text-gray-500">
          Creating your online store is simple. Just sign up, add your business name, upload your products, and your store will be ready in minutes. No technical skills required — everything is designed to be easy for UMKM to use.
        </p>
      </details>
      <details class="border border-gray-300 rounded-lg p-4 cursor-pointer">
        <summary class="font-medium font-space">How do I start creating an online store?</summary>
        <p class="mt-2 text-gray-500">
          Yes, the number of products depends on the subscription plan you choose. The Basic and Gold plans have product limits, while the Platinum plan allows you to sell unlimited products.
        </p>
      </details>
      <details class="border border-gray-300 rounded-lg p-4 cursor-pointer">
        <summary class="font-medium font-space">Is there a limit to the number of products I can sell?</summary>
        <p class="mt-2 text-gray-500">
          Absolutely. Our platform supports integration with popular marketplaces and payment systems, so you can manage everything in one place without hassle.
        </p>
      </details>
      <details class="border border-gray-300 rounded-lg p-4 cursor-pointer">
        <summary class="font-medium font-space">Can I integrate with other marketplaces?</summary>
        <p class="mt-2 text-gray-500">
          Absolutely. Our platform supports integration with popular marketplaces and payment systems, so you can manage everything in one place without hassle.
        </p>
      </details>
      <details class="border border-gray-300 rounded-lg p-4 cursor-pointer">
        <summary class="font-medium font-space">When do I have to start paying?</summary>
        <p class="mt-2 text-gray-500">
          You can try the platform for free first. Once your trial ends, you can choose a subscription package that best fits your business needs.
        </p>
      </details>
    </div>
  </div>
</div>

    <div class="px-6 md:px-20 py-20 text-center animate-slideUp">
        <h3 class="text-blue-600 font-medium">WORK BETTER</h3>
        <h2 class="text-3xl md:text-4xl font-bold mb-12">For Your Business</h2>
        <div class="grid md:grid-cols-3 gap-8 text-gray-600">
            <div class="flex flex-col items-center">
                <i class='bx bx-briefcase-alt text-4xl text-blue-600 mb-3'></i>
                <p class="font-semibold">Share Insights</p>
                <p class="text-sm">Work together with your team to make decisions</p>
            </div>
            <div class="flex flex-col items-center">
                <i class='bx bx-paper-plane text-4xl text-blue-600 mb-3'></i>
                <p class="font-semibold">Track your work</p>
                <p class="text-sm">Monitor your team's performance in real-time</p>
            </div>
            <div class="flex flex-col items-center">
                <i class="bx bx-wifi-off text-4xl text-blue-600 mb-3"></i>
                <p class="font-semibold">Offline Mode</p>
                <p class="text-sm">Use features even without internet access</p>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-8 text-gray-600 mt-15">
            <div class="flex flex-col items-center">
                <i class='bx bx-objects-vertical-top text-4xl text-blue-600 mb-3'></i>
                <p class="font-semibold">Business Control</p>
                <p class="text-sm">Advanced Business Control for Your Business Development</p>
            </div>
            <div class="flex flex-col items-center">
                <i class='bx bx-gift text-4xl text-blue-600 mb-3'></i>
                <p class="font-semibold">Reward System</p>
                <p class="text-sm">Build enthusiasm with random rewards.</p>
            </div>
            <div class="flex flex-col items-center">
                <i class='bx bx-globe text-4xl text-blue-600 mb-3'></i>
                <p class="font-semibold">189 Country</p>
                <p class="text-sm">Chosen by thousands of clients around the world.</p>
            </div>
        </div>
    </div>
    
        <div class="px-6 md:px-20 py-20 text-center bg-gray-50 animate-slideUp">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">It's Time for MSMEs to Go Digital</h2>
        <p class="text-gray-500 mb-10 max-w-2xl mx-auto">
            From local products to wider markets with technology, we help MSMEs manage their online stores,
            simplify sales, and reach more customers without hassle.
        </p>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow text-left hover:scale-105 transition cursor-pointer">
                <div class="flex text-yellow-400 mb-3">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p class="text-gray-700">The price is affordable and it has complete features. Now I can manage
                    inventory and sales easily.</p>
                <p class="mt-3 font-semibold">Robert Jhon</p>
                <p class="text-sm text-gray-500">Local Fashion Entrepreneur</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow text-left  hover:scale-105 transition cursor-pointer">
                <div class="flex text-yellow-400 mb-3">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p class="text-gray-700">I was hesitant at first, but setting up an online store here is very easy.
                    Sales increased quickly.</p>
                <p class="mt-3 font-semibold">Selvia Roen</p>
                <p class="text-sm text-gray-500">Home-Based Cake Shop Owner</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow text-left  hover:scale-105 transition cursor-pointer">
                <div class="flex text-yellow-400 mb-3">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p class="text-gray-700">Perfect for MSMEs. From uploading products, managing orders, to sales reports
                    — everything is easier.</p>
                <p class="mt-3 font-semibold">Corvin Hale</p>
                <p class="text-sm text-gray-500">Modern Coffee Shop</p>
            </div>
        </div>
    </div>

    <div class="px-6 md:px-20 py-20 text-center animate-slideUp">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Accelerate Your Business Growth</h2>
        <p class="text-gray-500 mb-6">FramerBite supplies the key components for assembling a top-tier website tailored
            to your SaaS needs.</p>
        <div class="flex justify-center">
            <input type="email" placeholder="Enter your email"
                class="border border-gray-300 rounded-l-lg px-4 py-3 w-64 focus:outline-none focus:ring-2 focus:ring-blue-600">
            <button class="bg-blue-600 text-white px-6 py-3 rounded-r-lg hover:bg-blue-700">Email me</button>
        </div>
    </div>

    <footer class="bg-gray-50 text-gray-700 animate-slideUp">
        <div class="max-w-6xl mx-auto px-6 md:px-8 py-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-8">
            <div class="flex flex-col space-y-3">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('asset/Logo.png') }}" alt="Logo" class="w-8 h-8">
                    <span class="font-bold text-lg">GrowLocal</span>
                </div>
                <p class="text-sm text-gray-500">
                    XB memberi blok yang dibutuhkan untuk membuat website profesional SaaS.
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
</body>
</html>