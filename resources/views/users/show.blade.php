@extends('app');

@section('content');

<u><h2 class="margem_esquerda">Dados do Usuario:</h2></u>
<br/>	
<user>
   <h3 class="campos">Nome: {{$user->name}}</h3>
</user>

<user>
    <h3 class="campos">Senha: {{$user->password}}</h3>
</user>

<user>
    <h3 class="campos">Criado em: {{$user->created_at->format('d-m-Y')}}</h3>
</user>


@stop;