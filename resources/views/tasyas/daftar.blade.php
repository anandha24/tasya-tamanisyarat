<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css\bootstrap.min.css">
    <script src="/js\bootstrap.js"></script>
    <script src="/jquery-3.6.0.js"></script>
    <script src="/jquery-validation-1.19.3\dist\jquery.validate.js"></script>
    <title>Tasya - Daftar</title>
    <!-- <script>
        $(document).ready(function () {
            $("#formulir").validate({
                errorClass: "error gagal-alert",
                validClass: "valid sukses-alert",
                rules: {
                    email_user : {
                        email: true,
                        required: true,
                        minlength: 8,
                        maxlength: 50
                    },
                    nama_user : {
                        required: true,
                        minlength: 8,
                        maxlength: 16
                    },
                    pass_user: {
                        required: true,
                        minlength: 8,
                        maxlength: 16
                    },
                    konfirmasi_pass: {
                        equalTo: "#Password"
                    }
                },
                messages: {
                            email_user: {
                                email: "Harap isi Email anda dengan sesuai!",
                                required: "Harap isi Email anda!",
                                minlength: "Email anda terlalu pendek"
                            },
                            nama_user: {
                                required: "Harap isi Username anda!",
                                minlength: "Kolom Username minimal memiliki 8 karakter",
                                maxlength: "Kolom Username maksimal 16 karakter"
                            },
                            pass_user: {
                                required: "Harap isi Password anda!",
                                minlength: "Kolom Password minimal memiliki 8 karakter",
                                maxlength: "Kolom Password maksimal 16 karakter"
                            },
                            konfirmasi_pass: {
                                required: "Harap isi Konfirmasi Password anda!",
                                minlength: "Kolom Konfirmasi Password minimal memiliki 8 karakter",
                                maxlength: "Kolom Konfirmasi Password maksimal 16 karakter",
                                equalTo: "Password tidak sama!"
                            }
                        }
            });
            $("#hapus").click(function () {
                alert("Form dihapus!");
            });
        });
    </script> -->
    <style>
        #form{
        -webkit-border-radius: 50px;
        border-radius: 50px;
        -webkit-box-shadow: 10px 10px 24px #b2b8c9, -10px -10px 24px #f0f8ff;
        box-shadow: 10px 10px 24px #b2b8c9, -10px -10px 24px #f0f8ff;
        min-width: 280px;
        min-height: 360px;
      }
      #form::-webkit-scrollbar{
        display: none;
      }
      #form{
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
        form{
            margin: 20px;
        }

        input {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 2px;
            margin-top: 5px;
            outline: none;
        }

        label.error {
            color: red;
            font-size: 1rem;
            display: block;
        }

        input.error {
            border: 1px dashed red;
            font-weight: 300;
            color: red;
        }

        label.error.gagal-alert {
            border-radius: 4px;
            line-height: 0;
            padding: 0px 0 6px 6px;
        }

        input.valid.sukses-alert {
            border: 1px solid #4CAF50;
            color: green;
        }

        input.error{
            animation: shake 300ms;
        }
        @keyframes shake {
            25% { transform: translateX(4px);}
            50% { transform: translateX(-4px);}
            75% { transform: translateX(4px);}
        }
    </style>
</head>
<body id="form">
    <!-- <div>
        <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" class="position-absolute top-0 start-50 translate-middle transition duration-300 ease-in-out delay-150"><defs><linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%"><stop offset="5%" stop-color="#9900ef88"></stop><stop offset="95%" stop-color="#1e002a88"></stop></linearGradient></defs><path d="M 0,600 C 0,600 0,200 0,200 C 80.88038277511961,228.04784688995215 161.76076555023923,256.0956937799043 250,234 C 338.2392344497608,211.90430622009566 433.8373205741626,139.66507177033492 531,135 C 628.1626794258374,130.33492822966508 726.8899521531101,193.24401913875602 826,200 C 925.1100478468899,206.75598086124398 1024.6028708133972,157.35885167464113 1127,148 C 1229.3971291866028,138.64114832535887 1334.6985645933014,169.32057416267943 1440,200 C 1440,200 1440,600 1440,600 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 300)"></path><defs><linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%"><stop offset="5%" stop-color="#9900efff"></stop><stop offset="95%" stop-color="#1e002aff"></stop></linearGradient></defs><path d="M 0,600 C 0,600 0,400 0,400 C 117.311004784689,428.5263157894737 234.622009569378,457.0526315789474 324,447 C 413.377990430622,436.9473684210526 474.82296650717694,388.3157894736842 563,398 C 651.177033492823,407.6842105263158 766.086124401914,475.68421052631584 879,469 C 991.913875598086,462.31578947368416 1102.8325358851673,380.9473684210526 1196,357 C 1289.1674641148327,333.0526315789474 1364.5837320574165,366.5263157894737 1440,400 C 1440,400 1440,600 1440,600 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150 path-1" transform="rotate(-180 720 300)"></path></svg> -->
    <div class="container container-fluid" style="min-height: 360px;">
        <div class="row min-vh-25 h-100 position-absolute top-50 start-0 w-100">
            <div class="col-3 col-sm-6 col-lg-8 position-absolute top-50 start-50 translate-middle min-vw-25 w-50 min-vh-25 h-50">
                <form action="{{ route('tasyas.store') }}" method="POST" autocomplete="on" id="formulir">
                    @csrf
                    <table class="table table-hover table-borderless table-responsive caption-top">
                        <caption>Silahkan Register:</caption>
                        <tr>
                            <td>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control @error('email_user') error gagal-alert @enderror" name="email_user" id="floatingInput" placeholder="Email" value="{{ old('email_user') }}">
                                    <label for="floatingInput">Email</label>
                                </div>
                                @error('email_user')
                                <div>
                                    <label class="error gagal-alert">{{ $message }}</label>

                                </div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('nama_user') error gagal-alert @enderror" name="nama_user" id="floatingInput" placeholder="Username" value="{{ old('nama_user') }}">
                                    <label for="floatingInput">Username</label>
                                </div>
                                @error('nama_user')
                                <div>
                                    <label class="error gagal-alert">{{ $message }}</label>

                                </div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control @error('pass_user') error gagal-alert @enderror" name="pass_user" minlength="8" id="Password" placeholder="Password" value="{{ old('pass_user') }}">
                                    <label for="Password">Password</label>
                                </div>
                                @error('pass_user')
                                <div>
                                    <label class="error gagal-alert">{{ $message }}</label>

                                </div>
                                @enderror
                            </td>
                      </tr>
                        <tr>
                            <td>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control @error('konfirmasi_user') error gagal-alert @enderror" name="konfirmasi_pass" minlength="8" id="konfirmasiPassword" placeholder="Konfirmasi Password" value="{{ old('konfirmasi_pass') }}">
                                    <label for="konfirmasiPassword">Konfirmasi Password</label>
                                </div>
                                @error('konfirmasi_pass')
                                <div>
                                    <label class="error gagal-alert">{{ $message }}</label>

                                </div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Register" class="me-2"><input type="reset" id="hapus" value="Reset" class="me-2"></td>
                        </tr>
                        <tr>
                            <td><a class='link-secondary' href="masuk">Login</a></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <!-- <svg class="position-absolute top-100 start-50 translate-middle" id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 20 1440 320" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(209, 216, 236, 1)" offset="0%"></stop><stop stop-color="rgba(0, 0, 0, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,98L24,81.7C48,65,96,33,144,24.5C192,16,240,33,288,106.2C336,180,384,310,432,310.3C480,310,528,180,576,171.5C624,163,672,278,720,334.8C768,392,816,392,864,383.8C912,376,960,359,1008,326.7C1056,294,1104,245,1152,245C1200,245,1248,294,1296,269.5C1344,245,1392,147,1440,155.2C1488,163,1536,278,1584,343C1632,408,1680,425,1728,408.3C1776,392,1824,343,1872,294C1920,245,1968,196,2016,179.7C2064,163,2112,180,2160,187.8C2208,196,2256,196,2304,228.7C2352,261,2400,327,2448,294C2496,261,2544,131,2592,73.5C2640,16,2688,33,2736,32.7C2784,33,2832,16,2880,81.7C2928,147,2976,294,3024,334.8C3072,376,3120,310,3168,236.8C3216,163,3264,82,3312,114.3C3360,147,3408,294,3432,367.5L3456,441L3456,490L3432,490C3408,490,3360,490,3312,490C3264,490,3216,490,3168,490C3120,490,3072,490,3024,490C2976,490,2928,490,2880,490C2832,490,2784,490,2736,490C2688,490,2640,490,2592,490C2544,490,2496,490,2448,490C2400,490,2352,490,2304,490C2256,490,2208,490,2160,490C2112,490,2064,490,2016,490C1968,490,1920,490,1872,490C1824,490,1776,490,1728,490C1680,490,1632,490,1584,490C1536,490,1488,490,1440,490C1392,490,1344,490,1296,490C1248,490,1200,490,1152,490C1104,490,1056,490,1008,490C960,490,912,490,864,490C816,490,768,490,720,490C672,490,624,490,576,490C528,490,480,490,432,490C384,490,336,490,288,490C240,490,192,490,144,490C96,490,48,490,24,490L0,490Z"></path></svg>
    </div> -->
</body>
</html>

<script src="/vanta-0.5.21/package/vendor/three.r119.min.js"></script>
<script src="/vanta-0.5.21/package/dist/vanta.birds.min.js"></script>
<script>
// VANTA.HALO({
//   el: "#land",
//   mouseControls: true,
//   touchControls: true,
//   gyroControls: false,
//   minHeight: 200.00,
//   minWidth: 200.00,
//   backgroundColor: 0x0,
//   size: 1.0
// })
VANTA.BIRDS({
  el: "#form",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 1080.00,
  minWidth: 1080.00,
  scale: 1.00,
  scaleMobile: 1.00
})
// VANTA.GLOBE({
//   el: "#land",
//   mouseControls: true,
//   touchControls: true,
//   gyroControls: false,
//   minHeight: 200.00,
//   minWidth: 200.00,
//   scale: 1.00,
//   scaleMobile: 1.00
// })
// VANTA.NET({
//   el: "#bg",
//   mouseControls: true,
//   touchControls: true,
//   gyroControls: false,
//   minHeight: 200.00,
//   minWidth: 200.00,
//   scale: 1.00,
//   scaleMobile: 1.00,
//   points: 15.00,
//   maxDistance: 25.00,
//   color: 0x773fff,
//   backgroundColor: 0x0
// })
</script>
