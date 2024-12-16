<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}">

    <link rel="icon" href="{{ asset('assets/img/logo1.png') }}">
    <title>Wakaf Yuk!</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
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
                        <a class="nav-link mx-4" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4" href="#">Program Wakaf</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4" href="#">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4" href="#">Tentang Kami</a>
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

    <div class="shapes-2">
        <div class="container-fluid service">
            <div class="container ">
                <div class="row g-4">
                    <h3 class="h3-2">Kabar Berita</h3>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="https://via.placeholder.com/800x400?text=Slide+1" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4"> Strategy Consulting</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="https://via.placeholder.com/800x400?text=Slide+2" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Financial Advisory</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="https://via.placeholder.com/800x400?text=Slide+3" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Managements</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis,
                                </p>
                                </div>
                        </div>
                    </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="https://via.placeholder.com/800x400?text=Slide+1" class="img-fluid rounded-top w-100" alt="Image">
                                </div>
                                <div class="rounded-bottom p-4">
                                    <a href="#" class="h4 d-inline-block mb-4"> Strategy Consulting</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="https://via.placeholder.com/800x400?text=Slide+2" class="img-fluid rounded-top w-100" alt="Image">
                                </div>
                                <div class="rounded-bottom p-4">
                                    <a href="#" class="h4 d-inline-block mb-4">Financial Advisory</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="https://via.placeholder.com/800x400?text=Slide+3" class="img-fluid rounded-top w-100" alt="Image">
                                </div>
                                <div class="rounded-bottom p-4">
                                    <a href="#" class="h4 d-inline-block mb-4">Managements</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis,
                                    </p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="https://via.placeholder.com/800x400?text=Slide+1" class="img-fluid rounded-top w-100" alt="Image">
                                </div>
                                <div class="rounded-bottom p-4">
                                    <a href="#" class="h4 d-inline-block mb-4"> Strategy Consulting</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="https://via.placeholder.com/800x400?text=Slide+2" class="img-fluid rounded-top w-100" alt="Image">
                                </div>
                                <div class="rounded-bottom p-4">
                                    <a href="#" class="h4 d-inline-block mb-4">Financial Advisory</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="https://via.placeholder.com/800x400?text=Slide+3" class="img-fluid rounded-top w-100" alt="Image">
                                </div>
                                <div class="rounded-bottom p-4">
                                    <a href="#" class="h4 d-inline-block mb-4">Managements</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis,
                                    </p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="https://via.placeholder.com/800x400?text=Slide+1" class="img-fluid rounded-top w-100" alt="Image">
                                </div>
                                <div class="rounded-bottom p-4">
                                    <a href="#" class="h4 d-inline-block mb-4"> Strategy Consulting</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="https://via.placeholder.com/800x400?text=Slide+2" class="img-fluid rounded-top w-100" alt="Image">
                                </div>
                                <div class="rounded-bottom p-4">
                                    <a href="#" class="h4 d-inline-block mb-4">Financial Advisory</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="https://via.placeholder.com/800x400?text=Slide+3" class="img-fluid rounded-top w-100" alt="Image">
                                </div>
                                <div class="rounded-bottom p-4">
                                    <a href="#" class="h4 d-inline-block mb-4">Managements</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis,
                                    </p>
                                    </div>
                            </div>
                        </div>
                        <div class="button-container">
                            <button class="hover-button-1">Tampilkan Lebih Banyak</button>
                        </div>
                </div>
            </div>

            <div class="container-fluid footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
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