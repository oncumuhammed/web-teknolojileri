<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sonucu - Web Teknolojileri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container fade-in" style="padding-top: 60px; padding-bottom: 60px;">
    <div style="max-width: 720px; margin: 0 auto;">
        <div class="modern-card p-5">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $ad       = htmlspecialchars($_POST['ad']       ?? 'Belirtilmedi');
                $email    = htmlspecialchars($_POST['email']    ?? 'Belirtilmedi');
                $telefon  = htmlspecialchars($_POST['telefon']  ?? 'Belirtilmedi');
                $konu     = htmlspecialchars($_POST['konu']     ?? 'Belirtilmedi');
                $cinsiyet = htmlspecialchars($_POST['cinsiyet'] ?? 'Belirtilmedi');
                $mesaj    = htmlspecialchars($_POST['mesaj']    ?? 'Belirtilmedi');
                $onay     = isset($_POST['onay']) ? 'Evet, onaylandı' : 'Hayır, onaylanmadı';

                echo '<div style="text-align:center;margin-bottom:28px;">
                    <div style="width:64px;height:64px;border-radius:50%;background:linear-gradient(135deg,#10b981,#059669);display:flex;align-items:center;justify-content:center;font-size:1.8rem;margin:0 auto 14px;">✅</div>
                    <h1 style="font-size:1.4rem;font-weight:700;">Mesajınız İletildi!</h1>
                    <p style="color:var(--text-2);margin-top:6px;">Aşağıda gönderdiğiniz bilgiler özetlenmiştir.</p>
                </div>';

                echo '<div style="overflow-x:auto;">';
                echo '<table class="data-table">';
                echo '<thead><tr><th colspan="2">Gelen Form Verileri</th></tr></thead>';
                echo '<tbody>';

                $rows = [
                    ['👤 Ad Soyad',   $ad],
                    ['📧 E-posta',    $email],
                    ['📞 Telefon',    $telefon],
                    ['📌 Konu',       $konu],
                    ['🧑 Cinsiyet',   $cinsiyet],
                    ['💬 Mesaj',      $mesaj],
                    ['✅ Onay',       $onay],
                ];
                foreach ($rows as $row) {
                    echo '<tr>
                        <td class="row-label">' . $row[0] . '</td>
                        <td class="row-value">' . $row[1] . '</td>
                    </tr>';
                }

                echo '</tbody></table></div>';
            } else {
                echo '<div style="text-align:center;">
                    <div style="font-size:3rem;margin-bottom:16px;">⛔</div>
                    <h1 style="font-size:1.3rem;font-weight:700;">Erişim Reddedildi</h1>
                    <p style="color:var(--text-2);margin-top:8px;">Bu sayfaya doğrudan erişim izni yoktur.</p>
                </div>';
            }
            ?>
            <div style="text-align:center; margin-top: 28px;">
                <a href="iletisim.html" class="btn btn-primary">← İletişim Sayfasına Dön</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>