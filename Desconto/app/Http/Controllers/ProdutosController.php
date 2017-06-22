<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutosController extends Controller
{
    public function index () {
        $produtos = Produtos::all();
        return view('produtos', ['produtos'=>$produtos]);
    }
    public function create(){
        return view('produtos.create');
    }
    public function store(ProdutoRequest $request){
        $novo_produto = $request->all();
        Produtos::create($novo_produto);

        return redirect('produtos');
    }
    
    public function destroy($id){        
        Produtos::find($id)->delete();

        return redirect('produtos');
    }
    
     public function edit($id){
        $Produtos = Produto::find($id);
        return view('produtos.edit', compact($Produtos));
    }
    
    public function update(ProdutoRequest $request, $id){
        $Produto = Produto::find($id)->update($request->all());
        return redirect('Produtos');
    }
    
    
    
}
