    @extends('app')

    @section('content')

        <u><h2 class="margem_esquerda">Criar um novo usuario</h2></u>

        </br>

        {!! Form::open(['url' => 'user'] ); !!}

            <div class="form-group; margem_esquerda">
                {!! Form::label('name','Usuario:')!!}
                {!! Form::text('name',null,['class' => 'form-control']) !!}
            </div>

            <br/>
            <div class="form-group; margem_esquerda">
                {!! Form::label('password','Senha:')!!}
                {!! Form::text('password',null,['class' => 'form-control']) !!}
            </div>

            <br/>
            <div class="form-group; margem_esquerda">
                {!! Form::label('created_at','Criado em:')!!}
                {!! Form::text('created_at',\Carbon\Carbon::now(),['class' => 'form-control'])!!}
            </div>

            <br/>
            <div class="form-group; margem_esquerda">
                {!! Form::submit('Adicionar Usuario',null,['class' => 'btn btn-primary form-control']) !!}
            </div>

        {!! Form::close(); !!}

    @stop;