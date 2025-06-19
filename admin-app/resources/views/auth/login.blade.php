
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AgroScan</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
<div class="container">
    <!-- login form -->
    <div class="form-box login active">
        <form id="loginForm" method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Kirish</h1>
            <div class="input-box">
                <input type="text" name="email" placeholder="Emailingizni kiriting" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Parolingizni kiriting" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="tugma">
                <button type="submit" class="btn">Kirish</button>
                <p>yoki ijtimoiy tarmoqlar orqali kiring</p>
            </div>
            <div class="social-icons">
                <a href="#"><i class='bx bxl-google'></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
        </form>
    </div>
    <!--Registration-->
    <div class="form-box register">
        <form id="registerForm" method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Ro'yhatdan o'tish</h1>
            <div class="input-box">
                <input type="text" name="name" placeholder="Ismingizni kiriting" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Emailingizni kiriting" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Parolingizni kiriting" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password_confirmation" placeholder="Parolingizni takrorlang" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn">Ro'yhatdan o'tish</button>
            <p></p>
            <div class="social-icons">
                <a href="#"><i class='bx bxl-google'></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
        </form>
    </div>

    <!--toggle-->
    <div class="toggle-box">
        <div class="toggle-panel toggle-left">
            <h2>Assalom alaykum, Xush kelibsiz!</h2>
            <p>Akkountingiz yo'qmi?</p>
            <button class="btn register-btn">Ro'yhatdan o'tish</button>
        </div>
        <div class="toggle-panel toggle-right">
            <h2>Qaytganingizdan xursandmiz!</h2>
            <p>Akkountingiz bormi?</p>
            <button class="btn login-btn">Kirish</button>
        </div>
    </div>
</div>

<script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
