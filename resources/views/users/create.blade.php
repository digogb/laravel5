    @extends('app')

    @section('content')

        <u><h2 class="margem_esquerda">Criar um novo usuario</h2></u>

        </br>

        {!! Form::open(['url' => 'user'] ); !!}

        @include('users.form',['submitButtonText' => 'Adicionar Usuario'])

        {!! Form::close(); !!}

        @include('errors.list')

    @stop;