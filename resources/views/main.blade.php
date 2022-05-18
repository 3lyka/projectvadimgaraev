@extends('layouts.main')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6 mt-5">
            <div>
                <h1 class="fw-bold">
                    Кухни на заказ <br>
                    от производителя
                </h1>
                <p class="mt-3">
                    Соберите кухню с индивидуальным <br>
                    дизайном на конструкторе и узнайте
                    ее стоимость
                </p>
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger b-0 rounded-0 mt-3" style="width: 200px; height: 60px;">Конструктор</button>
            </div>

        </div>
        <div class="col-sm-6 mt-5">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

</div>

<div class="container mt-5">
    <div class="row">
        <h1 class="m-5">Популярные товары</h1>
        <div class=" col-lg-3 col-sm-6 mb-3 center_card">
            <div class="card mb-2 b-0 rounded-0">
                <img src=".." class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                <div class="card-body">
                    <h5 class="card-title m-0">Название: </h5>
                    <p class="card-text m-0">Стиль: </p>
                    <p class="card-text m-0">Цвет: </p>
                    <p class="card-text m-0">Материал: </p>
                    <a href="#" class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center" style="padding: 1% 2% 1% 2%;">от ₽ &#8594;</a>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-sm-6 mb-3 center_card">
            <div class="card mb-2 b-0 rounded-0">
                <img src=".." class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                <div class="card-body">
                    <h5 class="card-title m-0">Название: </h5>
                    <p class="card-text m-0">Стиль: </p>
                    <p class="card-text m-0">Цвет: </p>
                    <p class="card-text m-0">Материал: </p>
                    <a href="#" class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center" style="padding: 1% 2% 1% 2%;">от ₽ &#8594;</a>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-sm-6 mb-3 center_card">
            <div class="card mb-2 b-0 rounded-0">
                <img src=".." class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                <div class="card-body">
                    <h5 class="card-title m-0">Название: </h5>
                    <p class="card-text m-0">Стиль: </p>
                    <p class="card-text m-0">Цвет: </p>
                    <p class="card-text m-0">Материал: </p>
                    <a href="#" class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center" style="padding: 1% 2% 1% 2%;">от ₽ &#8594;</a>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-sm-6 mb-3 center_card">
            <div class="card mb-2 b-0 rounded-0">
                <img src=".." class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                <div class="card-body">
                    <h5 class="card-title m-0">Название: </h5>
                    <p class="card-text m-0">Стиль: </p>
                    <p class="card-text m-0">Цвет: </p>
                    <p class="card-text m-0">Материал: </p>
                    <a href="#" class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center" style="padding: 1% 2% 1% 2%;">от ₽ &#8594;</a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container mb-5 p-0">
    <div class="row justify-content-center mt-5" style="background-color: #1A8AAD;">
        <div class="col-md-6 mb-0">
            <h4 class="ms-4 mt-5 text-white">
                Бесплатная <br>
                консультация <br>
                от дизайнера
            </h4>
            <p class="text-white ms-4">
                Lorem ipsum dolor sit amet, <br>
                consectetur adipiscing elit.
            </p>

        </div>



        <div class="col-md-6 p-4">
            <form class="form" id="myForm" role="form">
                <div class="mb-3">
                    <label for="inputName" class="form-label text-white">Ваше имя</label>
                    <input type="text" class="phone-field form-control border-white border-3 rounded-0 bg-info text-white" id="inputName" name="name">
                    <div class="mb-3 mt-3">
                        <label for="number" class="form-label text-white">Номер телефона</label>
                        <input type="tel" name="phone" class="phone-field form-control phone-field border-white border-3 rounded-0 bg-info text-white" id="exampleInputTel" data-rule-required="true" data-rule-minlength="10">
                    </div>

                    <button type="submit" class="btn btn-primary border-white rounded-0 text-white border-0 p-2" style="background-color:#07607C;">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>
</div>

<div class="container mt-5">
    <div class="row">
        <h1 class="m-5">Акции</h1>
        <div class=" col-lg-3 col-sm-6 mb-3 center_card">
            <div class="card mb-2 b-0 rounded-0">
                <img src=".." class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                <div class="card-body">
                    <h5 class="card-title m-0">Название: </h5>
                    <p class="card-text m-0">Стиль: </p>
                    <p class="card-text m-0">Цвет: </p>
                    <p class="card-text m-0">Материал: </p>
                    <a href="#" class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center" style="padding: 1% 2% 1% 2%;">от ₽ &#8594;</a>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-sm-6 mb-3 center_card">
            <div class="card mb-2 b-0 rounded-0">
                <img src=".." class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                <div class="card-body">
                    <h5 class="card-title m-0">Название: </h5>
                    <p class="card-text m-0">Стиль: </p>
                    <p class="card-text m-0">Цвет: </p>
                    <p class="card-text m-0">Материал: </p>
                    <a href="#" class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center" style="padding: 1% 2% 1% 2%;">от ₽ &#8594;</a>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-sm-6 mb-3 center_card">
            <div class="card mb-2 b-0 rounded-0">
                <img src=".." class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                <div class="card-body">
                    <h5 class="card-title m-0">Название: </h5>
                    <p class="card-text m-0">Стиль: </p>
                    <p class="card-text m-0">Цвет: </p>
                    <p class="card-text m-0">Материал: </p>
                    <a href="#" class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center" style="padding: 1% 2% 1% 2%;">от ₽ &#8594;</a>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-sm-6 mb-3 center_card">
            <div class="card mb-2 b-0 rounded-0">
                <img src=".." class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                <div class="card-body">
                    <h5 class="card-title m-0">Название: </h5>
                    <p class="card-text m-0">Стиль: </p>
                    <p class="card-text m-0">Цвет: </p>
                    <p class="card-text m-0">Материал: </p>
                    <a href="#" class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center" style="padding: 1% 2% 1% 2%;">от ₽ &#8594;</a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container mt-5 p-0">
    <div class="row mb-5" style="background-color: #E92962;">
        <div class="mb-3 col-sm-6">
            <h4 class="ms-4 mt-5 text-white">
                Узнайте подробности
            </h4>
            <p class="text-white ms-4">
                Закажите консультацию прямо сейчас
            </p>
            <button type="button" class="btn ms-4 text-white rounded-0 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #B71847;">Оставить заявку</button>
        </div>
        <img src="img/banner_red.png" alt="" class="mb-3 col-sm-6 img_back_none w__h__img">
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row">
        <h2>Почему мы?</h2>
        <div class="col">
            <div class="good_company d-flex justify-content-start mt-4">
                <img src="icon/icon_p/gift.svg" class="img-fluid rounded-0" alt="...">
                <p class="m-2">Скидки и подарки</p>
            </div>
            <div class="good_company d-flex justify-content-start mt-4">
                <img src="icon/icon_p/pensil.svg" class="img-fluid rounded-0" alt="...">
                <p class="m-2">Экспертные дизайнеры</p>
            </div>
            <div class="good_company d-flex justify-content-start mt-4">
                <img src="icon/icon_p/cube4.svg" class="img-fluid rounded-0" alt="...">
                <p class="m-2">Более 500 оттенков</p>
            </div>
            <div class="good_company d-flex justify-content-start mt-4">
                <img src="icon/icon_p/human.svg" class="img-fluid rounded-0" alt="...">
                <p class="m-2">Выезд дизайнера</p>
            </div>
        </div>

        <div class="col">
            <div class="good_company d-flex justify-content-start mt-4">
                <img src="icon/icon_p/cube.svg" class="img-fluid rounded-0" alt="...">
                <p class="m-2">Эскиз в объеме</p>
            </div>
            <div class="good_company d-flex justify-content-start mt-4">
                <img src="icon/icon_p/star.svg" class="img-fluid rounded-0" alt="...">
                <p class="m-2">Проверка качества</p>
            </div>
            <div class="good_company d-flex justify-content-start mt-4">
                <img src="icon/icon_p/car.svg" class="img-fluid rounded-0" alt="...">
                <p class="m-2">Доставка до 2 часов</p>
            </div>
            <div class="good_company d-flex justify-content-start mt-4">
                <img src="icon/icon_p/option.svg" class="img-fluid rounded-0" alt="...">
                <p class="m-2">Сборка под ключ</p>
            </div>
        </div>

        <img src="img/slider/slide-2.png" class="col-6 img_back_none" alt="...">
    </div>
</div>
<div class="container mb-5 p-0">
    <div class="row justify-content-center" style="background-color: #1A8AAD;">
        <div class="col-md-6 mb-0">
            <h4 class="ms-4 mt-5 text-white">
                Бесплатная <br>
                консультация <br>
                от дизайнера
            </h4>
            <p class="text-white ms-4">
                Lorem ipsum dolor sit amet, <br>
                consectetur adipiscing elit.
            </p>

        </div>

        <div class="col-md-6 p-4">
            <form class="form" id="myForm" role="form">
                <div class="mb-3">
                    <label for="inputName" class="form-label text-white">Ваше имя</label>
                    <input type="text" class="phone-field form-control border-white border-3 rounded-0 bg-info text-white" id="inputName" name="name">
                    <div class="mb-3 mt-3">
                        <label for="number" class="form-label text-white">Номер телефона</label>
                        <input type="tel" name="phone" class="phone-field form-control phone-field border-white border-3 rounded-0 bg-info text-white" id="exampleInputTel" data-rule-required="true" data-rule-minlength="10">
                        @error('phone')
                            <p class="text-danger"> Не заполнено поле Номер</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary border-white rounded-0 text-white border-0 p-2" style="background-color:#07607C;">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>
</div>
<div class="container mt-5" id="company">

    <div class="row">
        <img src="img/card_tov/card-tovar.png" class="col-sm-6 mt-4 w__h__img" alt="...">
        <div class="col-sm-6 mt-5">
            <h3>О нас</h3>
            <p class="lh-lg">
                <b class="fs-2">Кухонная фабрика «Оливковая ветвь»</b> <br>
                Это современное автоматизированное мебельное производство основанное в 2010 году. <br>
                Наша компания выполняет различные по планировке кухни: угловые, прямые, с островом и барной стойкой. Качество, экологичные материалы и индивидуальный подход - это наша тактика! Создание уютных вечеров на кухне вы смело можете доверять нашей фабрике.

            </p>

        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row">
        <h2>Процесс изготовления кухни для вас</h2>
        <div class="col-sm-6">
            <div class="good_company d-flex justify-content-start mt-4  border border-danger border-4">
                <img src="icon/1.svg" class="img-fluid rounded-0" alt="...">
                <p class="m-3">Заявка на сайте</p>
            </div>
            <div class="good_company d-flex justify-content-start mt-4 border border-danger border-4">
                <img src="icon/2.svg" class="img-fluid rounded-0" alt="...">
                <p class="m-3">Встреча с дизайнером</p>
            </div>
            <div class="good_company d-flex justify-content-start mt-4 border border-danger border-4">
                <img src="icon/3.svg" class="img-fluid rounded-0" alt="...">
                <p class="m-3">Проверка технологом и производство</p>
            </div>
            <div class="good_company d-flex justify-content-start mt-4 border border-danger border-4">
                <img src="icon/4.svg" class="img-fluid rounded-0" alt="...">
                <p class="m-3">Доставка и сборка</p>
            </div>
        </div>
        <img src="img/slider/slide-2.png" class="col-sm-6 mt-4 w__h__img" alt="...">
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="rev d-flex">
            <div class="card-body">
                <div class="good_company d-flex justify-content-start mb-2">
                    <img src="..." class="img-thumbnail border-0 rounded-0" alt="...">
                    <p class="card-title mt-4 ms-3"> <b> Константин </b><br>
                        Стаж: 10 лет
                    </p>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the card's content.</p>
                <a href="#" class="card-link link-dark text-decoration-none">Подробнее &#8594;</a>
            </div>
            <div class="card-body">
                <div class="good_company d-flex justify-content-start mb-2">
                    <img src="..." class="img-thumbnail border-0 rounded-0" alt="...">
                    <p class="card-title mt-4 ms-3"> <b> Константин </b><br>
                        Стаж: 10 лет
                    </p>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the card's content.</p>
                <a href="#" class="card-link link-dark text-decoration-none">Подробнее &#8594;</a>
            </div>
            <div class="card-body">
                <div class="good_company d-flex justify-content-start mb-2">
                    <img src="..." class="img-thumbnail border-0 rounded-0" alt="...">
                    <p class="card-title mt-4 ms-3"> <b> Константин </b><br>
                        Стаж: 10 лет
                    </p>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the card's content.</p>
                <a href="#" class="card-link link-dark text-decoration-none">Подробнее &#8594;</a>
            </div>
            <div class="card-body">
                <div class="good_company d-flex justify-content-start mb-2">
                    <img src="..." class="img-thumbnail border-0 rounded-0" alt="...">
                    <p class="card-title mt-4 ms-3"> <b> Константин </b><br>
                        Стаж: 10 лет
                    </p>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the card's content.</p>
                <a href="#" class="card-link link-dark text-decoration-none">Подробнее &#8594;</a>
            </div>
        </div>

    </div>
</div>
@endsection