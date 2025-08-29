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
</head>

<body class="font-space">

    <nav class="flex items-center justify-between px-20 h-20">
        <div class="text-2xl font-bold text-black flex items-center gap-4">
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
            <a href="#" class="text-black hover:text-blue-600">About</a>
            <a href="#" class="text-black hover:text-blue-600">Pricing</a>
            <a href="#" class="text-black hover:text-blue-600">Contact</a>
        </div>

        <div class="flex gap-4">
            <a href="#" class="border border-blue-600 text-blue-600 px-6 py-2">Login</a>
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
                <a href="#" class="bg-blue-600 px-6 py-4 text-white rounded-3xl font-medium">Get Started Now</a>

                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/53.jpg"
                        class="w-10 h-10 rounded-full border-2 border-white" alt="client">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg"
                        class="w-10 h-10 rounded-full border-2 border-white -ml-3" alt="client">
                    <img src="https://randomuser.me/api/portraits/men/12.jpg"
                        class="w-10 h-10 rounded-full border-2 border-white -ml-3" alt="client">
                    <div class="w-10 h-10 -ml-3 flex items-center justify-center rounded-full border-2 border-white bg-gray-200 text-gray-700">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>

                <div>
                    <p class="text-xl font-semibold">3.2m</p>
                    <p class="text-gray-400 text-sm">Success clients</p>
                </div>
            </div>
        </div>

        <img class="w-1/2" src="{{ asset('asset/Bg.png') }}" alt="Background">
    </div>
    <section class="mt-24 text-center">
        <h1 class="text-4xl font-semibold text-gray-400">
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

</body>
</html>
