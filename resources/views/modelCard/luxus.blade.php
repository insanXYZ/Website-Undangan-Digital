@extends('layouts.card')

@section('title')
    {{$posts->title ?? "i-wedding | buat undangan digital pernikahanmu"}}
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('aos-master/dist/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card/luxus/luxus.css') }}">
    <link rel="stylesheet" href="{{asset('css/card/luxus/'. $posts->warna_model .'.css')}}">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">
<style>
        .cover {
            background: url({{ asset('storage/'.$posts->coverD) }});
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .headerPage {
            background: url({{ asset('storage/'.$posts->landingImageD) }});
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .footer {
            background: url({{ asset('storage/'.$posts->footerImageD) }});            
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        @media screen and (max-width : 880px) {
            .cover {
                background: url({{asset('storage/'.$posts->coverM)}});
                background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .headerPage{
                background: url({{asset('storage/'.$posts->landingImageM)}});
                background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .footer {
                background: url({{ asset('storage/'.$posts->footerImageM) }});    
                background-position: center;
            background-repeat: no-repeat;
            background-size: cover;        
            }
        }
            </style>
    @endsection
@push('style')
    @livewireStyles
@endpush
@push('script')
    @livewireScripts
@endpush
@section('cover')
    <div class="flexContentCover">
        <div class="top">
            The Wedding Of
            @if(request()->get('to'))
            <div class="name">
                {{$posts->slug_nama_pria}} & {{$posts->slug_nama_wanita}}
            </div>
            @endif
        </div>
        <div class="bottom">
            @if (request()->get('to'))
            <div class="to">Kepada {{request()->get('to')}}</div>
            @else
            <div class="name">
                {{$posts->slug_nama_pria}} & {{$posts->slug_nama_wanita}}
            </div>
            @endif

            <div class="button">
                Buka Undangan
            </div>
        </div>
    </div>
@endsection
@section('container')
    <audio id="audio" controls>
        <source src="{{ asset('storage/'.$posts->musik) }}">
    </audio>  
    <img class="controllerAudio" src="{{asset('svg/luxus/pause.svg')}}">
  <div class="headerPage">
        <div class="headerContent">
            <div>{{$posts->slug_nama_pria}} & {{$posts->slug_nama_wanita}} </div>
            <div>{{$tanggal_resepsi}} </div>
        </div>    
    </div>    
    <div class="surah">
        <div class="surahQuran" data-aos="fade-right" data-aos-once="true">وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ بَيْنَكُمْ
        مَّوَدَّةً وَّرَحْمَةً ۗاِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ لِّقَوْمٍ يَّتَفَكَّرُوْنَ</div>
        <div class="surahContent" data-aos="fade-left" data-aos-once="true">
            <div>"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri,
                agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang.
                Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."</div>
            <div>(Q.S Ar-Rum: 21)</div>
        </div>
    </div>
    <div class="couple">
        <div class="headerCouple">
            Kedua Mempelai
        </div>
        <div class="flexCouple">
            <div class="cardCouple" data-aos="fade-down" data-aos-once="true">
                <img src="{{asset('storage/'.$posts->imgWanita)}}">
                <div class="name">{{$posts->nama_wanita}} </div>
                <div>Putri dari Bapak {{$posts->bapa_wanita}} </div>
                <div>dan Ibu {{$posts->ibu_wanita}} </div>
            </div>
            <div class="middleCard">dengan</div>
            <div class="cardCouple" data-aos="fade-down" data-aos-once="true">
                <img src="{{asset('storage/'.$posts->imgPria)}}">
                <div class="name">{{$posts->nama_pria}} </div>
                <div>Putra dari Bapak {{$posts->bapa_pria}} </div>
                <div>dan Ibu {{$posts->ibu_pria}} </div>
            </div>
        </div>
    </div>
    <div class="event">
        <div class="cardEvent" data-aos="fade-down" data-aos-once="true">
           <img src="{{asset('svg/luxus/love.svg')}}" alt=""> 
           <p>Tanpa mengurangi  rasa hormat, kami bermaksud mengundang Bapak/ibu/Saudara/i untuk menghadiri acara pernikahan
            kami.</p>
        </div>
        <div class="flexEvent">
            <div class="cardFlexEvent" data-aos="fade-down" data-aos-once="true">
                <img src="{{asset('svg/luxus/diamondRing.svg')}}" alt=""> 
                <div class="headerCard">
                    Akad
                </div>
                <div class="DateCard">
                    {{$tanggal_akad}}
                </div>
                <div class="clockCard">
                    Pukul {{$posts->jam_akad}}
                </div>
                <div class="placeCard">
                    {{$posts->tempat_akad}}
                </div>
            </div>
            <div class="cardFlexEvent" data-aos="fade-down" data-aos-once="true">
                <img src="{{asset('svg/luxus/weddingDoor.svg')}}" alt=""> 
                <div class="headerCard">
                    Resepsi
                </div>
                <div class="mainCard">
                    {{$tanggal_resepsi}}
                </div>
                <div class="clockCard">
                    Pukul {{$posts->jam_resepsi}}
                </div>
                <div class="placeCard">
                    {{$posts->tempat_resepsi}}
                </div>
            </div>
        </div>
    </div>
    <div class="location">
        <img src="{{asset('svg/luxus/locate.svg')}}">
        <div class="headerLocation">
            Detail Lokasi
        </div>
        {!! $posts->iframe !!}
    </div>
    <div class="story">
        <div class="headerStory">
            <img src="{{asset('svg/luxus/cardLove.svg')}}">
            <span>Story</span>
        </div>
        <div class="carousel">
            <div class="cardStory">
                <p>{{ $posts->story1_date }}</p>
                <img src="{{ asset('storage/'.$posts->story1_img) }}">
                <p>{{ $posts->story1_text }}</p>
            </div>
            <div class="cardStory">
                <p>{{ $posts->story2_date }}</p>
                <img src="{{ asset('storage/'.$posts->story2_img) }}">
                <p>{{ $posts->story2_text }}</p>
            </div>
            <div class="cardStory">
                <p>{{ $posts->story3_date }}</p>
                <img src="{{ asset('storage/'.$posts->story3_img) }}">
                <p>{{ $posts->story3_text }}</p>
            </div>
        </div>
    </div>
    <div class="gift">
        <img src="{{asset('svg/luxus/gift.svg')}}">
        <div class="headerGift">
            Wedding Gift
        </div>
        <div class="mainGift">
            <div>Bagi yang ingin memberikan hadiah secara finansial</div>
            <div>Tekan amplop di bawah ini</div>
        </div>
        <img class="envelope" src="{{asset('svg/luxus/envelope.svg')}}">
    </div>
    <div class="modalGift">
        <div class="contentModal">
            <div class="cardModal"> 
                <div class="buttonClose">&times;</div>
                <div class="content">
                    <img src="{{ asset('imageModel/luxus/' . $posts->bank . '.png') }}" alt="">
                    <div class="copyNumber">
                        <div class="noRek">{{$posts->norek}} </div>
                        <img src="{{asset('svg/luxus/copy.svg')}}">
                    </div> 
                    <div>a/n {{$posts->atasNama}} </div>        
                </div>
            </div>
        </div>
    </div>
    <div class="moment">
        <div class="headerMoment">
            <img src="{{asset('svg/luxus/bookLove.svg')}}">
            <div>Our Moment</div>  
        </div>
        <div class="gridMoment">
            @foreach (json_decode($posts->slideshow) as $sld )
                <div class="box"><img src="{{asset('storage/'.$sld)}}" alt=""></div>
            @endforeach
        </div>
    </div>
    <div class="form">
        <div class="headerForm">
            <img src="{{asset('svg/luxus/chat.svg')}}">
            <div>Wishes</div>
        </div>
        <div class="inputForm">
            <livewire:luxus.create-luxus :posts="$posts->id"></livewire:luxus.create-luxus>
        </div> 
    </div>
    <livewire:luxus.comment-luxus :posts="$posts->id"></livewire:luxus.create-luxus>
    <div class="footer">
        <div class="contentFooter" data-aos="fade-up" data-aos-once="true">
            <div>Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila, Bapak / Ibu / Saudara / i. berkenan hadir untuk memberikan do'a restunya kami ucapkan terimakasih.
            </div>
            <div class="brideName">{{$posts->slug_nama_pria}} & {{$posts->slug_nama_wanita}}
            </div>
        </div>
    </div>
    <div class="promote">
        <img src="{{ asset('home/logo-promote.svg') }}">
        <div>diundang</div>
    </div>
    @endsection
@section('script')
<script src="{{asset('aos-master/dist/aos.js')}}"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="{{ asset('slick/slick.min.js') }}"></script>
<script src="{{asset('js/luxus/main.js')}}"></script>
@endsection