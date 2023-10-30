<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

## Dokumentasi RecycleMe

```bash
git clone https://github.com/ammarbahtiarasli/laravel-breeze-tailwind-crud-sederhana.git 'project-name'
cd project-name
```
Instal semua PHP dependency dengan menjalankan perintah berikut ini
```bash
composer install
```
Jangan lupa untuk menginstall semua node package yang kita butuhkan seperti:
```bash
npm install 
```
Jika ingin dikembangkan, bisa dengan menjalankan
```bash
npm run dev
```

Buat 1 file dengan nama `.env` kemudian silakan copy semua yang ada di dalam file `.env.example` ke dalam file `.env`. Kemudian buka terminal kembali untuk generasi key baru.
```bash
php artisan key:generate
```
Buat 1 database, dan sesuaikan namanya dengan konfirgurasi yang ada di file `.env`.
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
Setelah itu, jalankan perintah berikut pada terminal.
```bash
php artisan migrate
php artisan migrate:fresh

php artisan db:seed --class=MahasiswaSeeder
php artisan db:seed --class=MasyarakatSeeder
```
Setelah itu, jalankan `artisan serve` untuk memulai server laravel nya.

Silakan buat PR jika ingin membuat perubahan, Sesuaikan dengan branch nya masing-masing. 

`Last Edited 30/10/23 @recycle.me`
