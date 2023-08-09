@extends('layouts.dashboard')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard/create.css') }}">
@endsection
@section('mainbar')
<form action="/dashboard/manage/{{$posts->slug}}/edit" method="post" id="post">
        @method('patch')
        @csrf
        <div class="mainInput grid">
            <div>
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug',$posts->slug) }}">
            </div>
            @error('slug')
                {{ $message }}
            @enderror
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title',$posts->title) }}">
            </div>
            @error('title')
                {{ $message }}
            @enderror
            <div>
                <label for="model">Model</label>
                <select name="model" id="model">
                    <option value="{{$posts->model}}" selected>{{$posts->model}}</option>
                    <option value="javva">Javva</option>
                    <option value="simplify">Simplify</option>
                    <option value="luxus">Luxus</option>
                </select>
            </div>
            <div class="warna-model">
                <label for="warna_model">Warna Model</label>
                <select name="warna_model" id="warna_model">
                    <option value="{{$posts->warna_model}}" selected>{{$posts->warna_model}}</option>
                    <option value="pinky">Pinky</option>
                    <option value="navue">Navue</option>
                    <option value="bream">Bream</option>
                    <option value="gremy">Gremy</option>
                </select>
            </div>
            <h3>Identitas Pria</h3>
            <div>
                <label for="nama_pria">Nama</label>
                <input type="text" name="nama_pria" id="nama_pria" value="{{ old('nama_pria',$posts->nama_pria) }}">
            </div>
            @error('nama_pria')
                {{ $message }}
            @enderror
            <div>
                <label for="slug_nama_pria">Nama sebutan</label>
                <input type="text" name="slug_nama_pria" id="slug_nama_pria" value="{{ old('slug_nama_pria',$posts->slug_nama_pria) }}">
            </div>
            @error('slug_nama_pria')
                {{ $message }}
            @enderror
            <div>
                <label for="instagram_pria">Instagram(*opsional)</label>
                <input type="text" name="instagram_pria" id="instagram_pria" value="{{ old('instagram_pria', $posts->instagram_pria) }}">
            </div>
            @error('instagram_pria')
                {{ $message }}
            @enderror
            <div>
                <label for="bapa_pria">Nama Ayah</label>
                <input type="text" name="bapa_pria" id="bapa_pria" value="{{ old('bapa_pria',$posts->bapa_pria) }}">
            </div>
            @error('bapa_pria')
                {{ $message }}
            @enderror
            <div>
                <label for="ibu_pria">Nama Ibu</label>
                <input type="text" name="ibu_pria" id="ibu_pria" value="{{ old('ibu_pria',$posts->ibu_pria) }}">
            </div>
            @error('ibu_pria')
                {{ $message }}
            @enderror
            <h3>Identitas Wanita</h3>
            <div>
                <label for="nama_wanita">Nama</label>
                <input type="text" name="nama_wanita" id="nama_wanita" value="{{ old('nama_wanita',$posts->nama_wanita) }}">
            </div>
            @error('nama_wanita')
                {{ $message }}
            @enderror
            <div>
                <label for="slug_nama_wanita">Nama sebutan</label>
                <input type="text" name="slug_nama_wanita" id="slug_nama_wanita" value="{{ old('slug_nama_wanita',$posts->slug_nama_wanita) }}">
            </div>
            @error('slug_nama_wanita')
                {{ $message }}
            @enderror
            <div>
                <label for="instagram_wanita">Instagram(*opsional)</label>
                <input type="text" name="instagram_wanita" id="instagram_wanita" value="{{ old('instagram_wanita' , $posts->instagram_wanita) }}">
            </div>
            @error('instagram_wanita')
                {{ $message }}
            @enderror
            <div>
                <label for="bapa_wanita">Nama Ayah</label>
                <input type="text" name="bapa_wanita" id="bapa_wanita" value="{{ old('bapa_wanita',$posts->bapa_wanita) }}">
            </div>
            @error('bapa_wanita')
                {{ $message }}
            @enderror
            <div>
                <label for="ibu_wanita">Nama Ibu</label>
                <input type="text" name="ibu_wanita" id="ibu_wanita" value="{{ old('ibu_wanita', $posts->ibu_wanita) }}">
            </div>
            @error('ibu_wanita')
                {{ $message }}
            @enderror
            <h3>Akad</h3>
            <div>
                <label for="tempat_akad">Tempat</label>
                <input type="text" name="tempat_akad" id="tempat_akad" value="{{ old('tempat_akad' , $posts->tempat_akad) }}">
            </div>
            @error('tempat_akad')
                {{ $message }}
            @enderror
            <div>
                <label for="tanggal_akad">Tanggal</label>
                <input type="date" name="tanggal_akad" id="tanggal_akad" value="{{ old('tanggal_akad',$posts->tanggal_akad) }}">
            </div>
            @error('tanggal_akad')
                {{ $message }}
            @enderror
            <div>
                <label for="jam_akad">waktu</label>
                <input type="text" name="jam_akad" id="jam_akad" value="{{ old('jam_akad', $posts->jam_akad) }}">
            </div>
            @error('jam_akad')
                {{ $message }}
            @enderror
            <h3>Resepsi</h3>
            <div>
                <label for="tempat_resepsi">Tempat</label>
                <input type="text" name="tempat_resepsi" id="tempat_resepsi" value="{{ old('tempat_resepsi' , $posts->tempat_resepsi) }}">
            </div>
            @error('tempat_resepsi')
                {{ $message }}
            @enderror
            <div>
                <label for="tanggal_resepsi">Tanggal</label>
                <input type="date" name="tanggal_resepsi" id="tanggal_resepsi" value="{{ old('tanggal_resepsi' , $posts->tanggal_resepsi) }}">
            </div>
            @error('tanggal-resepsi')
                {{ $message }}
            @enderror
            <div>
                <label for="jam_resepsi">waktu</label>
                <input type="text" name="jam_resepsi" id="jam_resepsi" value="{{ old('jam_resepsi' , $posts->jam_resepsi) }}">
            </div>
            @error('jam_resepsi')
                {{ $message }}
            @enderror
            <div>
                <label for="iframe">Link Gmaps</label>
                <textarea name="iframe" id="iframe">{{$posts->iframe}}</textarea>
            </div>
            <div>
            </div>
        </div>
        <button type="submit" class="mb">Send</button>
    </form>
@endsection
