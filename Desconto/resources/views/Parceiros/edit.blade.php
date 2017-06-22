@extends('app')

@section('content')
    <div class="container">
        <h1>Editando Parceiro</h1>

        @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
                @endforeach
        </ul>
        @endif

        {!! Form:: open(['url' => "parceiros/$parceiro->id/update"
        'method'=>'put']) !!}

        <div class="form-group">
            {!! Form:: label ('nome', 'Nome:')!!}
            {!!  Form:: text ('nome', nome, ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form:: label ('CNPJ', 'CNPJ:')!!}
            {!!  Form:: text ('CNPJ', null, ['class'=>'form-control'])!!}
        </div> 
        
        

        <div class="form-group">
            {!! Form::label('tp_inicio_ctrl', 'Data:') !!}
            {!! Form::date('tp_inicio_ctrl',
                        '2017-05-20 00:00:00',
                         ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('objetivo', 'Objetivo:') !!}
            {!! Form::number('objetivo', objetivo,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form:: submit('Criar parceiro', ['class'=>'btn btn-primary']) !!}

        </div>
        {!! Form:: close() !!}
    </div>
@endsection