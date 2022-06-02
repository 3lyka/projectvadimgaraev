@extends('layouts.main')
@section('content')
<div class="posts" style="margin-top:7% ;">

    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active "><a class="text-decoration-none fw-light text-secondary" href="{{ route('main.index')}}">Главная</a></li>
                    <li class="breadcrumb-item active "><a class="text-decoration-none fw-light text-secondary" href="{{ route('post.index')}}">Каталог</a></li>
                    <li class="breadcrumb-item disabled">{{$post->title}}</li>

                </ol>
            </nav>
            <h1>{{$post->title}}</h1>

            <div class="col-sm-6 mt-4">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-6 mt-5">
                <p>Blabla</p>
                <div class="card-body lh-lg">
                    <p class="card-text m-0">Стиль: </p>
                    <p class="card-text m-0">Цвет: </p>
                    <p class="card-text m-0">Материал: </p>
                    <p class="card-text m-0">Наполнение: {{$post->content}}</p>
                    <p class="card-text m-0"><b>от ₽</b></p>


                    <a href="#" class="btn btn-primary btn-danger b-0 rounded-0 mt-5 d-flex justify-content-center" style="padding: 1% 1% 1% 1%;">Рассчитать стоимость &#8594;</a>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection