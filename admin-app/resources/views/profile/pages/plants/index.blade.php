
<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroSmart - Qishloq xo'jaligi platformasi</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2E7D32',
                        secondary: '#81C784'
                    },
                    borderRadius: {
                        button: '8px'
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 80px;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 0px 2px;
            backdrop-filter: blur(2px);
            z-index: 2;
        }

        .navbar .container {
            width: 1300px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;

        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            width: 80px;
            height: auto;
        }


        .nav-links {
            display: flex;
            gap: 25px;
            padding: 10px;
            justify-content: center;
        }

        .menu-icon,
        .close-icon {
            display: none;
            font-size: 30px;
            padding: 10px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 15px;
            z-index: 1001;
        }

        .nav-links a {
            text-decoration: none;
            font-size: 18px;
            color: black;
            margin-left: 4rem;
            font-weight: 500;
            transition: 0.3s ease;
            border-bottom: 3px solid transparent;
        }

        .nav-links a:hover,
        .nav-links a:active {
            color: red;
            border-bottom: 3px solid var(--main-color);
        }

        .osimlik {
            margin-top: 80px;
        }

        .footer {
            background-color: #e3f3e4;
            padding: 40px 20px;
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: #222;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: auto;
        }

        .footer-section h3 {
            margin-top: 0;
            font-size: 18px;
        }

        .footer-section h4 {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-section a {
            text-decoration: none;
            color: #222;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }

        .footer-section p {
            margin: 5px 0;
        }

        .footer-logo {
            width: 60px;
            margin-bottom: 10px;
        }

        .footer-bottom {
            border-top: 1px solid #bbb;
            margin-top: 30px;
            padding-top: 15px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: #555;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .footer-links a {
            margin-left: 15px;
            color: #555;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
<header class="navbar">
    <div class="container">
        <div class="logo">
            <a href="/dashboard"><img src="{{ asset('images/header.png') }}" alt="AgroScan Logo" /></a>
        </div>
        <!-- Menu icon (hamburger) -->
        <div class="menu-icon" onclick="toggleMenu()">☰</div>

        <!-- Close icon (X) -->
        <div class="close-icon" onclick="toggleMenu()">✕</div>

        <!-- Navigation links -->
        <nav class="nav-links">
            <a href="{{ route('video') }}">Video darslar</a>
            <a href="{{ route('plant') }}">O‘simliklar</a>
            <a href="{{ route('kasallik') }}">Kasalliklar</a>
            <a href="{{ route('taqvim') }}">Taqvim</a>
            <a href="{{ route('check') }}">Chatbot</a>
        </nav>
    </div>
</header>
<div class="osimlik">
    <!-- Katalog Section -->
    <section id="katalog" class="py-16 bg-white">

        <div class="container mx-auto px-32">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">O'simliklar katalogi</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Qishloq xo'jaligi mahsulotlarini yetishtirish va
                    parvarish
                    qilish bo'yicha batafsil ma'lumotlar</p>
            </div>
            <div class="mb-8">
                <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
                    <div class="relative w-full md:w-80">
                        <input type="text" id="productSearch" placeholder="O'simlik qidirish..."
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-primary text-sm">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="ri-search-line"></i>
                        </div>
                    </div>
                    <div class="flex gap-2 overflow-x-auto pb-2 w-full md:w-auto">
                        <button
                            class="bg-primary text-white px-4 py-2 rounded-full text-sm whitespace-nowrap !rounded-button">Barcha
                            o'simliklar</button>
                        <button
                            class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm whitespace-nowrap !rounded-button">Mevalar</button>
                        <button
                            class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm whitespace-nowrap !rounded-button">Sabzavotlar</button>
                        <button
                            class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm whitespace-nowrap !rounded-button">Don
                            ekinlari</button>
                        <button
                            class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm whitespace-nowrap !rounded-button">Poliz
                            ekinlari</button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($plants as $plant)
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('storage/' . $plant->image) }}"
                             alt="{{ $plant->name }}" class="w-full h-48 object-cover object-top">
                        <div
                            class="absolute top-3 right-3 bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">
                            {{ $plant->category }}</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">{{ $plant->name }}</h3>
                        <div class="flex items-center gap-4 mb-3 text-sm">
                            <div class="flex items-center gap-1">
                                <i class="ri-calendar-line text-gray-500"></i>
                                <span>{{ $plant->muddat }}</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i class="ri-drop-line text-gray-500"></i>
                                <span>{{ $plant->suv }}</span>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">{{ $plant->description }}</p>
                        <button
                            class="bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 w-full whitespace-nowrap">Batafsil
                            ma'lumot</button>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2 p-8">
                        <h2 class="text-2xl font-bold mb-4">Yangiliklarga obuna bo'ling</h2>
                        <p class="text-gray-600 mb-6">Qishloq xo'jaligi sohasidagi eng so'nggi yangiliklar,
                            maslahatlar
                            va foydali ma'lumotlarni olish uchun obuna bo'ling</p>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <input type="email" placeholder="Email manzilingizni kiriting"
                                   class="flex-1 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-primary">
                            <button
                                class="bg-primary text-white px-6 py-2 rounded-button hover:bg-primary/90 whitespace-nowrap">Obuna
                                bo'lish</button>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 bg-cover bg-center"
                         style="background-image: url('https://readdy.ai/api/search-image?query=modern%20agricultural%20technology%2C%20drone%20monitoring%20crops%2C%20farmer%20using%20tablet%20in%20field%2C%20bright%20natural%20lighting%2C%20high%20quality%20professional%20photo&width=600&height=400&seq=26&orientation=landscape');">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<footer class="footer">
    <div class="footer-grid">
        <div class="footer-section">
            <img src="{{ asset('images/header.png') }}" alt="AgroScan logotipi" class="footer-logo">
            <h3>AgroScan</h3>
            <p>Sizning o‘simliklar salomatligi diagnostikasi va davolash yechimlari bo‘yicha AI yordamchingiz.</p>
        </div>

        <div class="footer-section">
            <h4>Havolalar</h4>
            <ul>
                <li><a href="#">Bosh sahifa</a></li>
                <li><a href="#">Video darsliklar</a></li>
                <li><a href="#">Hamjamiyat</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Resurslar</h4>
            <ul>
                <li><a href="#">O‘simliklar kasalliklari ma’lumotlar bazasi</a></li>
                <li><a href="#">Davolanish bo‘yicha qo‘llanma</a></li>
                <li><a href="#">Tez-tez so‘raladigan savollar</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Aloqa</h4>
            <p>Elektron pochta: contact@agroscan.com</p>
            <p>Telefon: (123) 456-7890</p>
            <p>Toshkent shahri Olmazor tumani kichik tor ko‘cha 5 dom 6 xonadon</p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© 2025 AgroScan. Barcha huquqlar himoyalangan.</p>
        <div class="footer-links">
            <a href="#">Maxfiylik siyosati</a>
            <a href="#">Xizmatlar shartlari</a>
            <a href="#">Sayt xaritasi</a>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.flex.gap-2 button');
        const plants = document.querySelectorAll('.grid > div');

        let activeCategory = "Barcha o'simliklar";

        function filterPlants() {
            plants.forEach(plant => {
                const category = plant.querySelector('div.absolute.top-3.right-3').textContent.trim();
                if (activeCategory === "Barcha o'simliklar" || category === activeCategory) {
                    plant.style.display = '';
                } else {
                    plant.style.display = 'none';
                }
            });
        }

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                activeCategory = button.textContent.trim();

                buttons.forEach(btn => {
                    btn.classList.remove('bg-primary', 'text-white');
                    btn.classList.add('bg-gray-100', 'text-gray-700');
                });

                button.classList.add('bg-primary', 'text-white');
                button.classList.remove('bg-gray-100', 'text-gray-700');

                filterPlants();
            });
        });

        // Dastlab "Barcha o'simliklar" faollashtirish
        buttons.forEach(button => {
            if (button.textContent.trim() === "Barcha o'simliklar") {
                button.classList.add('bg-primary', 'text-white');
                button.classList.remove('bg-gray-100', 'text-gray-700');
            }
        });

        filterPlants();
    });
</script>

</body>

</html>
