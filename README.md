
# Website SMK BAKTI PURWOKERTO

Website untuk sekolah SMK BAKTI PURWOKERTO, menampung profil sekolah antara lain :
- Video Profil Sekolah
- Daftar Program Kejuruan
- Visi Misi
- Fasilitas
- Daftar Ekstrakulikuler
- Struktur Organisasi
- Galeri
  Website ini juga menampung daftar guru, berita terbaru, acara yang akan datang, daftar beasiswa, serta Testimoni Alumni. Dilengkapi juga Form Kontak sebagai jembatan antara user dan pihak sekolah untuk berkomunkasi.




## Daftar Fitur

- Light/dark mode toggle
- Count Down waktu PPDB
- Manajemen data Beasiswa
- Manajemen Berita
- Manajemen data Ekstrakulikuler
- Manajemen data Fasilitas
- Manajemen Geleri
- Manajemen data Guru
- Manajemen data Kontak User
- Manajemen data Pendaftar
- Manajemen data User

Memberikan fitur untuk mendaftar lewat website dengan cara mengisi form yang disediakan. Serta melakukan pendaftaran lewat whatsapp dengan cara mengunduh berkas-berkas, lalu mengisinya, setelah itu dikirimkan ke nomor Whatsapp yang sudah disediakan.


## Installation

Install Web Smk Bakti Purwokerto With Composer

```bash
  git clone https://github.com/mikmself/WebSmkBakti.git
  cd WebSmkBakti
  composer install || composer update
```

## rename .env.exampe to .env
```bash
  cp .env.example .env
```
## setup database
```bash
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=smkbakti
 DB_USERNAME=root
 DB_PASSWORD=
```
## migrate, seed, and run
```bash
php artisan migrate
php artisan db:seed
php artisan serve
```


## More Info
To see hidden route list
```bash
php artisan route:list
```
Admin Login
```bash
/admin/login
```
## file master
` /resources/views/userpage/master `

## More Command
Jika Gambar Tidak Muncul Jalankan Perintah

` php artisan storage:link `

Jika Membuat route baru jalankan perintah ini untuk merefresh cache

` php artisan route:clear `

Jika Membuat view baru jalankan perintah ini untuk merefresh cache

` php artisan view:clear `

Jika Membuat config baru jalankan perintah ini untuk merefresh cache

` php artisan config:clear `

Jika Membuat event baru jalankan perintah ini untuk merefresh cache

` php artisan event:clear `
# Screenshots
## Halaman Beranda
![App Screenshot](https://i.ibb.co.com/FVzL2Ym/d3aaae57-cb43-4a08-bd78-802117b9c41a.png)

## Halaman Visi Misi
![App Screenshot](https://i.ibb.co.com/bBSVdDt/screencapture-127-0-0-1-8000-visi-misi-2024-06-14-13-12-56.png)

## Halaman Fasilitas
![App Screenshot](https://i.ibb.co.com/YLVSH0R/screencapture-127-0-0-1-8000-fasilitas-2024-06-14-13-14-31.png)

## Halaman Ekstrakulikuler
![App Screenshot](https://i.ibb.co.com/G5y5HZr/screencapture-127-0-0-1-8000-ekstrakulikuler-2024-06-14-13-15-22.png)

## Halaman Struktur Organisasi
![App Screenshot](https://i.ibb.co.com/W0CLFW6/screencapture-127-0-0-1-8000-struktur-organisasi-2024-06-14-13-16-09.png)

## Halaman Daftar Guru
![App Screenshot](https://i.ibb.co.com/F5g3T9j/screencapture-127-0-0-1-8000-data-guru-2024-06-14-13-17-16.png)

## Halaman Alur Pendaftaran
![App Screenshot](https://i.ibb.co.com/W0DYTfr/screencapture-127-0-0-1-8000-alur-pendaftaran-2024-06-14-13-18-10.png)

## Halaman Data Beasiswa
![App Screenshot](https://i.ibb.co.com/ckRH07Z/screencapture-127-0-0-1-8000-beasiswa-2024-06-14-13-18-53.png)

## Halaman Pendaftaran Via Whatsapp
![App Screenshot](https://i.ibb.co.com/MRYdDP6/screencapture-127-0-0-1-8000-pendaftaran-whatsapp-2024-06-14-13-20-00.png)

## Halaman Pendaftaran Via Website
![App Screenshot](https://i.ibb.co.com/yX3XMdS/screencapture-127-0-0-1-8000-pendaftaran-website-2024-06-14-13-20-32.png)

## Halaman Kontak
![App Screenshot](https://i.ibb.co.com/g7PVdTd/screencapture-127-0-0-1-8000-kontak-2024-06-14-13-21-23.png)
## Optimizations

```bash
  php artisan optimize
  php artisan config:cache
  php artisan event:cache
  php artisan route:cache
  php artisan view:cache
```


## Tech Stack

**Client:** Laravel Livewire, TailwindCSS

**Server:** Node, Laravel


## Authors

- [@mikmself](https://www.github.com/mikmself)
- [@Dianazmi](https://github.com/Dianazmi)

## License

[MIT](https://choosealicense.com/licenses/mit/)

