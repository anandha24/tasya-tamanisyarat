<!-- @extends('layouts.kursus')
@section('judul', 'TASYA | Abjad BISINDO')
@section('konten') -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASYA | Abjad BISINDO</title>
        <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=" {{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">

        <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</head>

<script>
    function klik(x){
        x.click();
    }
</script>

<style>
    .tengah{
        height: 50vh;
        width: 100%;
        max-width: 720px;
        margin: auto;
    }
    .tengah-utama {
        height: 75vh;
        width: 100%;
        max-width: 720px;
        padding: 10px;
        margin: auto;
    }
        h1{
        text-align: center;
        padding: 20px;
        font-size: 80px;
        background-color: rgb(223, 111, 233);
        border-radius: 5px;
    }

    #btn{
        background-color: rgb(223, 111, 233);
    }

    #keterangan{
         background-color:rgb(223, 111, 233);
    }
</style>

<body>

<div class="offcanvas offcanvas-start w-25 bg-light" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
    <div class="offcanvas-header">
        <h6 class="offcanvas-title d-none d-sm-block text-black" id="offcanvas">Menu</h6>
        <button type="button" class="btn-close text-reset text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-0">

        <div class="container">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-black min-vh-75">

                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Beranda</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-translate fs-4" viewBox="0 0 16 16">
                                <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                                <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                                </svg> <span class="ms-1 d-none d-sm-inline">Huruf</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fa fa-3x fa-book-open fs-4">
                            </i> <span class="ms-1 d-none d-sm-inline">Kata-Kata</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-file-earmark-play-fill fs-4" viewBox="0 0 16 16">
                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6 6.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43V6.884z"/>
                                </svg> <span class="ms-1 d-none d-sm-inline">Video</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li> -->
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-black text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ $gambar }}" alt="" width="48" height="48" class="rounded-circle img-thumbnail">
                        <span class="d-none d-sm-inline mx-1">{{ $nama }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                        <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li> -->
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="bg">
    <div class="row">
        <div class="col">
    <h1>BAHASA ISYARAT BISINDO</h1>
    <br><br><br>
            @php
                $z = 0;
            @endphp
            <div class="d-flex justify-content-center">
                <div class="card" style="text-align: center; border: none;">
                    <img src="{{ $gambars[$index == null ? '0':$index] }}" width="360px" style="text-align: center;"
                        class="justify-content-center mx-auto" alt="abjad bisindo" width="160">
                    <div class="card-body" id="keterangan">
                        <h4 class="card-text">{{ $huruf[$index == null ? '0':$index] }}</h4>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center" style="padding: 125px;">
                <div class="dropdown">
                    <button class="btn btn-secondary overflow-auto dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Huruf
                    </button>
                    <div class="dropdown-menu overflow-auto" aria-labelledby="dropdownMenuButton">
                        <div class="overflow-auto" style="height: 200px;">
                        @foreach ($huruf as $i)
                        <a class="dropdown-item" href="\video\{{ $z }}">{{ $i }}</a>
                        @php
                            $z++;
                        @endphp
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-flex bd-highlight mb-3 ">
                <div  class="me-auto p-2 bd-highlight" style="padding: 100px;">
                    <button id="btn" type="button" class="btn btn-outline-dark btn-lg"
                        style="width: 120px; height: 80px; ""> <a href="\video\{{ $index == 0? $index:$index - 1 }}">Back</a></button>
                </div>
                 <div  class="position-absolute bottom-0 start-50 translate-middle-x p-2 bd-highligh" style="padding: 100px;">
                    <button id="btn" type="button" class="btn btn-outline-dark btn-lg"
                        style="width: 160px; height: 80px; "><a href="/belajar">Ke Beranda</a></button>
                </div>
                <div  class="p-2 bd-highligh" style="padding: 100px;">
                    <button id="btn" type="button" class="btn btn-outline-dark btn-lg"
                        style="width: 120px; height: 80px; "><a href="\video\{{ $index == 25? $index:$index + 1 }}">Next</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/vanta-0.5.21/package/vendor/three.r119.min.js"></script>
<script src="/vanta-0.5.21/package/dist/vanta.net.min.js"></script>

<script>
VANTA.NET({
  el: "#bg",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 720.00,
  minWidth: 720.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0xc63fff,
  backgroundColor: 0x2c1352,
  points: 12.00,
  maxDistance: 25.00,
  spacing: 16.00
})
</script>

</body>
</html>
