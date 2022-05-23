@extends('layouts.kursus')
@section('judul', 'TASYA | Edit Profil')
@section('konten')
@php($path = "https://www.shareicon.net/data/128x128/2016/06/10/586098_guest_512x512.png")
<!-- @php($gambar = $gambar) -->
<style>
    body{margin-top:20px;}
    .avatar{
    width:200px;
    height:200px;
    }

    h1 {
        text-align: center;
        padding:40px;
        font-size: 80px;
        color: #aa26da;
    }
    h6{
        padding:10px;
    }
    </style>
    <div class="container wow fadeInUp" data-wow-delay="0.25s">
        <div class="container bootstrap snippets bootdey">
            <h1>Edit Profile</h1>
              <hr>
            <div class="row">
              <!-- left column -->
              <div class="col-md-3">
                <div class="text-center">
                  <img src={{ $gambar == null?"https://www.shareicon.net/data/128x128/2016/06/10/586098_guest_512x512.png":"$gambar" }} class="avatar img-circle img-thumbnail" alt="avatar">
                  <h6>Upload Photo</h6>

                  <form method="post" action="{{ url('/ava')}}"
                  enctype="multipart/form-data">
                  @csrf
                  <input type="file" class="form-control-file" id="berkas" name="berkas">

                </div>
              </div>

              <!-- edit form column -->
              <div class="col-md-9 personal-info">

                <h3>Personal info</h3>

                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Nama:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="{{ $nama }}" id="nama" name="nama">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                      <input class="form-control" readonly type="text" value="{{ $email }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Gender:</label>
                    <div class="col-lg-8">
                      <input type="radio" id="laki-laki" name="gender" value="Laki-Laki">
                        <label for="laki-laki">Laki-Laki</label>
                        <input type="radio" id="perempuan" name="gender" value="Perempuan">
                        <label for="perempuan">Perempuan</label>
                    </div>
                  </div>
                  <br>
                  <div class="text-left">
                  <button style="float: left;" type="submit" name="" class="btn btn-primary my-1">Upload</button>
                  </div>
                  </div>

                </form>
              </div>
          </div>
        </div>

        <br><br><br><br><br><br>
@endsection
