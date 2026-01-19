<?php 
// 1. Cek keamanan login - Admin Only
include 'includes/auth.php'; 
// 2. Hubungkan ke database
include 'config/koneksi.php';
// 3. Panggil header (isi: meta tag, CSS Bootstrap, dan CSS Custom)
include 'includes/header.php'; 
?>

<div class="container mt-4">
    <div class="row mb-4">
        <div class="col-md-8">
            <h2 class="login-title"><i class="fas fa-database me-2"></i>Dashboard Admin</h2>
            <p class="text-muted">Selamat datang kembali, <strong><?php echo $_SESSION['username']; ?></strong>. Kelola data mahasiswa di sini.</p>
        </div>
        <div class="col-md-4 text-md-end">
            <?php 
                $count_mhs = mysqli_query($conn, "SELECT id FROM mahasiswa");
                $total_mhs = mysqli_num_rows($count_mhs);
            ?>
            <div class="card bg-primary text-white shadow-sm border-0">
                <div class="card-body py-2 px-3">
                    <small>Total Mahasiswa:</small>
                    <h4 class="mb-0 fw-bold"><?php echo $total_mhs; ?> Orang</h4>
                </div>
            </div>
        </div>
    </div>

    <?php if(isset($_GET['pesan'])): ?>
        <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 mb-4" role="alert">
            <i class="fas fa-check-circle me-2"></i>
            <?php 
                if($_GET['pesan'] == "simpan_berhasil") echo "Data mahasiswa berhasil ditambahkan!";
                if($_GET['pesan'] == "update_berhasil") echo "Data mahasiswa berhasil diperbarui!";
                if($_GET['pesan'] == "hapus_berhasil") echo "Data mahasiswa telah dihapus dari sistem.";
            ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="card shadow border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold text-dark">Daftar Mahasiswa Aktif</h5>
            <a href="tambah.php" class="btn btn-primary shadow-sm">
                <i class="fas fa-plus me-1"></i> Tambah Mahasiswa
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light text-secondary text-uppercase" style="font-size: 0.8rem;">
                        <tr>
                            <th class="ps-3">No</th>
                            <th>NIM</th>
                            <th>Nama Lengkap</th>
                            <th>Jurusan</th>
                            <th>Gender</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        // Ambil data dari database
                        $query = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id DESC");
                        
                        if(mysqli_num_rows($query) > 0) {
                            while($d = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td class="ps-3"><?php echo $no++; ?></td>
                                    <td><span class="badge bg-light text-dark border fw-medium"><?php echo $d['nim']; ?></span></td>
                                    <td class="fw-bold text-dark"><?php echo $d['nama']; ?></td>
                                    <td>
                                        <i class="fas fa-graduation-cap me-1 text-primary"></i>
                                        <?php echo $d['jurusan']; ?>
                                    </td>
                                    <td>
                                        <?php if($d['jenis_kelamin'] == 'Laki-laki'): ?>
                                            <span class="text-primary"><i class="fas fa-mars"></i> L</span>
                                        <?php else: ?>
                                            <span class="text-danger"><i class="fas fa-venus"></i> P</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group shadow-sm">
                                            <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning btn-sm" title="Edit Data">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="controller/mhs_hapus.php?id=<?php echo $d['id']; ?>" 
                                               class="btn btn-danger btn-sm" 
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" 
                                               title="Hapus Data">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php 
                            }
                        } else {
                            echo "<tr><td colspan='6' class='text-center py-5 text-muted'>Belum ada data mahasiswa dalam database.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php 
// 4. Panggil footer (isi: penutup tag HTML & JS Bootstrap)
include 'includes/footer.php'; 
?>