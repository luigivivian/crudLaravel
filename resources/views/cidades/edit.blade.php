@extends('app')
@section('conteudo')
    <div class="container">
        <h1 class="text-center">Editar Cidade</h1>
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
            {!! Form::open(['route' => ["cidades.update", $c->id], 'method'=>'put']) !!}
                <div class="form-group">
                    {!! Form::label('estado_id', 'Estado:') !!}
                    {!! Form::select('estado_id',
                        \App\Estado::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::text('nome', $c->nome, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('cep', 'Cep:') !!}
                    {!! Form::text('cep',  $c->cep, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('populacao', 'População:') !!}
                    {!! Form::number('populacao',  $c->populacao, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Editar Cidade', ['class' => 'btn btn-success']) !!}
                </div>

                {!! Form::close() !!}
        </div>
    </div>


@endsection