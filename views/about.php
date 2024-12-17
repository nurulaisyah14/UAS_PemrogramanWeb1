<?php require "includes/pageHeader.php" ?> 

<style>
    /* General Styling */
    body {
        background: linear-gradient(to bottom, #ffe4e1, #ffc1cc); /* Gradasi warna pink */
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }

    .about-container {
        background: rgba(255, 255, 255, 0.9); /* Latar semi transparan */
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        max-width: 900px;
        margin: 50px auto;
        text-align: center;
        animation: fadeIn 1.5s ease-in-out;
    }

    h1 {
        color: #ff1493; /* Pink terang */
        margin-bottom: 20px;
        font-size: 2.5rem;
        font-weight: bold;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        animation: bounceText 2s infinite ease-in-out; /* Animasi judul */
    }

    p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
        margin-bottom: 20px;
    }

    .highlight {
        color: #c2185b; /* Pink tua */
        font-weight: bold;
    }

    .about-image {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    /* Animasi untuk fadeIn */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Animasi untuk bounce */
    @keyframes bounceText {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        h1 {
            font-size: 1.8rem;
        }

        p {
            font-size: 1rem;
        }

        .about-container {
            padding: 20px;
        }
    }
</style>

<div class="about-container">
    <h1>Tentang Kami</h1>
    <p>
        Selamat datang di <span class="highlight">Rumah Makan Nurul</span>! Kami adalah tempat makan yang menghidangkan berbagai 
        <span class="highlight">kuliner tradisional</span> Indonesia yang otentik dan lezat.
    </p>
    <p>
        Didirikan pada tahun 2023, tujuan kami adalah menghadirkan cita rasa asli Nusantara dengan bahan-bahan berkualitas 
        tinggi yang diolah oleh chef berpengalaman. Kami menawarkan suasana hangat dan nyaman untuk Anda dan keluarga.
    </p>
    <p>
        <span class="highlight">"Kenikmatan kuliner tradisional, terasa seperti di rumah."</span>
    </p>
    <p>
        Terima kasih telah menjadi bagian dari perjalanan kami. Kami menantikan kunjungan Anda untuk mencicipi hidangan 
        terbaik yang kami tawarkan.
    </p>
</div>

<?php require "includes/pageFooter.php" ?>
