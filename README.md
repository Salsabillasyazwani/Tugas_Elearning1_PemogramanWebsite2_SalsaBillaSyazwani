# Juragan Snack

Selamat datang di **Juragan Snack**, website resmi untuk memesan snack renyah dan gurih secara online. Website ini dibuat sebagai proyek **Tugas Praktikum Web** menggunakan **Laravel**, **Bootstrap 5**, dan **Blade Template**.

Website ini memungkinkan pengguna untuk melihat menu snack, memesan produk, dan mendapatkan informasi mengenai layanan delivery & pre-order dengan tampilan yang **interaktif**, **responsive**, dan **user-friendly**.

---

## Fitur Website

### 1. Landing Page
- **Hero Section**: Menampilkan carousel produk unggulan dengan badge, judul, subtitle, dan tombol CTA untuk melihat menu atau pesan langsung.
- **Icon Stats**: Menampilkan informasi singkat seperti “Buka Setiap Hari”, “Pesan Online”, dan jumlah pelanggan.

### 2. Menu Produk
- Menampilkan daftar produk snack unggulan seperti:
  - Usus Crispy
  - Kulit Ayam Crispy
  - Basreng
  - Seblak Kering
  - Makaroni
  - Kripik Singkong
- **Filter produk** berdasarkan kategori
- Setiap produk menampilkan:
  - Gambar produk
  - Nama produk
  - Tipe produk
  - Harga
  - Rating dan jumlah review
  - Tombol untuk melihat detail atau pesan

### 3. Layanan (Service Highlight)
- Menampilkan layanan **Delivery & Pre-Order**
- Bagian ini memiliki:
  - Gambar ilustrasi layanan
  - Judul dan deskripsi layanan
  - Fitur layanan seperti Delivery Cepat, Pesan Mudah, dan Rasa Terjamin
  - Tombol CTA untuk memesan langsung

### 4. Footer
- **Informasi Brand**: Nama website dan deskripsi singkat
- **Media Sosial**: Instagram, Facebook, TikTok, WhatsApp
- **Menu Footer**: Menu & Layanan
- **Newsletter**: Form untuk berlangganan info promo & menu terbaru
- **Bottom Bar**: Copyright & catatan tugas

### 5. CTA Banner
- Mengajak pengguna untuk melihat semua menu atau melakukan pemesanan
- Tombol interaktif untuk navigasi cepat

### 6. Responsiveness
- Website menyesuaikan tampilan pada perangkat desktop, tablet, dan mobile
- Navbar menampilkan hamburger menu pada ukuran kecil

---

## Struktur Project
Tuga_Elearning1/
├─ app/
│  ├─ Http/
│  │  ├─ Controllers/
│  │  └─ Middleware/
│  └─ Models/
├─ bootstrap/
├─ config/
├─ database/
│  ├─ migrations/
│  └─ seeders/
├─ public/
│  ├─ assets/
│  │  ├─ css/
│  │  ├─ js/
│  │  └─ images/
│  └─ index.php
├─ resources/
│  ├─ views/
│  │  ├─ layout/
│  │  ├─ partials/
│  │  └─ landing.blade.php
│  └─ lang/
├─ routes/
│  └─ web.php
├─ storage/
├─ tests/
├─ vendor/
├─ .env
├─ .gitignore
├─ composer.json
├─ composer.lock
├─ README.md
└─ artisan
