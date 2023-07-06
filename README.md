# Rental Mobil dengan CI4 dan Menu Login menggunakan MythAuth

Ini adalah sebuah proyek rental mobil yang dibangun menggunakan framework CodeIgniter 4 (CI4) dan menggunakan library MythAuth untuk mengelola menu login dan otorisasi pengguna. Jika Anda ingin mengkloning proyek ini, pastikan untuk mendownload dan menginstal MythAuth terlebih dahulu.

## Tugas UAS Pemograman Web
Anggota Kelompok:
- Muhammad Arya Dipanegara Gunawan  
- Kevin Suyadi Ritonga 
- Zaini Muhtarom
- Sara Khusnul Mumtazah 
- Wildan Muhammad Fauzan
- Faris Maulana
## Langkah - langkah
Langkah - langkah untuk menggunakan layanan sewa mobil

1. Carilah daftar mobil populer yang tersedia untuk disewa, termasuk Audi, Porsche, Bugatti, dan Taycan.
2. Pilih paket yang sesuai dengan kebutuhan, situs ini menawarkan dua paket berbeda yaitu Paket Super dan Paket Lengkap.
3. Jika anda memilih paket lengkap, klik tombol "Pesan Sekarang" dan pilih apakah anda ingin layanan setir sendiri atau supir.
4. Tunggu layanan sewa mobil untuk mengkonfirmasi reservasi anda.
5. Ambil mobil di lokasi yang ditentukan dan nikmati sewa anda.
   
## Deskripsi Proyek
Rental Mobil Menggunakan CodeIgniter 4

Deskripsi:
Anda dapat menggunakan framework CodeIgniter 4 untuk membuat sistem rental mobil yang dapat membantu dalam manajemen penyewaan mobil. Dalam sistem ini, Anda dapat mengimplementasikan fitur-fitur seperti:

- Pendaftaran Pengguna
- Pemilihan Mobil
- Pemesanan
- Manajemen Penyewaan
- Laporan Keuangan

Dengan menggunakan CodeIgniter 4, Anda dapat dengan mudah mengatur dan mengelola model, controller, dan tampilan yang diperlukan untuk membangun sistem rental mobil ini. Framework ini menyediakan fitur-fitur yang kuat dan memudahkan pengembangan aplikasi web yang andal dan efisien.

## Persyaratan

Sebelum Anda mulai, pastikan komputer Anda memenuhi persyaratan berikut:

- PHP 7.2 atau versi lebih tinggi
- MySQL 5.6 atau versi lebih tinggi
- Composer (untuk mengelola dependensi proyek)

## Instalasi

Berikut langkah-langkah untuk menginstal dan menjalankan proyek ini:

1. Clone repository ini ke direktori lokal Anda:

   ```shell
   git clone https://github.com/username/repo.git
   ```

2. Masuk ke direktori proyek:

   ```shell
   cd repo
   ```

3. Pastikan Anda telah menginstal Composer. Jika belum, Anda dapat mengunduhnya dari https://getcomposer.org/download/.

4. Install dependensi proyek dengan menjalankan perintah berikut:

   ```shell
   composer install
   ```

5. Buat salinan file `.env` dengan perintah berikut:

   ```shell
   cp env .env
   ```

   Atau, jika Anda menggunakan Windows PowerShell:

   ```shell
   copy env .env
   ```

6. Buka file `.env` dengan editor teks dan sesuaikan pengaturan database sesuai dengan lingkungan Anda.

7. Jalankan migrasi database untuk membuat tabel yang diperlukan:

   ```shell
   php spark migrate
   ```

8. Jalankan server pengembangan CI4 dengan perintah berikut:

   ```shell
   php spark serve
   ```

   Proyek sekarang akan dijalankan di `http://localhost:8080`.

## Menggunakan MythAuth

Proyek ini menggunakan library MythAuth untuk mengelola menu login dan otorisasi pengguna. Past

ikan Anda telah mengunduh dan menginstal MythAuth sebelum menjalankan proyek ini. Anda dapat menemukan informasi lebih lanjut tentang cara menggunakan MythAuth di dokumentasinya: [MythAuth Documentation](https://github.com/lonnieezell/myth-auth).

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, Anda dapat melakukan fork repository ini dan mengajukan pull request dengan perubahan yang diusulkan.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE). Terima kasih telah mengunjungi halaman ini.
