@extends('app')


@section('content')
    <div class="container">
        <h1>Parceiros</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($parceiros as $hab)
                <tr>
                    <td>{{ $hab->nome }}</td>
                    <td>{{ $hab->CPNJ }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection