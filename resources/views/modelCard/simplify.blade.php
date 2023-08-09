@extends('layouts.card')
@section('css')
<link rel="stylesheet" href="{{asset('aos-master/dist/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card/simplify/simplify.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card/simplify/'.$posts->warna_model)}}.css">
    <link rel="stylesheet" href="{{asset('css/card/size.css')}}">
@endsection
@section('title')
    {{$posts->title ?? "i-wedding | buat undangan digital pernikahanmu"}}
@endsection
@push('style')
    @livewireStyles
@endpush
@push('script')
    @livewireScripts
@endpush
@section('cover')
    <img src="{{ asset('imageModel/simplify/'.$posts->warna_model.'/kananAtas.png') }}">
    <div class="imgCouple">
        <img src="{{ asset('imageModel/simplify/'.$posts->warna_model.'/Couple.png') }}">
    </div>
    <div class="context">
        <p>{{ $posts->slug_nama_pria }} & {{ $posts->slug_nama_wanita }}</p>
        <p class="bold">Kepada Bapak/Ibu/Saudara/i</p>
        @if (request()->get('to'))
            <p class="bold small">{{ request()->get('to') }}</p>
        @endif
        <p>Kami mengundang Anda untuk menghadiri acara pernikahan kami.</p>
    </div>
    <div class="button">
        Buka Undangan
    </div>
@endsection
@section('container')
<audio id="audio" controls>
        <source src="{{ asset('storage/'.$posts->musik) }}">
    </audio>
    <div class="botBar">
        <a href="#home">
            <div class="homeIcon">
                <img src="{{ asset('imageModel/home.png') }}">
                <div>Home</div>
            </div>
        </a>
        <a href="#couple">
            <div class="coupleIcon">
                <img src="{{ asset('imageModel/couple.png') }}">
                <div>Couple</div> 
            </div>
        </a>
        <a href="#event">
            <div class="eventIcon">
                <img src="{{ asset('imageModel/event.png') }}">
                <div>Event</div>
            </div>
        </a>
        <a href="#wishes">
            <div class="wishesIcon">    
                <img src="{{ asset('imageModel/wishesh.png') }}">
                <div>Wishes</div>
            </div>
        </a>
        <div class="toggleAudioIcon">
            <img src="{{ asset('svg/simplify/pause.svg') }}">
            <div>Pause</div>
        </div>
    </div>
    <div class="home" id="home">
        <img class="imgRight op" src="{{ asset('imageModel/simplify/'.$posts->warna_model.'/kananAtas.png') }}">
        <div class="content-home">
            <div class="header-content">
                <img src="{{ asset('imageModel/simplify/'.$posts->warna_model.'/Couple.png') }}" alt="">
                <p>{{ $posts->slug_nama_pria }} & {{ $posts->slug_nama_wanita }}</p>
                <p>{{ $tanggal_akad}}</p>
            </div>
            <div class="countdown">
                <div class="box">
                    <p id="day"></p>
                    <span>Hari</span>
                </div>
                <div class="box">
                    <p id="hour"></p>
                    <span>Jam</span>
                </div>
                <div class="box">
                    <p id="minute"></p>
                    <span>Menit</span>
                </div>
                <div class="box">
                    <p id="second"></p>
                    <span>Detik</span>
                </div>

            </div>
        </div>
    </div>
    <img class="wave" src="{{ asset('svg/simplify/'. $posts->warna_model .'/waveUp.svg') }}">
    <img class="wave" src="{{ asset('svg/simplify/'. $posts->warna_model .'/waveDown.svg') }}">
    <div class="couple" id="couple">
        <img class="absolute left op" src="{{ asset('imageModel/simplify/'.$posts->warna_model.'/leaves.png') }}">
        <img class="absolute right op" src="{{ asset('imageModel/simplify/'.$posts->warna_model.'/leaves2.png') }}">
        <div class="header" data-aos="fade-down" data-aos-once="true">
            <p>بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيْم</p>
            <p>السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</p>  
        </div>
        <div class="context-couple"data-aos="fade-up" data-aos-once="true">
            <p>Maha suci Allah SWT yang telah menciptakan makhluk-nya dengan berpasang-pasangan.</p>
            <p>Tanpa mengurangi  rasa hormat, kami bermaksud mengundang Bapak/ibu/Saudara/i untuk hadir pada acara pernikahan
                kami.</p>
        </div>
        <div class="flex-couple">
            <div class="card-couple"data-aos="fade-right" data-aos-once="true">
                <div class="character">
                    <img src="{{ asset('imageModel/simplify/'.$posts->warna_model.'/Lalaki.png') }}">
                </div>
                <div class="content-couple">
                    <p class="name">{{ $posts->nama_pria }}</p>
                    <p>Putra dari</p>
                    <p>Bapak {{ $posts->bapa_pria }}</p>
                    <p>Ibu {{ $posts->ibu_pria }}</p>
                    @if ($posts->instagram_pria != null)
                        <img src="{{ asset('svg/simplify/instagram.svg') }}">
                        <p class="ig">{{ $posts->instagram_pria }}</p>
                    @endif
                </div>
            </div>
            <div class="card-couple" data-aos="fade-left" data-aos-once="true">
                <div class="character">
                    <img src="{{ asset('imageModel/simplify/'.$posts->warna_model.'/Wanita.png') }}">
                </div>
                <div class="content-couple">
                    <p class="name">{{ $posts->nama_wanita }}</p>
                    <p>Putra dari</p>
                    <p>Bapak {{ $posts->bapa_wanita }}</p>
                    <p>Ibu {{ $posts->ibu_wanita }}</p>
                    @if ($posts->instagram_wanita != null)
                        <img src="{{ asset('svg/simplify/instagram.svg') }}">
                        <p class="ig">{{ $posts->instagram_wanita }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <img class="wave" src="{{ asset('svg/simplify/'. $posts->warna_model .'/waveUp.svg') }}">
    <div class="surah">
        <div class="header" data-aos="fade-down" data-aos-once="true">
            وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةً ۗاِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ لِّقَوْمٍ يَّتَفَكَّرُوْنَ
        </div>
        <div class="context-surah" data-aos="fade-up" data-aos-once="true">
            <p>"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri,
                agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang.
                Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."</p>
            <p>(Q.S Ar-Rum: 21)</p>
        </div>
    </div>
    <div class="event" id="event">
        <img class="wave" src="{{ asset('svg/simplify/'. $posts->warna_model .'/waveDown.svg') }}">
        <div class="header">
            <p>Rangkaian Acara</p>
        </div>
        <div class="grid-event">
            <div class="card-event" data-aos="fade-down" data-aos-once="true">
                <div class="background">
                    <div class="icon-header">
                        <img src="{{ asset('svg/simplify/handshake.svg') }}">
                    </div>
                    <h2>Akad Nikah</h2>
                    <p class="place-header" >Bertempat di</p>
                    <p class="place">{{ $posts->tempat_akad }}</p>
                    <div class="icon">
                        <img src="{{ asset('svg/simplify/calendar.svg') }}" alt="">
                    </div>
                    <p>{{ $tanggal_akad }}</p>
                    <p>Pukul {{ $posts->jam_akad }}</p>
                </div>
            </div>
            <div class="card-event" data-aos="fade-down" data-aos-once="true">
                <div class="background">
                    <div class="icon-header">
                        <img src="{{ asset('svg/simplify/hand-love.svg') }}">
                    </div>
                    <h2>Resepsi</h2>
                    <p class="place-header" >Bertempat di</p>
                    <p class="place">{{ $posts->tempat_resepsi }}</p>
                    <div class="icon">
                        <img src="{{ asset('svg/simplify/calendar.svg') }}" alt="">
                    </div>
                    <p>{{ $tanggal_akad }}</p>
                    <p>Pukul {{ $posts->jam_resepsi }}</p>
                </div>
            </div>
            <div class="card-event" data-aos="fade-down" data-aos-once="true">
                <div class="background">
                    <div class="icon-header">
                        <img src="{{ asset('svg/simplify/location.svg') }}">
                    </div>
                    <h2>Lokasi Acara</h2>
                    {!! $posts->iframe !!}
                </div>
            </div>
        </div>
        <img class="wave" src="{{ asset('svg/simplify/'. $posts->warna_model .'/waveUp.svg') }}">
        <img class="wave" src="{{ asset('svg/simplify/'. $posts->warna_model .'/waveDown.svg') }}">
        <livewire:simplify.comment-simplify :posts="$posts->id"></livewire:simplify.comment-simplify>
    </div>  
    <img class="wave wavefooter" src="{{ asset('svg/simplify/'. $posts->warna_model .'/waveUp.svg') }}">
    <div class="doa">
        <div class="header-doa">
            Do'a Pengantin
        </div>
        <div class="middle-doa">
            <p>بَارَكَ اللهُ لَكَ وَبَارَكَ عَلَيْكَ وَجَمَعَ بَيْنَكُمَا فِى خَيْرٍ</p>
        </div>
        <div class="last-doa">
            <p>"Mudah-mudahan Allah memberkahi engkau dalam segala hal dan mempersatukan kalian berdua dalam kebaikan."</p>
            <p>Suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/ibu/saudara/i berkenan hadir untuk memberikan doa restu
                kepada kami. atas kehadiran serta doa restu, kami ucapkan terima kasih.</p>
        </div>
        <div class="footer">
            <p>{{ $posts->slug_nama_pria }} & {{ $posts->slug_nama_wanita }}</p>
        </div>
    </div>
    <div class="promote">
        <img src="{{ asset('home/logo-promote.svg') }}">
        <div>diundang</div>
    </div>

@endsection
@section('script')
<script>
    var countDownDate = new Date("{{ $posts->tanggal_akad }}").getTime();
</script>
<script src="{{asset('aos-master/dist/aos.js')}}"></script>
<script src="{{ asset('js/simplify/main.js') }}"></script>
@endsection






