@extends('layouts.nav')
    
@section('container')

    <button class="carousel-button" id="prev-button" onclick="prevSlide()">❮</button>
    <button class="carousel-button" id="next-button" onclick="nextSlide()">❯</button>
  </div>
  
    <div class="container">
        <div class="box bg-white shadow rounded" style="height: 345px; width: 70%;">
            <p class="text-6xl font-bold" style="opacity: 100%">ULBI PHARMACY</p>
            <p>Be bright, Be stronger</p>
            <br>
            <p style="font-size: 10pt">Selamat datang di platform kesehatan Universitas Logistik dan Bisnis Internasional! Kami dengan senang hati menyambut Anda di situs ini yang dirancang khusus sebagai bagian dari proyek tugas akhir dalam mata kuliah pemrograman D4 Teknik Informatika. Tujuan utama kami adalah memenuhi kebutuhan pembelajaran dengan menyediakan informasi kesehatan yang relevan dan bermanfaat bagi pengguna. Dengan beragam konten yang kami tampilkan, kami berharap situs ini dapat menjadi sumber pengetahuan yang bermanfaat dalam upaya meningkatkan pemahaman tentang kesehatan di lingkungan universitas dan di masyarakat pada umumnya. Terima kasih atas kunjungan Anda! 
            </p>
            <button onclick="scrollToDiv()" class="button_scroll" style="margin-top: 8px">
                Learn More.
            </button>
        </div>
    </div>
    <br>
    <div id="About" style="background-color: white; padding-top: 40px; height:300px"  class="container">
        <div class="boxframe bg-white shadow rounded" style="background-image: url('../image/rahma.jpg');height: 250px; width: 250px; margin-right:70px;">
        </div>
        <div class="boxframe bg-white shadow rounded" style="background-image: url('../image/nizar.jpg');height: 250px; width: 250px; margin-left :70px;"></div>
    </div>   
    <div style="background-color: white; padding-top: 5px" class="container">
        <h3 style="margin-right:80px">Afifah Naufal Rahmani <br> FRONTEND DEVELOPER</h3>
        <h3 style="margin-left: 100px">Muhammad Nizar Akmal <br>BACKEND DEVELOPER</h3>
    </div>   

   

<script>
function scrollToDiv() {
    const targetDiv = document.getElementById('About');
    if (targetDiv) {
        targetDiv.scrollIntoView({ behavior: 'smooth' });
    }
}

function scrollToDiv2() {
    const targetDiv = document.getElementById('Contact');
    if (targetDiv) {
        targetDiv.scrollIntoView({ behavior: 'smooth' });
    }
}

showSlide(currentIndex);

</script>


      
@endsection('container')
