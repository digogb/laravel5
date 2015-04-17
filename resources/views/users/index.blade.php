@extends('app')

@section('content')

<u> <h2 class="margem_esquerda">Lista de Usuarios</h2></u>
<br/>

@foreach ($users as $user)
	
	<user>
		<h3>
			<a class="margem_esquerda" href="{{action('UserController@show',[$user->id])}}">Nome : {{$user->name}}  - Senha : {{$user->password}}</a>
		</h3>
	</user>	


@endforeach


@stop;