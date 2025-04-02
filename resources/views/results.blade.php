<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animasi */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen bg-gradient-to-r from-blue-500 to-indigo-600">

    <div class="space-y-6 text-center text-white animate-fadeIn">
        <h1 class="text-5xl font-extrabold tracking-tight">
            Fitur belom tersedia
        </h1>
        <p class="text-xl">Kami sedang mengerjakan sesuatu yang luar biasa. Tunggu sebentar ya!</p>

        <!-- Countdown Timer -->
        <div class="text-4xl font-semibold">
            <span id="countdown" class="text-lg">00 : 00 : 00</span>
        </div>

        <!-- Email Subscription -->
        {{-- <div class="mt-8">
            <p class="text-lg">Daftarkan email Anda untuk pemberitahuan lebih lanjut!</p>
            <div class="flex justify-center mt-4">
                <input type="email" class="p-3 text-black rounded-l-lg" placeholder="Masukkan email Anda">
                <button class="p-3 text-white bg-yellow-500 rounded-r-lg hover:bg-yellow-600">
                    Beri Tahu Saya
                </button>
            </div>
        </div> --}}
    </div>

    <script>
        // Countdown Timer Script
        function startCountdown() {
            const endDate = new Date('March 30, 2025 00:00:00').getTime();
            const countdownElement = document.getElementById('countdown');

            setInterval(function() {
                const now = new Date().getTime();
                const distance = endDate - now;

                if (distance < 0) {
                    countdownElement.innerHTML = "Waktu Habis!";
                    return;
                }

                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                countdownElement.innerHTML = `${hours.toString().padStart(2, '0')} : ${minutes.toString().padStart(2, '0')} : ${seconds.toString().padStart(2, '0')}`;
            }, 1000);
        }

        startCountdown();
    </script>
</body>
</html>
