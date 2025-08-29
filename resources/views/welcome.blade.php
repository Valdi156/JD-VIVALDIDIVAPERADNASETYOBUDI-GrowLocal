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
                <a href="{{ url('/login') }}">Login</a>
            </button>
            <button class="bg-blue-600 text-white px-4 md:px-6 py-2 rounded-xl">
                <a href="{{ url('/daftar') }}">Register</a>
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
                    <button class="flex-1 text-blue-600 px-4 py-2 rounded-lg"><a href="{{ url('/login') }}">Login</a></button>
                    <button class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg"><a href="{{ url('/daftar') }}">Register</a></button>
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


    <div class="animate-slideUp px-6 md:px-20 mt-30" x-data="{
        selected: 1,
        interval: null,
        reviews: {
            1: 'Catherine: Initially doubtful, the outcome surpassed all my anticipations. The powerful analytics and reporting features offered crucial perspectives on our business metrics, enabling us to implement informed decisions.',
            2: 'Ella: The platform has simplified product management and boosted our sales dramatically. Couldn’t be happier with the results!',
            3: 'Delynn: Great experience! The technology support made our growth faster and more sustainable.'
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
    }" x-init="startAutoSlide()"
        @mouseenter="stopAutoSlide()" @mouseleave="startAutoSlide()">

        <div x-ref="slider"
            class="flex md:hidden gap-4 overflow-x-auto snap-x snap-mandatory pb-4 w-full px-4 pr-8 cursor-grab active:cursor-grabbing"
            @mousedown="isDown = true; startX = $event.pageX - $refs.slider.offsetLeft; scrollLeft = $refs.slider.scrollLeft"
            @mouseleave="isDown = false" @mouseup="isDown = false"
            @mousemove="
          if(!isDown) return;
          $event.preventDefault();
          const x = $event.pageX - $refs.slider.offsetLeft;
          const walk = (x - startX) * 1.5;
          $refs.slider.scrollLeft = scrollLeft - walk;
       "
            x-data="{ isDown: false, startX: 0, scrollLeft: 0 }">

            <template x-for="i in [1,2,3]" :key="i">
                <div x-ref="'card' + i" @click="selected = i; scrollToSelected()"
                    class="flex-shrink-0 w-[85%] sm:w-[300px] snap-center bg-white rounded-xl shadow-md border border-gray-100 p-4 cursor-pointer flex flex-col items-center text-center transition-transform duration-300"
                    :class="selected === i ? 'scale-100 ring-2 ring-blue-600' : ''">
                    <img :src="i === 1 ? '{{ asset('asset/Delynn.jpeg') }}' : (i === 2 ? '{{ asset('asset/toy.jpeg') }}' :
                        '{{ asset('asset/Ella.jpeg') }}')"
                        class="w-16 h-16 rounded-full mb-3 object-cover"
                        :class="selected === i ? 'ring-4 ring-blue-600' : ''">
                    <p class="font-semibold text-lg"
                        x-text="i === 1 ? 'Catherine Bennett' : (i === 2 ? 'Ella' : 'Delynn')"></p>
                    <p class="text-sm text-gray-500">Founder, Creative</p>
                    <p class="text-sm text-gray-600 mt-3" x-text="reviews[i]"></p>
                </div>
            </template>
        </div>

        <div class="flex md:hidden justify-center gap-2 mt-10">
            <template x-for="i in [1,2,3]" :key="'dot-' + i">
                <button @click="selected = i; scrollToSelected()" class="w-3 h-3 rounded-full transition-all"
                    :class="selected === i ? 'bg-blue-600 w-5' : 'bg-gray-300'"></button>
            </template>
        </div>

        <div class="hidden md:flex flex-col md:flex-row items-start gap-8 md:gap-10 py-6">
            <div class="flex md:flex-col gap-4 md:gap-5">
                <div @click="selected = 1"
                    :class="selected === 1 ? 'bg-gray-200 shadow-lg scale-105' : 'bg-transparent'"
                    class="flex items-center gap-4 rounded-full px-5 py-3 w-max cursor-pointer transition-all duration-300">
                    <img src="{{ asset('asset/Delynn.jpeg') }}"
                        :class="selected === 1 ? 'ring-4 ring-blue-600 animate-fadeIn' : 'animate-fadeIn'"
                        class="w-14 h-14 rounded-full" alt="Catherine">
                    <div>
                        <p class="font-semibold text-lg">Catherine Bennett</p>
                        <p class="text-gray-500">Founder, Creative</p>
                    </div>
                </div>

                <div @click="selected = 2"
                    :class="selected === 2 ? 'bg-gray-200 shadow-lg scale-105' : 'bg-transparent'"
                    class="flex items-center gap-4 rounded-full px-5 py-3 w-max cursor-pointer transition-all duration-300">
                    <img src="{{ asset('asset/toy.jpeg') }}"
                        :class="selected === 2 ? 'ring-4 ring-blue-600 animate-fadeIn' : 'animate-fadeIn'"
                        class="w-14 h-14 rounded-full" alt="Ella">
                    <div>
                        <p class="font-semibold text-lg">Ella</p>
                        <p class="text-gray-500">Founder, Creative</p>
                    </div>
                </div>

                <div @click="selected = 3"
                    :class="selected === 3 ? 'bg-gray-200 shadow-lg scale-105' : 'bg-transparent'"
                    class="flex items-center gap-4 rounded-full px-5 py-3 w-max cursor-pointer transition-all duration-300">
                    <img src="{{ asset('asset/Ella.jpeg') }}"
                        :class="selected === 3 ? 'ring-4 ring-blue-600 animate-fadeIn' : 'animate-fadeIn'"
                        class="w-14 h-14 rounded-full" alt="Delynn">
                    <div>
                        <p class="font-semibold text-lg">Delynn</p>
                        <p class="text-gray-500">Founder, Creative</p>
                    </div>
                </div>
            </div>

            <div class="md:pl-6 lg:pl-10 md:w-[600px]">
                <p x-text="reviews[selected]"
                    :class="{
                        'animate-fadeIn text-blue-600': selected === 1,
                        'animate-fadeIn text-blue-600': selected === 2,
                        'animate-fadeIn text-blue-600': selected === 3
                    }"
                    class="text-xl md:text-2xl text-gray-700 border border-gray-200 rounded-lg p-5 bg-white/70">
                </p>
            </div>
        </div>
    </div>
    <div class="flex justify-between">
        <div class="pl-20 pt-55 ">
            <p class="text-lg font-medium font-space text-blue-600">About Us</p>
            <h1 class="text-6xl font-bold font-space">Start Your Business'<br>Digital Journey</h1>
            <p class="text-2xl font-reguler font-space text-gray-400 pt-5 max-w-xl">
                Help MSMEs build a strong digital presence. From product management to sales strategies, we are here to
                help your business grow faster.
            </p>
            <div class="flex items-center gap-5 mt-5 ">
                <button class="bg-blue-600 p px-4 py-4 text-white font-space rounded-4xl font-medium cursor-pointer">
                    <a href="#">Get Started Now</a>
                </button>
            </div>
        </div>
        <img class="mt-20 mr-20" src="{{ asset('asset/Bg2.png') }}" alt="">
    </div>

    <div class="animate-slideUp px-6 md:px-20 mt-30" x-data="{
        selected: 1,
        interval: null,
        reviews: {
            1: 'Catherine: Initially doubtful, the outcome surpassed all my anticipations. The powerful analytics and reporting features offered crucial perspectives on our business metrics, enabling us to implement informed decisions.',
            2: 'Ella: The platform has simplified product management and boosted our sales dramatically. Couldn’t be happier with the results!',
            3: 'Delynn: Great experience! The technology support made our growth faster and more sustainable.'
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
    }" x-init="startAutoSlide()"
        @mouseenter="stopAutoSlide()" @mouseleave="startAutoSlide()">

        <div x-ref="slider"
            class="flex md:hidden gap-4 overflow-x-auto snap-x snap-mandatory pb-4 w-full px-4 pr-8 cursor-grab active:cursor-grabbing"
            @mousedown="isDown = true; startX = $event.pageX - $refs.slider.offsetLeft; scrollLeft = $refs.slider.scrollLeft"
            @mouseleave="isDown = false" @mouseup="isDown = false"
            @mousemove="
          if(!isDown) return;
          $event.preventDefault();
          const x = $event.pageX - $refs.slider.offsetLeft;
          const walk = (x - startX) * 1.5;
          $refs.slider.scrollLeft = scrollLeft - walk;
       "
            x-data="{ isDown: false, startX: 0, scrollLeft: 0 }">

            <template x-for="i in [1,2,3]" :key="i">
                <div x-ref="'card' + i" @click="selected = i; scrollToSelected()"
                    class="flex-shrink-0 w-[85%] sm:w-[300px] snap-center bg-white rounded-xl shadow-md border border-gray-100 p-4 cursor-pointer flex flex-col items-center text-center transition-transform duration-300"
                    :class="selected === i ? 'scale-100 ring-2 ring-blue-600' : ''">
                    <img :src="i === 1 ? '{{ asset('asset/Delynn.jpeg') }}' : (i === 2 ? '{{ asset('asset/toy.jpeg') }}' :
                        '{{ asset('asset/Ella.jpeg') }}')"
                        class="w-16 h-16 rounded-full mb-3 object-cover"
                        :class="selected === i ? 'ring-4 ring-blue-600' : ''">
                    <p class="font-semibold text-lg"
                        x-text="i === 1 ? 'Catherine Bennett' : (i === 2 ? 'Ella' : 'Delynn')"></p>
                    <p class="text-sm text-gray-500">Founder, Creative</p>
                    <p class="text-sm text-gray-600 mt-3" x-text="reviews[i]"></p>
                </div>
            </template>
        </div>

        <div class="flex md:hidden justify-center gap-2 mt-10">
            <template x-for="i in [1,2,3]" :key="'dot-' + i">
                <button @click="selected = i; scrollToSelected()" class="w-3 h-3 rounded-full transition-all"
                    :class="selected === i ? 'bg-blue-600 w-5' : 'bg-gray-300'"></button>
            </template>
        </div>

        <div class="hidden md:flex flex-col md:flex-row items-start gap-8 md:gap-10 py-6">
            <div class="flex md:flex-col gap-4 md:gap-5">
                <div @click="selected = 1"
                    :class="selected === 1 ? 'bg-gray-200 shadow-lg scale-105' : 'bg-transparent'"
                    class="flex items-center gap-4 rounded-full px-5 py-3 w-max cursor-pointer transition-all duration-300">
                    <img src="{{ asset('asset/Delynn.jpeg') }}"
                        :class="selected === 1 ? 'ring-4 ring-blue-600 animate-fadeIn' : 'animate-fadeIn'"
                        class="w-14 h-14 rounded-full" alt="Catherine">
                    <div>
                        <p class="font-semibold text-lg">Catherine Bennett</p>
                        <p class="text-gray-500">Founder, Creative</p>
                    </div>
                </div>

                <div @click="selected = 2"
                    :class="selected === 2 ? 'bg-gray-200 shadow-lg scale-105' : 'bg-transparent'"
                    class="flex items-center gap-4 rounded-full px-5 py-3 w-max cursor-pointer transition-all duration-300">
                    <img src="{{ asset('asset/toy.jpeg') }}"
                        :class="selected === 2 ? 'ring-4 ring-blue-600 animate-fadeIn' : 'animate-fadeIn'"
                        class="w-14 h-14 rounded-full" alt="Ella">
                    <div>
                        <p class="font-semibold text-lg">Ella</p>
                        <p class="text-gray-500">Founder, Creative</p>
                    </div>
                </div>

                <div @click="selected = 3"
                    :class="selected === 3 ? 'bg-gray-200 shadow-lg scale-105' : 'bg-transparent'"
                    class="flex items-center gap-4 rounded-full px-5 py-3 w-max cursor-pointer transition-all duration-300">
                    <img src="{{ asset('asset/Ella.jpeg') }}"
                        :class="selected === 3 ? 'ring-4 ring-blue-600 animate-fadeIn' : 'animate-fadeIn'"
                        class="w-14 h-14 rounded-full" alt="Delynn">
                    <div>
                        <p class="font-semibold text-lg">Delynn</p>
                        <p class="text-gray-500">Founder, Creative</p>
                    </div>
                </div>
            </div>

            <div class="md:pl-6 lg:pl-10 md:w-[600px]">
                <p x-text="reviews[selected]"
                    :class="{
                        'animate-fadeIn text-blue-600': selected === 1,
                        'animate-fadeIn text-blue-600': selected === 2,
                        'animate-fadeIn text-blue-600': selected === 3
                    }"
                    class="text-xl md:text-2xl text-gray-700 border border-gray-200 rounded-lg p-5 bg-white/70">
                </p>
            </div>
        </div>
    </div>


    <div class="text-center">
    <h1 class="font-bold text-blue-500 text-7xl">300+</h1>
    <p class="text-sm font-medium text-gray-500">partner with us</p>
    </div>
    <div class="max-w-3xl mx-auto px-4 py-12 text-center ">
        <h2 class="text-5xl font-bold font-space text-center">Accelerate Your Business Growth</h2>
        <p class="text-xl font-medium font-space text-center text-gray-500 mt-10">FramerBite supplies the key
            components for assembling a <br>top-tier website tailored to your SaaS needs.</p>
        <div class="mt-12">
            <input placeholder="email"
                class="border border-gray-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus ring-blue-500">
            <button class="bg-blue-600 text-white px-2 py-2 rounded-md hover:bg-blue-700">Email Me</button>
        </div>
    </div>

    <footer class="bg-gray-100 text-gray-700 py-10 mt-16 px-6">
        <div class="max-w-6xl mx-auto grid grid-cols-3 place-items-center">
            <div class="w-full">
                <h2 class="text-2xl font-bold mb-4">Nexora.</h2>
                <p class="text-sm font-medium mb-4">Ready to explore the world without the hassle?
                    With Nexora, find your dream destination, manage your trip with ease, and experience the real
                    locals.
                    Explore now. Adventure awaits you.

                    Nexora Discover new places, create new stories.</p>
            </div>
            <div class="flex gap-6">
                <div class=" w-full">
                    <h3 class="font-semibold mb-3">Navigation</h3>
                    <ul class="">
                        <li><a href="#" class="hover:text-blue-500">Home</a></li>
                        <li><a href="#" class="hover:text-blue-500">About Me</a></li>
                        <li><a href="#" class="hover:text-blue-500">Tour</a></li>
                        <li><a href="#" class="hover:text-blue-500">Package</a></li>
                        <li><a href="#" class="hover:text-blue-500">Contact</a></li>
                    </ul>
                </div>

                <div class=" w-full">
                    <h3 class="font-semibold mb-3">Follow Us</h3>
                    <ul class="">
                        <li><a href="#" class="hover:text-blue-500">Instagram</a></li>
                        <li><a href="#" class="hover:text-blue-500">Twitter</a></li>
                        <li><a href="#" class="hover:text-blue-500">YouTube</a></li>
                        <li><a href="#" class="hover:text-blue-500">FaceBook</a></li>
                    </ul>
                </div>
            </div>

            <div class=" w-full">
                <h3 class="font-semibold mb-3">Contact Info</h3>
                <ul>
                    <li>Email : <span>Nexora.</span>@gmail.com</li>
                    <li>Phone : +6281589632155</li>
                    <li>Address : Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>
