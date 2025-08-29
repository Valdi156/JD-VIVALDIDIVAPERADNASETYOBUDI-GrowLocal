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

<body class="">
    <nav class="flex items-center justify-between px-20 h-20">
        <div class="text-2xl font-bold text-black flex items-center gap-4 font-serif">
            <img src="{{ asset('asset/Logo.png') }}" alt="Logo" class="h-10">
            GrowLocal
        </div>

        <div class="flex gap-8">
            <div class="group relative">
                <a href="#" class="flex items-center text-black hover:text-blue-600">
                    Page All
                    <i class='bx bx-chevron-down ml-1 text-2xl'></i>
                </a>
                <div class="absolute left-0 mt-1 hidden w-40 rounded-md bg-white shadow-lg group-hover:block">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200">Coming Soon</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200">Coming Soon</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200">Coming Soon</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200">Coming Soon</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200">Coming Soon</a>
                </div>
            </div>
            <a href={{ url('/about') }} class="text-black hover:text-blue-600">About</a>
            <a href="#" class="text-black hover:text-blue-600">Pricing</a>
            <a href="#" class="text-black hover:text-blue-600">Contact</a>
        </div>

        <div class="flex gap-4">
            <a href="#" class="border border-blue-600 text-blue-600 px-6 py-2 r">Login</a>
            <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded-2xl">Register</a>
        </div>
    </nav>

    <div class="flex justify-between items-center px-20 mt-20">
        <div>
            <h1 class="text-6xl font-bold">Smart Solutions<br>for Growing SMEs</h1>
            <p class="text-2xl font-medium text-gray-400 mt-5">
                Digital solutions that will help MSMEs sell their <br> products more easily and grow faster.
            </p>

            <div class="flex items-center gap-5 mt-8">
                <a href="#" class="bg-blue-600 px-6 py-4 text-white rounded-3xl font-medium cursor-pointer">Get
                    Started Now</a>

                <div class="flex items-center">
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
                    <p class="text-xl font-semibold">3.2m</p>
                    <p class="text-gray-400 text-sm">Success clients</p>
                </div>
            </div>
        </div>

        <img class="w-100 h-100" src="{{ asset('asset/Bg.png') }}" alt="Background">
    </div>
    <section class="mt-24 text-center">
        <h1 class="text-4xl font-semibold text-gray-400 font-family">
            Join over 55,000 businesses that have <br> achieved their goals.
        </h1>
        <div class="flex justify-center gap-10 mt-10">
            <img src="{{ asset('asset/lummesa.png') }}" alt="Lummesa" class="w-28 h-12 object-contain">
            <img src="{{ asset('asset/novadex.png') }}" alt="Lummesa" class="w-28 h-12 object-contain">
            <img src="{{ asset('asset/zenithia.png') }}" alt="Lummesa" class="w-28 h-12 object-contain">
            <img src="{{ asset('asset/quixana.png') }}" alt="Lummesa" class="w-28 h-12 object-contain">
            <img src="{{ asset('asset/equinix.png') }}" alt="Lummesa" class="w-28 h-12 object-contain">
            <img src="{{ asset('asset/vireon.png') }}" alt="Lummesa" class="w-28 h-12 object-contain">
        </div>
    </section>

    <section class="px-6 md:px-20 mt-20 grid md:grid-cols-2 gap-8">
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-[40px] h-[40px] flex items-center justify-center rounded-full bg-blue-600 text-white">
                    <i class='bx bx-filter-alt text-2xl'></i>
                </div>
                <h3 class="font-bold text-2xl md:text-3xl text-gray-800">For MSMEs</h3>
            </div>
            <p class="text-gray-500 text-lg md:text-xl">
                We are here specifically for MSMEs helping them manage their products, increase sales,
                and reach more customers without hassle.
            </p>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-[40px] h-[40px] flex items-center justify-center rounded-full bg-blue-600 text-white">
                    <i class='bx bx-copy text-2xl'></i>
                </div>
                <h3 class="font-bold text-2xl md:text-3xl text-gray-800">Retirement Plan</h3>
            </div>
            <p class="text-gray-500 text-lg md:text-xl">
                Plan your business growth with the right sales strategy. With the support of technology, MSMEs can grow
                faster, more stable, and be ready to compete in a wider market.
            </p>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 md:col-span-2">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-[40px] h-[40px] flex items-center justify-center rounded-full bg-blue-600 text-white">
                    <i class='bx bx-credit-card'></i>
                </div>
                <h3 class="font-bold text-2xl md:text-3xl text-gray-800">Business Growth</h3>
            </div>
            <p class="text-gray-500 text-lg md:text-xl leading-relaxed">
                Our platform helps you manage products, reach more customers, and optimize every step of your sales
                process
                — so your business doesn't just survive, but thrives in a competitive market.
            </p>
        </div>
    </section>

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

    <div class="flex items-center ">
        <div class="flex flex-col space-y-4 gap-5 px-12 py-12">
            <div class="flex items-center gap-5 bg-gray-200 rounded-full px-5 py-3 w-max">
                <img src="{{ asset('asset/Delynn.jpeg') }}" alt="Catherine" class="w-14 h-14 rounded-full">
                <div>
                    <p class="font-semibold font-space text-xl">Catherine Bennett</p>
                    <p class="text-gray-500 font-space text-lg">Founder, Creative</p>
                </div>
            </div>
            <div class="flex items-center gap-5">
                <img src="{{ asset('asset/Delynn.jpeg') }}" alt="Catherine" class="w-14 h-14 rounded-full">
                <div>
                    <p class="font-semibold font-space text-xl">Catherine Bennett</p>
                    <p class="text-gray-500 font-space text-lg">Founder, Creative</p>
                </div>
            </div>
            <div class="flex items-center gap-5">
                <img src="{{ asset('asset/Delynn.jpeg') }}" alt="Catherine" class="w-14 h-14 rounded-full">
                <div>
                    <p class="font-semibold font-space text-xl">Catherine Bennett</p>
                    <p class="text-gray-500 font-space text-lg">Founder, Creative</p>
                </div>
            </div>
            </p>
        </div>
        <p class="text-4xl font-space ">
            Initially doubtful, the outcome surpassed all my anticipations. The powerful analytics and reporting
            features offered crucial perspectives on our business metrics, <span class="text-gray-200"> enabling us to
                implement informed </span>
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
