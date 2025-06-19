
<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AgroScan</title>
    <link rel="stylesheet" href="{{ asset('css/asosiy.css') }}" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">


</head>

<body>
<header class="navbar">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="{{ asset('images/header.png') }}" alt="AgroScan Logo" /></a>
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

<section class="hero">
    <div class="container hero-flex">
        <div class="hero-text">
            <h1><span class="highlight">AgroScan</span><br>O‘simlik kasalliklarini darhol aniqlang va davolang</h1>
            <p>AgroScan AI yordamchisiga o‘simlikning suratini yuklang va kasallikni darhol aniqlash va davolash
                bo‘yicha tavsiyalarni oling.</p>
            <a href="#" class="btn-primary">Ko‘proq o‘qing</a>
        </div>
        <div class="hero-img">
            <img src="{{ asset('images/daraxt.png') }}" alt="Tree illustration" />
        </div>
    </div>
</section>

<section class="videos">
    <div class="container">
        <h2>Video darsliklar</h2>
        <p>O‘simlik kasalliklari, to‘g‘ri diagnostika usullari va samarali davolash usullari haqida
            mutaxassislarimizdan
            bilib oling.</p>
        @php
$videos = App\Models\Video::where('name', '!=', '')->orderBy('created_at')->limit(3)->get();
 @endphp
        <div class="video-cards">
            @foreach($videos as $video)
            <div class="card">
                <img src="{{ asset('storage/' . $video->cover) }}" alt="{{ $video->name }}" />
{{--                <span class="duration">04:17</span>--}}
                <p class="title">{{ $video->name }}</p>
                <button>Hozir tomosha qiling</button>
            </div>
            @endforeach
        </div>
        <div class="center">
            <a href="{{ route('video') }}" class="btn-secondary">Barcha qo‘llanmalarni ko‘rish</a>
        </div>
    </div>
</section>
<section class="agroscan-section">
    <div class="container">
        <div class="continer">
            <div class="descriptions">
                <div class="description">
                    <h2>AgroScan haqida</h2>
                    <p>
                        AgroScan ilg‘or sun’iy intellektni qishloq xo‘jaligi tajribasi bilan birlashtirib, o‘simlik
                        kasalliklarini tezda
                        tashxislash va davolash bo‘yicha tavsiyalar beradi. Bizning vazifamiz – fermerlar,
                        bog‘bonlar va
                        o‘simlik
                        ishlab chiqaruvchilarga kasalliklarni erta aniqlash va aralashuv orqali sog‘lom
                        o‘simliklarni
                        saqlashga yordam
                        berishdir.
                    </p>
                </div>

                <div class="card_kichik">
                    <div class="card">
                        <h2>500+</h2>
                        <p>O‘simlik kasalliklari</p>
                    </div>
                    <div class="card">
                        <h2>95%</h2>
                        <p>Tashxisning aniqligi</p>
                    </div>
                    <div class="card">
                        <h2>150+</h2>
                        <p>Online agroinformatikaga oid o‘simliklar</p>
                    </div>
                    <div class="card">
                        <h2>24/7</h2>
                        <p>Mavjud yordam</p>
                    </div>
                </div>

            </div>
            <div class="description card_kichik">
                <div class="rasm">
                    <img src="{{ asset('images/kitob.png') }}" alt="">
                    <h3>AI-quvvatli diagnostika</h3>
                    <p>Bizning ilg‘or algoritm asosida o‘simlik kasalliklarini aniqlash va davolash bo‘yicha
                        tavsiyalar
                        taqdim etiladi.</p>
                </div>
                <div class="rasm">
                    <img src="{{ asset('images/kitob.png') }}" alt="">
                    <h3>Mutaxassisning davolash bo‘yicha maslahatlari</h3>
                    <p>Muayyan kasallik, o‘simlik turi va joylashuv asosida maxsus davolash bo‘yicha maslahatlar
                        olinadi.</p>
                </div>

                <div class="rasm">
                    <img src="{{ asset('images/kitob.png') }}" alt="">
                    <h3>To‘liq ma’lumotlar bazasi</h3>
                    <p>150 dan ortiq o‘simliklar, kasalliklar va davolash usullari haqida to‘liq ma’lumotlarga
                        kirish.
                    </p>
                </div>
                <div class="rasm">
                    <img src="{{ asset('images/kitob.png') }}" alt="">
                    <h3>Erta aniqlash</h3>
                    <p>O‘simliklardagi erta belgilari orqali kasalliklarni aniqlab, davolash bosqichida yordam
                        beradi.
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>
{{--<section class="blog-section">--}}
{{--    <h2 class="section-title">Bizning Bloglar</h2>--}}
{{--    <p class="section-description">--}}
{{--        O‘simliklar salomatligi, kasalliklarning oldini olish va davolash usullari haqida ekspert maqolalari,--}}
{{--        qo‘llanmalar va tushunchalar.--}}
{{--    </p>--}}

{{--    <div class="blog-cards">--}}

{{--        <div class="blog-card">--}}
{{--            <img src="images/bog'.png" alt="Tree" />--}}
{{--            <span class="tag green">Kasallik bo‘yicha qo‘llanma</span>--}}
{{--            <h3>Bog‘ o‘simliklarining keng tarqalgan kasalliklarini qanday davolash kerak</h3>--}}
{{--            <p>Bog‘ o‘simliklarida tez-tez uchraydigan kasalliklarni aniqlash va davolashni--}}
{{--                o‘rganing.</p>--}}
{{--            <div class="author-info">--}}
{{--                <span>Doktor Mariya Jonson</span>--}}
{{--                <span>2023 yil 15 aprel</span>--}}
{{--            </div>--}}
{{--            <a href="#">Maqolani o‘qing <span>→</span></a>--}}
{{--        </div>--}}

{{--        <div class="blog-card">--}}
{{--            <img src="images/tog'.png" alt="Forest" />--}}
{{--            <span class="tag blue">Mavsumiy maslahatlar</span>--}}
{{--            <h3>Mavsumiy o‘simliklarni parvarish qilish: yozda kasalliklarning oldini olish</h3>--}}
{{--            <p>Issiq va nam yoz oylarida o‘simliklaringizni sog‘lom saqlash uchun faol qadamlar.</p>--}}
{{--            <div class="author-info">--}}
{{--                <span>Tomas Rivera</span>--}}
{{--                <span>2023 yil 22 may</span>--}}
{{--            </div>--}}
{{--            <a href="#">Maqolani o‘qing <span>→</span></a>--}}
{{--        </div>--}}

{{--        <div class="blog-card">--}}
{{--            <img src="images/lola.png" alt="Flowers" />--}}
{{--            <span class="tag orange">Davolash imkoniyatlari</span>--}}
{{--            <h3>O‘simlik kasalliklarini davolash uchun organik va kimyoviy yechimlar</h3>--}}
{{--            <p>O‘simlik kasalliklarini samarali davolashning turli yondashuvlarini qiyosiy tahlil qilish.</p>--}}
{{--            <div class="author-info">--}}
{{--                <span>Doktor Sara Uilyams</span>--}}
{{--                <span>2023 yil 8 iyun</span>--}}
{{--            </div>--}}
{{--            <a href="#">Maqolani o‘qing <span>→</span></a>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--    <div class="view-all">--}}
{{--        <a href="#">Barcha maqolalarni ko‘rish</a>--}}
{{--    </div>--}}
{{--</section>--}}
<section class="contact-section">
    <h2>Biz bilan bog‘lanish</h2>
    <p class="description">
        O‘simlik kasalliklari haqida savollaringiz bormi yoki AgroScan yordamida yordam kerakmi?
        Jamoamiz bilan bog‘laning va biz yordam berishdan xursand bo‘lamiz.
    </p>

    <div class="contact-container">
        <!-- Form -->
        <div class="contact-form">
            <h3>Bizga xabar yuboring</h3>
            <form>
                <label>Sizning ismingiz va familiyangiz</label>
                <input type="text" value="Aliyev Vali" required>

                <label>E-pochta manzilingiz</label>
                <input type="email" value="valiyevali@gmail.com" required>

                <label>Mavzu</label>
                <input type="text" value="sizga qanday yordam bera olamiz?">

                <label>Xabaringiz</label>
                <textarea placeholder="Iltimos, savolingiz va muammoingizni tasvirlab bering..."></textarea>

                <button type="submit">Xabarni yuboring</button>
            </form>
        </div>

        <!-- Info -->
        <div class="contact-info">
            <div class="info-box">
                <h4>Bog‘lanish uchun ma'lumot</h4>
                <p><strong>Elektron pochta</strong><br><a
                        href="mailto:contact@agroscan.com">contact@agroscan.com</a></p>
                <p><strong>Telefon</strong><br>+998901234567</p>
                <p><strong>Manzil</strong><br>Toshkent shahri, Olmazor tumani, kichik tor ko‘cha<br>5 dom 6 xonadon
                </p>
            </div>

            <div class="info-box">
                <h4>Ish vaqti</h4>
                <p>Dushanba – Juma: <strong class="duyshanba">9:00 dan 17:00 gacha</strong></p>
                <p>Shanba: <strong class="shanba">10:00 dan 15:00 gacha</strong></p>
                <p>Yakshanba: <strong class="Yakshanba">Dam olish kuni</strong></p>
            </div>

            <div class="social-box">
                <p>Bizga obuna bo‘ling</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-telegram fa-2x"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
                    <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#"><i class="fab fa-tiktok fa-2x"></i></a>
                    <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="hero-section">
    <h1>Bugundan o‘simliklaringizni himoya qilishni boshlang</h1>
    <p>
        O‘simlik kasalliklarini erta aniqlash va mutaxassislarni davolash bo‘yicha tavsiyalar olish uchun
        AgroScan-dan foydalaning. Sog‘lom o‘simliklar bir surat uzoqlikda!
    </p>
    <div class="hero-buttons">
        <a href="#" class="btn primary">Hozir AgroScanni sinab ko‘ring</a>
        <a href="#" class="btn secondary">Batafsil ma’lumot</a>
    </div>
</section>
<footer class="footer">
    <div class="footer-grid">
        <div class="footer-section">
            <img src="{{ asset('images/header.png') }}" alt="AgroScan logotipi" class="logo">
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


<script src="{{ asset('js/asosiy.js') }}"></script>
</body>

</html>
