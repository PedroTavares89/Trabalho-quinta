@extends('app')


@section('content')
    <div class="container">
        <h1>Produtos</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome Cupom</th>
                <th>Deta Inicio</th>
                <th>Data Final</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($produts as $hab)
                <tr>
                    <td>{{ $hab->nome_cupom }}</td>
                    <td>{{ $hab->dt_inicio_ctrl }}</td>
                    <td>{{ $hab->dt_fim_ctrl }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection