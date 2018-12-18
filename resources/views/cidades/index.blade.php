
@extends('app')

@section('conteudo')

<div class="container">
    <a href="{{ route('cidades.create') }}" class="btn btn-block btn-success mt-4 mb-5">Criar nova cidade</a>
    <table class="table table-inverse table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CIDADE</th>
            <th scope="col">ESTADO</th>
            <th scope="col">POPULAÇÃO</th>
            <th scope="col">CEP</th>
            <th scope="col">OPÇÕES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cidades as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->nome}}</td>
                <td>{{$c->estado->nome}}</td>
                <td>{{$c->populacao}}</td>
                <td>{{$c->cep}}</td>
                <td>
                    <a href="{{ route('cidades.edit', ['id'=>$c->id]) }}" class="btn-sm btn-info">Edit</a>
                    <a href="{{ route('cidades.destroy', ['id'=>$c->id]) }}" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endsection
