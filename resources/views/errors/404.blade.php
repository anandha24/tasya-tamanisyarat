    @extends('layouts.utama')

    @section('header')
    <div id="header" class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Tidak Ditemukan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Beranda</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Halaman</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">404</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    @endsection


    @section('konten')
    <div id="konten" class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Halaman Tidak Ditemukan</h1>
                    <p class="mb-4">Maaf, Halaman yang kamu cari tidak ditemukan, mungkin lebih baik ke halaman utama untuk mencarinya?</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="\index">Kembali ke Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>
    @endsection
