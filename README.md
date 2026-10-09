Redevelopment Official Website DPN PERADI
###################################################################

Repositori ini berisi proyek re-pengembangan (*redevelopment*) situs web resmi **Dewan Pimpinan Nasional Perhimpunan Advokat Indonesia (DPN PERADI)**.

Proyek ini dibangun menggunakan framework modern **Laravel** dengan bundler aset cepat **Vite**, antarmuka yang responsif, serta integrasi manajemen konten (CMS) untuk menyajikan berita, pengumuman, agenda organisasi, struktur kepengurusan, dan informasi layanan keadvokatan.

*******************
Fitur Utama Website
*******************

1. **Beranda & Profil Organisasi**: Informasi sejarah, visi & misi, serta struktur kepengurusan DPN PERADI.
2. **Pusat Berita & Pengumuman**: Publikasi artikel hukum, siaran pers, dan pengumuman resmi organisasi.
3. **Layanan & Informasi Advokat**: Informasi Pendidikan Khusus Profesi Advokat (PKPA), Ujian Profesi Advokat (UPA), serta Pengangkatan & Sumpah Advokat.
4. **Galeri & Dokumentasi Kegiatan**: Dokumentasi foto dan video acara serta kegiatan nasional PERADI.
5. **Panel Admin / Content Management System (CMS)**: Pengelolaan konten situs web secara dinamis oleh tim administrator.

*******************
Teknologi yang Digunakan
*******************

- **Backend Framework**: Laravel
- **Asset Bundler / Frontend Tooling**: Vite
- **Frontend / Styling**: Tailwind CSS / Bootstrap & JavaScript ES6
- **Database**: MySQL / MariaDB
- **Package Manager**: Composer (PHP) & NPM (Node.js)

*******************
Persyaratan Server (Requirements)
*******************

- PHP: Version 8.1 / 8.2+
- Node.js: Version 18.x / 20.x+
- NPM: Version 9.x+
- Database: MySQL 5.7+ / MariaDB 10.3+
- Web Server: Apache / Nginx
- Ekstensi PHP Wajib: ``BCMath``, ``Ctype``, ``cURL``, ``DOM``, ``Fileinfo``, ``JSON``, ``Mbstring``, ``OpenSSL``, ``PDO``, ``Tokenizer``, ``XML``

************
Cara Instalasi & Jalankan Proyek
************

1. **Kloning Repositori**:
   .. code-block:: bash

      git clone https://github.com/rifqi13/redevelope-Official-Website-DPN-PERADI.git
      cd redevelope-Official-Website-DPN-PERADI

2. **Install Dependensi PHP (Composer)**:
   .. code-block:: bash

      composer install

3. **Install Dependensi JavaScript (NPM)**:
   .. code-block:: bash

      npm install

4. **Konfigurasi Environment**:
   Salin berkas ``.env.example`` menjadi ``.env``:
   .. code-block:: bash

      cp .env.example .env

   Buka berkas ``.env`` dan atur koneksi database Anda:
   .. code-block:: env

      APP_NAME="DPN PERADI"
      APP_ENV=local
      APP_URL=http://localhost:8000

      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=peradi_website_db
      DB_USERNAME=root
      DB_PASSWORD=

5. **Generate Application Key**:
   .. code-block:: bash

      php artisan key:generate

6. **Jalankan Migrasi Database**:
   .. code-block:: bash

      php artisan migrate

7. **Jalankan Server Lokal & Vite**:
   Buka dua jendela terminal terpisah di VS Code:

   - **Terminal 1 (Laravel Development Server)**:
     .. code-block:: bash

        php artisan serve

   - **Terminal 2 (Vite Asset Bundler)**:
     .. code-block:: bash

        npm run dev

8. Buka peramban (browser) dan akses alamat ``http://localhost:8000``.

*******
Lisensi
*******

Hak Cipta (c) Dewan Pimpinan Nasional Perhimpunan Advokat Indonesia (DPN PERADI). All Rights Reserved.
