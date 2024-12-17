<?php require "includes/pageHeader.php" ?> 
<style>
    /* Previous styles remain the same */
    body {
        background: linear-gradient(to bottom, #ffe4e1, #ffc1cc);
        font-family: 'Poppins', sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        position: relative;
    }

      /* Header Styling */
      header h1 {
        color: #ff1493; /* Warna pink terang */
        text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.2);
        margin: 10px auto;
        text-align: center;
        font-size: 2.5rem;
        font-weight: bold;
        animation: moveText 3s infinite ease-in-out; /* Animasi teks */
    }

    header h1:nth-child(2) {
        animation-delay: 0.5s; /* Memberikan jeda animasi */
    }

    /* Animasi untuk teks */
    @keyframes moveText {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
        100% {
            transform: translateY(0px);
        }
    }

    /* Container Styling */
    .container {
        background: rgba(255, 255, 255, 0.8); /* Background semi transparan */
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        max-width: 900px;
        margin: 30px auto;
        animation: fadeIn 1.5s ease-in-out;
    }


    /* Sketch containers */
    .sketch-left, .sketch-right {
        position: fixed;
        top: 50%;
        transform: translateY(-50%);
        width: 100px;
        height: 400px;
        pointer-events: none;
    }

    .sketch-left { left: 20px; }
    .sketch-right { right: 20px; }

    /* Nasi Goreng sketch */
    .nasi-goreng {
        position: absolute;
        width: 70px;
        height: 70px;
        border: 3px solid #ff69b4;
        border-radius: 50%;
        background: #fff;
        animation: floating 3s infinite ease-in-out;
    }

    .nasi-goreng::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 40px;
        height: 40px;
        background: #ff69b4;
        border-radius: 50%;
        box-shadow: -10px -5px 0 -5px #ff69b4, 
                    10px -5px 0 -5px #ff69b4,
                    0 10px 0 -5px #ff69b4;
    }

    /* Es Teh sketch */
    .es-teh {
        position: absolute;
        width: 40px;
        height: 60px;
        border: 3px solid #ff69b4;
        border-radius: 5px 5px 10px 10px;
        animation: floating 3s infinite ease-in-out;
        animation-delay: 0.5s;
    }

    .es-teh::before {
        content: '';
        position: absolute;
        top: 10px;
        left: 5px;
        width: 30px;
        height: 20px;
        background: #ff69b4;
        opacity: 0.5;
    }

    .es-teh::after {
        content: '';
        position: absolute;
        top: -8px;
        right: -8px;
        width: 15px;
        height: 15px;
        border: 3px solid #ff69b4;
        border-radius: 50%;
    }

    /* Sate sketch */
    .sate {
        position: absolute;
        width: 15px;
        height: 80px;
        background: #ff69b4;
        transform: rotate(45deg);
        animation: floating 3s infinite ease-in-out;
        animation-delay: 1s;
    }

    .sate::before {
        content: '';
        position: absolute;
        top: 10px;
        left: -10px;
        width: 35px;
        height: 15px;
        background: #ff69b4;
        border-radius: 5px;
    }

    .sate::after {
        content: '';
        position: absolute;
        top: 35px;
        left: -10px;
        width: 35px;
        height: 15px;
        background: #ff69b4;
        border-radius: 5px;
    }

    /* Position elements */
    .sketch-left .nasi-goreng { top: 50px; left: 10px; }
    .sketch-left .es-teh { top: 200px; left: 20px; }
    .sketch-left .sate { top: 320px; left: 25px; }
    .sketch-right .nasi-goreng { top: 50px; right: 10px; }
    .sketch-right .es-teh { top: 200px; right: 20px; }
    .sketch-right .sate { top: 320px; right: 25px; }

    /* Floating animation */
    @keyframes floating {
        0%, 100% {
            transform: translateY(0) rotate(0deg);
        }
        50% {
            transform: translateY(-15px) rotate(5deg);
        }
    }

    /* Keep your existing container, footer, navbar, and other styles */
    .container {
        background: rgba(255, 255, 255, 0.8);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        max-width: 900px;
        margin: 30px auto;
        animation: fadeIn 1.5s ease-in-out;
        position: relative;
        z-index: 1;
    }

    /* Keep your existing responsive styles */
    @media (max-width: 1200px) {
        .sketch-left, .sketch-right {
            width: 60px;
        }
    }

    @media (max-width: 768px) {
        .sketch-left, .sketch-right {
            display: none;
        }
    }
    /* Footer Styling */
    footer {
        background: #ff69b4; /* Warna pink cerah */
        color: white;
        font-weight: bold;
        text-align: center;
        padding: 15px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
        animation: slideUp 1.5s ease-in-out;
    }

    /* Navbar Styling */
    nav {
        background: linear-gradient(to right, #ff8da1, #ffe4e1); /* Gradasi warna pink soft */
        padding: 15px;
        text-align: center;
        animation: fadeIn 1s ease-in-out;
    }

    /* Teks navbar warna pink tua */
    nav a {
        color: #c2185b; /* Warna pink tua */
        margin: 0 15px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.1rem;
        padding: 8px 15px;
        border-radius: 5px;
        transition: background 0.3s ease, transform 0.3s ease, color 0.3s ease;
    }


    /* Hover efek */
    nav a:hover {
        background: #ff69b4; /* Background pink hover */
        color: #ffffff; /* Ubah warna teks menjadi putih saat hover */
        transform: scale(1.1);
    }

    /* Animasi Container dan Footer */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        header h1 {
            font-size: 1.5rem;
        }

        nav a {
            font-size: 0.9rem;
            margin: 0 8px;
        }

        .container {
            padding: 20px;
        }
    }
    

    /* Your existing styles */
    .container {
        background: rgba(255, 255, 255, 0.8);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        max-width: 900px;
        margin: 30px auto;
        animation: fadeIn 1.5s ease-in-out;
        position: relative;
        z-index: 1;
    }

    /* Rest of your existing styles */

    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .sketch-left, .sketch-right {
            width: 60px;
        }
    }

    @media (max-width: 768px) {
        .sketch-left, .sketch-right {
            display: none;
        }
    }
</style>

<!-- Decorative food elements containers -->
<div class="sketch-left">
    <div class="nasi-goreng"></div>
    <div class="es-teh"></div>
    <div class="sate"></div>
</div>

<div class="sketch-right">
    <div class="nasi-goreng"></div>
    <div class="es-teh"></div>
    <div class="sate"></div>
</div>

<?php
require "includes/config.php";
require "includes/function.php";
?>
<!doctype html>
<html lang="en">
    
<header>
    <h1>Daftar Kuliner Tradisional</h1>
    <h1>Rumah Makan Nurul</h1>
</header>

<?php require "includes/navbar.php" ?> 

<div class="container">
    <?php require "includes/konten.php" ?> 
</div>

<footer>
    <div>Kuliner Nusantara. All Rights Reserved. <?= date("Y") ?></div>
</footer>

<?php require "includes/pageFooter.php" ?>