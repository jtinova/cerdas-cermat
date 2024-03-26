# Deskripsi Aplikasi

"Cerdas Cermat" adalah aplikasi perlombaan berkelompok yang memungkinkan para peserta untuk menantang pengetahuan mereka dalam berbagai topik. Dalam kompetisi ini, tim akan diuji melalui berbagai pertanyaan dan tantangan, memacu mereka untuk bekerja sama secara efektif dan menggunakan pengetahuan kolektif mereka untuk meraih kemenangan.

## Dosen Pembimbing
- Arvita Agus Kurniasari, S.ST.,M.Tr.Kom
- Ely Mulyadi, SE, M.Kom
- Bunga Prasetya Dwi Ulul Azmi, S.Tr.Kom
- Achmad Dinofaldi Firmansyah, S.Tr.Kom

## Tim Pengembang / MBKM
- Muhammad Rizal Fahlevi / [https://github.com/rizalfahlevi8](https://github.com/rizalfahlevi8)
- Vicky Fernando Anggara Putra Ikhwanto  / [https://github.com/Vckynando12](https://github.com/Vckynando12)
- Alif Imanullah Krisna Alam / [https://github.com/alifimn](https://github.com/alifimn)

## Panduan Penggunaan

1. Clone repositori ini ke server lokal Anda.
    ```
    git clone https://github.com/jtinova/cerdas-cermat.git
    ```
2. Masuk ke direktori proyek.
    ```
    cd siakad
    ```
3. Instal dependensi dengan Composer.
    ```
    composer install
    ```
4. Salin file .env.example menjadi .env dan atur konfigurasi database.
    ```
    cp .env.example .env
    ```
5. Generate kunci aplikasi untuk .env.
    ```
    php artisan key:generate
    ```
6. Migrasi dan seeding basis data.
    ```
    php artisan migrate:fresh --seed
    ```
7. Jalankan server lokal.
    ```
    php artisan serve
    ```
8. Buka aplikasi di browser dengan alamat yang muncul pada cmd setelah menjalankan perintah diatas, contoh url : [http://localhost:8000](http://localhost:8000).

## Kontribusi

Kami menyambut kontribusi dari siapa saja yang ingin berpartisipasi dalam pengembangan aplikasi "Cerdas Cermat". Jika Anda ingin berkontribusi, silakan buat pull request dan kami akan meninjau kontribusi Anda.

Terima kasih telah berkontribusi pada proyek "Cerdas Cermat"!
