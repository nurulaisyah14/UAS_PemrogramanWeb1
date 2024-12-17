<?php require "includes/pageHeader.php" ?>

<style>
    /* General Styling */
    body {
        background: linear-gradient(to bottom, #ffe4e1, #ffc1cc); /* Latar belakang pink gradasi */
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        text-align: center;
        color: #333;
    }

    .error-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        padding: 20px;
        animation: fadeIn 1.5s ease-in-out;
    }

    h1 {
        font-size: 8rem;
        color: #ff1493; /* Warna pink terang */
        margin: 0;
        font-weight: bold;
        text-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        animation: bounce 2s infinite;
    }

    h2 {
        font-size: 2rem;
        color: #ff69b4;
        margin-top: 10px;
        animation: slideIn 1.5s ease-out;
    }

    p {
        font-size: 1.2rem;
        margin-top: 20px;
        color: #555;
        line-height: 1.8;
    }

    a {
        margin-top: 20px;
        display: inline-block;
        text-decoration: none;
        color: white;
        background: #ff69b4; /* Tombol pink cerah */
        padding: 10px 25px;
        border-radius: 5px;
        font-size: 1.1rem;
        font-weight: bold;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    a:hover {
        background: #ff1493; /* Pink lebih gelap saat hover */
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        h1 {
            font-size: 6rem;
        }

        h2 {
            font-size: 1.5rem;
        }

        p {
            font-size: 1rem;
        }
    }
</style>

<div class="error-container">
    <h1>404</h1>
    <h2>Oops! Halaman Tidak Ditemukan</h2>
    <p>Maaf, halaman yang Anda cari tidak ditemukan atau telah dipindahkan. <br> Silakan kembali ke halaman utama atau hubungi kami jika Anda membutuhkan bantuan lebih lanjut.</p>
    <a href="index.php">Kembali ke Halaman Utama</a>
</div>

<?php require "includes/pageFooter.php" ?>
