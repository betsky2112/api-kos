API Kos Documentation

Overview

API Kos adalah sebuah layanan REST API yang menyediakan informasi terkait kos-kosan. API ini memiliki dua endpoint utama:

GET /kos: Mendapatkan daftar seluruh kos.

GET /kos/{id}: Mendapatkan detail informasi kos berdasarkan ID.

Installation

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan API ini di lingkungan lokal Anda:

1. Clone Repository

Clone repository ini ke dalam sistem lokal Anda dengan perintah berikut:

git clone <repository-url>
cd <nama-folder-repository>

2. Install Dependencies

Pastikan Anda telah menginstal Composer dan PHP (versi 8.0 atau lebih baru). Kemudian jalankan perintah berikut untuk menginstal dependencies:

composer install

3. Konfigurasi Environment

Salin file .env.example menjadi .env:

cp .env.example .env

Edit file .env sesuai dengan konfigurasi database Anda:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbkos
DB_USERNAME=root
DB_PASSWORD=password_user

4. Migrasi dan Seeder Database

Jalankan migrasi dan seeder untuk membuat struktur dan data awal database:

php artisan migrate --seed

5. Menjalankan Server

Jalankan server pengembangan dengan perintah berikut:

php artisan serve

API sekarang dapat diakses melalui URL berikut:

http://localhost:8000

API Endpoints
