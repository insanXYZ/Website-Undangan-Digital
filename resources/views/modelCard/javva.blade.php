@extends('layouts.card')
@section('title')
    {{$posts->title ?? "i-wedding | buat undangan digital pernikahanmu"}}
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('aos-master/dist/aos.css')}}">
<link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card/javva/javva.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card/javva/' . $posts->warna_model) }}.css">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">
    <style>
        .cover {
            background: url({{ asset('storage/' . $posts->coverD) }});
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media screen and (max-width:900px) {
            .cover {
                background: url({{ asset('storage/' . $posts->coverM) }});
                background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }

            .mainPage {
                background: url({{ asset('storage/' . $posts->landingImageM) }});
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .footer {
                background: url({{ asset('storage/' . $posts->footerImageM) }});
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                }
        }
    </style>
@endsection
@section('cover')
    <div class="context">
        <p class="header-context">{{ $posts->slug_nama_pria }} & {{ $posts->slug_nama_wanita }}</p>
        <p class="bold">Kepada Bapak/Ibu/Saudara/i</p>
        @if (request()->get('to'))
            <p class="bold small">{{ request()->get('to') }}</p>
        @endif
        <p class="bold">Kami mengundang Anda untuk menghadiri acara pernikahan kami.</p>
        <div class="buttonCover">
            Buka Undangan
        </div>
    </div>
@endsection
@push('style')
    @livewireStyles
@endpush
@push('script')
    @livewireScripts
@endpush
@section('container')
    <audio id="audio" controls>
        <source src="{{ asset('storage/' . $posts->musik) }}">
    </audio>
    <div class="mainPage">
        <div class="content-main">
            <div class="header-content">
                <div> {{ $posts->slug_nama_pria }}
                </div>
                <div> {{ $posts->slug_nama_wanita }}
                </div>
            </div>
            <div class="second-content">
                "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu
                sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan
                sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang
                berpikir."
                <div>QS Ar-Rum:21</div>
            </div>
        </div>
        <div class="hero">
            <img src="{{ asset('storage/' . $posts->imgCouple) }}">
            <div class="countdown">
                <div class="countdown-box">
                    <div class="box">
                        <div class="day"></div>
                        <p>Hari</p>
                    </div>
                    <div class="box">
                        <div class="hour"></div>
                        <p>Jam</p>
                    </div>
                    <div class="box">
                        <div class="minute"></div>
                        <p>Menit</p>
                    </div>
                    <div class="box">
                        <div class="second"></div>
                        <p>Detik</p>
                    </div>
                </div>
                <div class="tanggal">
                    {{ $tanggal_akad }}
                </div>
            </div>
        </div>
    </div>
    <div class="woman bgCardBride">
        <div class="card-bride" data-aos="fade-right" data-aos-once="true">
            <div class="hero woman-hero" >
                <img src="{{ asset('storage/' . $posts->imgWanita) }}">
                <img class="op" src="{{ asset('storage/' . $posts->imgWanita) }}">
            </div>
            <div class="content" >
                <div class="header">
                    {{ $posts->nama_wanita }}
                </div>
                <div class="second-text">
                    <div class="header-text">Putri dari </div>
                    <div >Bapak {{ $posts->bapa_wanita }}</div>
                    <div >Ibu {{ $posts->ibu_wanita }}</div>
                    @if ($posts->instagram_wanita !== null)
                        <div class="insta" ><img src="{{ asset('svg/javva/instagram.svg') }}">
                            {{ $posts->instagram_wanita }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="man bgCardBride">
        <div class="card-bride" data-aos="fade-left" data-aos-once="true">
            <div class="content" >
                <div class="header" >
                    {{ $posts->nama_pria }}
                </div>
                <div class="second-text" >
                    <div class="header-text">Putra dari </div>
                    <div>Bapak {{ $posts->bapa_pria }}</div>
                    <div>Ibu {{ $posts->ibu_pria }}</div>
                    @if ($posts->instagram_pria !== null)
                        <div class="insta"><img src="{{ asset('svg/javva/instagram.svg') }}">
                            {{ $posts->instagram_pria }}</div>
                    @endif
                </div>
            </div>
            <div class="hero man-hero" >
                <img src="{{ asset('storage/' . $posts->imgPria) }}">
                <img class="op" src="{{ asset('storage/' . $posts->imgPria) }}">
            </div>
        </div>
    </div>
    <div class="kalender">
        <img src="{{ asset('storage/' . $posts->imgCouple) }}" data-aos="fade-down" data-aos-once="true">
        <div class="second-countdown" data-aos="fade-down" data-aos-once="true">
            <div class="box">
                <div class="day"></div>
                <p>Hari</p>
            </div>
            <div class="box">
                <div class="hour"></div>
                <p>Jam</p>
            </div>
            <div class="box">
                <div class="minute"></div>
                <p>Menit</p>
            </div>
            <div class="box">
                <div class="second"></div>
                <p>Detik</p>
            </div>
        </div>
        <div class="flex-kalender">
            <div class="akad card"  data-aos="fade-down" data-aos-once="true">
                <p>Akad</p>
                <div class="tanggal">{{ $tanggal_akad }}</div>
                <div class="jam">Pukul {{ $posts->jam_akad }} WIB - Selesai</div>
                <div class="tempat">{{ $posts->tempat_akad }}</div>
            </div>
            <div class="resepsi card"  data-aos="fade-down" data-aos-once="true">
                <p>Resepsi</p>
                <div class="tanggal">{{ $tanggal_resepsi }}</div>
                <div class="jam">Pukul {{ $posts->jam_resepsi }} WIB - Selesai</div>
                <div class="tempat">{{ $posts->tempat_akad }}</div>
            </div>
        </div>
    </div>
    <div class="map">
        <div class="element-map"  data-aos="fade-up" data-aos-once="true">
            {!! $posts->iframe !!}
        </div>
    </div>
    <div class="carousel">
        <div class="content-carousel" >
            Moment
        </div>
        <div class="autoplay">
            @foreach (json_decode($posts->slideshow) as $par)
                <img src="{{ asset('storage/' . $par) }}">
            @endforeach
        </div>
    </div>
    <div class="wrapper-timeline">
        <div class="timeline">
            <div class="element left">
                <div class="content" data-aos="fade-down" data-aos-once="true">
                    <p>{{ $posts->story1_date }}</p>
                    <img src="{{ asset('storage/' . $posts->story1_img) }}">
                    <p>{{ $posts->story1_text }}</p>
                </div>
            </div>
            <div class="element right">
                <div class="content" data-aos="fade-down" data-aos-once="true">
                    <p>{{ $posts->story2_date }}</p>
                    <img src="{{ asset('storage/' . $posts->story2_img) }}">
                    <p>{{ $posts->story2_text }}</p>
                </div>
            </div>
            <div class="element left" >
                <div class="content" data-aos="fade-down" data-aos-once="true">
                    <p>{{ $posts->story3_date }}</p>
                    <img src="{{ asset('storage/' . $posts->story3_img) }}">
                    <p>{{ $posts->story3_text }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="live">
        <div class="header-live">Live Streaming</div>
        <div class="content-live">Saksikan acara pernikahan kami secara virtual, Silahkan untuk join live Streaming.</div>
        <a href="{{$posts->linkIg}}">Menuju Streaming</a>
    </div>
    <div class="donate">
        <img src="{{asset('imageModel/javva/flower'.$posts->warna_model.'.png')}}" alt="">
        <div class="wrap-donate">
            <div class="content-donate">
                <div class="header-donate">
                    Kirim Hadiah
                </div>
                <div class="p-donate">
                    Kirim langsung ke rekening di bawah ini:
                </div>
                <div class="card-donate">
                    <div class="header-card-donate">
                        {{ $posts->bank }}
                    </div>
                    <div class="nomor-card-donate">
                        {{ $posts->norek }}
                    </div>
                    <div class="nama-card-donate">
                        A/N {{ $posts->atasNama }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wishes">
        <div class="image">
            <img src="{{ asset('storage/' . $posts->imgCouple) }}" alt="">
            <img class="op" src="{{ asset('storage/' . $posts->imgCouple) }}" alt="">
        </div>
        <div class="form">
            <div class="header">Ucapkan Sesuatu untuk kami</div>
            <livewire:javva.create-javva :posts="$posts->id"></livewire:javva.create-javva>
            <div class="trackpoint"></div>
        </div>
    </div>
    <livewire:javva.comment-javva :posts="$posts->id"></livewire:javva.comment-javva>
    <div class="footer">
        <img src="{{ asset('storage/' . $posts->coverD) }}">
        <div class="content">
            <div class="header">
                Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila, Bapak / Ibu / Saudara / i. berkenan hadir
                untuk memberikan do'a restunya kami ucapkan terimakasih.
            </div>
            <div class="middle">
                <div class="header-mid">Turut Mengundang</div>
                @foreach (json_decode($posts->mengundang) as $und)
                    <div>{{ $und }}</div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="promote">
        <img src="{{asset('home/logo-promote.svg')}}">
        <div>diundang</div>
    </div>
@endsection

@section('script')
    <script src="{{asset('aos-master/dist/aos.js')}}"></script>
<script>
      var countDownDate = new Date("{{ $posts->tanggal_akad }}").getTime();
    </script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="{{ asset('slick/slick.min.js') }}"></script>
<script src="{{ asset('js/javva/main.js') }}"></script>
@endsection
