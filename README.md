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
npm install && npm run build
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
Setelah itu, jalankan perintah berikut pada terminal Anda.
```bash
php artisan migrate:fresh --seed
```
Setelah itu, jalankan `artisan serve` untuk memulai laravel nya.

Silakan buat PR jika ingin membuat perubahan ya.
