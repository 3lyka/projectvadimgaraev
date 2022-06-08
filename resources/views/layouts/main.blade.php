<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<title>Оливковая ветвь</title>
</head>

<body>
	<header class="fixed-top bg-light p-0 shadow" style="margin-bottom:10% ;">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container-fluid">
						<a class="navbar-brand fw-bold text-info" href="{{ route('main.index')}}">Оливковая ветвь</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarText">
							<ul class="navbar-nav m-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link active fw-bold text-info" aria-current="page" href="{{ route('main.index')}}">Главная</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route('post.index')}}">Каталог</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route('contacts.index')}}">Контакты</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route('buy.index')}}">Оплата</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route('info.index')}}">Полезная информация</a>
								</li>
							</ul>
							<span class="navbar-text fw-bold">
								8 812 317 22 42
							</span>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>
	@yield('content')
	<div style="background-color: #07607C;">
		<footer class="mt-5 mb-0">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-6">
						<ul class="list-unstyled mt-5 mb-5">
							<li><a href="{{ route('buy.index')}}" class="nav-link text-white">Оплата</a></li>
							<li><a href="#" class="nav-link text-white">Акции</a></li>
							<li><a href="#" class="nav-link text-white">О компании</a></li>
							<li><a href="{{ route('contacts.index')}}" class="nav-link text-white">Контакты</a></li>
							<li><a href="{{ route('info.index')}}" class="nav-link text-white">Полезная информация</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-6">
						<ul class="list-unstyled mt-5 mb-5">
							<li><a href="{{ route('post.index')}}" class="nav-link text-white">Кухни</a></li>
							<li><a href="#" class="nav-link text-white">Техника</a></li>
							<li><a href="#" class="nav-link text-white">Шкафы купе</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-6">
						<ul class="list-unstyled mt-5 mb-5">
							<li class="text-white">Юридический и фактический <br> адрес: 194100 г. Санкт-Петербург , <br> Лесной проспект д. 63 лит А, кабинет 410
							</li> <br>
							<li class="text-white">
								ИНН/КПП: 7802886450/780201001 <br>
								ОГРН: 1207800162096 <br>
								Банк: АО «Тинькофф»
								БИК: 044525974</li>
						</ul>
					</div>
					<div class="col-md-3 col-6">
						<ul class="list-unstyled mt-5 mb-5">
							<li><a href="#" class="nav-link text-white"></a>
								<button type="button" class="btn text-white rounded-0 bg-info mb-2 p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Оставить заявку</button>
							</li>
							<li><a href="#" class="nav-link text-white"><b> <svg class="mx-2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 16 16" style=" fill:#ffffff;">
											<path d="M 7.5 1 C 3.917969 1 1 3.917969 1 7.5 C 1 11.082031 3.917969 14 7.5 14 C 11.082031 14 14 11.082031 14 7.5 C 14 3.917969 11.082031 1 7.5 1 Z M 7.5 2 C 10.542969 2 13 4.457031 13 7.5 C 13 10.542969 10.542969 13 7.5 13 C 4.457031 13 2 10.542969 2 7.5 C 2 4.457031 4.457031 2 7.5 2 Z M 7 3 L 7 8 L 10 8 L 10 7 L 8 7 L 8 3 Z"></path>
										</svg> 9:00-21:00</b></a>
							</li>
							<li><a href="#" class="nav-link text-white"><b> <img src="icon/phone.svg" alt="" class="mx-2"> 8 812 317 22 42</b></a>
							</li>
							<li><a href="#" class="nav-link text-white"><b> <img src="icon/mail.svg" alt="" class="mx-2"> info@olivfabrika.ru</b></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<script src="{{ asset('js/app.js') }}"></script>
			<div class="text-white ms-2 p-3">
				<script>
					function y2k(number) {
						return (number < 1000) ? number + 1900 : number;
					}
					var today = new Date();
					var year = y2k(today.getYear());
					document.write('Digital Agency IMOS © ' + year + ' Devoloper Гараев Вадим');
				</script>
			</div>
		</footer>
	</div>
</body>

</html>