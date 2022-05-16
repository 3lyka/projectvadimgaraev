@extends('layouts.main') //шаблон
@section('content') //секция контент

<div class="container lg-lh mt-5 pt-5">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active "><a class="text-decoration-none fw-light text-secondary" href="{{ route('main.index')}}">Главная</a></li>
                <li class="breadcrumb-item disabled"><a class="text-decoration-none fw-light text-secondary " href="{{ route('contacts.index')}}">Контакты</a></li>
            </ol>
        </nav>
        <h1>Контакты</h1>
        <div class="container mt-5 p-0">
            <div class="row">
                <div class="col-md-6 col-sm-12 p-0">
                    <div class="top-adress bg-info m-0 p-3">
                        <ul class="list-unstyled p-3 m-0">
                            <li class="text-white fw-bold">Юридический и фактический <br> адрес: 194100 г. Санкт-Петербург , <br> Лесной проспект д. 63 лит А, кабинет 410
                            </li> <br>
                            <li class="text-white">
                                ИНН/КПП: 7802886450/780201001 <br>
                                ОГРН: 1207800162096 <br>
                                Банк: АО «Тинькофф»
                                БИК: 044525974</li>
                        </ul>
                    </div>
                    <div class="bottom-adress m-0 p-3" style="background-color: #07607C;">
                        <ul class="list-unstyled ps-3 mt-3">
                            <li><a href="#" class="nav-link text-white"><b> <svg class="mx-2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 16 16" style=" fill:#ffffff;">
                                            <path d="M 7.5 1 C 3.917969 1 1 3.917969 1 7.5 C 1 11.082031 3.917969 14 7.5 14 C 11.082031 14 14 11.082031 14 7.5 C 14 3.917969 11.082031 1 7.5 1 Z M 7.5 2 C 10.542969 2 13 4.457031 13 7.5 C 13 10.542969 10.542969 13 7.5 13 C 4.457031 13 2 10.542969 2 7.5 C 2 4.457031 4.457031 2 7.5 2 Z M 7 3 L 7 8 L 10 8 L 10 7 L 8 7 L 8 3 Z"></path>
                                        </svg> 9:00-21:00</b></a>
                            </li>
                            <li><a href="#" class="nav-link text-white"><b> <img src="/icon/phone.svg" alt="" class="mx-2"> 8 812 317 22 42</b></a>
                            </li>
                            <li><a href="#" class="nav-link text-white"><b> <img src="/icon/mail.svg" alt="" class="mx-2"> info@olivfabrika.ru</b></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 ms-0 p-0">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A160a2ddac94398742b6e28846d678d6a56a341f631142af18cd559d51e5fd6b4&amp;lang=ru_RU&amp;scroll=false"></script>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mb-5 p-0 mt-5">
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
                    </div>

                    <button type="submit" class="btn btn-primary border-white rounded-0 text-white border-0 p-2" style="background-color:#07607C;">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>

</div>

@endsection