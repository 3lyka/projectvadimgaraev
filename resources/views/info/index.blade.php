@extends('layouts.main')
@section('content')

<div class="container" style="margin-top:7% ;">
	<div class="row">
		@foreach ($infos as $info)
		<div class="col-lg-3 col-sm-6 card border-0 rounded-0" style="width: 18rem;">
			<img src="..." class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">{{ $info->title  }}</h5>
				<p class="card-text">{{ $info->description  }}</p>
				<a href="{{ route('info.show', $info->id) }}" class="btn btn-primary">Подробнее</a>
			</div>
		</div>
		@endforeach

		<div class="mt-5 pagination justify-content-center">
			{{ $infos->links()   }}
		</div>
	</div>
</div>

@endsection