@extends('app')


@section('content')
    <div class="container">
        <h1>Descontos</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Tipo</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($descontos as $hab)
                <tr>
                    <td>{{ $hab->nome }}</td>
                    <td>{{ $hab->descricao }}</td>
                    <td>{{ $hab->tp_desconto }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection