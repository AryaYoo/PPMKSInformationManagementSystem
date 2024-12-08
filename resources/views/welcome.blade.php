<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffffff; /* Light background */
            color: #333333; /* Dark text color */
        }

        .navbar {
            background-color: #f8f9fa; /* Light navbar */
        }

        .navbar-brand,
        .nav-link {
            color: #333333 !important; /* Dark text for contrast */
        }

        .navbar-toggler-icon {
            background-color: #333333; /* Dark toggler icon */
        }

        .banner {
            background-image: url('https://img.freepik.com/free-vector/paper-style-abstract-background_23-2150742183.jpg'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .banner h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        footer {
            background-color: #003366; /* Dark blue footer */
            color: #ffffff; /* White text for footer */
        }

        footer .text-uppercase {
            color: #ffffff; /* White footer text */
        }

        footer .text-center {
            background-color: #002244; /* Slightly darker for footer bottom */
        }

        a {
            color: #007bff; /* Accent for links */
        }

        a:hover {
            color: #0056b3; /* Darker accent on hover */
        }

        .profile-section {
            margin-top: 50px;
            text-align: center;
        }

        .profile-section img {
            border-radius: 50%;
            width: 150px; /* Adjust size as needed */
            height: 150px; /* Adjust size as needed */
        }

        .card {
            margin-top: 30px; /* Space above the card */
        }

        .news-card {
            background-color: #003366; /* Blue background */
            color: white; /* White text */
            border: none; /* No border */
            border-radius: 10px; /* Rounded corners */
            padding: 20px; /* Padding inside the card */
            margin-top: 30px; /* Space above the news card */
        }

        .news-card img {
            width: 100%; /* Full width */
            border-radius: 10px; /* Rounded corners for image */
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="Logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Banner -->
    <div class="banner">
        <h1>WELCOME TO PPMKS MANAGEMENT SYSTEM</h1>
    </div>

    <!-- Body -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Pelayanan Pastoral Mahasiswa Keuskupa Surabaya</h1>
                <p>Pelayanan Pastoral Mahasiswa/i Keuskupan Surabaya merupakan inisiatif Gereja Keuskupan Surabaya dalam bentuk pendampingan pastoral khusus bagi mahasiswa-mahasiswi Katolik yang sedang mengemban hidup perkuliahan di setiap PTS/PTN yang berada di wilayah Keuskupan Surabaya. PPMKS bukan tergolong kelompok kategorial secara khusus, seperti HSM, KTM, PDKK, Shalam Ministry,Choice, YFC, dll atau ormaska (ISKA, PMKRI, WKRI, PK). PPMKS adalah pendampingan pastoral khusus usia mahasiswa-mahasiswi (Gereja Mahasiswa/i) yang didampingi langsung oleh romo (pastor) kemahasiswaan/romo koordinator PPMKS berdasarkan SK (tugas) dari Uskup. Penyebutan Gereja/Paroki mahasiswa berdasarkan Kanon 564-572: “Perihal Imam Kapelan. Kapelan ialah imam yang secara tetap diserahi reksa pastoral, sekurang-kurangnya sebagaian terhadap suatu komunitas atau kelompok khusus umat beriman Kristiani.”</p>
                <p>Tujuan keberadaan PPMKS agar setiap pribadi mahasiswa/i Katolik (intelektual muda) di Kesukupan Surabaya dapat menyadari dan mewujudkan dirinya (self-actualization) sebagai kader Gereja dan bangsa (iron stock), agen perubahan (agen of change), kekuatan moral (moral force), dan kontrol sosial (social control). PPMKS saat ini memilikirumah sebagai basecamp/markas mahasiswa/i Katolik. Rumah PPMKSsaat ini berada di Jl. Sam Ratulangi 6, pandegiling-Surabaya. Keberadaan rumah PPMKSmerupakan bentuk perhatian Keuskupan Surabaya untuk mengumpulkan, mengenali, mendekati, dan mendampingi kehidupan mahasiswa/i (intelektual muda) sesuai dengan kondisi dan situasi jaman mereka. Dengan adanya rumah PPMKS, mahasiswa/i dapat menemukan tempat yang nyaman seperti suasana rumah untuk kegiatan pengembangan diri: seminar, wadah aspirasi seni, diskusi, lokakarya, kelompok studi, dan pelayanan sakramen.</p>
            </div>
        </div>

        <!-- News Card Section -->
        <div class="row">
            <div class="col-md-12">
                <div class="card news-card d-flex flex-row">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP_ZllPRkjzBh0_CXbjYjfI0k0xstyMBSU7A&s" alt="Berita Pengabdian" class="img-fluid" style="max-width: 300px; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">MISA MAHASISWA MELIBATKAN SELURUH KMK KEUSKUPAN SURABAYA</h5>
                        <p class="card-text">November 25, 2024</p>
                        <p class="card-text">Misa mahasiswa merupakan bentuk dari peran PPMKS dalam menciptakan momen kebersamaan bagi para mahasiswa katolik di keuskupa surabaya. Agenda ini diadakan tepatnya di Kampus Widya Mandala Surabaya</p>
                        <a href="#" class="btn btn-light">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">PPMKS</h5>
                    <p>
                        Jalan Sam Ratulangi No.6
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Kontak Kami</h5>
                    <p>
                        Email: ppmsurabaya06@gmail.com<br>
                        Phone: +62 85648886307
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center p-3">
            © 2024 Pelayanan Pastoral mahasiswa Keuskupan Surabaya. All rights reserved.
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
