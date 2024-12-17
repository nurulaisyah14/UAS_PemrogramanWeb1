<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Nusantara</title>
    <style>
        :root {
            --primary-color: #FF4081;
            --secondary-color: #F50057;
            --accent-color: #C51162;
            --text-primary: #333;
            --text-secondary: #666;
            --background-light: #F4F4F4;
            --white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--background-light);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .hero {
            background: linear-gradient(135deg, #FF80AB, #FF4081, #F50057, #C51162);
            background-size: 400% 400%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            animation: gradientShift 15s ease infinite;
        }

        .food-icon {
            position: absolute;
            font-size: 30px;
            opacity: 0.7;
            pointer-events: none;
        }

        .food-icon:nth-child(1) { content: '🍚'; top: 15%; left: 20%; animation: float 8s infinite; }
        .food-icon:nth-child(2) { content: '🥘'; top: 25%; right: 25%; animation: float 9s infinite 1s; }
        .food-icon:nth-child(3) { content: '🍲'; bottom: 20%; left: 15%; animation: float 7s infinite 2s; }
        .food-icon:nth-child(4) { content: '🥗'; bottom: 30%; right: 20%; animation: float 10s infinite 3s; }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 2.5rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: slideUpFade 1s forwards;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 1.5rem;
            animation: titleWave 3s ease-in-out infinite;
        }

        .hero p {
            font-size: clamp(1.2rem, 3vw, 1.5rem);
            color: white;
            margin-bottom: 2rem;
            animation: fadeIn 1s forwards 0.5s;
        }

        .btn-explore {
            background: linear-gradient(45deg, #FF4081, #F50057);
            color: white;
            font-size: 1.2rem;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .btn-explore:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            animation: bounce 0.5s infinite;
        }

        .main-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .food-card {
            background-color: var(--white);
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            overflow: hidden;
            transition: all 0.3s ease;
            animation: fadeInUp 0.8s ease-out;
        }

        .food-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .food-card .content {
            padding: 20px;
            text-align: center;
        }

        .food-card .content h3 {
            font-size: 1.5rem;
            color: var(--accent-color);
            margin-bottom: 10px;
        }

        .food-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .food-card:hover img {
            transform: scale(1.1);
        }

        footer {
            background-color: #f8bbd0;
            text-align: center;
            padding: 20px;
            color: #880e4f;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(10deg);
            }
        }

        @keyframes slideUpFade {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            to { opacity: 1; }
        }

        @keyframes titleWave {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(-3px); }
            50% { transform: translateY(-6px); }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <section class="hero">
        <div class="food-icon">🍜</div>
        <div class="food-icon">🍖</div>
        <div class="food-icon">🍚</div>
        <div class="food-icon">🍲</div>

        <div class="hero-content">
            <h1>Jelajahi Citarasa Nusantara</h1>
            <p>Petualangan Kuliner Tradisional Indonesia</p>
            <a href="?page=makanan" class="btn-explore">Mulai Eksplorasi</a>
        </div>
    </section>

    <div class="main-container">
        <?php
        $makanan = [
            ["Nasi Goreng", "Makanan khas Indonesia yang nikmat.", "assets/images/nasi_goreng.jpg"],
            ["Sate Ayam", "Daging ayam panggang dengan saus kacang.", "assets/images/sate_ayam.jpg"],
            ["Rendang", "Daging sapi dengan bumbu khas Padang.", "assets/images/rendang.jpg"],
            ["Bakso", "Bakso daging sapi dengan kuah gurih.", "assets/images/bakso.jpg"],
        ];

        foreach ($makanan as $item) {
            echo "
            <div class='food-card'>
                <img src='{$item[2]}' alt='{$item[0]}'>
                <div class='content'>
                    <h3>{$item[0]}</h3>
                    <p>{$item[1]}</p>
                </div>
            </div>";
        }
        ?>
    </div>

</body>
</html>