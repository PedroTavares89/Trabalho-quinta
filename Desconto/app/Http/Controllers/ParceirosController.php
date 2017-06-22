<?php

namespace App\Http\Controllers;

use App\Parceiros;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParceirosController extends Controller
{
    public function index () {
        $parceiros = Descontos::all();
        return view('parceiros', ['parceiros'=>$parceiros]);
    }
    public function create(){
        return view('parceiros.create');
    }
    public function store(DescontoRequest $request){
        $novo_parceiro = $request->all();
        Descontos::create($novo_parceiro);

        return redirect('parceiros');
    }
    
    public function destroy($id){        
        Descontos::find($id)->delete();

        return redirect('parceiros');
    }
    
     public function edit($id){
        $Descontos = Parceiro::find($id);
        return view('parceiros.edit', compact($Parceiros));
    }
    
    public function update(DescontoRequest $request, $id){
        $Desconto = Parceiro::find($id)->update($request->all());
        return redirect('Parceiros');
    }
    
    
    
}
