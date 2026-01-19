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

## 📂 Struktur Folder
manajemen_mahasiswa/
│
├── assets/
│ ├── css/
│ │ └── style.css
│ └── js/
│ └── script.js
│
├── config/
│ └── koneksi.php
│
├── controller/
│ ├── auth_login.php
│ ├── mhs_simpan.php
│ ├── mhs_edit.php
│ └── mhs_hapus.php
│
├── includes/
│ ├── header.php
│ └── footer.php
│
├── index.php
├── login.php
├── tambah.php
├── edit.php
├── logout.php
└── README.md

---

## 🔐 Fitur Aplikasi

### 1️⃣ Login Admin
- Admin harus login terlebih dahulu untuk mengakses sistem
- Menggunakan session untuk keamanan login
- Jika login berhasil, admin diarahkan ke halaman dashboard

### 2️⃣ Dashboard Admin
- Menampilkan data mahasiswa
- Menyediakan tombol tambah, edit, dan hapus data

### 3️⃣ Tambah Data Mahasiswa
- Admin dapat menambahkan data mahasiswa
- Data yang diinput:
  - NIM
  - Nama
  - Jurusan
  - Gender
- Data disimpan ke database MySQL

### 4️⃣ Edit Data Mahasiswa
- Admin dapat mengubah data mahasiswa
- Data yang diubah akan langsung diperbarui di database

### 5️⃣ Hapus Data Mahasiswa
- Admin dapat menghapus data mahasiswa
- Data akan terhapus permanen dari database

### 6️⃣ Logout
- Menghapus session login
- Admin diarahkan kembali ke halaman login

---

## 🗄️ Database
Nama database:
manajemen_mahasiswa


## 🎯 Tujuan Pembuatan
Memahami konsep CRUD (Create, Read, Update, Delete)
Menerapkan PHP dan MySQL
Melatih pembuatan aplikasi web sederhana
