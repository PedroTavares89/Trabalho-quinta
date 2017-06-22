<?php

namespace App\Http\Controllers;

use App\Pessoas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PessoasController extends Controller
{
    public function index () {
        $pessoas = Pessoas::all();
        return view('pessoas', ['pessoas'=>$pessoas]);
    }
    public function create(){
        return view('pessoas.create');
    }
    public function store(PessoaRequest $request){
        $novo_pessoa = $request->all();
        Pessoas::create($novo_pessoa);

        return redirect('pessoas');
    }
    
    public function destroy($id){        
        Pessoas::find($id)->delete();

        return redirect('pessoas');
    }
    
     public function edit($id){
        $Pessoas = Pessoa::find($id);
        return view('pessoas.edit', compact($Pessoas));
    }
    
    public function update(PessoaRequest $request, $id){
        $Pessoa = Pessoa::find($id)->update($request->all());
        return redirect('Pessoas');
    }
    
    
    
}
