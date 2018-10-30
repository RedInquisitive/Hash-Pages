@extends('theme.base')
@section('title', 'Login')
@section('content')



	<div class="row">
		<div class="col-md-auto">
			<img class="img-thumbnail img-fluid profile" src="{{ url($user->getPicture() ? $user->getPicturePublic() : "/img/default.jpg") }}" alt="Profile Picture" title="{{ $user->getName() }}">
		</div>
		<div class="col">
			<h1>
				{{$user->getUsername()}}
				<small class="text-muted">{{$user->getName()}}</small>
			</h1>
			@markdown($user->getBio())
		</div>
	</div>

@endsection
