# UAS_PEMROGRAMAN_WEB
# Nama: Novellysna Nurziska
# Nim: 312410131
# Kelas: TI. 24. A1

# 📚 Sistem Manajemen Mahasiswa (SIM Mahasiswa)

Aplikasi **Sistem Manajemen Mahasiswa** adalah aplikasi berbasis web yang digunakan untuk mengelola data mahasiswa seperti **login admin, menambah data mahasiswa, mengedit data, menghapus data, dan logout**.  
Aplikasi ini dibuat untuk memenuhi **tugas UAS Pemrograman Web** dan dijalankan secara **local menggunakan XAMPP**.

---

## 🛠️ Teknologi yang Digunakan
- PHP (Native)
- MySQL
- HTML
- CSS
- Bootstrap 5
- JavaScript
- XAMPP (Apache & MySQL)
- phpMyAdmin

---

# 📂 Struktur Project

manajemen_mahasiswa/
│
├── assets/
│   ├── css/
│   │   └── style.css
│   │
│   └── js/
│       └── script.js
│
├── config/
│   └── koneksi.php
│
├── controller/
│   ├── auth_login.php
│   ├── mhs_simpan.php
│   ├── mhs_edit.php
│   └── mhs_hapus.php
│
├── includes/
│   ├── header.php
│   └── footer.php
│
├── index.php
├── login.php
├── tambah.php
├── edit.php
├── logout.php
│
└── README.md


---

## 🔐 Fitur Aplikasi

### 1️⃣ Login Admin
<img width="1912" height="1018" alt="Screenshot 2026-01-19 084333" src="https://github.com/user-attachments/assets/8692ea40-a9df-4439-bd9f-b29a80f39165" />

- Admin harus login terlebih dahulu untuk mengakses sistem
- Menggunakan session untuk keamanan login
- Jika login berhasil, admin diarahkan ke halaman dashboard
  

### 2️⃣ Dashboard Admin
<img width="1917" height="1018" alt="Screenshot 2026-01-19 084434" src="https://github.com/user-attachments/assets/a3ed1e30-c492-4ccc-aa4c-5a074def8844" />

- Menampilkan data mahasiswa
- Menyediakan tombol tambah, edit, dan hapus data
  

### 3️⃣ Tambah Data Mahasiswa
<img width="647" height="123" alt="Screenshot 2026-01-19 085141" src="https://github.com/user-attachments/assets/4da142e1-f32b-4716-96e0-a47febf0a6f6" />

- Admin dapat menambahkan data mahasiswa
- Data yang diinput:
  - NIM
  - Nama
  - Jurusan
  - Gender
- Data disimpan ke database MySQL
  

### 4️⃣ Edit Data Mahasiswa
<img width="1911" height="1018" alt="Screenshot 2026-01-19 084507" src="https://github.com/user-attachments/assets/1197c59b-e577-4417-aed7-6eb16804bb6e" />

- Admin dapat mengubah data mahasiswa
- Data yang diubah akan langsung diperbarui di database
  

### 5️⃣ Hapus Data Mahasiswa
<img width="1919" height="1018" alt="Screenshot 2026-01-19 084530" src="https://github.com/user-attachments/assets/6efaafbc-4ead-4adf-9c4e-e186b2813840" />

- Admin dapat menghapus data mahasiswa
- Data akan terhapus permanen dari database
  

### 6️⃣ Logout
<img width="1910" height="1023" alt="Screenshot 2026-01-19 084554" src="https://github.com/user-attachments/assets/7bf31af6-8218-4b84-97be-b0299605022f" />

- Menghapus session login
- Admin diarahkan kembali ke halaman login

---

## 🎯 Tujuan Pembuatan
Memahami konsep CRUD (Create, Read, Update, Delete)
Menerapkan PHP dan MySQL
Melatih pembuatan aplikasi web sederhana
