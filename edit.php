<?php 
include 'includes/auth.php'; 
include 'config/koneksi.php';
include 'includes/header.php'; 

// Ambil ID dari URL
$id = $_GET['id'];
// Query ambil data mahasiswa berdasarkan ID
$query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");
$d = mysqli_fetch_array($query);
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4><i class="fas fa-edit me-2"></i>Edit Data Mahasiswa</h4>
                <a href="index.php" class="btn btn-secondary btn-sm">Batal</a>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form action="controller/mhs_edit.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                        <div class="mb-3">
                            <label class="form-label fw-bold">NIM</label>
                            <input type="text" name="nim" class="form-control" value="<?php echo $d['nim']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $d['nama']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Jurusan</label>
                            <select name="jurusan" class="form-select" required>
                                <option value="Teknik Informatika" <?php if($d['jurusan'] == 'Teknik Informatika') echo 'selected'; ?>>Teknik Informatika</option>
                                <option value="Sistem Informasi" <?php if($d['jurusan'] == 'Sistem Informasi') echo 'selected'; ?>>Sistem Informasi</option>
                                <option value="Manajemen Informatika" <?php if($d['jurusan'] == 'Manajemen Informatika') echo 'selected'; ?>>Manajemen Informatika</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold d-block">Jenis Kelamin</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="L" <?php if($d['jenis_kelamin'] == 'Laki-laki') echo 'checked'; ?> required>
                                <label class="form-check-label" for="L">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="P" <?php if($d['jenis_kelamin'] == 'Perempuan') echo 'checked'; ?>>
                                <label class="form-check-label" for="P">Perempuan</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3"><?php echo $d['alamat']; ?></textarea>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-warning w-100 fw-bold">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>