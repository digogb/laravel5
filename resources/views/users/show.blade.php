@extends('app');

@section('content');

<h2>Usuario: {{ $user->name }}</h2>
<br/>	

<user>
	Senha: {{ $user->password }}
</user>	

@stop;