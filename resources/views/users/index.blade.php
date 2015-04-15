@extends('app');

@section('content');

<h2>Usuarios</h2>
<br/>	

@foreach ($users as $user)
	
	<user>
		<h3> 
			<a href="{{action('UserController@show',[$user->id])}}">Nome : {{$user->name}}  - Senha : {{$user->password}}</a>
		</h3>
	</user>	


@endforeach


@stop;