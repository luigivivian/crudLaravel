@extends('app')
@section('conteudo')
    <div class="container">
        <h1 class="text-center">Novo Estado</h1>
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
            {!! Form::open(['route' => 'estados.store']) !!}
                <div class="form-group">
                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('regiao', 'Região:') !!}
                    {!! Form::text('regiao', null, ['class' => 'form-control']) !!}
                </div>


            <div class="form-group">
                {!! Form::submit('Criar Estado', ['class' => 'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>


@endsection