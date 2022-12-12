<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    function index() // não precisa. Só o edit
    {
        $categorias = Categoria::select('*')->where('id', '!=', 1)->get();

        return view('categorias.alterarExcluirCategoria', [
            'categorias' => $categorias
        ]);
    }

    function create()
    {
        $categorias = Categoria::select('*')->where('nome', '!=', 'desativados')->get();
        return view('categorias.criarCategoria', [
            'categorias' => $categorias
        ]);
    }

    function store(Request $request)
    {
        $data = $request->all();

        Categoria::create($data);

        // return "ok";
        $categorias = Categoria::select('*')->where('nome', '!=', 'desativados')->get();
        return view('categorias.criarCategoria', [
            'categorias' => $categorias
        ]);
    }

    function edit(Request $request)
    {
        $data = $request->all();

        $categoria = Categoria::select('*')->where('id', $data["categoria"])->where('nome', '!=', 'desativados')->get();

        return view('categorias.alterarCategoria', [
            'categoria' => $categoria,
        ]);
    }

    function update(Request $request)
    {
        $categorias = Categoria::select('*')->where('nome', '!=', 'desativados')->get();

        $data = $request->all();

        Categoria::where('id', $data['id_categoria'])->update('nome', $data['categoria']);

        return view('categorias.alterarExcluirCategoria', [
            'categoria' => $categorias,
        ]);
    }

    function destroy(Request $request){
        $data = $request->all();
        $cat = $data['categoria'];
        try {
            Categoria::where('id', $cat)->delete();
            return "ok";
            return redirect ('/categorias.alterarExcluirCategoria');
        } catch (QueryException $e){
            return "EEEEEE";
            return redirect('/categorias.alterarExcluirCategoria')->with("erro", "Erro! Há produtos nesta categoria!");
        }
    }
}
