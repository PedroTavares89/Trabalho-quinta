@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Produto</h1>

        @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
                @endforeach
        </ul>
        @endif

        {!! Form:: open(['url' => 'produtos/store']) !!}

        <div class="form-group">
            {!! Form:: label ('nome_cupom', 'Nome Cupom:')!!}
            {!!  Form:: text ('nome_cupom', null, ['class'=>'form-control'])!!}
        </div>

 

        <div class="form-group">
            {!! Form::label('tp_inicio_ctrl', 'Data:') !!}
            {!! Form::date('tp_inicio_ctrl',
                        '2017-05-20 00:00:00',
                         ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dt_fim_ctrl', 'Data:') !!}
            {!! Form::date('dt_fim_ctrl',
                        '2017-05-20 00:00:00',
                         ['class'=>'form-control']) !!}
        </div>
        
               <div class="form-group">
            {!! Form::label('objetivo', 'Objetivo:') !!}
            {!! Form::number('objetivo', null,['class' =>'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form:: submit('Criar produto', ['class'=>'btn btn-primary']) !!}

        </div>
        {!! Form:: close() !!}
    </div>
@endsection