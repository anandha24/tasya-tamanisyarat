@extends('layouts.kursus')
@section('judul', 'TASYA | Beranda')

@section('konten')
<div class="container-fluid" id="bg">
    <div class="row">
        <div class="col-12 py-3">
            <!-- toggler -->
            <button class="btn float-start" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
                <!-- <i class="bi bi-arrow-right-square-fill fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i> -->
                <img src="/logo-tasya.png" width="100" alt="" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" onmouseover="klik(this)">
            </button>
        </div>
    </div>
        <div class="row">
        <div class="col-12 pt-2 ps-5">
            <div class="jumbotron jumbotron-fluid">
                <p class="display-4 align-start">Selamat Datang,</p>
                <span class="display-5 text-muted">{{$nama}}</span>
            </div>
        </div>
    </div>
            <div class="row tengah-utama align-middle align-items-center">
                <div class="col-12">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-xs-1 row-cols-sm-1 row-cols-md-2 tengah align-items-center">
                    <div class="col text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card service-item text-center">
                        <div class="card-body">
                            <h5 class="card-title">Halaman Utama</h5>
                            <p class="card-text"><i class="fa fa-3x fa-home mb-2" style="color: #aa26da;">
                            </i></p>
                            <a href="/index" class="btn btn-secondary">Kembali ke Halaman Utama</a>
                        </div>
                        </div>
                    </div>
                    <div class="col text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card service-item text-center">
                        <div class="card-body">
                            <h5 class="card-title">Huruf Abjad SIBI</h5>
                            <p class="card-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" style="color: #aa26da;" class="bi bi-translate mb-2" viewBox="0 0 16 16">
                                <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                                <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                                </svg>
                            </p>
                            <a href="/abjad" class="btn btn-secondary">Ke Huruf</a>
                        </div>
                        </div>
                    </div>
                    <div class="col text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card service-item text-center">
                        <div class="card-body">
                            <h5 class="card-title">Kata Sehari-hari SIBI</h5>
                            <p class="card-text"><i class="fa fa-3x fa-book-open mb-2" style="color: #aa26da;">
                            </i></p>
                            <a href="/kata" class="btn btn-secondary">Ke Kosakata</a>
                        </div>
                        </div>
                    </div>
                    <div class="col text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card service-item text-center">
                        <div class="card-body">
                            <h5 class="card-title">Video Abjad SIBI</h5>
                            <p class="card-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" style="color: #aa26da;" fill="currentColor" class="bi bi-file-earmark-play-fill mb-2" viewBox="0 0 16 16">
                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6 6.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43V6.884z"/>
                                </svg>
                            </p>
                            <a href="/video" class="btn btn-secondary">Ke Video</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
        </div>
</div>
<script src="/vanta-0.5.21/package/vendor/three.r119.min.js"></script>
<script src="/vanta-0.5.21/package/dist/vanta.globe.min.js"></script>
<script>
VANTA.GLOBE({
  el: "#bg",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 1080.00,
  minWidth: 1080.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0x773fff,
  color2: 0x0,
  backgroundColor: 0xd6fcf4
})
</script>

@endsection
