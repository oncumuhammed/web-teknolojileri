# Web Teknolojileri Dersi Proje Ödevi

Bu proje, Sakarya Üniversitesi Bilgisayar Mühendisliği Web Teknolojileri dersi kapsamında, modern web standartları (Semantik HTML5, Responsive Design, JavaScript, PHP) kullanılarak geliştirilmiş kişisel ve profesyonel bir web uygulamasıdır.

## 👨‍💻 Geliştirici ve Ders Bilgileri
- **Ders:** Web Teknolojileri
- **Ad Soyad:** Muhammed Emin Öncü
- **Öğrenci No:** b251210377
- **Bölüm:** Bilgisayar Mühendisliği

## 🔗 Proje Bağlantıları
- **GitHub Reposu:** (https://github.com/oncumuhammed/web-teknolojileri)
- **Canlı Site Linki (Hosting):** [000webhost veya InfinityFree Linki Buraya Gelecek]

## 🚀 Kullanılan Teknolojiler
- **Frontend:** HTML5 (Semantik yapılar), CSS3 (Modern UI, Harici Stil Dosyası)
- **Framework & Kütüphaneler:** Bootstrap 5 (Responsive grid altyapısı), Vue.js 3 (Frontend Form Validasyonu)
- **Backend:** PHP (Form işleme ve Güvenli Giriş doğrulama mekanizması)
- **Veri Çekme (API):** TVMaze API (Asenkron JS Fetch metodu ile)

## 📁 Proje Sayfaları, Açıklamaları ve Ekran Görüntüleri

### 1. Hakkında (Giriş) Sayfası (`index.html`)
Kişisel tanıtım, motto ve ilgi alanlarının (Vücut geliştirme, IoT, Otomasyon vb.) bulunduğu ana sayfa.
*Ekran görüntüsü buraya eklenecek.*

### 2. Özgeçmiş (CV) Sayfası (`cv.html`)
Eğitim bilgilerinin ve geliştirilen yazılım/otomasyon projelerinin sergilendiği, Semantic Tag (header, section, article vb.) standartlarına uygun özgeçmiş sayfası.
*Ekran görüntüsü buraya eklenecek.*

### 3. Şehrim Sayfası (`sehir.html`)
Hatay'ın tarihi yerlerinin (Titus Tüneli, Harbiye Şelalesi vb.) yer aldığı 4 resimli tıklanabilir Bootstrap Slider ve kültürel mirasımız olan Habib-i Neccar Camii'nin detaylı tanıtımı.
*Ekran görüntüsü buraya eklenecek.*

### 4. İlgi Alanlarım (`ilgi-alanlarim.html`)
TVMaze API üzerinden "cyber" (siber/teknoloji) temalı dizi verilerinin JavaScript Fetch API ile asenkron olarak çekilip Bootstrap kartları ile listelendiği sayfa. Döviz veya hava durumu API'si kullanılmamıştır.
*Ekran görüntüsü buraya eklenecek.*

### 5. İletişim (`iletisim.html` ve `islem.php`)
Tüm form elemanlarını (text, radio, checkbox, select, textarea) içeren iletişim sayfası. Form verileri hem Native JavaScript hem de Vue.js ile iki farklı butonda denetlenmektedir (boşluk, e-mail formatı, sadece rakam kontrolü vb.). Doğrulanan veriler `islem.php` sayfasında ekrana yazdırılmaktadır.
*Ekran görüntüsü buraya eklenecek.*

### 6. Login (`login.html` ve `giris.php`)
Öğrenci numarası ve e-postası (b2412100001@sakarya.edu.tr / b2412100001) ile güvenli giriş yapılabilen sistem. Hatalı durumlarda JavaScript ile aynı sayfada uyarı verilirken, başarılı girişte PHP üzerinden özel "Hoşgeldiniz b2412100001" sayfasına yönlendirilir.
*Ekran görüntüsü buraya eklenecek.*

## 🛠️ Kurulum ve Çalıştırma (Yerel Test İçin)
Projede yer alan PHP dosyalarının çalışabilmesi için yerel sunucuya (XAMPP/WAMP) ihtiyaç vardır. 
1. Dosyaları yerel sunucunuzun `htdocs` veya `www` dizinine kopyalayın.
2. Tarayıcıdan `localhost/proje-klasor-adi` şeklinde projeyi başlatın.