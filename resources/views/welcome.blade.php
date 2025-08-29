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

<body class="font-space">
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


    <div class="flex flex-col-reverse md:flex-row items-center justify-between px-6 md:px-20 py-12 animate-slideUp">
        <div class="text-center md:text-left">
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold">Smart Solutions<br>for Growing SMEs</h1>
            <p class="text-lg md:text-2xl text-gray-400 pt-4">
                Digital solutions that will help MSMEs sell their <br class="hidden md:block"> products more easily and
                grow faster.
            </p>
            <div class="flex flex-col md:flex-row items-center gap-5 mt-6">
                <button class="bg-blue-600 px-6 py-3 text-white rounded-3xl">
                    <a href="#">Get Started Now</a>
                </button>
                <div class="flex items-center gap-3">
                    <div class="flex">
                        <img src="https://randomuser.me/api/portraits/men/53.jpg"
                            class="w-10 h-10 rounded-full border-2 border-white" alt="client">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg"
                            class="w-10 h-10 rounded-full border-2 border-white -ml-3" alt="client">
                        <img src="https://randomuser.me/api/portraits/men/12.jpg"
                            class="w-10 h-10 rounded-full border-2 border-white -ml-3" alt="client">
                        <div
                            class="w-10 h-10 -ml-3 flex items-center justify-center rounded-full border-2 border-white bg-gray-200 text-gray-700">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                    <div>
                        <p class="text-lg md:text-xl font-semibold">3.2m</p>
                        <p class="text-gray-400 text-sm">Success clients</p>
                    </div>
                </div>
            </div>
        </div>
        <img class="w-full md:w-1/2 lg:w-1/3 mt-8 md:mt-0" src="{{ asset('asset/Bg.png') }}" alt="">
    </div>

    <div class="grid place-items-center gap-8 mt-10 px-6 animate-slideUp">
        <h1 class="text-2xl md:text-4xl text-gray-500 font-bold text-center">
            Join over 55,000 businesses that have<br class="hidden md:block"> achieved their goals.
        </h1>
        <div class="flex flex-wrap justify-center gap-6 md:gap-12">
            <img src="{{ asset('asset/lummesa.png') }}" alt="Lummesa"
                class="w-20 md:w-28 h-10 md:h-12 object-contain hover:scale-110 transition cursor-pointer">
            <img src="{{ asset('asset/novadex.png') }}" alt="Novadex"
                class="w-20 md:w-28 h-10 md:h-12 object-contain hover:scale-110 transition cursor-pointer">
            <img src="{{ asset('asset/zenithia.png') }}" alt="Zenithia"
                class="w-20 md:w-28 h-10 md:h-12 object-contain hover:scale-110 transition cursor-pointer">
            <img src="{{ asset('asset/quixana.png') }}" alt="Quixana"
                class="w-20 md:w-28 h-10 md:h-12 object-contain hover:scale-110 transition cursor-pointer">
            <img src="{{ asset('asset/equinix.png') }}" alt="Equinix"
                class="w-20 md:w-28 h-10 md:h-12 object-contain hover:scale-110 transition cursor-pointer">
            <img src="{{ asset('asset/vireon.png') }}" alt="Vireon"
                class="w-20 md:w-28 h-10 md:h-12 object-contain hover:scale-110 transition cursor-pointer">
        </div>
    </div>

<div class="animate-slideUp px-6 md:px-20 mt-30" 
     x-data="{
        selected: 1,
        interval: null,
        reviews: {
            1: 'Initially doubtful, the outcome surpassed all my anticipations. The powerful analytics and reporting features offered crucial perspectives.',
            2: 'The platform has simplified product management and boosted our sales dramatically. Couldn\'t be happier with the results!',
            3: 'Great experience! The technology support made our growth faster and more sustainable than ever before.'
        },
        startAutoSlide() {
            if (window.innerWidth < 768) {
                this.interval = setInterval(() => {
                    this.selected = this.selected < 3 ? this.selected + 1 : 1;
                    this.scrollToSelected();
                }, 5000);
            }
        },
        stopAutoSlide() {
            clearInterval(this.interval);
            this.interval = null;
        },
        scrollToSelected() {
            this.$refs['card' + this.selected]?.scrollIntoView({
                behavior: 'smooth',
                inline: 'center',
                block: 'nearest'
            });
        }
     }"
     x-init="startAutoSlide()"
     @mouseenter="stopAutoSlide()" 
     @mouseleave="startAutoSlide()">

    <!-- Mobile Slider -->
    <div x-ref="slider"
         class="flex md:hidden gap-4 overflow-x-auto snap-x snap-mandatory pb-4 w-full px-4 pr-8 cursor-grab active:cursor-grabbing"
         @mousedown="isDown = true; startX = $event.pageX - $refs.slider.offsetLeft; scrollLeft = $refs.slider.scrollLeft"
         @mouseleave="isDown = false" 
         @mouseup="isDown = false"
         @mousemove="
            if(!isDown) return;
            $event.preventDefault();
            const x = $event.pageX - $refs.slider.offsetLeft;
            const walk = (x - startX) * 1.5;
            $refs.slider.scrollLeft = scrollLeft - walk;
         "
         x-data="{ isDown: false, startX: 0, scrollLeft: 0 }">

        <template x-for="i in [1,2,3]" :key="i">
            <div x-ref="'card' + i" 
                 @click="selected = i; scrollToSelected()"
                 class="flex-shrink-0 w-[280px] min-h-[220px] snap-center bg-white rounded-xl shadow-md border border-gray-100 p-5 cursor-pointer flex flex-col items-center text-center">

                <img :src="i === 1 ? '{{ asset('asset/Delynn.jpeg') }}' : (i === 2 ? '{{ asset('asset/toy.jpeg') }}' : '{{ asset('asset/Ella.jpeg') }}')"
                     class="w-16 h-16 rounded-full mb-4 object-cover">

                <p class="font-semibold text-lg mb-1"
                   x-text="i === 1 ? 'Catherine Bennett' : (i === 2 ? 'Ella' : 'Delynn')"></p>
                <p class="text-sm text-gray-500 mb-3">Founder, Creative</p>
                <p class="text-sm text-gray-600 leading-relaxed flex-1 line-clamp-4" 
                   x-text="reviews[i]"></p>
            </div>
        </template>
    </div>


    <div class="hidden md:flex flex-col md:flex-row items-start gap-8 md:gap-10 py-6">


        <div class="flex md:flex-col gap-4 md:gap-5">
            <div @click="selected = 1"
                 :class="selected === 1 ? 'bg-gray-200 shadow-lg' : 'bg-transparent'"
                 class="flex items-center gap-4 rounded-full px-5 py-3 w-max cursor-pointer">
                <img src="{{ asset('asset/Delynn.jpeg') }}"
                     class="w-14 h-14 rounded-full" alt="Catherine">
                <div>
                    <p class="font-semibold text-lg">Catherine Bennett</p>
                    <p class="text-gray-500">Founder, Creative</p>
                </div>
            </div>

            <div @click="selected = 2"
                 :class="selected === 2 ? 'bg-gray-200 shadow-lg' : 'bg-transparent'"
                 class="flex items-center gap-4 rounded-full px-5 py-3 w-max cursor-pointer">
                <img src="{{ asset('asset/toy.jpeg') }}"
                     class="w-14 h-14 rounded-full" alt="Ella">
                <div>
                    <p class="font-semibold text-lg">Ella</p>
                    <p class="text-gray-500">Founder, Creative</p>
                </div>
            </div>

            <div @click="selected = 3"
                 :class="selected === 3 ? 'bg-gray-200 shadow-lg' : 'bg-transparent'"
                 class="flex items-center gap-4 rounded-full px-5 py-3 w-max cursor-pointer">
                <img src="{{ asset('asset/Ella.jpeg') }}"
                     class="w-14 h-14 rounded-full" alt="Delynn">
                <div>
                    <p class="font-semibold text-lg">Delynn</p>
                    <p class="text-gray-500">Founder, Creative</p>
                </div>
            </div>
        </div>

        <div class="md:pl-6 lg:pl-10 md:w-[600px]">
            <p x-text="reviews[selected]"
               class="text-xl md:text-2xl text-gray-700 border border-gray-200 rounded-lg p-5 bg-white/70 ">
            </p>
        </div>
    </div>
</div>

    <div
        class="flex flex-col-reverse md:flex-row justify-between items-center gap-10 md:gap-20 mt-20 px-6 md:px-20 animate-slideUp">
        <div class="text-center md:text-left">
            <p class="text-lg font-medium text-blue-600 mb-4">About Us</p>
            <h1 class="text-4xl md:text-5xl font-bold">Start Your Business' Digital Journey</h1>
            <p class="text-lg md:text-xl text-gray-500 pt-5">
                Help MSMEs build a strong digital presence. From product management to sales strategies, we are here to
                help your business grow faster.
            </p>
            <a href="#" class="inline-block mt-6 bg-blue-600 px-6 py-3 text-white rounded-xl">Get Started
                Now</a>
        </div>
        <img class="w-full md:w-1/2 lg:w-1/3" src="{{ asset('asset/Bg2.png') }}" alt="">
    </div>

    <div
        class="max-w-6xl mx-auto px-6 md:px-8 grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 text-center animate-slideUp mt-10">
        <div class="cursor-pointer">
            <p class="text-4xl md:text-5xl font-bold text-blue-600">300+</p>
            <p class="text-sm text-gray-500 mt-1">partner with us</p>
        </div>
        <div class="cursor-pointer">
            <p class="text-4xl md:text-5xl font-bold text-blue-600">$3.2b+</p>
            <p class="text-sm text-gray-500 mt-1">Cumulative trending</p>
        </div>
        <div class="cursor-pointer">
            <p class="text-4xl md:text-5xl font-bold text-blue-600">860k</p>
            <p class="text-sm text-gray-500 mt-1">Successful projects</p>
        </div>
        <div class="cursor-pointer">
            <p class="text-4xl md:text-5xl font-bold text-blue-600">1.6%</p>
            <p class="text-sm text-gray-500 mt-1">Low interest rate</p>
        </div>
    </div>

    <div class="max-w-3xl mx-auto px-6 md:px-8 py-12 text-center animate-slideUp">
        <h2 class="text-2xl md:text-4xl font-bold mb-4">Accelerate Your Business Growth</h2>
        <p class="text-gray-500 mb-6">FramerBite supplies the key components for assembling a top-tier website tailored
            to your SaaS needs.</p>
        <div class="flex justify-center">
            <div class="flex w-full max-w-md">
                <input placeholder="Enter your email"
                    class="flex-1 border border-gray-300 rounded-l-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-r-md hover:bg-blue-700">
                    Email me
                </button>
            </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const els = document.querySelectorAll('.animate-slideUp, .scroll-slideUp');
            const io = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                    if (e.isIntersecting) e.target.classList.add('show');
                });
            }, {
                threshold: 0.18
            });
            els.forEach(el => io.observe(el));
        });
    </script>
</body>

</html>
