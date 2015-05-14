@extends('app')

@section('content')

<u> <h2 class="margem_esquerda">Lista de Usuarios - Certificado</h2></u>
<br/>

@foreach ($users as $user)
	
	<user>
		<h3>
			<a class="margem_esquerda" href="{{action('CertificateController@show',[$user->id])}}">Nome : {{$user->name}}</a>
		</h3>
	</user>	


@endforeach


@stop;