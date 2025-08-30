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


    <div class="max-w-7xl mx-auto px-6 py-8 animate-slideUp" 
         x-data="{ filterOpen: false, activeTab: 'marketplace' }">

        <div class="flex items-center gap-3 bg-gray-100 rounded-xl px-4 py-3 relative">
            <i class="bx bx-search text-gray-400 text-xl"></i>
            <input type="text" placeholder="Search product"
                   class="bg-transparent flex-1 outline-none text-sm font-space md:text-base">

            <button @click="filterOpen = !filterOpen" class="relative">
                <i class="bx bx-filter text-gray-500 text-xl cursor-pointer"></i>
            </button>

            <div x-show="filterOpen" @click.outside="filterOpen = false"
                 class="absolute top-12 right-0 bg-white shadow-lg rounded-lg w-48 p-4 text-sm z-50 font-space">
                <p class="font-semibold mb-2">Filter By</p>
                <label class="flex items-center gap-2 mb-2">
                    <input type="checkbox" class="form-checkbox text-blue-600"> Nike
                </label>
                <label class="flex items-center gap-2 mb-2">
                    <input type="checkbox" class="form-checkbox text-blue-600"> Adidas
                </label>
                <label class="flex items-center gap-2 mb-2">
                    <input type="checkbox" class="form-checkbox text-blue-600"> Puma
                </label>
                <button class="mt-2 w-full bg-blue-600 text-white py-1 rounded-lg text-xs hover:bg-blue-700">
                    Apply Filter
                </button>
            </div>
        </div>

        <div class="flex flex-wrap gap-3 mt-6 text-sm font-medium font-space">
            <button @click="activeTab = 'marketplace'"
                    :class="activeTab === 'marketplace' ? 'bg-blue-600 text-white' : 'bg-gray-100 hover:bg-blue-100 text-gray-600'"
                    class="px-4 py-2 rounded-full transition">Marketplace</button>

            <button @click="activeTab = 'explore'"
                    :class="activeTab === 'explore' ? 'bg-blue-600 text-white' : 'bg-gray-100 hover:bg-blue-100 text-gray-600'"
                    class="px-4 py-2 rounded-full transition">Explore Product</button>

            <button @click="activeTab = 'categories'"
                    :class="activeTab === 'categories' ? 'bg-blue-600 text-white' : 'bg-gray-100 hover:bg-blue-100 text-gray-600'"
                    class="px-4 py-2 rounded-full transition">Product Categories</button>

            <button @click="activeTab = 'promo'"
                    :class="activeTab === 'promo' ? 'bg-blue-600 text-white' : 'bg-gray-100 hover:bg-blue-100 text-gray-600'"
                    class="px-4 py-2 rounded-full transition">Promotions & Discounts</button>

            <button @click="activeTab = 'featured'"
                    :class="activeTab === 'featured' ? 'bg-blue-600 text-white' : 'bg-gray-100 hover:bg-blue-100 text-gray-600'"
                    class="px-4 py-2 rounded-full transition">Featured Products</button>
        </div>

        <div class="py-10" x-show="activeTab === 'marketplace'">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg md:text-xl font-bold">Marketplace Product</h2>
                <a href="#" class="text-sm text-blue-600 hover:underline">View All</a>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                @foreach($products as $product)
                    <div class="border rounded-xl p-4 shadow-sm hover:shadow-md transition transform hover:-translate-y-2 hover:scale-105 duration-300 bg-white">
                        <img src="{{ asset('storage/' . $product->gambar) }}" 
                             alt="{{ $product->judul }}" 
                             class="w-full h-32 object-contain">

                        <h3 class="text-sm font-medium mt-3">{{ $product->judul }}</h3>
                        <p class="text-gray-400 text-xs">
                            <span class="inline-block w-4 h-4 rounded-full border" style="background: {{ $product->warna }}"></span>
                        </p>
                        <p class="mt-2 text-blue-600 font-bold">Rp{{ number_format($product->harga, 0, ',', '.') }}</p>

                        <button class="w-full mt-3 py-2 text-sm border border-blue-600 rounded-lg text-blue-600 hover:bg-blue-600 hover:text-white transition">
                            Buy Now
                        </button>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="py-10" x-show="activeTab === 'explore'">
            <h2 class="text-lg md:text-xl font-bold mb-6">Best Store This Month</h2>
        </div>

        <div class="py-10" x-show="activeTab === 'categories'">
            <h2 class="text-lg md:text-xl font-bold mb-6">Product Categories</h2>
        </div>

        <div class="py-10" x-show="activeTab === 'promo'">
            <h2 class="text-lg md:text-xl font-bold mb-6">Promotions & Discounts</h2>
        </div>

        <div class="py-10" x-show="activeTab === 'featured'">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg md:text-xl font-bold">Featured Products</h2>
                <a href="#" class="text-sm text-blue-600 hover:underline">View All</a>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                @foreach($products as $product)
                    <div class="border rounded-xl p-4 shadow-sm hover:shadow-md transition transform hover:-translate-y-2 hover:scale-105 duration-300 bg-white">
                        <img src="{{ asset('storage/' . $product->gambar) }}" 
                             alt="{{ $product->judul }}" 
                             class="w-full h-32 object-contain">

                        <h3 class="text-sm font-medium mt-3">{{ $product->judul }}</h3>
                        <p class="text-gray-400 text-xs">
                            <span class="inline-block w-4 h-4 rounded-full border" style="background: {{ $product->warna }}"></span>
                        </p>
                        <p class="mt-2 text-blue-600 font-bold">Rp{{ number_format($product->harga, 0, ',', '.') }}</p>

                        <button class="w-full mt-3 py-2 text-sm border border-blue-600 rounded-lg text-blue-600 hover:bg-blue-600 hover:text-white transition">
                            Buy Now
                        </button>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <footer class="bg-gray-50 text-gray-700 animate-slideUp font-space">
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
