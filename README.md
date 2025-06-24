📁 Proje Adı: Atelier Arkın Eğitim Platformu
🔧 Teknolojiler:
Backend: PHP 8.x

Veritabanı: SQLite

Frontend: Blade (Laravel’siz düz PHP için HTML + Bootstrap )

Kütüphaneler: PHPMailer, PDO

Panel: Basit bir admin arayüzü (girişli)

🧩 Site Sayfaları ve Özellikleri
1. Anasayfa (Landing Page)
Büyük görsellerle tanıtım (slider veya sabit görsel)

Eğitim türlerinin öne çıkanları:

Profesyonel Aşçılık

Amatör Aşçılık

Amatör Pastacılık

"Hemen Başvur" butonları

2. Eğitim Programları
2.1 Profesyonel Aşçılık Eğitimi
Açıklamalar

Eğitim süresi, ücreti, kontenjan

Eğitim içeriği listesi

Başvuru formuna yönlendirme

2.2 Amatör Aşçılık Eğitimi
Haftalık ders planı

Sertifika bilgisi

2.3 Amatör Pastacılık Eğitimi
Tatlılar, kekler, kurabiyeler, artizan ekmek içeriği

Eğitim saati, ücreti, süresi

3. Başvuru Formu
Form alanları:

Ad, Soyad

Doğum Tarihi

E-posta

Telefon

Katılmak istediği program (dropdown)

Eğitim tercihi: Hafta içi / Hafta sonu

Stajlı / Stajsız

Form verisi SQLite'a kaydedilir

E-posta bildirimi admin'e gider (PHPMailer)

4. Sıkça Sorulan Sorular
Eğitimin geçerliliği

Sertifika türü

Konaklama, staj vs.

5. İletişim
Harita (Google Embed)

Form (ad, e-posta, mesaj)

Telefon, adres, e-posta bilgileri

6. Admin Paneli
Giriş (kullanıcı adı & şifre)

Başvuruları listele (SQLite üzerinden)

Eğitim bazlı filtreleme

Başvuru silme veya dışa aktar (CSV)

🔒 Güvenlik ve Ek Özellikler
CSRF koruması (formlar için)

Giriş ekranı için brute force önlemi

Admin paneline sadece giriş yapılmışsa erişim

📌 Ekstra Notlar
Mobil uyumlu tasarım şart.

Kurs ücretleri zamanla değişebilir: admin panelinden düzenlenebilir yapılabilir.
