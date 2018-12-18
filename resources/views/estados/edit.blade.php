@extends('app')
@section('conteudo')
    <div class="container">
        <h1 class="text-center">Editar Estado: {{$e->nome}}</h1>
        <div class="form">
            @if($errors->any())
                <div>
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::open(['route' => ["estados.update", $e->id], 'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', $e->nome, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('regiao', 'Região:') !!}
                {!! Form::text('regiao', $e->regiao, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Editar Estado', ['class' => 'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>


@endsection