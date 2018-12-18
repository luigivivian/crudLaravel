@extends('app')
@section('conteudo')
    <div class="container">
        <h1 class="text-center">Nova Cidade</h1>
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
            {!! Form::open(['route' => 'cidades.store']) !!}
                <div class="form-group">
                    {!! Form::label('estado_id', 'Estado:') !!}
                    {!! Form::select('estado_id',
                        \App\Estado::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('cep', 'Cep:') !!}
                    {!! Form::text('cep', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('populacao', 'População:') !!}
                    {!! Form::number('populacao', null, ['class' => 'form-control']) !!}
                </div>

            <div class="form-group">
                {!! Form::submit('Criar Cidade', ['class' => 'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>


@endsection