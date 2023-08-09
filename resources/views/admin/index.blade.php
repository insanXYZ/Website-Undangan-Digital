@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="{{asset('css/dashboard/index.css')}}">
@endsection
@section('mainbar')
    <div class="card">
        <div class="number">
            {{$posts}}
        </div>  
        <div class="labelCard">
            Postingan
        </div>
    </div>
    <div class="card">
        <div class="number">
            {{$comments}}
        </div>
        <div class="labelCard">
            Komentar
        </div>
    </div>
@endsection