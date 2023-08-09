@extends('layouts.home')
@section('css')
    <link rel="stylesheet" href="{{ asset('aos-master/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
@endsection
@section('container')
    <div id="beranda" class="mainPage">
        <div class="topbar">
            <div class="wrapperTopbar">
                <img src="{{asset('home/logo.svg')}}">
                <div class="wrapperList">
                    <a class="redirect" href="#model">Model</a>
                    <a class="redirect" href="#method">Cara Pembelian</a>
                </div>
                <div class="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
            <div class="wrapperListMenu">   
                <a class="listMenu" href="#beranda">Beranda</a>
                <a class="listMenu" href="#model">Model</a>
                <a class="listMenu" href="#method">Cara Pembelian</a>
            </div>
        </div>
        <div class="content" data-aos="fade-right" data-aos-once="true">
            <div class="headerContent">
                DiUndang
            </div>
            <div class="descContent">
                Digitalisasikan undangan pernikahanmu dengan mudah dan banyak macam pilihan model dimulai dari 30 ribu
            </div>
            <a href="https://wa.me/6289657670704" target="_blank">Pesan Sekarang</a>
        </div>
        <img src="{{ asset('home/homeMockup.png') }}"class="mockupAnimation">
    </div>
    <div class="feature">
        <div class="gridWrapper">
            <div class="card" data-aos="fade-down" data-aos-once="true">
                <img src="{{ asset('home/lowPrice.png') }}">
                <div class="title">Harga Terjangkau</div>
                <div class="subTitle">Dimulai dari 30 ribu, anda sudah mendapatkan undangan digital dari i-wedding</div>
            </div>
            <div class="card" data-aos="fade-down" data-aos-once="true">
                <img src="{{ asset('home/lifetime.png') }}">
                <div class="title">Link Aktif Selamanya</div>
                <div class="subTitle">Undangan tetap tersedia dan dapat diakses kapan saja, di mana saja, seumur hidup</div>
            </div>
            <div class="card" data-aos="fade-down" data-aos-once="true">
                <img src="{{ asset('home/easy.png') }}">
                <div class="title">Kemudahan Pembaruan</div>
                <div class="subTitle">Perubahan jadwal, lokasi, atau informasi lainnya, dapat dirubah dengan <a
                    href="https://wa.me/6289657670704" target="_blank">mengirim pesan</a></div>
            </div>
        </div>
    </div>
    <div class="midPage">
        <div class="content">
            Beberapa pasangan mempercayai untuk membuat undangan digital pernikahan mereka di
            <div>diundang.shop</div>
        </div>
        <div class="cardWrapper">
            <div class="card" data-aos="fade-right" data-aos-once="true">
                <div class="number">{{ $posts }}</div>
                <div class="title">Undangan dibuat</div>
            </div>
            <div class="card" data-aos="fade-left" data-aos-once="true">
                <div class="number">{{ $comments }}</div>
                <div class="title">Ucapan dan do'a</div>
            </div>
        </div>
        <div class="model" id="model">
            <div class="header">
                Model
            </div>
        </div>
    </div>
    <div class="viewModel">
        <div class="gridWrapper">
            <div class="card" data-aos="zoom-in" data-aos-once="true">
                <img src="{{ asset('Mockup/sp.png') }}">
                <div class="price">Rp. 30.000</div>
                <div class="title">Simplify-Pinky</div>
                <a href="/yoga-sarah" target="_blank"><img src="{{ asset('home/eye.svg') }}"> lihat demo</a>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-once="true">
                <img src="{{ asset('Mockup/sn.png') }}">
                <div class="price">Rp. 30.000</div>
                <div class="title">Simplify-Navue</div>
                <a href="/rizky-amalia" target="_blank"><img src="{{ asset('home/eye.svg') }}"> lihat demo</a>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-once="true">
                <img src="{{ asset('Mockup/sg.png') }}">
                <div class="price">Rp. 30.000</div>
                <div class="title">Simplify-Gremy</div>
                <a href="/rizaldi-rina" target="_blank"><img src="{{ asset('home/eye.svg') }}"> lihat demo</a>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-once="true">
                <img src="{{ asset('Mockup/sb.png') }}">
                <div class="price">Rp. 30.000</div>
                <div class="title">Simplify-Bream</div>
                <a href="/dicky-desi" target="_blank"><img src="{{ asset('home/eye.svg') }}"> lihat demo</a>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-once="true">
                <img src="{{ asset('Mockup/jp.png') }}">
                <div class="price">Rp. 40.000</div>
                <div class="title">Javva-Pinky</div>
                <a href="/dwi-indah" target="_blank"><img src="{{ asset('home/eye.svg') }}"> lihat demo</a>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-once="true">
                <img src="{{ asset('Mockup/jn.png') }}">
                <div class="price">Rp. 40.000</div>
                <div class="title">Javva-Navue</div>
                <a href="/budi-maya" target="_blank"><img src="{{ asset('home/eye.svg') }}"> lihat demo</a>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-once="true">
                <img src="{{ asset('Mockup/jg.png') }}">
                <div class="price">Rp. 40.000</div>
                <div class="title">Javva-Gremy</div>
                <a href="/adnan-anisa" target="_blank"><img src="{{ asset('home/eye.svg') }}"> lihat demo</a>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-once="true">
                <img src="{{ asset('Mockup/jb.png') }}">
                <div class="price">Rp. 40.000</div>
                <div class="title">Javva-Bream</div>
                <a href="/arif-dewi" target="_blank"><img src="{{ asset('home/eye.svg') }}"> lihat demo</a>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-once="true">
                <img src="{{ asset('Mockup/ln.png') }}">
                <div class="price">Rp. 45.000</div>
                <div class="title">Luxus-Navue</div>
                <a href="/bima-dina" target="_blank"><img src="{{ asset('home/eye.svg') }}"> lihat demo</a>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-once="true">
                <img src="{{ asset('Mockup/lb.png') }}">
                <div class="price">Rp. 45.000</div>
                <div class="title">Luxus-Bream</div>
                <a href="/fadli-nia" target="_blank"><img src="{{ asset('home/eye.svg') }}"> lihat demo</a>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-once="true">
                <img src="{{ asset('Mockup/lg.png') }}">
                <div class="price">Rp. 45.000</div>
                <div class="title">Luxus-Gremy</div>
                <a href="/wira-fitriani" target="_blank"><img src="{{ asset('home/eye.svg') }}"> lihat demo</a>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-once="true">
                <img src="{{ asset('Mockup/lp.png') }}">
                <div class="price">Rp. 45.000</div>
                <div class="title">Luxus-Pinky</div>
                <a href="/farhan-rara" target="_blank"><img src="{{ asset('home/eye.svg') }}"> lihat demo</a>
            </div>
        </div>
    </div>
    <div class="payMethod" id="method">
      <div class="header">
        Langkah untuk melakukan pembelian 
      </div>
      <div class="gridWrapper">
        <div class="card">
          <div class="number">01</div>
          <div class="title">Pilih Model</div>
          <div class="desc">Pilih model kartu undangan yang anda inginkan, lihat <a href="#model">modelnya</a> terlebih dahulu sebelum melakukan pembelian</div>
        </div>
        <div class="card">
          <div class="number">02</div>
          <div class="title">Lakukan Pembelian</div>
          <div class="desc">Untuk melakukan pembelian, pengisian informasi, sampai ke pembayaran, Hubungi kami di <a href="https://wa.me/6289657670704">whatsapp</a>,</div>
        </div>
        <div class="card">
          <div class="number">03</div>
          <div class="title">Undangan siap dibagikan</div>
          <div class="desc">Kami akan kirimkan link undangan digital anda lewat nomor whatsapp yang telah anda kirimkan</div>
        </div> 
      </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('aos-master/dist/aos.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
