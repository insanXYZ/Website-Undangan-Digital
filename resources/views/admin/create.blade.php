@extends('layouts.dashboard')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard/create.css') }}">
@endsection
@section('mainbar')
    @if (session('success'))
        <div class="alertSuccess">
            {{session('success')}}
        </div>
    @endif
<form action="/dashboard/create" method="post" enctype="multipart/form-data" id="post">
        @csrf
        <div class="mainInput grid">
            <div>
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug') }}" required>
            </div>
            @error('slug')
                {{ $message }}
            @enderror
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            </div>
            @error('title')
                {{ $message }}
            @enderror
            <div>
                <label for="musik">Lagu</label>
                <input type="file" name="musik" id="musik" required>
            </div>
            @error('musik')
                {{ $message }}
            @enderror
            <div>

            <label for="model">Model</label>
                <select name="model" id="model">
                    <option value="javva">Javva</option>
                    <option value="simplify">Simplify</option>
                    <option value="luxus">Luxus</option>
                </select>
            </div>
            <div class="warna-model">
                <label for="warna_model">Warna Model</label>
                <select name="warna_model" id="warna_model">
                    <option value="pinky">Pinky</option>
                    <option value="navue">Navue</option>
                    <option value="bream">Bream</option>
                    <option value="gremy">Gremy</option>
                </select>
            </div>
            <h3>Identitas Pria</h3>
            <div>
                <label for="nama_pria">Nama</label>
                <input type="text" name="nama_pria" id="nama_pria" value="{{ old('nama_pria') }}" required>
            </div>
            @error('nama_pria')
                {{ $message }}
            @enderror
            <div>
                <label for="slug_nama_pria">Nama sebutan</label>
                <input type="text" name="slug_nama_pria" id="slug_nama_pria" value="{{ old('slug_nama_pria') }}" required>
            </div>
            @error('slug_nama_pria')
                {{ $message }}
            @enderror
            <div>
                <label for="instagram_pria">Instagram(*opsional)</label>
                <input type="text" name="instagram_pria" id="instagram_pria" value="{{ old('instagram_pria') }}" required>
            </div>
            @error('instagram_pria')
                {{ $message }}
            @enderror
            <div>
                <label for="bapa_pria">Nama Ayah</label>
                <input type="text" name="bapa_pria" id="bapa_pria" value="{{ old('bapa_pria') }}" required>
            </div>
            @error('bapa_pria')
                {{ $message }}
            @enderror
            <div>
                <label for="ibu_pria">Nama Ibu</label>
                <input type="text" name="ibu_pria" id="ibu_pria" value="{{ old('ibu_pria') }}" required>
            </div>
            @error('ibu_pria')
                {{ $message }}
            @enderror
            <h3>Identitas Wanita</h3>
            <div>
                <label for="nama_wanita">Nama</label>
                <input type="text" name="nama_wanita" id="nama_wanita" value="{{ old('nama_wanita') }}" required>
            </div>
            @error('nama_wanita')
                {{ $message }}
            @enderror
            <div>
                <label for="slug_nama_wanita">Nama sebutan</label>
                <input type="text" name="slug_nama_wanita" id="slug_nama_wanita" value="{{ old('slug_nama_wanita') }}" required>
            </div>
            @error('slug_nama_wanita')
                {{ $message }}
            @enderror
            <div>
                <label for="instagram_wanita">Instagram(*opsional)</label>
                <input type="text" name="instagram_wanita" id="instagram_wanita" value="{{ old('instagram_wanita') }}" required>
            </div>
            @error('instagram_wanita')
                {{ $message }}
            @enderror
            <div>
                <label for="bapa_wanita">Nama Ayah</label>
                <input type="text" name="bapa_wanita" id="bapa_wanita" value="{{ old('bapa_wanita') }}" required>
            </div>
            @error('bapa_wanita')
                {{ $message }}
            @enderror
            <div>
                <label for="ibu_wanita">Nama Ibu</label>
                <input type="text" name="ibu_wanita" id="ibu_wanita" value="{{ old('ibu_wanita') }}" required>
            </div>
            @error('ibu_wanita')
                {{ $message }}
            @enderror
            <h3>Akad</h3>
            <div>
                <label for="tempat_akad">Tempat</label>
                <input type="text" name="tempat_akad" id="tempat_akad" value="{{ old('tempat_akad') }}" required>
            </div>
            @error('tempat_akad')
                {{ $message }}
            @enderror
            <div>
                <label for="tanggal_akad">Tanggal</label>
                <input type="date" name="tanggal_akad" id="tanggal_akad" value="{{ old('tanggal_akad') }}" required>
            </div>
            @error('tanggal_akad')
                {{ $message }}
            @enderror
            <div>
                <label for="jam_akad">waktu</label>
                <input type="text" name="jam_akad" id="jam_akad" value="{{ old('jam_akad') }}" required>
            </div>
            @error('jam_akad')
                {{ $message }}
            @enderror
            <h3>Resepsi</h3>
            <div>
                <label for="tempat_resepsi">Tempat</label>
                <input type="text" name="tempat_resepsi" id="tempat_resepsi" value="{{ old('tempat_resepsi') }}" required>
            </div>
            @error('tempat_resepsi')
                {{ $message }}
            @enderror
            <div>
                <label for="tanggal_resepsi">Tanggal</label>
                <input type="date" name="tanggal_resepsi" id="tanggal_resepsi" value="{{ old('tanggal_resepsi') }}" required>
            </div>
            @error('tanggal-resepsi')
                {{ $message }}
            @enderror
            <div>
                <label for="jam_resepsi">waktu</label>
                <input type="text" name="jam_resepsi" id="jam_resepsi" value="{{ old('jam_resepsi') }}" required>
            </div>
            @error('jam_resepsi')
                {{ $message }}
            @enderror
            <div>
                <label for="iframe">Link Gmaps</label>
                <textarea name="iframe" id="iframe" required></textarea>
            </div>
            <div>
            </div>
        </div>

        <div class="imageInput grid">
            <div>
                <label for="">Link Streaming Ig</label>
                <input type="text" name="linkIg" placeholder="link Ig Streaming" >
            </div>
            <div>
                <label for="imgCouple">Couple</label>
                <input type="file" name="imgCouple" id="imgcouple" required>
            </div>
            @error('imgCouple')
                {{ $message }}
            @enderror
            <div>
                <label for="cover">Cover Dekstop</label>
                <input type="file" name="coverD" id="cover" accept="image/*" required>
            </div>
            @error('coverD')
                {{ $message }}
            @enderror
            <div>
                <label for="coverM">Cover Mobile</label>
                <input type="file" name="coverM" id="coverM" accept="image/*" required>
            </div>
            @error('coverM')
                {{ $message }}
            @enderror
            <div>
                <label for="landingImageD">image landing Dekstop</label>
                <input type="file" name="landingImageD" id="landingImageD" accept="image/*" required>
            </div>
            @error('landingImageD')
                {{ $message }}
            @enderror        
            <div>
                <label for="landingImageM">image landing Mobile</label>
                <input type="file" name="landingImageM" id="landingImageM" accept="image/*" required>
            </div>
            @error('landingImageM')
                {{ $message }}
            @enderror 
            <div>
                <label for="footerImageD">footer image Dekstop</label>
                <input type="file" name="footerImageD" id="footerImageD" accept="image/*" required>
            </div>
            @error('footerImageD')
                {{ $message }}
            @enderror 
            <div>
                <label for="footerImageM">footer image Mobile</label>
                <input type="file" name="footerImageM" id="footerImageM" accept="image/*" required>
            </div>
            @error('footerImageM')
                {{ $message }}
            @enderror  
            <div>
                <label for="imgWanita">Gambar pengantin wanita</label>
                <input type="file" name="imgWanita" id="imgWanita" accept="image/*" required>
            </div>
            @error('imgWanita')
                {{ $message }}
            @enderror
            <div>
                <label for="imgPria">Gambar pengantin pria</label>
                <input type="file" name="imgPria" id="imgPria" accept="image/*" required>
            </div>
            @error('imgPria')
                {{ $message }}
            @enderror
            <div>
                <label for="slideshow">Slideshow</label>
                <input type="file" name="slideshow[]" multiple accept="image/*" required>
            </div>
            @error('slideshow')
                {{ $message }}
            @enderror
            <div>
                <label>Story 1</label>
                <div>
                    <input type="date" name="story1_date" required>
                    <input type="file" name="story1_img" accept="image/*" required>
                </div>
            </div>
            @error('story1_img')
                {{ $message }}
            @enderror
            <textarea name="story1_text"></textarea>
            @error('story1_text')
                {{ $message }}
            @enderror
            <div>
                <label>Story 2</label>
                <div>
                    <input type="date" name="story2_date" required>
                    <input type="file" name="story2_img" accept="image/*" required>
                </div>
            </div>
            @error('story2_img')
                {{ $message }}
            @enderror
            <textarea name="story2_text"></textarea>
            @error('story1_text')
                {{ $message }}
            @enderror
            <div>
                <label>Story 3</label>
                <div>
                    <input type="date" name="story3_date" required>
                    <input type="file" name="story3_img" accept="image/*" required>
                </div>
            </div>
            @error('story3_img')
                {{ $message }}
            @enderror
            <textarea name="story3_text"></textarea>
            @error('story1_text')
                {{ $message }}
            @enderror
            <div>
                <label>Donate</label>
                <select name="bank" required>
                    <option value="bca">BCA</option>
                    <option value="dana">DANA</option>
                    <option value="bni">BNI</option>
                    <option value="bjb">BJB</option>
                    <option value="bri">BRI</option>
                    <option value="bsi">BSI</option>
                    <option value="dana">DANA</option>
                </select>
            </div>
            <div>
                <label>Nomor rekening </label>
                <input type="text" name="norek" placeholder="Nomor Rekening" required>
            </div>
            <div>
                <label>Atas nama</label>
                <input type="text" name="atasNama" placeholder="Atas Nama" required>
            </div>
            <div>
                <label>Turut mengundang</label>
                <textarea name="mengundang" required></textarea>
            </div>
        </div>
        <button type="submit" class="mb">Send</button>
    </form>
@endsection
@section('script')
    <script src="{{ asset('js/admin/create.js') }}"></script>
@endsection
