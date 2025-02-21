# TP1DPBO

# Janji
Saya Kasyful Haq Bachariputra dengan NIM 2304820 mengerjakan Latihan Praktikum 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# Design OOP
Program terdiri dari satu buah class bernama "PetShop" yang berisi atribut sebagai berikut:
- ID (Private)
- name (Private)
- kategori (Private)
- harga (Private)

Class "PetShop" juga terdiri dari constructor (untuk melakukan input nilai atribut ketika objek diinstansiasi) dan dua method, yaitu:
- display
  Method ini digunakan untuk memunculkan/print pada sistem nilai atribut dari objek.
- change
  Method ini digunakan untuk mengubah nilai atribut dari objek (ID, name, kategori, harga).
# Alur Program
Ketika program dimulai, akan memunculkan sebuah menu yang berisi option-option sebagai berikut:
- 1   = Tampilkan list barang
- 2   = Tambah barang ke list
- 3   = Ubah data barang list
- 4   = Hapus data barang list
- 5   = Cari barang dalam list
- -1  = Keluar dari program

1. Tampilkan list barang
Ketika option ini dipilih, akan melakukan for untuk setiap objek yang ada di dalam list, kemudian memanggil method display untuk memunculkan nilai-nilai atribut dari objek tersebut.

2. Tambah barang ke list
Ketika dipilih, akan meminta masukkan berupa ID, name, kategori, serta harga. Kemudian akan menginstansiasi objek baru di dalam list dan menggunakan masukkan tadi sebagai argumen (initial value).

3. Ubah data barang list
Ketika dipilih, akan meminta masukkan sebagai ID yang ingin dicari. Kemudian membuat sebuah marker boolean bernama 'found' dan memiliki value False. Lalu akan mengiterasi list sampai objek dengan ID yang dicari ditemukan. Ketika ketemu, maka marker found akan berubah menjadi True dan akan meminta masukkan baru untuk nilai di dalam atribut (ID, name, kategori, harga). Ketika sudah berhasil diubah, akan menampilkan pesan "Berhasil dihapus!".
Apabila barang yang dicari tidak ditemukan, maka akan menampilkan pesan "Tidak ditemukan".

4. Hapus data barang list
Ketika dipilih, akan meminta masukkan sebagai ID yang ingin dicari. Kemudian membuat sebuah marker boolean bernama 'found' dan memiliki value False. Lalu akan mengiterasi list sampai objek dengan ID yang dicari ditemukan. Ketika ketemu, maka marker found akan berubah menjadi True dan objek tersebut akan dihapus dari list.
Apabila barang yang dicari tidak ditemukan, maka akan menampilkan pesan "Tidak ditemukan".

5. Cari barang dalam list
Ketika dipilih, akan meminta masukkan sebagai nama yang ingin dicari. Kemudian akan membuat sebuah marker boolean bernama 'found' dan memiliki value False. Lalu akan mengiterasi list sampai objek dengan nama yang dicari ditemukan. Ketika ketemu, maka marker found akan berubah menjadi True dan akan memanggil method display.
Apabila barang yang dicari tidak ditemukan, maka akan menampilkan pesan "Tidak ditemukan".

6. -1 digunakan untuk keluar dari program.

# Dokumentasi Java
![WhatsApp Image 2025-02-19 at 18 44 34_5b894374](https://github.com/user-attachments/assets/1ac86c53-bd64-4743-a656-d4a2c1615019)
![WhatsApp Image 2025-02-19 at 18 44 58_977ffb3c](https://github.com/user-attachments/assets/d897f809-2f46-4ea7-baee-c4e2ea8f20f2)
![WhatsApp Image 2025-02-19 at 18 52 34_8b92969e](https://github.com/user-attachments/assets/f2622d09-d1cd-4671-8858-f67d87f909e5)
![WhatsApp Image 2025-02-19 at 18 46 43_f298b204](https://github.com/user-attachments/assets/30edd076-5ad2-414a-a720-874e4bfa93b7)
![WhatsApp Image 2025-02-19 at 18 46 43_0272e307](https://github.com/user-attachments/assets/2e90712d-2809-47b7-9be5-b5f56a89713c)
![WhatsApp Image 2025-02-19 at 18 46 43_2e021533](https://github.com/user-attachments/assets/8a556682-407c-4ede-9bb4-c0c08a7a8191)
![WhatsApp Image 2025-02-19 at 18 45 24_2ae0b60b](https://github.com/user-attachments/assets/eab88b6c-9aea-4bd1-9d85-12ec51cf60eb)

# Dokumentasi Python
![WhatsApp Image 2025-02-20 at 22 14 59_f64a6e19](https://github.com/user-attachments/assets/486d7cbe-8f62-4f6b-9cd0-073e318df6c4)
![WhatsApp Image 2025-02-20 at 22 14 59_7521e54b](https://github.com/user-attachments/assets/f3827f47-2de3-4699-8135-6fc2206509fa)
![WhatsApp Image 2025-02-20 at 22 14 59_2f48cb79](https://github.com/user-attachments/assets/e0f4fdf0-a7b5-45b2-9c3e-57ccd8a550c3)
![WhatsApp Image 2025-02-20 at 22 20 24_21ae07db](https://github.com/user-attachments/assets/1284a6e2-ac32-4bdc-a41c-5b6ece824607)

# Dokumentasi PHP
![WhatsApp Image 2025-02-21 at 11 54 14_d61fea89](https://github.com/user-attachments/assets/e48c3d23-a368-4045-972b-6d86acd24035)
![WhatsApp Image 2025-02-21 at 11 54 14_c79716de](https://github.com/user-attachments/assets/c7cb5e6e-e98f-4dbf-aaba-cc99871c2d97)
![WhatsApp Image 2025-02-21 at 11 54 13_d78572a1](https://github.com/user-attachments/assets/0ced096c-b0b2-4d10-b5fd-2716da786958)
![WhatsApp Image 2025-02-21 at 11 54 13_434e845f](https://github.com/user-attachments/assets/06062414-fd92-4189-9ae8-5cd476640ed7)
