
<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AgroSmart - Qishloq Xo'jaligi Taqvimi</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
          rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 80px;
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 0px 2px;
            backdrop-filter: blur(2px);
            z-index: 2;
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

        .calendar th {
            background-color: #4caf50;
            color: white;
        }

        .calendar td {
            border: 1px solid #e0e0e0;
            text-align: center;
            padding: 10px;
            height: 40px;
        }

        .calendar td:hover {
            background-color: #e8f5e9;
            cursor: pointer;
        }

        .today {
            background-color: #c8e6c9;
            font-weight: bold;
        }

        .other-month {
            color: #bdbdbd;
        }
    </style>
</head>

<body>
<!-- Navbar -->
<header class="navbar">
    <div class="container flex justify-between items-center py-4">
        <div class="logo flex items-center gap-3">
            <a href="asosiy.html"><img src="images/header.png" alt="AgroScan Logo" class="w-20" /></a>
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

<!-- Main content -->
<main class="container mt-48 mb-16">
    <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-primary mb-2">Qishloq Xo'jaligi Taqvimi</h2>
        <p class="text-gray-600 max-w-xl mx-auto">Har oylik agro-ishlar, ekinlar va foydali tavsiyalarni bu
            sahifadan topishingiz mumkin.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        <!-- Calendar -->
        <div class="bg-white shadow rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4">Oy tanlang</h3>
            <div class="flex justify-between items-center mb-4">
                <button class="bg-primary text-white px-4 py-2 rounded-button" id="prev-month">Oldingi oy</button>
                <div class="text-lg font-bold" id="current-month">May 2025</div>
                <button class="bg-primary text-white px-4 py-2 rounded-button" id="next-month">Keyingi oy</button>
            </div>
            <table class="calendar w-full" id="calendar">
                <thead>
                <tr>
                    <th>Su</th>
                    <th>Mo</th>
                    <th>Tu</th>
                    <th>We</th>
                    <th>Th</th>
                    <th>Fr</th>
                    <th>Sa</th>
                </tr>
                </thead>
                <tbody id="calendar-body">
                <!-- JavaScript orqali to‘ldiriladi -->
                </tbody>
            </table>
        </div>

        <!-- Tasks -->
        <div class="bg-white shadow rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-2" id="month-tasks-title">May oyi ishlari</h3>
            <p class="text-gray-600 mb-4">Qishloq xo'jaligi ishlari va tavsiyalar</p>
            <table class="w-full border-collapse mb-4 tasks-table">
                <thead>
                <tr class="bg-primary text-white">
                    <th class="p-2 text-left">Asosiy ishlar</th>
                    <th class="p-2 text-left">Ekiladigan ekinlar</th>
                    <th class="p-2 text-left">Tavsiyalar</th>
                </tr>
                </thead>
                <tbody>
                <!-- JS orqali to‘ldiriladi -->
                </tbody>
            </table>
            <div class="italic text-yellow-800 bg-yellow-50 border-l-4 border-yellow-400 p-3">
                Muhim eslatma: Ushbu taqvimdagi ma'lumotlar o'rta mintaqa iqlimi uchun mo'ljallangan. Mahalliy iqlim
                sharoitlariga qarab o'zgartirishlar kiritilishi mumkin.
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="footer bg-green-100 py-10">
    <div class="container grid grid-cols-1 md:grid-cols-4 gap-6">
        <div>
            <img src="images/header.png" alt="AgroScan logotipi" class="w-16 mb-4">
            <h3 class="font-bold text-lg mb-2">AgroScan</h3>
            <p>Sizning o‘simliklar salomatligi diagnostikasi va davolash yechimlari bo‘yicha AI yordamchingiz.</p>
        </div>
        <div>
            <h4 class="font-semibold mb-2">Havolalar</h4>
            <ul class="space-y-1 text-sm">
                <li><a href="#">Bosh sahifa</a></li>
                <li><a href="#">Video darsliklar</a></li>
                <li><a href="#">Hamjamiyat</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-2">Resurslar</h4>
            <ul class="space-y-1 text-sm">
                <li><a href="#">O‘simliklar kasalliklari</a></li>
                <li><a href="#">Qo‘llanma</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-2">Aloqa</h4>
            <p class="text-sm">Email: contact@agroscan.com</p>
            <p class="text-sm">Tel: (123) 456-7890</p>
            <p class="text-sm">Toshkent shahri, Olmazor tumani</p>
        </div>
    </div>
    <div class="mt-8 border-t pt-4 text-sm text-center text-gray-500">
        © 2025 AgroScan. Barcha huquqlar himoyalangan.
    </div>
</footer>

<!-- Calendar JS -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const monthlyTasks = {
            4: {
                works: ["• Muntazam sug'orish", "• O'sib ketgan novdalarni kesish", "• Zararkunandalarga qarshi kurashish"],
                crops: ["• Pomidor", "• Bodring", "• Qalampir"],
                tips: ["• Ertalab yoki kechqurun sug'orish", "• Kesishdan oldin asboblarni tozalang", "• Tabiiy zararkunanda qarshi vositalardan foydalaning"]
            },
            5: {
                works: ["• Hosilni yig'ish", "• O'simliklarni bog'lash", "• Tuproqni yumshatish"],
                crops: ["• Kartoshka", "• Sabzi", "• Loviya"],
                tips: ["• Hosilni quyosh botishidan oldin yig'ib oling", "• Bog'lash uchun tabiiy materiallardan foydalaning", "• Tuproqni chuqur yumshatmang"]
            }
        };

        let currentDate = new Date(2025, 4, 1);

        function updateCalendar() {
            const calendarBody = document.getElementById('calendar-body');
            const monthYearDisplay = document.getElementById('current-month');
            const monthTasksTitle = document.getElementById('month-tasks-title');
            const monthNames = ["Yanvar", "Fevral", "Mart", "Aprel", "May", "Iyun", "Iyul", "Avgust", "Sentabr", "Oktabr", "Noyabr", "Dekabr"];
            const monthName = monthNames[currentDate.getMonth()];
            const year = currentDate.getFullYear();

            monthYearDisplay.textContent = `${monthName} ${year}`;
            monthTasksTitle.textContent = `${monthName} oyi ishlari`;

            const firstDay = new Date(year, currentDate.getMonth(), 1);
            const lastDay = new Date(year, currentDate.getMonth() + 1, 0);
            const startingDay = firstDay.getDay();

            calendarBody.innerHTML = '';
            let date = 1;
            const today = new Date();

            for (let i = 0; i < 6; i++) {
                if (date > lastDay.getDate()) break;
                const row = document.createElement('tr');

                for (let j = 0; j < 7; j++) {
                    const cell = document.createElement('td');

                    if (i === 0 && j < startingDay) {
                        const prevMonthLastDay = new Date(year, currentDate.getMonth(), 0).getDate();
                        cell.textContent = prevMonthLastDay - (startingDay - j - 1);
                        cell.classList.add('other-month');
                    } else if (date > lastDay.getDate()) {
                        cell.textContent = date - lastDay.getDate();
                        cell.classList.add('other-month');
                        date++;
                    } else {
                        cell.textContent = date;
                        if (date === today.getDate() && currentDate.getMonth() === today.getMonth() && year === today.getFullYear()) {
                            cell.classList.add('today');
                        }
                        date++;
                    }

                    row.appendChild(cell);
                }

                calendarBody.appendChild(row);
            }

            updateTasksTable();
        }

        function updateTasksTable() {
            const currentMonth = currentDate.getMonth();
            const tasksTable = document.querySelector('.tasks-table tbody');

            if (monthlyTasks[currentMonth]) {
                const tasks = monthlyTasks[currentMonth];
                tasksTable.innerHTML = '';
                for (let i = 0; i < tasks.works.length; i++) {
                    const row = document.createElement('tr');
                    row.innerHTML = `
              <td class="p-2">${tasks.works[i]}</td>
              <td class="p-2">${tasks.crops[i]}</td>
              <td class="p-2">${tasks.tips[i]}</td>
            `;
                    tasksTable.appendChild(row);
                }
            }
        }

        document.getElementById('prev-month').addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            updateCalendar();
        });

        document.getElementById('next-month').addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            updateCalendar();
        });

        document.getElementById('calendar-body').addEventListener('click', function (e) {
            if (e.target.tagName === 'TD' && !e.target.classList.contains('other-month')) {
                alert(`Siz ${e.target.textContent}-${currentDate.getMonth() + 1}-${currentDate.getFullYear()} sanasini tanladingiz`);
            }
        });

        updateCalendar();
    });
</script>
</body>

</html>
