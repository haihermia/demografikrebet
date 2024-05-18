<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Desa</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style>
        /* Custom CSS */
        body {
            background-image: linear-gradient(to top, beige, aqua);
            
            margin: 0;
        }

        .bg {
            background-image: url('<?php echo base_url("./assets/img_bg/jurang.jpg"); ?>');
            position: absolute;
            opacity: 0.5;
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            /* display: flex; */
            justify-content: center;
            */ align-items: center;
            */ margin: 0;

        }

        /* Efek hover */
        .feature-card {
            transition: transform 0.3s;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 0.5px solid white;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Custom CSS for card charts */
        .chart-card {
            border-radius: 10px;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
            background: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 0.5px solid white;
        }

        .chart-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 18px rgba(0, 0, 0, 0.3);
        }

        .jumbotron {
            background-image: url('path/to/background-image.jpg');
            background-size: cover;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .feature-icon {
            font-size: 4rem;
        }

        .feature-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .feature-description {
            font-size: 1rem;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }
    </style>
</head>

<body>

    <div class="bg">
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light"
        style="background-color: rgba(255, 255, 255, 0.5); backdrop-filter: blur(10px);">
        <a class="navbar-brand" href="#"
            style="font-weight: 500; color: #fff; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Desa
            Kami</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"
                        style="font-weight: 400; color: #0056B3; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                        <i class="fas fa-home"></i> Beranda <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"
                        style="font-weight: 400; color: #0056B3; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                        <i class="fas fa-user"></i> Profil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"
                        style="font-weight: 400; color: #0056B3; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                        <i class="fas fa-images"></i> Galeri
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/portalci/index.php/Auth" style="font-weight: 400; color: #fff; background-color: #007bff; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-decoration: none; display: inline-block; padding: 10px 20px; border-radius: 50px; transition: all 0.3s ease;
                        background-color: #007bff; /* Warna latar belakang asli */
                        color: #fff; /* Warna teks asli */
                        " onmouseover="this.style.backgroundColor='#0056b3'; this.style.color='#fff';"
                        onmouseout="this.style.backgroundColor='#007bff'; this.style.color='#fff';">
                        <i class="fas fa-user-shield" style="margin-right: 8px;"></i> Admin
                    </a>
                </li>
            </ul>
        </div>
    </nav>



    <!-- Jumbotron -->
    <!-- <div class="jumbotron jumbotron-fluid"
        style="padding: 150px 0; margin-bottom: 0; background-image: url('https://source.unsplash.com/featured/?landscape'); background-size: cover;">
        >
        <div class="container text-center">
            <h1 class="display-4">Selamat Datang di Desa Kami</h1>
            <p class="lead">Menjadi bagian dari alam, menyatu dengan kearifan lokal.</p>
        </div>
    </div> -->

    <!-- Features Section -->
    <!-- <div class="container text-center">
        <h2>Fitur Unggulan</h2> -->

    <div class="container text-center">
        <h1 class="display-4" style="color: yellow; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">
            Selamat Datang di Desa Kami</h1>
        <p class="lead" style="color: #007bff; font-weight: 400; line-height: 1.6;">Menjadi bagian dari alam, menyatu
            dengan kearifan lokal.</p>
    </div>


    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-4">
                <div class="card feature-card" style="background-color: rgba(255, 255, 255, 0.5);">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marker-alt" style="font-size: 4rem;"></i>
                        <h3 class="feature-title">Lokasi Strategis</h3>
                        <p class="feature-description">Terletak di tengah-tengah alam yang indah dengan akses mudah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card" style="background-color: rgba(255, 255, 255, 0.5);">
                    <div class="card-body text-center">
                        <i class="fas fa-leaf" style="font-size: 4rem;"></i>
                        <h3 class="feature-title">Kearifan Lokal</h3>
                        <p class="feature-description">Menjaga dan mempromosikan kearifan lokal serta budaya
                            tradisional.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card" style="background-color: rgba(255, 255, 255, 0.5);">
                    <div class="card-body text-center">
                        <i class="fas fa-heart" style="font-size: 4rem;"></i>
                        <h3 class="feature-title">Ramah Lingkungan</h3>
                        <p class="feature-description">Peduli terhadap lingkungan dengan berbagai program
                            kelestarian
                            alam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php echo $contents ?>

    <!-- Footer -->
    <footer class="footer text-center mt-5"
        style="background-color: rgba(0, 0, 0, 0.6); color: white; padding: 5px 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; backdrop-filter: blur(5px);">
        <div class="container">
            <p>&copy; 2024 Padukuhan Krebet. KKNT UAA.</p>
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>