@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="{{asset('css/dashboard/manage.css')}}">
@endsection
@section('mainbar')
    <div class="search">
        <form action="/dashboard/manage" method="GET">
            <input type="text" name="search" placeholder="Masukkan slug">
            <button type="submit"><img src="{{asset('svg/other/search.svg')}}"></button>
        </form>
    </div>
    @if (session('success'))
        <div class="alertSuccess">
            {{session('success')}}
        </div>
    @endif
    <table cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Slug</th>
                <th>Model</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
                <tr>
                    <th>{{$post->id}}</th>
                    <th>{{$post->slug}}</th>
                    <th>{{$post->model}} | {{$post->warna_model}}</th>
                    <th class="action">
                        <a href="/{{$post->slug}}" class="view" target="_blank"><img src="{{asset('svg/other/view.svg')}}"></a>
                        <a href="/dashboard/manage/{{$post->slug}}/edit" class="edit"><img src="{{asset('svg/other/edit.svg')}}"></a>
                        <form action="/dashboard/manage/{{$post->slug}}" method="POST">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Yakin dek?')"><img src="{{asset('svg/other/delete.svg')}}"></button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection