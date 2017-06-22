@extends('app')


@section('content')
    <div class="container">
        <h1>Pessoas</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($pessoas as $hab)
                <tr>
                    <td>{{ $hab->nome }}</td>
                    <td>{{ $hab->cpf }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection