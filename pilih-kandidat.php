<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Kandidat - Pemilihan 2025</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Favicon -->
    <link rel="icon" href="./images/favicon.ico" type="image/png">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/favicon.ico" width="30px" height="35px"> Pemilu 2025
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil-kandidat.php">Profil Kandidat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <?php
                    // Cek apakah ada data kandidat yang dikirim
                    if (isset($_GET['id']) && isset($_GET['nama'])) {
                        $id_kandidat = $_GET['id'];
                        $nama_kandidat = $_GET['nama'];
                        
                        // Tampilkan form pemilihan
                        echo '
                        <div class="card shadow-lg border-0 rounded-3 overflow-hidden">
                            <div class="card-header bg-primary text-white p-4">
                                <h2 class="card-title text-center mb-0">Form Pemilihan Kandidat</h2>
                            </div>
                            <div class="card-body p-4 p-md-5">
                                <div class="text-center mb-4">
                                    <div class="avatar-container mx-auto mb-3" style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden; border: 3px solid var(--primary-color);">
                                        <img src="https://ui-avatars.com/api/?name=' . urlencode($nama_kandidat) . '&background=2563eb&color=fff&size=100" alt="' . $nama_kandidat . '" class="w-100 h-100 object-fit-cover">
                                    </div>
                                    <h4 class="mb-1">' . $nama_kandidat . '</h4>
                                    <p class="text-muted">Kandidat #' . $id_kandidat . '</p>
                                </div>
                                
                                <form action="sukses-pilih.php" method="post" class="needs-validation" novalidate>
                                    <input type="hidden" name="id_kandidat" value="' . $id_kandidat . '">
                                    <input type="hidden" name="nama_kandidat" value="' . $nama_kandidat . '">
                                    
                                    <div class="mb-4">
                                        <label for="kandidat" class="form-label">Kandidat Pilihan</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                            <input type="text" class="form-control" id="kandidat" value="' . $nama_kandidat . '" readonly>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="nama_pemilih" class="form-label">Nama Lengkap</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            <input type="text" class="form-control" id="nama_pemilih" name="nama_pemilih" placeholder="Masukkan nama lengkap Anda" required>
                                        </div>
                                        <div class="invalid-feedback">
                                            Nama lengkap wajib diisi.
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="telepon" class="form-label">Nomor Telepon</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="Contoh: 08123456789" required>
                                        </div>
                                        <div class="invalid-feedback">
                                            Nomor telepon wajib diisi.
                                        </div>
                                        <div class="form-text">Format: 08XXXXXXXXXX (10-13 digit)</div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="domisili" class="form-label">Domisili</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                            <input type="text" class="form-control" id="domisili" name="domisili" placeholder="Kota/Kabupaten tempat tinggal Anda" required>
                                        </div>
                                        <div class="invalid-feedback">
                                            Domisili wajib diisi.
                                        </div>
                                    </div>
                                    
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" id="konfirmasi" required>
                                        <label class="form-check-label" for="konfirmasi">
                                            Saya menyatakan bahwa data yang saya berikan adalah benar dan saya memilih kandidat ini dengan penuh kesadaran.
                                        </label>
                                        <div class="invalid-feedback">
                                            Anda harus menyetujui pernyataan ini.
                                        </div>
                                    </div>
                                    
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5">
                                            <i class="fas fa-check-circle me-2"></i>Pilih Kandidat
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>';
                    } else {
                        // Jika tidak ada parameter, tampilkan pesan sukses jika ada data POST
                        if (isset($_POST['nama_pemilih']) && isset($_POST['nama_kandidat'])) {
                            echo '
                            <div class="card shadow-lg border-0 rounded-3 overflow-hidden">
                                <div class="card-header bg-success text-white p-4">
                                    <h2 class="card-title text-center mb-0">Pemilihan Berhasil!</h2>
                                </div>
                                <div class="card-body p-4 p-md-5 text-center">
                                    <div class="success-icon mb-4">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    
                                    <h3 class="mb-4">Terima kasih, ' . $_POST['nama_pemilih'] . '!</h3>
                                    <p class="lead mb-4">Anda telah berhasil memilih <strong>' . $_POST['nama_kandidat'] . '</strong> sebagai kandidat pilihan Anda.</p>
                                    
                                    <div class="success-details mb-4 mx-auto" style="max-width: 400px;">
                                        <div class="d-flex justify-content-between py-2 border-bottom">
                                            <span class="fw-medium">Nama Pemilih:</span>
                                            <span>' . $_POST['nama_pemilih'] . '</span>
                                        </div>
                                        <div class="d-flex justify-content-between py-2 border-bottom">
                                            <span class="fw-medium">Kandidat Pilihan:</span>
                                            <span>' . $_POST['nama_kandidat'] . '</span>
                                        </div>
                                        <div class="d-flex justify-content-between py-2 border-bottom">
                                            <span class="fw-medium">Waktu Pemilihan:</span>
                                            <span>' . date("d/m/Y H:i") . '</span>
                                        </div>
                                    </div>
                                    
                                    <div class="alert alert-info" role="alert">
                                        <p class="mb-0">Suara Anda sangat berarti untuk masa depan Indonesia.</p>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <a href="index.php" class="btn btn-primary rounded-pill px-4 me-2">
                                            <i class="fas fa-home me-2"></i>Kembali ke Beranda
                                        </a>
                                        <a href="profil-kandidat.php" class="btn btn-outline-primary rounded-pill px-4">
                                            <i class="fas fa-users me-2"></i>Lihat Kandidat Lain
                                        </a>
                                    </div>
                                </div>
                            </div>';
                        } else {
                            // Jika tidak ada parameter dan tidak ada data POST, redirect ke halaman profil kandidat
                            echo '<script>window.location.href = "profil-kandidat.php";</script>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="footer-title">Pemilu 2025</h3>
                    <p>Platform resmi untuk pemilihan kandidat kampanye politik 2025. Suara Anda menentukan masa depan bangsa.</p>
                </div>
                
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5 class="text-white mb-3">Navigasi</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.php" class="footer-link">Beranda</a></li>
                        <li class="mb-2"><a href="profil-kandidat.php" class="footer-link">Profil Kandidat</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <h5 class="text-white mb-3">Kontak</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@pemilu2025.id</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> (021) 123-4567</li>
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Jakarta, Indonesia</li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-4">
                    <h5 class="text-white mb-3">Media Sosial</h5>
                    <div class="d-flex">
                        <a href="#" class="me-3 footer-link"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="me-3 footer-link"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="me-3 footer-link"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="footer-link"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom text-center">
                <p class="mb-0">&copy; 2025 Pemrograman Web Pemilihan Kandidat. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>
