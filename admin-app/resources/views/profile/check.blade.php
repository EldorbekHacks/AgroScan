
<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qishloq Xo'jaligi Chat Bot</title>
    <link rel="stylesheet" href="{{ asset('css/aniqlovchi.css') }}">
    <script src="https://cdn.tailwindcss.com" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
<div class="container">
    <div class="chat-header">
        <button class="back-button" id="backButton">
            <a href="/dashboard"><i class="fas fa-arrow-left"></i></a>
        </button>
        <div>
            <h1>O'simlik yoki Mevalar Kasalligini Aniqlash</h1>
            <p>Rasmlarni yuklang va AI yordamida o'simlik yoki meva kasalliglarini aniqlang</p>
        </div>
    </div>
    <div class="box">
        <div class="push"></div>

        <div class="box-inp">
            <div class="inp">
                <label class="file-icon">
                    <i class="fas fa-camera"></i>
                    <input type="file" class="hidden-file" accept="image/*">
                    <div class="upload-progress">
                        <div class="progress-bar"></div>
                    </div>
                </label>
                <input type="text" class="text-input" placeholder="Rasm tanlang!!!">
                <button class="submit-btn">Yuborish</button>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('js/aniqlovchi.js') }}"></script>
</body>

</html>
