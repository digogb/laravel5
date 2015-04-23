@extends('app'))

@section('content')

    <u><h2 class="margem_esquerda">Alterar um usuario</h2></u>

    </br>

    {!! Form::model($user,['method'=>'PATCH','action'=>['UserController@update',$user->id]]);!!}

    @include('users.form',['submitButtonText' => 'Alterar Usuario'])

    {!! Form::close(); !!}

    @include('errors.list')

@stop
