# 🌱 AgroScan

### Laravel asosida yaratilgan o‘simlik kasalliklarini aniqlash va boshqarish tizimi

![Laravel](https://img.shields.io/badge/Laravel-10-red?style=for-the-badge&logo=laravel)
![Tailwind CSS](https://img.shields.io/badge/TailwindCSS-3-blue?style=for-the-badge&logo=tailwindcss)
![Spatie Permission](https://img.shields.io/badge/Spatie-Permission-brightgreen?style=for-the-badge)
![Chatbot AI](https://img.shields.io/badge/AI-Chatbot-yellow?style=for-the-badge)

---

## 📌 Loyiha maqsadi

Ushbu tizim o‘simlik kasalliklarini aniqlash, tavsiyalar berish va ularni boshqarish imkonini beruvchi **admin panel + AI yordamchi bot** kombinatsiyasidir. Maqsad – dehqonlar, bog‘bonlar yoki foydalanuvchilar uchun foydali maslahatlar va diagnostika imkonini taqdim etish.

---

## 🔍 Asosiy funksiyalar

- 🦠 Kasallikni aniqlash (Plant.id API orqali)
- 💡 Foydali tavsiyalar va muolajalar
- 📷 Rasm yuklash va natijani chat formatida olish

---

## ⚙️ Texnologiyalar

- **Laravel 10** – backend asosiy freymvork
- **Laravel Breeze** – autentifikatsiya va foydalanuvchi boshqaruvi
- **Tailwind CSS** – frontend uchun zamonaviy CSS
- **Spatie Laravel Permission** – rol va huquq boshqaruvi
- **AI Chatbot** – foydalanuvchi savollariga javob beruvchi tizim
- **Docker (ixtiyoriy)** – lokalda ishga tushirish uchun
- **MySQL / phpMyAdmin** – ma’lumotlar bazasi (loyihaga `.sql` fayl biriktirilgan)

---

## 📁 Asosiy modullar

| Modul                 | Tavsif                                                                  |
|-----------------------|-------------------------------------------------------------------------|
| `KasallikController`  | Kasalliklar bazasini boshqaradi (CRUD)                                 |
| `PlantController`     | O‘simlik turlari bilan ishlaydi                                         |
| `ChatbotController`   | AI yordamida foydalanuvchining savollariga javob beradi                |
| `MenuController`      | Admin panel menyularini sozlaydi                                        |
| `ProfileController`   | Foydalanuvchi profilingini boshqaradi                                   |

---

## 🚀 O‘rnatish

# Loyihani klonlash
git clone https://github.com/your-username/your-repo.git
cd admin-app

# Laravel paketlarini o‘rnatish
composer install

# Frontend kutubxonalar
npm install && npm run dev

# .env faylini sozlash
cp .env.example .env
php artisan key:generate

# Ma’lumotlar bazasini sozlash
php artisan migrate --seed

# (Docker ishlatilsa)
# docker-compose up -d
🤖 Chatbot qanday ishlaydi?
Foydalanuvchi savol beradi: "Pomidorni kasallangan qismini rasmga olib botga tashedi"

Chatbot rasmni tahlil qiladi va mos kasallik simptomlariga asoslanib diagnostika + davolash tavsiyalari beradi.

Agar aniqlik yetarli bo‘lmasa, localTreatments.json orqali mahalliy muolajalar tavsiya etiladi.

🔐 Foydalanuvchi rollari
Admin – barcha modullar ustidan to‘liq nazorat

Moderator – kontent va chatbotni boshqaradi

User – faqat ko‘rish va so‘rov yuborish imkoniyati

🧪 Sinov uchun foydalanuvchi

Login: admin@example.com
Parol: password
Eslatma: bu test uchun. Parollarni .env faylda o‘zgartiring.

📄 Litsenziya
MIT License – ochiq manbali va bepul foydalanish mumkin.

👨‍💻 Muallif
Eldorbek Erkinov — 4-kurs axborot xavfsizligi talabasi, Yaponiya tajribasiga ega.
