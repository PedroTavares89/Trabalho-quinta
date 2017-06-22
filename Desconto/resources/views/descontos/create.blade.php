@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Desconto</h1>

        @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
                @endforeach
        </ul>
        @endif

        {!! Form:: open(['url' => 'descontos/store']) !!}

        <div class="form-group">
            {!! Form:: label ('nome', 'Nome:')!!}
            {!!  Form:: text ('nome', null, ['class'=>'form-control'])!!}
        </div>

        <div>
            {!! Form:: label ('descricao', 'Descrição:')!!}
            {!!  Form:: text ('descricao', null, ['class'=>'form-control'])!!}

        </div>

        <div class="form-group">
            {!! Form::label('tp_desconto', 'Tipo:') !!}
            {!! Form::select('tp_desconto',
                        array('P' => 'Percentual', 'D' => 'Dinheiro'),
                         'P',
                         ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('objetivo', 'Objetivo:') !!}
            {!! Form::number('objetivo', null,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tp_inicio_ctrl', 'Data:') !!}
            {!! Form::date('tp_inicio_ctrl',
                        '2017-05-20 00:00:00',
                         ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form:: submit('Criar desconto', ['class'=>'btn btn-primary']) !!}

        </div>
        {!! Form:: close() !!}
    </div>
@endsection