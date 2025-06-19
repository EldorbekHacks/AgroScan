<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroScan</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>tailwind.config = { theme: { extend: { colors: { primary: '#4CAF50', secondary: '#8BC34A' }, borderRadius: { 'none': '0px', 'sm': '4px', DEFAULT: '8px', 'md': '12px', 'lg': '16px', 'xl': '20px', '2xl': '24px', '3xl': '32px', 'full': '9999px', 'button': '8px' } } } }</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-reveal {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .banner-slider {
            background-image: url('https://readdy.ai/api/search-image?query=beautiful%2520agricultural%2520landscape%2520with%2520green%2520fields%2520of%2520wheat%2520and%2520cotton%2520in%2520Uzbekistan%252C%2520with%2520mountains%2520in%2520background%252C%2520clear%2520blue%2520sky%252C%2520vibrant%2520colors%252C%2520high%2520quality%2520professional%2520photography%252C%2520cinematic%2520lighting&width=1920&height=800&seq=1&orientation=landscape');
            background-size: cover;
            background-position: center;
        }

        input[type="search"]::-webkit-search-decoration,
        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-results-button,
        input[type="search"]::-webkit-search-results-decoration {
            display: none;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: white;
            /* Orqa fon rangi */
            padding: 4px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 2;

            /* Navbar boshqa elementlar ustida turishi uchun */
        }

        body {
            padding-top: 70px;
            /* Navbar balandligi hisobiga kontentni pastga surish */
        }

    </style>
</head>

<body class="bg-gray-50">
<header class="bg-white shadow-sm">
    <div class="navbar">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/header.png') }}" alt="Logo" class="h-20 w-auto" />

            </div>
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#" class="font-medium text-primary">Bosh sahifa</a>

                <a href="#agrotexnikalar"
                   class="font-medium text-gray-700 hover:text-primary transition">Agrotexnika</a>
                <a href="#" class="font-medium text-white-700 hover:text-primary transition">Ekinlar</a>
                <a href="#maslaxatlar"
                   class="font-medium text-gray-700 hover:text-primary transition">Maslahatlar</a>

                <a href="/login" class="font-medium text-gray-700 hover:text-primary transition">Royhatdan
                    o'tish</a>
            </nav>
        </div>
    </div>


</header>
<!-- Banner -->
<section class="banner-slider relative h-[500px] flex items-center" id="banner-slider">
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-2xl">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6" id="slider-title">Qishloq xo'jaligi
                mahsulotlarining eng yaxshi tanlanmasi</h2>
            <p class="text-xl text-white mb-8" id="slider-description">Yuqori sifatli urug'lar, ko'chatlar va
                agrotexnik maslahatlar bilan sizning hosilingiz mo'l bo'lsin</p>

            <button
                class="bg-primary hover:bg-primary/90 text-white px-8 py-3 rounded-button font-medium text-lg shadow-lg transition whitespace-nowrap">Katalogga
                o'tish</button>
        </div>
    </div>
    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2" id="slider-dots">
        <button class="w-3 h-3 rounded-full bg-white bg-opacity-100" id="dot-1"></button>
        <button class="w-3 h-3 rounded-full bg-white bg-opacity-50" id="dot-2"></button>
        <button class="w-3 h-3 rounded-full bg-white bg-opacity-50" id="dot-3"></button>
    </div>
</section>
<!-- Categories -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">O'simliklar kategoriyalari</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Category 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105">
                <div class="h-48 overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=golden%2520wheat%2520fields%2520in%2520Uzbekistan%2520during%2520harvest%2520season%252C%2520close-up%2520of%2520ripe%2520wheat%2520ears%252C%2520agricultural%2520landscape%252C%2520natural%2520lighting%252C%2520professional%2520photography%252C%2520high%2520resolution%252C%2520vibrant%2520colors&width=600&height=400&seq=2&orientation=landscape"
                         alt="Don ekinlari" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Don ekinlari</h3>
                    <p class="text-gray-600 mb-4">Bug'doy, arpa, sholi va boshqa don ekinlari</p>
                    <a href="#" class="text-primary font-medium flex items-center">
                        Ko'rish
                        <div class="w-5 h-5 ml-1 flex items-center justify-center">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Category 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105">
                <div class="h-48 overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=fresh%2520vegetables%2520growing%2520in%2520Uzbek%2520garden%252C%2520tomatoes%252C%2520cucumbers%252C%2520peppers%252C%2520organic%2520farming%252C%2520vibrant%2520colors%252C%2520natural%2520lighting%252C%2520professional%2520photography%252C%2520high%2520resolution&width=600&height=400&seq=3&orientation=landscape"
                         alt="Sabzavotlar" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Sabzavotlar</h3>
                    <p class="text-gray-600 mb-4">Pomidor, bodring, piyoz va boshqa sabzavotlar</p>
                    <a href="#" class="text-primary font-medium flex items-center">
                        Ko'rish
                        <div class="w-5 h-5 ml-1 flex items-center justify-center">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Category 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105">
                <div class="h-48 overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=fruit%2520orchard%2520in%2520Uzbekistan%252C%2520ripe%2520apricots%252C%2520peaches%2520and%2520apples%2520on%2520trees%252C%2520sunny%2520day%252C%2520natural%2520lighting%252C%2520professional%2520photography%252C%2520high%2520resolution%252C%2520vibrant%2520colors&width=600&height=400&seq=4&orientation=landscape"
                         alt="Mevali" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Mevali daraxtlar</h3>
                    <p class="text-gray-600 mb-4">Olma, o'rik, shaftoli va boshqa mevali daraxtlar</p>
                    <a href="#" class="text-primary font-medium flex items-center">
                        Ko'rish
                        <div class="w-5 h-5 ml-1 flex items-center justify-center">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Category 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105">
                <div class="h-48 overflow-hidden">

                    <img src="https://readdy.ai/api/search-image?query=cotton%2520fields%2520in%2520Uzbekistan%252C%2520white%2520cotton%2520bolls%2520ready%2520for%2520harvest%252C%2520agricultural%2520landscape%252C%2520natural%2520lighting%252C%2520professional%2520photography%252C%2520high%2520resolution%252C%2520vibrant%2520colors&width=600&height=400&seq=5&orientation=landscape"
                         alt="Texnik ekinlar" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Texnik ekinlar</h3>
                    <p class="text-gray-600 mb-4">Paxta, kanop, kungaboqar va boshqa texnik ekinlar</p>
                    <a href="#" class="text-primary font-medium flex items-center">
                        Ko'rish
                        <div class="w-5 h-5 ml-1 flex items-center justify-center">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Articles -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="agrotexnikalar" id="agrotexnikalar">
            <h2 class="text-3xl font-bold text-center mb-12">Agro texnikalar</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-52 overflow-hidden">
                        <img src="https://readdy.ai/api/search-image?query=farmer%2520using%2520modern%2520irrigation%2520system%2520in%2520Uzbekistan%252C%2520drip%2520irrigation%2520in%2520vegetable%2520field%252C%2520sustainable%2520agriculture%252C%2520natural%2520lighting%252C%2520professional%2520photography&width=600&height=400&seq=6&orientation=landscape"
                             alt="Sug'orish tizimlari" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-6">
                            <span
                                class="text-xs font-medium text-primary bg-primary/10 px-3 py-1 rounded-full">Agrotexnika</span>
                        <h3 class="text-xl font-semibold mt-4 mb-2">Zamonaviy sug'orish tizimlari: tomchilatib
                            sug'orish
                            afzalliklari</h3>
                        <p class="text-gray-600 mb-4">Tomchilatib sug'orish tizimi suv resurslarini tejash va
                            hosildorlikni oshirish uchun eng samarali usullardan biri hisoblanadi...</p>
                        <button
                            class="text-primary font-medium flex items-center !rounded-button whitespace-nowrap">
                            O'qish
                            <div class="w-5 h-5 ml-1 flex items-center justify-center">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <!-- Article 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-52 overflow-hidden">
                        <img src="https://readdy.ai/api/search-image?query=organic%2520pest%2520control%2520in%2520Uzbek%2520garden%252C%2520farmer%2520inspecting%2520plants%2520for%2520pests%252C%2520natural%2520methods%2520of%2520pest%2520control%252C%2520sustainable%2520agriculture%252C%2520professional%2520photography&width=600&height=400&seq=7&orientation=landscape"
                             alt="Zararkunandalarga qarshi kurash" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-6">
                            <span
                                class="text-xs font-medium text-primary bg-primary/10 px-3 py-1 rounded-full">Maslahatlar</span>
                        <h3 class="text-xl font-semibold mt-4 mb-2">Organik usulda zararkunandalarga qarshi
                            kurashish
                            yo'llari</h3>
                        <p class="text-gray-600 mb-4">Kimyoviy moddalardan foydalanmasdan, tabiiy usullar bilan
                            bog'ingizdagi zararkunandalarga qarshi samarali kurashish mumkin...</p>
                        <button
                            class="text-primary font-medium flex items-center !rounded-button whitespace-nowrap">
                            O'qish
                            <div class="w-5 h-5 ml-1 flex items-center justify-center">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <!-- Article 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-52 overflow-hidden">
                        <img src="https://readdy.ai/api/search-image?query=soil%2520testing%2520in%2520Uzbekistan%2520farm%252C%2520farmer%2520analyzing%2520soil%2520quality%252C%2520agricultural%2520research%252C%2520close-up%2520of%2520soil%2520samples%252C%2520professional%2520photography%252C%2520natural%2520lighting&width=600&height=400&seq=8&orientation=landscape"
                             alt="Tuproq tahlili" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-6">
                            <span
                                class="text-xs font-medium text-primary bg-primary/10 px-3 py-1 rounded-full">Agrotexnika</span>

                        <h3 class="text-xl font-semibold mt-4 mb-2">Tuproq tahlili: hosildorlikni oshirishning
                            kaliti
                        </h3>
                        <p class="text-gray-600 mb-4">Tuproq tarkibini bilish va uning pH darajasini aniqlash orqali
                            siz
                            o'simliklaringiz uchun eng maqbul sharoitlarni yaratishingiz mumkin...</p>
                        <button
                            class="text-primary font-medium flex items-center !rounded-button whitespace-nowrap">
                            O'qish
                            <div class="w-5 h-5 ml-1 flex items-center justify-center">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- About Us Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Biz haqimizda</h2>
        <div class="max-w-4xl mx-auto text-center mb-12">
            <p class="text-lg text-gray-600 mb-6">AgroScan - O'zbekistonning qishloq xo'jaligi sohasida 15
                yillik tajribaga ega bo'lgan yetakchi kompaniya. Biz fermerlar va dehqonlarga yuqori sifatli
                urug'lar, ko'chatlar va zamonaviy agrotexnik yechimlarni taqdim etamiz.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="ri-team-line text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">50+ Mutaxassislar</h3>
                    <p class="text-gray-600">Malakali agronomlar va qishloq xo'jaligi mutaxassislari jamoasi</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="ri-store-line text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">1000+ Mahsulotlar</h3>
                    <p class="text-gray-600">Keng assortimentdagi urug'lar va o'simliklar</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="ri-user-heart-line text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">10000+ Mijozlar</h3>
                    <p class="text-gray-600">Mamnun mijozlar va hamkorlar</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Crops Information -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="ekinlar" id="ekinlar">
            <h2 class="text-3xl font-bold text-center mb-12">Ekinlar haqida ma'lumot</h2>
            <!-- Crop 1 -->
            <div class="flex flex-col md:flex-row items-center gap-8 mb-16">
                <div class="w-full md:w-1/2">
                    <img src="https://readdy.ai/api/search-image?query=close%2520up%2520of%2520golden%2520wheat%2520field%2520in%2520Uzbekistan%252C%2520ripe%2520wheat%2520ears%2520ready%2520for%2520harvest%252C%2520beautiful%2520sunset%2520lighting%252C%2520professional%2520agricultural%2520photography&width=800&height=600&seq=14&orientation=landscape"
                         alt="Bug'doy" class="w-full h-[400px] object-cover object-top rounded-lg shadow-lg">
                </div>
                <div class="w-full md:w-1/2">
                    <h3 class="text-2xl font-semibold mb-4">Bug'doy</h3>
                    <p class="text-gray-600 mb-4">Bug'doy - O'zbekistonning asosiy don ekinlaridan biri bo'lib,
                        mamlakat
                        oziq-ovqat xavfsizligining asosini tashkil etadi. Kuzgi va bahorgi navlari mavjud bo'lib,
                        kuzgi
                        bug'doy eng ko'p ekiladi.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>Ekish muddati:
                            Kuzgi - sentabr-oktabr, Bahorgi - mart</li>
                        <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>O'sish davri:
                            180-220 kun</li>
                        <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>Hosildorlik:
                            40-60
                            s/ga</li>
                        <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>Sug'orish: 3-4
                            marta mavsumda</li>
                    </ul>
                </div>
            </div>
            <!-- Crop 2 -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-8 mb-16">
                <div class="w-full md:w-1/2">

                    <img src="https://readdy.ai/api/search-image?query=cotton%2520field%2520in%2520Uzbekistan%252C%2520white%2520fluffy%2520cotton%2520bolls%2520ready%2520for%2520harvest%252C%2520beautiful%2520morning%2520light%252C%2520professional%2520agricultural%2520photography&width=800&height=600&seq=15&orientation=landscape"
                         alt="Paxta" class="w-full h-[400px] object-cover object-top rounded-lg shadow-lg">
                </div>
                <div class="w-full md:w-1/2">
                    <h3 class="text-2xl font-semibold mb-4">Paxta</h3>
                    <p class="text-gray-600 mb-4">Paxta O'zbekiston qishloq xo'jaligining asosiy texnik ekinlaridan
                        biri
                        hisoblanadi. Mamlakatimiz dunyoning yetakchi paxta eksport qiluvchi davlatlaridan biridir.
                    </p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>Ekish muddati:
                            Aprel oyi</li>
                        <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>O'sish davri:
                            130-150 kun</li>
                        <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>Hosildorlik:
                            25-35
                            s/ga</li>
                        <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>Sug'orish: 5-6
                            marta mavsumda</li>
                    </ul>
                </div>
            </div>
            <!-- Crop 3 -->
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="w-full md:w-1/2">
                    <img src="https://readdy.ai/api/search-image?query=rice%2520field%2520in%2520Uzbekistan%252C%2520green%2520paddy%2520field%2520with%2520water%252C%2520beautiful%2520landscape%252C%2520mountains%2520in%2520background%252C%2520professional%2520agricultural%2520photography&width=800&height=600&seq=16&orientation=landscape"
                         alt="Sholi" class="w-full h-[400px] object-cover object-top rounded-lg shadow-lg">
                </div>
                <div class="w-full md:w-1/2">
                    <h3 class="text-2xl font-semibold mb-4">Sholi</h3>
                    <p class="text-gray-600 mb-4">Sholi O'zbekistonning janubiy viloyatlarida keng tarqalgan ekin
                        turi.
                        Asosan Surxondaryo, Qashqadaryo va Toshkent viloyatlarida yetishtiriladi.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>Ekish muddati:
                            May-iyun</li>
                        <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>O'sish davri:
                            115-130 kun</li>
                        <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>Hosildorlik:
                            45-60
                            s/ga</li>
                        <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>Sug'orish:
                            Doimiy
                            suv ostida</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Video Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2">
                <div class="relative rounded-lg overflow-hidden shadow-lg group hover:shadow-2xl transition-all duration-500"
                     style="padding-top: 56.25%;">
                    <video
                        class="absolute top-0 left-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700"
                        autoplay loop muted playsinline preload="auto"
                        poster="https://readdy.ai/api/search-image?query=modern%2520tractor%2520plowing%2520field%2520in%2520Uzbekistan%252C%2520agricultural%2520machinery%2520at%2520work%252C%2520dramatic%2520lighting%252C%2520professional%2520photography&width=1280&height=720&seq=17&orientation=landscape">
                        <source src="https://public.readdy.ai/assets/videos/tractor_plowing.mp4" type="video/mp4">
                        <source src="https://public.readdy.ai/assets/videos/tractor_plowing.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <button
                        class="absolute bottom-4 right-4 bg-white/90 hover:bg-white text-gray-800 p-2 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-2 group-hover:translate-y-0"
                        onclick="toggleMute(this)">
                        <i class="ri-volume-mute-line text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-bold mb-6">Zamonaviy yerga ishlov berish texnologiyalari</h2>

                <p class="text-gray-600 mb-6">Zamonaviy traktorlar va qishloq xo'jaligi texnikalari yordamida yerga
                    ishlov berish jarayoni ancha osonlashdi. Bu uskunalar yordamida tuproqni yumshatish, tekislash
                    va ekishga tayyorlash ishlari yuqori samaradorlik bilan amalga oshiriladi.</p>
                <ul class="space-y-4 text-gray-600">
                    <li class="flex items-start">
                        <div class="w-6 h-6 flex items-center justify-center text-primary mt-1">
                            <i class="ri-check-line"></i>
                        </div>
                        <span class="ml-2">Chuqur haydash orqali tuproq strukturasini yaxshilash</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 flex items-center justify-center text-primary mt-1">
                            <i class="ri-check-line"></i>
                        </div>
                        <span class="ml-2">GPS texnologiyalari yordamida aniq dehqonchilik usullarini
                                qo'llash</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 flex items-center justify-center text-primary mt-1">
                            <i class="ri-check-line"></i>
                        </div>
                        <span class="ml-2">Minimal yerga ishlov berish orqali tuproq eroziyasini kamaytirish</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 flex items-center justify-center text-primary mt-1">
                            <i class="ri-check-line"></i>
                        </div>
                        <span class="ml-2">Resurslarni tejash va hosildorlikni oshirish</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Tips and Advice -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="maslaxatlar" id="maslaxatlar">
            <h2 class="text-3xl font-bold text-center mb-12">Maslahatlar va ko'rsatmalar</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Seasonal Tips -->
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-primary/10 rounded-full text-primary">
                            <i class="ri-calendar-line text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-semibold ml-4">Mavsumiy maslahatlar</h3>
                    </div>
                    <div class="space-y-6">
                        <div class="border-b border-gray-100 pb-4">
                            <h4 class="font-medium text-lg mb-2">Bahor: Ekish mavsumi</h4>
                            <p class="text-gray-600">Bahor oylarida tuproqni tayyorlash, urug'larni ekish va
                                ko'chatlarni o'tqazish bo'yicha maslahatlar.</p>
                            <a href="#" class="text-primary font-medium mt-2 inline-block">Batafsil</a>
                        </div>
                        <div class="border-b border-gray-100 pb-4">
                            <h4 class="font-medium text-lg mb-2">Yoz: Parvarish va himoya</h4>
                            <p class="text-gray-600">Yoz oylarida o'simliklarni sug'orish, oziqlantirish va
                                zararkunandalardan himoya qilish bo'yicha ko'rsatmalar.</p>
                            <a href="#" class="text-primary font-medium mt-2 inline-block">Batafsil</a>
                        </div>
                        <div>
                            <h4 class="font-medium text-lg mb-2">Kuz: Hosil yig'ish va saqlash</h4>
                            <p class="text-gray-600">Kuz oylarida hosilni yig'ish, saqlash va keyingi mavsumga
                                tayyorgarlik ko'rish bo'yicha tavsiyalar.</p>
                            <a href="#" class="text-primary font-medium mt-2 inline-block">Batafsil</a>
                        </div>
                    </div>
                </div>
                <!-- Expert Advice -->
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-primary/10 rounded-full text-primary">
                            <i class="ri-user-star-line text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-semibold ml-4">Ekspertlar tavsiyalari</h3>
                    </div>
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="w-16 h-16 rounded-full overflow-hidden flex-shrink-0">
                                <img src="https://readdy.ai/api/search-image?query=professional%2520Uzbek%2520male%2520agricultural%2520expert%2520portrait%252C%2520middle-aged%252C%2520wearing%2520casual%2520professional%2520clothes%252C%2520neutral%2520background%252C%2520friendly%2520expression%252C%2520headshot&width=200&height=200&seq=9&orientation=squarish"
                                     alt="Akmal Karimov" class="w-full h-full object-cover">
                            </div>
                            <div class="ml-4">
                                <h4 class="font-medium text-lg">Akmal Karimov</h4>
                                <p class="text-gray-500 text-sm mb-2">Qishloq xo'jaligi fanlari doktori</p>
                                <p class="text-gray-600">"Tuproqning sifati va uning tarkibi o'simliklarning o'sishi
                                    uchun eng muhim omillardan biridir."</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-16 h-16 rounded-full overflow-hidden flex-shrink-0">

                                <img src="https://readdy.ai/api/search-image?query=professional%2520Uzbek%2520female%2520agricultural%2520expert%2520portrait%252C%2520middle-aged%252C%2520wearing%2520casual%2520professional%2520clothes%252C%2520neutral%2520background%252C%2520friendly%2520expression%252C%2520headshot&width=200&height=200&seq=10&orientation=squarish"
                                     alt="Dilnoza Rahimova" class="w-full h-full object-cover">
                            </div>
                            <div class="ml-4">
                                <h4 class="font-medium text-lg">Dilnoza Rahimova</h4>
                                <p class="text-gray-500 text-sm mb-2">Agronom</p>
                                <p class="text-gray-600">"Organik dehqonchilik nafaqat ekologik jihatdan foydali,
                                    balki
                                    uzoq muddatda iqtisodiy jihatdan ham samaralidir."</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-16 h-16 rounded-full overflow-hidden flex-shrink-0">
                                <img src="https://readdy.ai/api/search-image?query=professional%2520Uzbek%2520male%2520agricultural%2520expert%2520portrait%252C%2520young%252C%2520wearing%2520casual%2520professional%2520clothes%252C%2520neutral%2520background%252C%2520friendly%2520expression%252C%2520headshot&width=200&height=200&seq=11&orientation=squarish"
                                     alt="Bobur Aliyev" class="w-full h-full object-cover">
                            </div>
                            <div class="ml-4">
                                <h4 class="font-medium text-lg">Bobur Aliyev</h4>
                                <p class="text-gray-500 text-sm mb-2">Fermer va tadqiqotchi</p>
                                <p class="text-gray-600">"Zamonaviy texnologiyalar va an'anaviy dehqonchilik
                                    usullarini
                                    birlashtirish eng yaxshi natijalarni beradi."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Weather Section -->
<section class="py-12 bg-gradient-to-r from-blue-500 to-blue-400">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-white text-center mb-10">Ob-havo ma'lumotlari</h2>
        <div class="bg-white bg-opacity-90 rounded-lg shadow-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Current Weather -->
                <div class="flex flex-col items-center">
                    <h3 class="text-xl font-semibold mb-4">Bugungi ob-havo</h3>
                    <div class="text-6xl text-blue-500 mb-2">
                        <i class="ri-sun-line"></i>
                    </div>
                    <div class="text-4xl font-bold mb-2">28°C</div>
                    <p class="text-gray-600">Toshkent, 23-may, 2025</p>
                    <div class="mt-4 grid grid-cols-2 gap-x-8 gap-y-2">
                        <div class="flex items-center">
                            <div class="w-6 h-6 flex items-center justify-center text-blue-500">
                                <i class="ri-drop-line"></i>
                            </div>
                            <span class="ml-2 text-gray-600">Namlik: 45%</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-6 h-6 flex items-center justify-center text-blue-500">
                                <i class="ri-windy-line"></i>
                            </div>
                            <span class="ml-2 text-gray-600">Shamol: 8 km/s</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-6 h-6 flex items-center justify-center text-blue-500">
                                <i class="ri-cloud-line"></i>
                            </div>
                            <span class="ml-2 text-gray-600">Bulutlar: 10%</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-6 h-6 flex items-center justify-center text-blue-500">
                                <i class="ri-rainy-line"></i>
                            </div>
                            <span class="ml-2 text-gray-600">Yog'in: 0 mm</span>
                        </div>
                    </div>
                </div>
                <!-- Weekly Forecast -->
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-center">Haftalik prognoz</h3>
                    <div class="grid grid-cols-5 gap-2">
                        <div class="flex flex-col items-center p-2 rounded-lg hover:bg-blue-50">
                            <span class="text-sm font-medium">Shan</span>
                            <div class="w-8 h-8 my-2 flex items-center justify-center text-blue-500">
                                <i class="ri-sun-line"></i>
                            </div>
                            <span class="font-bold">29°C</span>
                        </div>
                        <div class="flex flex-col items-center p-2 rounded-lg hover:bg-blue-50">
                            <span class="text-sm font-medium">Yak</span>
                            <div class="w-8 h-8 my-2 flex items-center justify-center text-blue-500">
                                <i class="ri-sun-cloudy-line"></i>
                            </div>
                            <span class="font-bold">27°C</span>
                        </div>
                        <div class="flex flex-col items-center p-2 rounded-lg hover:bg-blue-50">
                            <span class="text-sm font-medium">Dush</span>
                            <div class="w-8 h-8 my-2 flex items-center justify-center text-blue-500">
                                <i class="ri-cloudy-line"></i>
                            </div>
                            <span class="font-bold">25°C</span>
                        </div>
                        <div class="flex flex-col items-center p-2 rounded-lg hover:bg-blue-50">
                            <span class="text-sm font-medium">Sesh</span>

                            <div class="w-8 h-8 my-2 flex items-center justify-center text-blue-500">
                                <i class="ri-sun-line"></i>
                            </div>
                            <span class="font-bold">28°C</span>
                        </div>
                        <div class="flex flex-col items-center p-2 rounded-lg hover:bg-blue-50">
                            <span class="text-sm font-medium">Chor</span>
                            <div class="w-8 h-8 my-2 flex items-center justify-center text-blue-500">
                                <i class="ri-sun-line"></i>
                            </div>
                            <span class="font-bold">30°C</span>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="#" class="text-blue-500 font-medium">To'liq prognozni ko'rish</a>
                    </div>
                </div>
                <!-- Agricultural Indicators -->
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-center">Qishloq xo'jaligi ko'rsatkichlari</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Tuproq harorati:</span>
                            <span class="font-medium">22°C</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Tuproq namligi:</span>
                            <span class="font-medium">65%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">UV indeksi:</span>
                            <span class="font-medium">7 (Yuqori)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Sug'orish tavsiyasi:</span>
                            <span class="font-medium text-primary">Tavsiya etiladi</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Ekin ekish sharoiti:</span>
                            <span class="font-medium text-green-600">Qulay</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="bg-gray-800 text-white pt-16 pb-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- About -->
            <div>
                <h3 class="text-xl font-bold mb-4">Biz haqimizda</h3>
                <p class="text-gray-300 mb-4">AgroScan - O'zbekistondagi dehqonlar va bog'bonlar uchun
                    yuqori sifatli qishloq xo'jaligi mahsulotlari va maslahatlar taqdim etuvchi platforma.</p>
                <div class="flex space-x-4">
                    <a href="#"
                       class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition">
                        <i class="ri-facebook-fill"></i>
                    </a>
                    <a href="#"
                       class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="#"
                       class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition">
                        <i class="ri-telegram-line"></i>
                    </a>
                    <a href="#"
                       class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition">
                        <i class="ri-youtube-line"></i>
                    </a>
                </div>
            </div>
            <!-- Contact -->
            <div>
                <h3 class="text-xl font-bold mb-4">Bog'lanish</h3>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <div class="w-5 h-5 mt-1 flex items-center justify-center text-primary">
                            <i class="ri-map-pin-line"></i>
                        </div>
                        <span class="ml-3 text-gray-300">Toshkent sh. Yunusobod tumani 35-uy</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center text-primary">
                            <i class="ri-phone-line"></i>
                        </div>
                        <span class="ml-3 text-gray-300">+998 90 123 45 67</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center text-primary">
                            <i class="ri-mail-line"></i>
                        </div>
                        <span class="ml-3 text-gray-300">info@agroscan.uz</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 flex items-center justify-center text-primary">
                            <i class="ri-time-line"></i>
                        </div>
                        <span class="ml-3 text-gray-300">Dushanba - Shanba: 9:00 - 18:00</span>
                    </div>
                </div>
            </div>
            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-bold mb-4">Tezkor havolalar</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-primary transition">Bosh sahifa</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-primary transition">O'simliklar katalogi</a>
                    </li>
                    <li><a href="#" class="text-gray-300 hover:text-primary transition">Agrotexnika</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-primary transition">Maslahatlar</a></li>

                    <li><a href="#" class="text-gray-300 hover:text-primary transition">Bog'lanish</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-primary transition">FAQ</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-primary transition">Maxfiylik siyosati</a></li>
                </ul>
            </div>
            <!-- Newsletter -->
            <div>
                <h3 class="text-xl font-bold mb-4">Yangiliklardan xabardor bo'ling</h3>
                <p class="text-gray-300 mb-4">Yangi maqolalar va maslahatlardan xabardor bo'lish uchun ro'yxatdan
                    o'ting.</p>
                <form class="space-y-3">
                    <div class="relative">
                        <input type="email" placeholder="Email manzilingiz"
                               class="w-full px-4 py-3 rounded-lg bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:border-primary">
                    </div>
                    <button type="submit"
                            class="w-full bg-primary hover:bg-primary/90 text-white px-4 py-3 rounded-button font-medium transition whitespace-nowrap">Obuna
                        bo'lish</button>
                </form>
            </div>
        </div>
        <div class="border-t border-gray-700 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 mb-4 md:mb-0">© 2025 AgroScan. Barcha huquqlar himoyalangan.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-primary transition">Foydalanish shartlari</a>
                    <a href="#" class="text-gray-400 hover:text-primary transition">Maxfiylik siyosati</a>
                    <a href="#" class="text-gray-400 hover:text-primary transition">Yordam</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script id="search-functionality">
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.querySelector('input[type="search"]');
        searchInput.addEventListener('focus', function () {
            this.classList.add('border-primary');
        });
        searchInput.addEventListener('blur', function () {
            this.classList.remove('border-primary');
        });
    });
</script>
<script id="mobile-menu">
    document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.querySelector('.ri-menu-line').parentElement;
        // Mobile menu functionality would be implemented here
        menuButton.addEventListener('click', function () {
            // Toggle mobile menu
            console.log('Mobile menu toggled');
        });
    });
</script>
<script id="slider-functionality">
    document.addEventListener('DOMContentLoaded', function () {
        const video = document.querySelector('video');
        if (video) {
            video.play().catch(function (error) {
                console.log("Video autoplay failed:", error);
            });
        }
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-reveal');
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });
        document.querySelectorAll('section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(50px)';
            section.style.transition = 'all 0.8s ease-out';
            observer.observe(section);
        });
        function toggleMute(button) {
            const video = button.closest('.group').querySelector('video');
            if (video) {
                video.muted = !video.muted;
                button.innerHTML = video.muted ?
                    '<i class="ri-volume-mute-line text-xl"></i>' :
                    '<i class="ri-volume-up-line text-xl"></i>';
            }
        }
        window.toggleMute = toggleMute;
        const sliderContent = [
            {
                title: "Qishloq xo'jaligi mahsulotlarining eng yaxshi tanlanmasi",
                description: "Yuqori sifatli urug'lar, ko'chatlar va agrotexnik maslahatlar bilan sizning hosilingiz mo'l bo'lsin",
                background: "https://readdy.ai/api/search-image?query=beautiful%2520agricultural%2520landscape%2520with%2520green%2520fields%2520of%2520wheat%2520and%2520cotton%2520in%2520Uzbekistan%252C%2520with%2520mountains%2520in%2520background%252C%2520clear%2520blue%2520sky%252C%2520vibrant%2520colors%252C%2520high%2520quality%2520professional%2520photography%252C%2520cinematic%2520lighting&width=1920&height=800&seq=1&orientation=landscape"
            },
            {
                title: "Zamonaviy agrotexnologiyalar va innovatsion yechimlar",
                description: "Eng so'nggi texnologiyalar va ilg'or usullar yordamida hosildorlikni oshiring",

                background: "https://readdy.ai/api/search-image?query=modern%2520agricultural%2520technology%2520in%2520use%2520in%2520Uzbekistan%252C%2520drone%2520spraying%2520pesticides%2520on%2520cotton%2520field%252C%2520sunset%2520lighting%252C%2520dramatic%2520sky%252C%2520professional%2520photography%252C%2520cinematic%2520style&width=1920&height=800&seq=12&orientation=landscape"
            },
            {
                title: "Organik dehqonchilik - kelajak yo'li",
                description: "Tabiiy usullar va ekologik toza mahsulotlar yetishtirish bo'yicha professional maslahatlar",
                background: "https://readdy.ai/api/search-image?query=organic%2520farming%2520in%2520Uzbekistan%252C%2520farmers%2520working%2520in%2520vegetable%2520garden%252C%2520sustainable%2520agriculture%252C%2520beautiful%2520morning%2520light%252C%2520mountains%2520in%2520background%252C%2520professional%2520photography&width=1920&height=800&seq=13&orientation=landscape"
            }
        ];
        const slider = document.getElementById('banner-slider');
        const title = document.getElementById('slider-title');
        const description = document.getElementById('slider-description');
        const dots = document.getElementById('slider-dots').children;
        let currentSlide = 0;
        function updateSlide(index) {
            currentSlide = index;
            slider.style.backgroundImage = `url('${sliderContent[index].background}')`;
            title.textContent = sliderContent[index].title;
            description.textContent = sliderContent[index].description;
            for (let i = 0; i < dots.length; i++) {
                dots[i].classList.remove('bg-opacity-100');
                dots[i].classList.add('bg-opacity-50');
            }
            dots[index].classList.remove('bg-opacity-50');
            dots[index].classList.add('bg-opacity-100');
        }
        for (let i = 0; i < dots.length; i++) {
            dots[i].addEventListener('click', () => updateSlide(i));
        }
        setInterval(() => {
            let nextSlide = (currentSlide + 1) % sliderContent.length;
            updateSlide(nextSlide);
        }, 5000);
    });
</script>
</body>

</html>
