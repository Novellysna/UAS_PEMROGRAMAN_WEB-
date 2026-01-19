<?php 
include 'includes/auth.php'; 
include 'includes/header.php'; 
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4><i class="fas fa-plus-circle me-2"></i>Tambah Mahasiswa</h4>
                <a href="index.php" class="btn btn-secondary btn-sm">Kembali</a>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form action="controller/mhs_simpan.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-bold">NIM</label>
                            <input type="text" name="nim" class="form-control" placeholder="Contoh: 202401001" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Jurusan</label>
                            <select name="jurusan" class="form-select" required>
                                <option value="">-- Pilih Jurusan --</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold d-block">Jenis Kelamin</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="L" required>
                                <label class="form-check-label" for="L">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="P">
                                <label class="form-check-label" for="P">Perempuan</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat lengkap..."></textarea>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary w-100">Simpan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>