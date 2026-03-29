<?php
include 'koneksi.php';

$profile = mysqli_query($conn, "SELECT * FROM profile LIMIT 1");
$data_profile = mysqli_fetch_assoc($profile);

$skills = mysqli_query($conn, "SELECT * FROM skills");
$pengalaman = mysqli_query($conn, "SELECT * FROM pengalaman");
$certificates = mysqli_query($conn, "SELECT * FROM certificates");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - <?php echo $data_profile['nama']; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-navy fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">OhMyPorto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="home" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-white">
                    <h1 class="fw-bold mb-3">Halo, Saya <?php echo $data_profile['nama']; ?></h1>
                    <p class="lead mb-4"><?php echo $data_profile['deskripsi']; ?></p>
                    <a href="#" class="btn btn-light px-4 py-2 me-2 fw-bold">
                        <i class="fa-brands fa-instagram"></i> Instagram
                    </a>
                    <a href="#" class="btn btn-outline-light px-4 py-2 fw-bold">
                        <i class="fa-brands fa-linkedin"></i> LinkedIn
                    </a>
                </div>

                <div class="col-md-6 mt-5 mt-md-0 text-center">
                    <img src="images/<?php echo $data_profile['foto']; ?>" class="profile-img" alt="Foto Profil">
                </div>
            </div>
        </div>
    </section>


    <section id="about" class="py-5 bg-light">
        <div class="container py-4">
            <h2 class="text-center fw-bold mb-5">About Me</h2>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-12">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-3 text-navy">
                                <i class="fa-solid fa-user-tie me-2"></i> Description
                            </h4>
                            <p class="text-muted">
                                Saya adalah mahasiswa yang memiliki minat dalam pengembangan website, analisis data, reparasi hardware/software komputer, dan desain manajemen jaringan.
                            </p>
                            <p class="text-muted">
                                Saya memiliki pengalaman dalam perbaikan komputer dan telah mengikuti beberapa proyek terkait pembuatan aplikasi, analisis data dan jaringan komputer.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4 text-navy">
                                <i class="fa-solid fa-briefcase me-2"></i> Experience
                            </h4>
                            <div class="experience-list">
                                <?php while ($row = mysqli_fetch_assoc($pengalaman)) { ?>
                                    <div class="mb-3 border-start border-4 border-primary ps-3">
                                        <span class="badge bg-navy mb-1"><?php echo $row['tahun']; ?></span>
                                        <p class="mb-0 fw-semibold"><?php echo $row['kegiatan']; ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4 text-navy">
                                <i class="fa-solid fa-code me-2"></i> Skills
                            </h4>
                            <?php while ($row = mysqli_fetch_assoc($skills)) { ?>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="fw-semibold small"><?php echo $row['nama_skill']; ?></span>
                                        <span class="text-muted small"><?php echo $row['persen']; ?>%</span>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-navy" role="progressbar" style="width: <?php echo $row['persen']; ?>%"></div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="certificates" class="py-5">
        <div class="container py-4">
            <h2 class="text-center fw-bold mb-5">Certificates</h2>
            <div class="row g-4">
                
                <?php while ($row = mysqli_fetch_assoc($certificates)) { ?>
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-img-container">
                                <img src="images/<?php echo $row['gambar']; ?>" class="card-img-top" alt="Sertifikat">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold"><?php echo $row['judul']; ?></h5>
                                <p class="card-text text-muted mb-0"><?php echo $row['penyelenggara']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>


    <footer class="text-center py-4 bg-navy text-white mt-auto">
        <div class="container">
            <p class="mb-0">© <?php echo date("Y"); ?> <?php echo $data_profile['nama']; ?>. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>