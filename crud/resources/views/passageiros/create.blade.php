@extends('passageiros.templates.master')

@section('content')

    <h2>Novo Cadastro</h2>
    <hr/>
    <a class="btn btn-primary" href="/passageiros" style="margin-bottom: 15px;">Página inicial</a>

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

    <p>Digite o endereço completo ou busque pelo cep no final da página</p>

    <div class="form-group">
        {!! Form::label('cep', 'CEP'); !!}
        {!! Form::text('cep', null, ['placeholder' => 'Enter cep', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('rua', 'Rua'); !!}
        {!! Form::text('rua', null, ['placeholder' => 'Enter rua', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('bairro', 'Bairro'); !!}
        {!! Form::text('bairro', null, ['placeholder' => 'Enter bairro', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('cidade', 'Cidade'); !!}
        {!! Form::text('cidade', null, ['placeholder' => 'Enter cidade', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('estado', 'Estado'); !!}
        {!! Form::text('estado', null, ['placeholder' => 'Enter estado', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('ibge', 'IBGE'); !!}
        {!! Form::text('ibge', null, ['placeholder' => 'Enter ibge', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('numero', 'Numero'); !!}
        {!! Form::text('numero', null, ['placeholder' => 'Enter numero', 'class' => 'form-control']); !!}
    </div>

    @extends('passageiros.templates.partials.cep')

    {!! Form::submit('Registrar', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}