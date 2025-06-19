
<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AgroSmart - Kasalliklar</title>
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
        };
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

        .kasallik {
            width: 1200px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 0;

            margin: 0 auto;
        }

        .kasalligi {
            margin-top: 90px;
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
        <nav class="nav-links">
            <a href="{{ route('video') }}">Video darslar</a>
            <a href="{{ route('plant') }}">O‘simliklar</a>
            <a href="{{ route('kasallik') }}">Kasalliklar</a>
            <a href="{{ route('taqvim') }}">Taqvim</a>
            <a href="{{ route('check') }}">Chatbot</a>
        </nav>
    </div>
</header>
<div class="kasalligi">
    <div class="kasallik">
        <section id="kasalliklar" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold mb-4">So'nggi kasalliklar</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Qishloq xo'jaligi ekinlarida aniqlangan so'nggi
                        kasalliklar
                        va ularni davolash usullari</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($kasalliklar as $kasallik)
                    <div
                        class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                        <div class="relative">
                            <img src="{{ asset('storage/' . $kasallik->cover) }}"
                                 alt="{{ $kasallik->name }}" class="w-full h-48 object-cover object-top">
                            <div
                                class="absolute top-3 right-3 bg-green-600 text-white text-xs px-2 py-1 rounded-full">
                                {{ $kasallik->havf }}</div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">{{ $kasallik->name }}</h3>
                            <div class="flex items-center gap-2 mb-3">
                                    <span class="text-xs bg-red-100 text-red-800 px-2 py-1 rounded">{{ $kasallik->type }}</span>
                                <span class="text-xs text-gray-500">25-Apr, 2025</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-3">{{ $kasallik->description }}</p>
{{--                            <div class="mb-4">--}}
{{--                                <h4 class="font-medium text-sm mb-2">Tarqalish hududlari:</h4>--}}
{{--                                <div class="flex flex-wrap gap-1">--}}
{{--                                    <span class="text-xs bg-gray-100 px-2 py-1 rounded">Farg'ona viloyati</span>--}}
{{--                                    <span class="text-xs bg-gray-100 px-2 py-1 rounded">Andijon viloyati</span>--}}
{{--                                    <span class="text-xs bg-gray-100 px-2 py-1 rounded">Namangan viloyati</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <button class="text-primary font-medium flex items-center gap-1 hover:underline">
                                Batafsil ma'lumot
                                <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
{{--                <div class="mt-10">--}}
{{--                    <h3 class="text-xl font-bold mb-6">Kasalliklar statistikasi</h3>--}}
{{--                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">--}}
{{--                        <div class="bg-white rounded-lg shadow-sm p-4 h-80">--}}
{{--                            <h4 class="font-semibold mb-4">Kasalliklar turi bo'yicha taqsimot</h4>--}}
{{--                            <div id="diseaseTypeChart" class="w-full h-64"></div>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white rounded-lg shadow-sm p-4 h-80">--}}
{{--                            <h4 class="font-semibold mb-4">Hududlar bo'yicha kasalliklar soni</h4>--}}
{{--                            <div id="regionChart" class="w-full h-64"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="footer-grid">
            <div class="footer-section">
                <img src="{{ asset('images/header.png') }}" alt="AgroScan logotipi" class="footer-logo">
                <h3>AgroScan</h3>
                <p>Sizning o‘simliklar salomatligi diagnostikasi va davolash yechimlari bo‘yicha AI yordamchingiz.
                </p>
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

    <!-- ECharts uchun JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const diseaseTypeChart = echarts.init(document.getElementById('diseaseTypeChart'));
            const regionChart = echarts.init(document.getElementById('regionChart'));

            diseaseTypeChart.setOption({
                animation: false,
                tooltip: { trigger: 'item' },
                legend: { orient: 'vertical', right: 10, top: 'center' },
                series: [{
                    name: 'Kasalliklar turi',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    itemStyle: { borderRadius: 8, borderColor: '#fff', borderWidth: 2 },
                    label: { show: false },
                    emphasis: {
                        label: { show: true, fontSize: 14, fontWeight: 'bold' }
                    },
                    labelLine: { show: false },
                    data: [
                        { value: 65, name: "Zamburug'li" },
                        { value: 20, name: "Bakterial" },
                        { value: 10, name: "Virusli" },
                        { value: 5, name: "Boshqalar" }
                    ]
                }]
            });

            regionChart.setOption({
                animation: false,
                tooltip: { trigger: 'axis' },
                grid: { left: '3%', right: '4%', bottom: '3%', containLabel: true },
                xAxis: {
                    type: 'category',
                    data: ['Toshkent', 'Samarqand', "Farg'ona", 'Andijon', 'Namangan', 'Buxoro']
                },
                yAxis: { type: 'value' },
                series: [{
                    name: 'Kasalliklar soni',
                    type: 'bar',
                    barWidth: '60%',
                    data: [28, 24, 20, 18, 15, 12],
                    itemStyle: { color: 'rgba(87, 181, 231, 1)', borderRadius: 4 }
                }]
            });

            window.addEventListener('resize', function () {
                diseaseTypeChart.resize();
                regionChart.resize();
            });
        });
    </script>
</div>

</body>

</html>
