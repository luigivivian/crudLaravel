<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Estado;
use App\Http\Requests\EstadoRequest;
use Illuminate\Http\Request;


class EstadosController extends Controller
{
    //
    //index, listagem
    public function index(){
        $titulo = "Estados";
        $estados = Estado::all();
        return view('estados.index', ['estados' => $estados, 'titulo'=>$titulo]);
    }

    //abrindo formulario
    public function create(){
        $dados['titulo'] = "Estados";
        return view('estados.create', $dados);
    }
    //Metodo para receber post formulario
    public function store(EstadoRequest $request){
        $novoEstado = $request->all();
        Estado::create($novoEstado);
        return redirect()->route('estados');
    }
    //metodo responsavel por deletar registro
    public function destroy($id){
        Estado::find($id)->delete();
        return redirect()->route('estados');
    }
    //Chamada view para update
    public function edit($id){
        $dados['titulo'] = "Estados";
        $e = Estado::find($id);
        return view('estados.edit', compact('e'), $dados);
    }
//    Atualizando dados
    public function update(EstadoRequest $request, $id){
        $estado = Estado::find($id)->update($request->all());
        return redirect()->route('estados');
    }
}
