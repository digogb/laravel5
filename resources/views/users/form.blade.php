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
    {!! Form::input('date','created_at',date('Y-m-d'),['class' => 'form-control'])!!}
</div>

<br/>
<div class="form-group; margem_esquerda">
    {!! Form::submit($submitButtonText,null,['class' => 'btn btn-primary form-control']) !!}
</div>
