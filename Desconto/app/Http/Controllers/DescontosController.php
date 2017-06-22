<?php

namespace App\Http\Controllers;

use App\Descontos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DescontosController extends Controller
{
    public function index () {
        $descontos = Descontos::all();
        return view('descontos', ['descontos'=>$descontos]);
    }
    public function create(){
        return view('descontos.create');
    }
    public function store(DescontoRequest $request){
        $novo_desconto = $request->all();
        Descontos::create($novo_desconto);

        return redirect('descontos');
    }
    
    public function destroy($id){        
        Descontos::find($id)->delete();

        return redirect('descontos');
    }
    
     public function edit($id){
        $Descontos = Desconto::find($id);
        return view('descontos.edit', compact($Descontos));
    }
    
    public function update(DescontoRequest $request, $id){
        $Desconto = Desconto::find($id)->update($request->all());
        return redirect('Descontos');
    }
    
    
    
}
