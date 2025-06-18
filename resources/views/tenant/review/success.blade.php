<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan Berhasil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 100%;
            padding: 15px;
        }

        .success-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-color: #f0fdf4;
            border-radius: 10px;
            padding: 20px;
            margin: 0 auto;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .success-icon {
            color: #22c55e;
            font-size: clamp(3rem, 6vw, 6rem);
            margin-bottom: 20px;
        }

        .success-title {
            font-size: clamp(1.5rem, 4vw, 2.5rem);
            font-weight: bold;
            color: #166534;
            margin-bottom: 10px;
            padding: 0 10px;
        }

        .success-message {
            font-size: clamp(1rem, 2vw, 1.2rem);
            color: #15803d;
            margin-bottom: 30px;
            padding: 0 10px;
        }

        .home-button {
            display: inline-block;
            padding: clamp(8px, 2vw, 12px) clamp(15px, 3vw, 25px);
            background-color: #22c55e;
            color: white;
            text-decoration: none;
            font-size: clamp(0.9rem, 2vw, 1.1rem);
            font-weight: 500;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .home-button:hover {
            background-color: #16a34a;
        }

        @media (max-width: 480px) {
            .success-container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-container">
            <div class="success-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h1 class="success-title">Ulasan Berhasil Dikirim!</h1>
            <p class="success-message">Terima kasih telah memberikan ulasan Anda. Kami sangat menghargai masukan Anda.</p>
            <a href="{{ url('/') }}" class="home-button">Kembali ke Halaman Utama</a>
        </div>
    </div>
</body>
</html>