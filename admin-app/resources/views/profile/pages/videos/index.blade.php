
<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AgroSmart - Video Darsliklar</title>
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

        .videolar {
            width: 1250px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 0;
            margin: 0 auto;
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
<div class="videolar">
    <!-- Video Darsliklar Section -->
    <section id="videodarsliklar" class="py-16 bg-white">

        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Video darsliklar</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Qishloq xo'jaligi mahsulotlarini yetishtirish va
                parvarish
                qilish bo'yicha foydali video darsliklar</p>
        </div>
        <div class="mb-8">
            <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
                <div class="relative w-full md:w-80">
                    <input type="text" placeholder="Video qidirish..."
                           class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-primary text-sm">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="ri-search-line"></i>
                    </div>
                </div>
                <div class="flex gap-2 overflow-x-auto pb-2 w-full md:w-auto">
                    <button id="allVideosBtn"
                            class="bg-primary text-white px-4 py-2 rounded-full text-sm whitespace-nowrap !rounded-button">Barcha
                        videolar</button>
                    <button id="growingBtn"
                            class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm whitespace-nowrap !rounded-button">Yetishtirish
                        usullari</button>
                    <button id="careBtn"
                            class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm whitespace-nowrap !rounded-button">Parvarish
                        qilish</button>
                    <button id="diseaseBtn"
                            class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm whitespace-nowrap !rounded-button">Kasalliklarni
                        davolash</button>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($videos as $video)
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="relative">
                    <img src="{{ asset('storage/' . $video->cover) }}"
                         alt="{{ $video->name }}" class="w-full h-48 object-cover object-top">
{{--                    <div class="absolute bottom-3 right-3 bg-black/70 text-white text-xs px-2 py-1 rounded">--}}
{{--                        12:45--}}
{{--                    </div>--}}
                </div>
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                            <span
                                class="text-xs font-medium bg-green-100 text-green-800 px-2 py-1 rounded">{{ $video->category }}</span>
                        <span class="text-xs text-gray-500">{{ $video->created_at->format('d.m.Y, H:i') }}</span>
                    </div>
                    <h3 class="font-semibold mb-2">{{ $video->name }}</h3>
                    <p class="text-gray-600 text-sm mb-4">{{ $video->description }}</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <img src="https://readdy.ai/api/search-image?query=professional%20male%20agricultural%20expert%20portrait%2C%2040s%2C%20uzbek%20ethnicity%2C%20neutral%20background%2C%20high%20quality&width=100&height=100&seq=3&orientation=squarish"
                                 alt="Muallif" class="w-8 h-8 rounded-full object-cover">
                            <span class="text-sm text-gray-700">Agroscan</span>
                        </div>
                        <button class="text-primary hover:text-primary/80">
                            <i class="ri-play-circle-line ri-lg"></i>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-8 text-center">
            <button id="loadMoreBtn"
                    class="bg-white border border-primary text-primary px-6 py-2 rounded-button hover:bg-primary/5 whitespace-nowrap">
                Ko'proq videolar
                <i class="ri-arrow-down-line ml-1"></i>
            </button>
            <div id="loadingIndicator" class="hidden">
                <div class="inline-flex items-center gap-2 text-gray-600">
                    <div class="w-5 h-5 border-2 border-primary border-t-transparent rounded-full animate-spin">
                    </div>
                    <span>Yuklanmoqda...</span>
                </div>
            </div>
            <div id="allLoadedMessage" class="hidden">
                <span class="text-gray-600">Barcha videolar yuklandi</span>
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
    document.addEventListener('DOMContentLoaded', function () {
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        const loadingIndicator = document.getElementById('loadingIndicator');
        const allLoadedMessage = document.getElementById('allLoadedMessage');
        let currentPage = 1;
        const videosPerPage = 6;
        const totalVideos = 18; // o‘rnatilgan son

        loadMoreBtn?.addEventListener('click', function () {
            // video yuklash logikasi shu yerda ishlaydi
            currentPage++;
            if (currentPage * videosPerPage >= totalVideos) {
                loadMoreBtn.classList.add('hidden');
                allLoadedMessage.classList.remove('hidden');
            }
        });

        const searchInput = document.querySelector('#videodarsliklar input[type="text"]');
        const videoCards = document.querySelectorAll('#videodarsliklar .grid > div');

        searchInput?.addEventListener('input', function () {
            const val = this.value.toLowerCase().trim();
            videoCards.forEach(card => {
                const title = card.querySelector('h3')?.textContent.toLowerCase() || "";
                const description = card.querySelector('p')?.textContent.toLowerCase() || "";
                const author = card.querySelector('.text-sm.text-gray-700')?.textContent.toLowerCase() || "";
                card.style.display = (title.includes(val) || description.includes(val) || author.includes(val)) ? 'block' : 'none';
            });
        });

        const filterButtons = [
            { id: 'allVideosBtn', category: null },
            { id: 'growingBtn', category: 'Yetishtirish usullari' },
            { id: 'careBtn', category: 'Parvarish qilish' },
            { id: 'diseaseBtn', category: 'Kasalliklarni davolash' }
        ];

        filterButtons.forEach(btn => {
            const el = document.getElementById(btn.id);
            el?.addEventListener('click', function () {
                filterButtons.forEach(b => {
                    document.getElementById(b.id)?.classList.remove('bg-primary', 'text-white');
                    document.getElementById(b.id)?.classList.add('bg-gray-100', 'text-gray-700');
                });
                this.classList.add('bg-primary', 'text-white');
                this.classList.remove('bg-gray-100', 'text-gray-700');

                videoCards.forEach(card => {
                    const categoryTag = card.querySelector('.text-xs.font-medium');
                    if (!btn.category || (categoryTag && categoryTag.textContent === btn.category)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
</div>

</body>

</html>
