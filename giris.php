<?php

$ogrenci_no = "B251210377"; 
$beklenen_mail = $ogrenci_no . "@sakarya.edu.tr";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gelen_email = $_POST['email'] ?? '';
    $gelen_sifre = $_POST['password'] ?? '';

    // 1. Kural: Boş alan kontrolü
    if (empty($gelen_email) || empty($gelen_sifre)) {
        header("Location: login.html?error=empty");
        exit;
    }

    if ($gelen_email === $beklenen_mail && $gelen_sifre === $ogrenci_no) {
        echo "<!DOCTYPE html>
        <html lang='tr'>
        <head>
            <meta charset='UTF-8'>
            <title>Hoşgeldiniz</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
            <link rel='stylesheet' href='style.css'>
        </head>
        <body class='d-flex align-items-center justify-content-center' style='min-height: 100vh;'>
            <div class='modern-card p-5 text-center fade-in'>
                <h1 class='display-5 fw-bold text-success mb-3'>🎉 Başarılı!</h1>
                <h2 class='h3 text-dark'>Hoşgeldiniz <span class='text-primary'>$ogrenci_no</span></h2>
                <p class='text-muted mt-3'>Sisteme güvenli bir şekilde giriş yaptınız.</p>
                <a href='index.html' class='btn btn-outline-primary btn-modern mt-4'>Ana Sayfaya Git</a>
            </div>
        </body>
        </html>";
    } else {
        header("Location: login.html?error=wrong");
        exit;
    }
}
?>