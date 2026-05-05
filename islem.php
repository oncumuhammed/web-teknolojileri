<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sonucu - Web Teknolojileri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container fade-in mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="modern-card p-5">
                    <h2 class="text-success fw-bold border-bottom pb-3 mb-4">✅ Mesajınız Başarıyla İletildi!</h2>
                    
                    <?php
                    // Formdan gelen verileri yakalama ve güvenlik için htmlspecialchars kullanma
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $ad = htmlspecialchars($_POST['ad'] ?? 'Belirtilmedi');
                        $email = htmlspecialchars($_POST['email'] ?? 'Belirtilmedi');
                        $telefon = htmlspecialchars($_POST['telefon'] ?? 'Belirtilmedi');
                        $konu = htmlspecialchars($_POST['konu'] ?? 'Belirtilmedi');
                        $cinsiyet = htmlspecialchars($_POST['cinsiyet'] ?? 'Belirtilmedi');
                        $mesaj = htmlspecialchars($_POST['mesaj'] ?? 'Belirtilmedi');

                        echo "<div class='table-responsive'>";
                        echo "<table class='table table-bordered table-hover'>";
                        echo "<thead class='table-light'><tr><th colspan='2' class='text-center'>Gelen Form Verileri</th></tr></thead>";
                        echo "<tbody>";
                        echo "<tr><td class='fw-bold w-25'>Ad Soyad</td><td>$ad</td></tr>";
                        echo "<tr><td class='fw-bold'>E-posta</td><td>$email</td></tr>";
                        echo "<tr><td class='fw-bold'>Telefon</td><td>$telefon</td></tr>";
                        echo "<tr><td class='fw-bold'>Konu</td><td>$konu</td></tr>";
                        echo "<tr><td class='fw-bold'>Cinsiyet</td><td>$cinsiyet</td></tr>";
                        echo "<tr><td class='fw-bold'>Mesaj</td><td>$mesaj</td></tr>";
                        echo "</tbody></table></div>";
                    } else {
                        echo "<div class='alert alert-danger'>Bu sayfaya doğrudan erişim izni yoktur. Lütfen formu kullanarak gelin.</div>";
                    }
                    ?>
                    
                    <div class="text-center mt-4">
                        <a href="iletisim.html" class="btn btn-primary btn-modern">İletişim Sayfasına Dön</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>