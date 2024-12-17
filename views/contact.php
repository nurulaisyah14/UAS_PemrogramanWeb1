<?php require "includes/pageHeader.php" ?>

<style>
    /* General Styling */
    body {
        background: linear-gradient(to bottom, #ffe4e1, #ffc1cc); /* Latar belakang pink gradasi */
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }

    .contact-container {
        background: rgba(255, 255, 255, 0.9); /* Latar semi transparan */
        padding: 50px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        max-width: 900px;
        margin: 50px auto;
        color: #333;
        animation: fadeIn 1.5s ease-in-out;
    }

    h1 {
        color: #ff1493; /* Warna pink terang */
        margin-bottom: 20px;
        font-size: 2.8rem;
        font-weight: bold;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        text-align: center;
        animation: zoomIn 1s ease-in-out; /* Animasi zoom pada judul */
    }

    p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        text-align: center;
        margin-bottom: 30px;
        animation: slideUp 1.5s ease-in-out;
    }

    /* Form Styling */
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        animation: slideInLeft 1.5s ease-out; /* Animasi slide-in form */
    }

    input, textarea {
        width: 100%;
        max-width: 600px;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        outline: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: border 0.3s ease, box-shadow 0.3s ease;
    }

    input:focus, textarea:focus {
        border-color: #ff1493;
        box-shadow: 0 5px 15px rgba(255, 20, 147, 0.3);
    }

    button {
        background: #ff69b4;
        color: white;
        padding: 12px 25px;
        border: none;
        border-radius: 8px;
        font-size: 1.1rem;
        cursor: pointer;
        text-transform: uppercase;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    button:hover {
        background: #ff1493; /* Warna pink lebih gelap saat hover */
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    /* Contact Info Styling */
    .contact-info {
        margin-top: 40px;
        text-align: center;
        animation: fadeIn 2s ease-in-out;
    }

    .contact-info p {
        font-size: 1.1rem;
        margin: 10px 0;
    }

    .contact-info .highlight {
        color: #ff1493; /* Warna pink terang */
        font-weight: bold;
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

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes zoomIn {
        from {
            transform: scale(0.8);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        h1 {
            font-size: 2rem;
        }

        p, .contact-info p {
            font-size: 1rem;
        }

        input, textarea {
            width: 100%;
        }
    }
</style>

<div class="contact-container">
    <h1>Kontak Kami</h1>
    <p>Hubungi kami untuk pertanyaan, saran, atau reservasi. Kami siap membantu Anda!</p>
    
    <form action="submit_contact.php" method="post">
        <input type="text" name="name" placeholder="Nama Anda" required>
        <input type="email" name="email" placeholder="Email Anda" required>
        <textarea name="message" rows="5" placeholder="Pesan Anda" required></textarea>
        <button type="submit">Kirim Pesan</button>
    </form>

    <div class="contact-info">
        <p><span class="highlight">Alamat:</span> Jl. Makan Enak No. 123, Jakarta</p>
        <p><span class="highlight">Telepon:</span> +62 812 3456 7890</p>
        <p><span class="highlight">Email:</span> info@rumahmakannurul.com</p>
    </div>
</div>

<?php require "includes/pageFooter.php" ?>
