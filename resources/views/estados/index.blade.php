
@extends('app')

@section('conteudo')

<div class="container">
    <a href="{{ route('estados.create') }}" class="btn btn-block btn-success mt-4 mb-5">Criar novo Estado</a>
    <table class="table table-inverse table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">REGIÃO</th>
            <th scope="col">OPÇÕES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($estados as $e)
            <tr>
                <td>{{$e->id}}</td>
                <td>{{$e->nome}}</td>
                <td>{{$e->regiao}}</td>

                <td>
                    <a href="{{ route('estados.edit', ['id'=>$e->id]) }}" class="btn-sm btn-info">Edit</a>
                    <a href="{{ route('estados.destroy', ['id'=>$e->id]) }}" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endsection
