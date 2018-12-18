<?php

namespace App\Http\Controllers;
use App\Cidade;
use App\Http\Requests\CidadeRequest;
use Illuminate\Http\Request;

class CidadesController extends Controller
{
    public function index(){
        $titulo = "Cidades";
        $cidades = Cidade::all();
        return view('cidades.index', ['cidades' => $cidades, 'titulo'=>$titulo]);
    }

    //abrindo formulario
    public function create(){
        $dados['titulo'] = "Cidades";
        return view('cidades.create', $dados);
    }
    //Metodo para receber post formulario
    public function store(CidadeRequest $request){
        $novaCidade = $request->all();
        Cidade::create($novaCidade);
        return redirect()->route('cidades');
    }
    //metodo responsavel por deletar registro
    public function destroy($id){
        Cidade::find($id)->delete();
        return redirect()->route('cidades');
    }
    //Chamada view para update
    public function edit($id){
        $dados['titulo'] = "Cidades";
        $c = Cidade::find($id);
        return view('cidades.edit', compact('c'), $dados);
    }
//    Atualizando dados
    public function update(CidadeRequest $request, $id){
        $cidade = Cidade::find($id)->update($request->all());
        return redirect()->route('cidades');
    }
}
