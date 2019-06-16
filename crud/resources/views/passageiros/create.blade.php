@extends('passageiros.templates.master')

@section('content')

    <h2>Novo Cadastro</h2>
    <hr/>
    <a class="btn btn-primary" href="/passageiros" style="margin-bottom: 15px;">Dados Pessoais</a>

    {!! Form::open(['id' => 'dataForm', 'url' => '/passageiros']) !!}
    <div class="form-group">
        {!! Form::label('nome', 'Nome'); !!}
        {!! Form::text('nome', null, ['placeholder' => 'Enter nome', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('cpf', 'CPF') !!}
        {!! Form::text('cpf', null, ['placeholder' => 'Enter cpf', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('telefone', 'Telefone'); !!}
        {!! Form::text('telefone', null, ['placeholder' => 'Enter telefone', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('rua', 'Rua'); !!}
        {!! Form::text('rua', null, ['placeholder' => 'Enter rua', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('numero', 'Numero'); !!}
        {!! Form::text('numero', null, ['placeholder' => 'Enter numero', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('cep', 'CEP'); !!}
        {!! Form::text('cep', null, ['placeholder' => 'Enter cep', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('bairro', 'Bairro'); !!}
        {!! Form::text('bairro', null, ['placeholder' => 'Enter bairro', 'class' => 'form-control']); !!}
    </div>

    {!! Form::submit('Registrar', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()