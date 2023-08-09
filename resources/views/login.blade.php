@extends('layouts.card')
@section('css')
<link rel="stylesheet" href="{{ asset('css/body.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('container')
    <form action="/area51" method="post">
        @csrf
        <input type="text" name="email" required>
        <input type="password" name="password" required>
        <button type="submit">Send</button>
    </form>
@endsection