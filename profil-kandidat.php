<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kandidat - Pemilihan 2025</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                        <a class="nav-link active" href="profil-kandidat.php">Profil Kandidat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-primary text-white py-5">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-3">Profil Kandidat</h1>
            <p class="lead mb-0">Kenali lebih dekat para calon pemimpin masa depan Indonesia</p>
            <div class="d-flex justify-content-center mt-4">
                <div class="divider bg-white" style="height: 4px; width: 60px;"></div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-5">
        <div class="container">
            <div class="row g-4">
                <?php
                // Data kandidat dengan foto random dari unsplash
                $kandidat = [
                    [
                        'id' => 1,
                        'nama' => 'Warnanya Wijaya',
                        'slogan' => 'Membangun Negeri dengan Integritas',
                        'foto' => "./images/kandidat.jpg",
                        'deskripsi' => 'Warnanya Wijaya adalah seorang profesional berpengalaman dengan latar belakang di bidang ekonomi dan kebijakan publik. Dengan pengalaman lebih dari 15 tahun di sektor pemerintahan, beliau memiliki visi untuk membangun Indonesia yang lebih maju dan berkeadilan.'
                    ],
                    [
                        'id' => 2,
                        'nama' => 'Yuzril Rahman',
                        'slogan' => 'Untuk Indonesia yang Lebih Baik',
                        'foto' => './images/kandidat2.jpg',
                        'deskripsi' => 'Yuzril Rahman dikenal sebagai tokoh yang vokal dalam memperjuangkan hak-hak perempuan dan pendidikan. Dengan latar belakang sebagai akademisi dan aktivis sosial, beliau berkomitmen untuk membawa perubahan positif dalam kebijakan pendidikan dan kesejahteraan sosial.'
                    ],
                    [
                        'id' => 3,
                        'nama' => 'Sirajuddin Alamsyah',
                        'slogan' => 'Bersama Memajukan Bangsa',
                        'foto' => './images/kandidat3.jpg',
                        'deskripsi' => 'Sirajuddin Alamsyah adalah seorang pengusaha sukses yang kini ingin berkontribusi dalam pembangunan nasional. Dengan pengalaman di dunia bisnis dan teknologi, beliau memiliki visi untuk mendorong inovasi dan pertumbuhan ekonomi yang inklusif di seluruh Indonesia.'
                    ]
                ];

                // Tampilkan kandidat
                foreach ($kandidat as $index => $k) {
                    $delay = ($index + 1) * 100;
                    echo '
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="' . $delay . '">
                        <div class="card candidate-card h-100">
                            <div class="candidate-img-container position-relative">
                                <img src="' . $k['foto'] . '" class="candidate-img" alt="Foto ' . $k['nama'] . '">
                                <div class="candidate-number">' . ($index + 1) . '</div>
                                <div class="overlay"></div>
                            </div>
                            <div class="candidate-info">
                                <h3 class="candidate-name">' . $k['nama'] . '</h3>
                                <p class="candidate-slogan">"' . $k['slogan'] . '"</p>
                                <p class="mb-4">' . $k['deskripsi'] . '</p>
                                <a href="pilih-kandidat.php?id=' . $k['id'] . '&nama=' . urlencode($k['nama']) . '" class="btn btn-primary rounded-pill px-4">
                                    <i class="fas fa-check-circle me-2"></i>Pilih Kandidat
                                </a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
            
            <!-- Call to Action -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card bg-primary text-white p-4 p-md-5 text-center">
                        <div class="card-body">
                            <h2 class="mb-4">Sudahkah Anda Menentukan Pilihan?</h2>
                            <p class="lead mb-4">Masa depan Indonesia ada di tangan Anda. Pelajari profil kandidat dan gunakan hak pilih Anda dengan bijak.</p>
                            <a href="#" class="btn btn-light btn-lg rounded-pill px-5">
                                <i class="fas fa-info-circle me-2"></i>Pelajari Lebih Lanjut
                            </a>
                        </div>
                    </div>
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
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out'
        });
    </script>
</body>
</html>
