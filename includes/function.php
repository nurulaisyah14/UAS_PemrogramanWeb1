<?php
function inputData($data)
{
    // Menghapus spasi di awal dan akhir string
    $data = trim($data);

    // Menghapus garis miring terbalik dari string (biasanya digunakan dalam input yang disaring)
    $data = stripslashes($data);

    // Filter teks untuk mencegah XSS (menyaring tag HTML dan karakter khusus)
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8'); // Menambahkan ENT_QUOTES untuk menangani semua tanda kutip

    // Menghapus HTML dan tag PHP dari string tertentu
    $data = strip_tags($data); // Jika ingin menghapus tag HTML dan PHP, gunakan ini
    
    return $data;
}
