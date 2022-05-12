<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel cource</title>
</head>
<body>

<div class="container">
    <div class="row">
    <ul class="nav mt-5">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('main.index')}}">Главная</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('about.index')}}">О нас</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('contacts.index')}}">Контакты</a>
  </li>
  <li class="nav-item">
    <a class="nav-link">Disabled</a>
  </li>
</ul>
    </div>
</div>
        @yield('content')
    </div>

</body>
</html>