<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukses Pilih - Pemilihan 2025</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Lottie Player -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
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
                    // Cek apakah ada data yang dikirim dari form
                    if (isset($_POST['nama_pemilih']) && isset($_POST['nama_kandidat'])) {
                        $nama_pemilih = $_POST['nama_pemilih'];
                        $telepon = $_POST['telepon'];
                        $domisili = $_POST['domisili'];
                        $nama_kandidat = $_POST['nama_kandidat'];
                        $id_kandidat = $_POST['id_kandidat'];

                        // Tampilkan pesan sukses
                        echo '
                        <div class="card shadow-lg border-0 rounded-3 overflow-hidden animate-fade-in">
                            <div class="card-header bg-success text-white p-4">
                                <h2 class="card-title text-center mb-0">Pemilihan Berhasil!</h2>
                            </div>
                            <div class="card-body p-4 p-md-5">
                                <div class="text-center mb-4">
                                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_jbrw3hcz.json" background="transparent" speed="1" style="width: 400px; height: 200px; margin: 0 auto;" autoplay loop></lottie-player>
                                    
                                    <h3 class="mt-4 mb-3">Terima kasih atas partisipasi Anda!</h3>
                                    <p class="lead mb-4">Suara Anda telah tercatat dalam sistem kami.</p>
                                </div>
                                
                                <div class="card mb-4 border-0 shadow-sm">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Detail Pemilihan</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-box me-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                    <div>
                                                        <p class="text-muted mb-0">Nama Pemilih</p>
                                                        <p class="fw-bold mb-0">' . $nama_pemilih . '</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-box me-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        <i class="fas fa-phone"></i>
                                                    </div>
                                                    <div>
                                                        <p class="text-muted mb-0">Nomor Telepon</p>
                                                        <p class="fw-bold mb-0">' . $telepon . '</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-box me-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                    </div>
                                                    <div>
                                                        <p class="text-muted mb-0">Domisili</p>
                                                        <p class="fw-bold mb-0">' . $domisili . '</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-box me-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        <i class="fas fa-calendar-alt"></i>
                                                    </div>
                                                    <div>
                                                        <p class="text-muted mb-0">Waktu Pemilihan</p>
                                                        <p class="fw-bold mb-0">' . date("d/m/Y H:i") . ' WIB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex align-items-center mt-4 p-3 bg-light rounded-3">
                                            <div class="avatar-container me-3" style="width: 60px; height: 60px; border-radius: 50%; overflow: hidden; border: 3px solid var(--primary-color);">
                                                <img src="https://ui-avatars.com/api/?name=' . urlencode($nama_kandidat) . '&background=2563eb&color=fff&size=60" alt="' . $nama_kandidat . '" class="w-100 h-100 object-fit-cover">
                                            </div>
                                            <div>
                                                <p class="text-muted mb-0">Kandidat Pilihan</p>
                                                <h5 class="fw-bold mb-0">' . $nama_kandidat . ' <span class="badge bg-primary ms-2">Kandidat #' . $id_kandidat . '</span></h5>
                                            </div>
                                        </div>

                                        <div class="alert alert-info mt-3" role="alert">
                                            <div class="d-flex">
                                                <div class="me-3">
                                                    <i class="fas fa-info-circle fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h5 class="alert-heading">Informasi Penting</h5>
                                                    <p class="mb-0">Suara Anda telah tercatat dalam sistem kami. Terima kasih telah berpartisipasi dalam proses demokrasi ini. Hasil pemilihan akan diumumkan pada tanggal 10 Mei 2025.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center mt-4">
                                            <a href="index.php" class="btn btn-primary btn-lg rounded-pill px-4 me-2">
                                                <i class="fas fa-home me-2"></i>Kembali ke Beranda
                                            </a>
                                            <a href="profil-kandidat.php" class="btn btn-outline-primary btn-lg rounded-pill px-4">
                                                <i class="fas fa-users me-2"></i>Lihat Kandidat Lain
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    } else {
                        echo '<script>window.location.href = "profil-kandidat.php";</script>';
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