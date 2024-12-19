<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/tentang_kami.css') }}">

    <link rel="icon" href="{{ asset('assets/img/logo1.png') }}">
    <title>Wakaf Yuk!</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="body">
    <body class="body">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Masuk Yuk!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Email" aria-describedby="emailHelp">
                    <label for="inputPassword5" class="form-label mt-3">Password</label>
                    <input type="password" id="inputPassword5" class="form-control" placeholder="Masukan Password" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                        <button type="button" class="btn mt-3" style="width: 100%; background-color:#C0E063; color:white">Login</button>
                        <p class="mt-3"><a type="link" class="link-opacity-100-hover" data-bs-toggle="modal" data-bs-target="#staticBackdrop-3" href="#" style="text-decoration: none; color:#C0E063; display:flex; justify-content:end">Lupa Kata Sandi</a></p>
                        <p class="card-text bg-light mt-3" style="transform: rotate(0); display:flex; justify-content:center">
                        Belum Punya Akun?  <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2" style="text-decoration: none; color:#C0E063;"> Daftar</a>
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="staticBackdrop-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Daftar Yuk!</h1>
                    <button type="button-2" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input class="form-control" type="text" placeholder="Masukan Nama Lengkap" aria-label="default input example">
                    <label for="email" class="form-label mt-3">Email</label>
                    <input class="form-control" type="text" placeholder="Masukan Email" aria-label="default input example">
                    <label for="email" class="form-label mt-3">No.Telepon</label>
                    <input type="number" class="form-control" type="text" placeholder="Masukan No.Telepon" aria-label="default input example">
                    <label for="inputPassword5" class="form-label mt-3">Password</label>
                    <input type="password" id="inputPassword5" class="form-control" placeholder="Masukan Password" aria-describedby="passwordHelpBlock">
                    <label for="inputPassword5" class="form-label mt-3">Konfirmasi Password</label>
                    <input type="password" id="inputPassword5" class="form-control" placeholder="Konfirmasi Password" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                        <button type="button" class="btn mt-3" style="width: 100%; background-color:#C0E063; color:white">Daftar</button>
                        <p class="card-text bg-light mt-3" style="transform: rotate(0); display:flex; justify-content:center">
                        Sudah Punya Akun?  <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="text-decoration: none; color:#C0E063;">Masuk</a>
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="staticBackdrop-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ganti Password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="inputPassword5" class="form-label">Password Baru</label>
                    <input type="password" id="inputPassword5" class="form-control" placeholder="Masukan Password Baru" aria-describedby="passwordHelpBlock">
                    <label for="inputPassword5" class="form-label mt-3">Konfirmasi Password</label>
                    <input type="password" id="inputPassword5" class="form-control" placeholder="Konfirmasi Password" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                    <button type="button" class="btn mt-3" style="width: 100%; background-color:#C0E063; color:white">Login</button>
                </div>
                </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-light shadow-sm sticky-top">
            <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo1.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link mx-4" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mx-4" href="/program">Program Wakaf</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mx-4" href="/berita">Berita</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mx-4" href="/laporan">Laporan</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mx-4" href="/tentang_kami">Tentang Kami</a>
                    </li>
                </ul>
                <div class="nav-button d-flex">
                    <button type="button" class="btn btn-1 me-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Login
                    </button>              
                    <button type="button-2" class="btn btn-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2">
                        Daftar
                    </button> 
                </div>
            </div>
            </div>
        </nav>

        <div class="shapes">
                <div class="h3">
                    <h3 class="h3-2">Tentang Kami</h3>
                </div>
            <div class="container">
                <div class="image">
                    <img src="https://via.placeholder.com/800x400?text=Slide+1" class="w-100 " alt="Slide 1">
                </div>
            </div>

            <div class="container">
                <div class="custom-section shadow-lg">
                <div class="row">
                    <div class="custom-column">
                        <h3 class="ms-3">Wakaf Yuk</h3>
                        <ul class="me-3">
                            <li class="ms-3">"Wakaf Yuk adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</li>
                            <li class="ms-3">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</li>
                            <li class="ms-3">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</li>
                            <li class="ms-3">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="custom-section-2 shadow-lg">
                    <div class="row">
                    <div class="custom-column-2">
                        <h3 class="ms-3">Visi dan Misi</h3>
                        <ul class="me-3">
                            <li class="ms-3">Visi:<br>
                            Menjadi penggerak utama dalam mengoptimalkan potensi wakaf untuk kesejahteraan umat dan pembangunan masyarakat yang berkelanjutan.</li>
                            <li class="ms-3">Misi:<br>
                            1. Mengelola wakaf secara profesional dan transparan untuk memastikan manfaatnya dapat dirasakan oleh masyarakat luas.<br>
                            2. Meningkatkan kesadaran dan partisipasi masyarakat dalam berwakaf melalui edukasi dan program-program kreatif.<br>
                            3. Mendukung pembangunan infrastruktur sosial, seperti pendidikan, kesehatan, dan ekonomi umat melalui dana wakaf.<br>
                            4. Membangun wakaf produktif yang berkelanjutan guna meningkatkan kesejahteraan masyarakat kurang mampu.<br>
                            5. Mengembangkan teknologi dan inovasi digital untuk memudahkan masyarakat dalam berwakaf dan memantau manfaatnya.<br></li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="container-fluid footer mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-white mb-4">Our Office</h4>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-white mb-4">Services</h4>
                            <a class="btn btn-link" >Financial Planning</a>
                            <a class="btn btn-link" >Cash Investment</a>
                            <a class="btn btn-link" >Financial Consultancy</a>
                            <a class="btn btn-link">Business Loans</a>
                            <a class="btn btn-link">Business Analysis</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a class="btn btn-link">About Us</a>
                            <a class="btn btn-link" >Contact Us</a>
                            <a class="btn btn-link" >Our Services</a>
                            <a class="btn btn-link" >Terms & Condition</a>
                            <a class="btn btn-link" >Support</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-white mb-4">Newsletter</h4>
                            <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        </div>
                    </div>
                </div>
            </div>
        
        
            <div class="container-fluid copyright py-4">
                <div class="container">
                    <div class="row">
                        <div class="text-center">
                            &copy; <a>Wakaf Yuk, All Right Reserved.</a>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>