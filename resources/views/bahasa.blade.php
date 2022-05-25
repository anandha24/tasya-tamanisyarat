@extends('layouts.utama')
@section('konten')
<svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 400" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(232.054, 138.954, 173.842, 1)" offset="0%"></stop><stop stop-color="rgba(224.407, 0, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,294L26.7,253.2C53.3,212,107,131,160,147C213.3,163,267,278,320,326.7C373.3,376,427,359,480,318.5C533.3,278,587,212,640,204.2C693.3,196,747,245,800,245C853.3,245,907,196,960,147C1013.3,98,1067,49,1120,89.8C1173.3,131,1227,261,1280,318.5C1333.3,376,1387,359,1440,294C1493.3,229,1547,114,1600,73.5C1653.3,33,1707,65,1760,130.7C1813.3,196,1867,294,1920,351.2C1973.3,408,2027,425,2080,383.8C2133.3,343,2187,245,2240,236.8C2293.3,229,2347,310,2400,285.8C2453.3,261,2507,131,2560,98C2613.3,65,2667,131,2720,204.2C2773.3,278,2827,359,2880,343C2933.3,327,2987,212,3040,196C3093.3,180,3147,261,3200,269.5C3253.3,278,3307,212,3360,163.3C3413.3,114,3467,82,3520,106.2C3573.3,131,3627,212,3680,220.5C3733.3,229,3787,163,3813,130.7L3840,98L3840,490L3813.3,490C3786.7,490,3733,490,3680,490C3626.7,490,3573,490,3520,490C3466.7,490,3413,490,3360,490C3306.7,490,3253,490,3200,490C3146.7,490,3093,490,3040,490C2986.7,490,2933,490,2880,490C2826.7,490,2773,490,2720,490C2666.7,490,2613,490,2560,490C2506.7,490,2453,490,2400,490C2346.7,490,2293,490,2240,490C2186.7,490,2133,490,2080,490C2026.7,490,1973,490,1920,490C1866.7,490,1813,490,1760,490C1706.7,490,1653,490,1600,490C1546.7,490,1493,490,1440,490C1386.7,490,1333,490,1280,490C1226.7,490,1173,490,1120,490C1066.7,490,1013,490,960,490C906.7,490,853,490,800,490C746.7,490,693,490,640,490C586.7,490,533,490,480,490C426.7,490,373,490,320,490C266.7,490,213,490,160,490C106.7,490,53,490,27,490L0,490Z"></path></svg>

<style>


    h1 {
        text-align: center;
        padding:50px;
        font-size: 7vw;
    }
    h2{
        padding:10px;
    }
    #bisindo{
        text-align: left;
    }
    #gmbrsibi{
        width:500px;
        border-radius:30px;
        border:1px solid rgb(214, 41, 214);
        border-width:5px

    }
    #gmbrbisindo{
        width:500px;
        border-radius:30px;
        border:1px solid rgb(214, 41, 214);
        border-width:5px

    }
    .sibi{
        min-width:50%;
        height: 420px;
    }
    .bisindo{
        min-width:50%;
        height:450px;

    }
    p{
        font-family: "Helvetica Neue",Helvetica,Arial;
        font-size: 20px;
        text-align: justify;
    }


</style>
<div class="container wow fadeInUp" data-wow-delay="0.25s">
<body">
<h1>Jenis Bahasa Isyarat</h1>
<br><br>
<div class="sibi text-wrap overflow-auto wow fadeIn" data-wow-delay="0.25s">
<h2>Sistem Bahasa Isyarat Indonesia (SIBI)</h2>
<p>
    SIBI merupakan bahasa isyarat yang diadopsi dari American Sign Language (ASL). Bahasa isyarat yang satu ini juga biasa dipakai di Sekolah Luar Biasa (SLB) untuk berkomunikasi antara guru dan siswa maupun antar siswa.

Meskipun merupakan bahasa isyarat yang direkomendasikan oleh pemerintah, banyak yang berpendapat bahwa SIBI ini lebih sulit karena mengandung kosakata yang baku dan rumit.

Walaupun SIBI sudah diajarkan kepada tuna rungu dan tuna wicara sejak mereka duduk di bangku SLB, tapi tetap saja bahasa isyarat ini dianggap lebih sulit dan susah untuk dipelajari. Bahkan, terkadang mereka yang mengalami tuli saja merasa kesulitan saat harus berkomunikasi dengan menggunakan SIBI.

Mengingat SIBI adalah bahasa isyarat yang tergolong sulit, banyak teman-teman tuli dan bisu yang memilih untuk tidak menggunakan SIBI saat berkomunikasi dalam kehidupan sehari-hari. SIBI yang hanya menggunakan satu tangan saja ini memiliki struktur yang sama dengan tata bahasa lisan Indonesia, termasuk penggunaan awalan dan akhiran.
</p>
</div>
<div class="row">

    <img src="https://www.99.co/blog/indonesia/wp-content/uploads/2021/06/sistem-alfabet-SIBI.jpg" alt="SIBI" id="gmbrsibi">
</div>
<br>
<br>
<br>
<br>
<div class="bisindo text-wrap overflow-auto wow fadeIn" data-wow-delay="0.25s">
<h2 id="bisindo">Bahasa Isyarat Indonesia (BISINDO)</h2>
<p align="left">
    Jika SIBI dibuat oleh mantan pimpinan SLB dan dianggap sah sebagai bahasa isyarat yang dipakai di Indonesia, berbeda dengan BISINDO. Bahasa yang dianggap primitif ini justru sedang diperjuangkan oleh Gerakan untuk Kesejahteraan Tunarungu Indonesia (GERKATIN). Alasannya sederhana karena BISINDO dianggap sebagai bahasa yang bisa mewakili budaya tuli Indonesia.

    BISINDO adalah bahasa yang biasa dipakai oleh orang-orang tuli dan bisu sejak kecil. Boleh dibilang bahwa BISINDO ini adalah bahasa alami yang mudah dicerna oleh sesama tuli atau ketika dipakai berkomunikasi dengan orang normal.

    Uniknya, BISINDO memiliki keunikan seperti adanya bahasa daerah. Isyarat menggunakan BISINDO juga dipengaruhi oleh interaksi nilai-nilai tiap daerah. Sangat berbeda dengan SIBI yang dianggap sebagai bahasa isyarat mutlak di Indonesia. Apabila SIBI hanya menggunakan satu tangan, BISINDO disampaikan dengan menggunakan dua tangan. Tujuan penggunaan dua tangan adalah memudahkan lawan bicara memahami apa yang disampaikan orang yang berbicara menggunakan BISINDO ini.</p>

</div>
<img src="https://www.99.co/blog/indonesia/wp-content/uploads/2021/06/sistem-bahasa-bisindo.jpg" alt="SIBI" id="gmbrbisindo" align="left">
</div>
</body>
<svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 400" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(232.054, 138.954, 173.842, 1)" offset="0%"></stop><stop stop-color="rgba(224.407, 0, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,294L26.7,253.2C53.3,212,107,131,160,147C213.3,163,267,278,320,326.7C373.3,376,427,359,480,318.5C533.3,278,587,212,640,204.2C693.3,196,747,245,800,245C853.3,245,907,196,960,147C1013.3,98,1067,49,1120,89.8C1173.3,131,1227,261,1280,318.5C1333.3,376,1387,359,1440,294C1493.3,229,1547,114,1600,73.5C1653.3,33,1707,65,1760,130.7C1813.3,196,1867,294,1920,351.2C1973.3,408,2027,425,2080,383.8C2133.3,343,2187,245,2240,236.8C2293.3,229,2347,310,2400,285.8C2453.3,261,2507,131,2560,98C2613.3,65,2667,131,2720,204.2C2773.3,278,2827,359,2880,343C2933.3,327,2987,212,3040,196C3093.3,180,3147,261,3200,269.5C3253.3,278,3307,212,3360,163.3C3413.3,114,3467,82,3520,106.2C3573.3,131,3627,212,3680,220.5C3733.3,229,3787,163,3813,130.7L3840,98L3840,490L3813.3,490C3786.7,490,3733,490,3680,490C3626.7,490,3573,490,3520,490C3466.7,490,3413,490,3360,490C3306.7,490,3253,490,3200,490C3146.7,490,3093,490,3040,490C2986.7,490,2933,490,2880,490C2826.7,490,2773,490,2720,490C2666.7,490,2613,490,2560,490C2506.7,490,2453,490,2400,490C2346.7,490,2293,490,2240,490C2186.7,490,2133,490,2080,490C2026.7,490,1973,490,1920,490C1866.7,490,1813,490,1760,490C1706.7,490,1653,490,1600,490C1546.7,490,1493,490,1440,490C1386.7,490,1333,490,1280,490C1226.7,490,1173,490,1120,490C1066.7,490,1013,490,960,490C906.7,490,853,490,800,490C746.7,490,693,490,640,490C586.7,490,533,490,480,490C426.7,490,373,490,320,490C266.7,490,213,490,160,490C106.7,490,53,490,27,490L0,490Z"></path></svg>
</html>
@endsection
