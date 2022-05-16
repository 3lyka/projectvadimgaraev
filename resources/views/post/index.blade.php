@extends('layouts.main')
@section('content')
<div class="posts" style="margin-top:7% ;">
    
    <div class="container">
        <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active "><a class="text-decoration-none fw-light text-secondary" href="{{ route('main.index')}}">Главная</a></li>
                <li class="breadcrumb-item active "><a class="text-decoration-none fw-light text-secondary" href="{{ route('post.index')}}">Каталог</a></li>
            </ol>
        </nav>
            <h1 class="mb-5">Каталог</h1>
        @foreach ($posts as $post)
            <div class=" col-lg-3 col-sm-6 mb-3 center_card">
                <div class="card mb-2 b-0 rounded-0">
                    <img src=".." class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                    <div class="card-body">
                        <h5 class="card-title m-0">Название: {{$post->title}}</h5>
                        <p class="card-text m-0">Стиль: {{$post->style}}</p>
                        <p class="card-text m-0">Цвет: {{$post->color}}</p>
                        <p class="card-text m-0">Материал: {{$post->material}}</p>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center" style="padding: 1% 2% 1% 2%;">от {{$post->price}} ₽ &#8594;</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</div>
@endsection