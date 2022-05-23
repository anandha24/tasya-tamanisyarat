@extends('layouts.utama')
@section('konten')
<style>
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
</style>
@php
    $i;
@endphp
<body>
    <br>
    <h1>BAHASA ISYARAT BISINDO</h1>

            <div class="d-flex justify-content-center">
                <div class="card" style="text-align: center; border: none;">
                    <img src="/img/projek tasya/A.png" style="text-align: center;"
                        class="justify-content-center mx-auto" alt="abjad bisindo" width="280">
                    <div class="card-body">
                        <h4 class="card-text">'A'</h4>
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
                        @foreach ($huruf as $i)
                        <a class="dropdown-item" href="#">{{ $i }}</a>
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="d-flex bd-highlight mb-3 ">
                <div  class="me-auto p-2 bd-highlight" style="padding: 100px;">
                    <button id="btn" type="button" class="btn btn-outline-dark btn-lg"
                        style="width: 200px; height: 80px; ">Back</button>
                </div>

                <div  class="p-2 bd-highligh" style="padding: 100px;">
                    <button id="btn" type="button" class="btn btn-outline-dark btn-lg"
                        style="width: 200px; height: 80px; ">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
@endsection
