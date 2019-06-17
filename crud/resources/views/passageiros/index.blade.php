@extends('passageiros.templates.master')

@section('content')

    <h2>Cadastro de passageiro</h2>
    <hr/>
    <a class="btn btn-primary" href="passageiros/create" style="margin-bottom: 15px;">Novo Registro</a>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    @if(Session::has('message'))
        <div class="alert-custom">
            <p>{!! Session('message') !!}</p>
        </div>
    @endif()

    <table class="table table-bordered">
        <thead>
        <tr>

            <th style="padding-left: 15px;">Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>CEP</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Número</th>
            <th>IBGE</th>
            <th width="140px;">Ação</th>
        </tr>
        </thead>
        <tbody>
    @foreach($passageiros as $passageiro)
        <tr>
            <td style="padding-left: 15px;">{!! $passageiro->id !!}</td>
            <td>{!! $passageiro->nome !!}</td>
            <td>{!! $passageiro->cpf !!}</td>
            <td>{!! $passageiro->telefone !!}</td>
            <td>{!! $passageiro->cep !!}</td>
            <td>{!! $passageiro->rua !!}</td>
            <td>{!! $passageiro->bairro !!}</td>
            <td>{!! $passageiro->cidade !!}</td>
            <td>{!! $passageiro->estado !!}</td>
            <td>{!! $passageiro->numero !!}</td>
            <td>{!! $passageiro->ibge !!}</td>
            <td>
                <a class="btn btn-success btn-sm" href="passageiros/{!! '' . $passageiro->id . '/edit' !!}">Editar</a>

                {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/passageiros/' . $passageiro->id]) !!}
                {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach


        </tbody>
    </table>

@endsection()

