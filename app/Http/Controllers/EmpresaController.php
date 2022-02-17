<?php

namespace App\Http\Controllers;
use App\Http\Requests\EmpresaRequest;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function __construct(Empresa $empresa){
            $this->empresa = $empresa;        
    } 
    public function index()
    {                           
        $data = $this->empresa->all();
        return response()->json($data, 201);                
    }
    public function store(EmpresaRequest $request)
    {
        $this->validate($request, $request->rules());   
        $dataFrom = $request->all();
        $data = $this->empresa->create($dataFrom);  
        return response()->json($data,201) ;
    }
    public function show($id)
    {
        $data = $this->empresa->find($id);
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        }
        return response()->json($data,201) ;
    }
    public function update(EmpresaRequest $request, $id)
    { 
        $data = $this->empresa->find($id);  
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        } 
        $this->validate($request, $this->empresa->rules());   
        $dataFrom = $request->all();
        $data->update($dataFrom);  
        return response()->json($data,201) ;                     
    }

    public function destroy($id)
    {
        $data = $this->empresa->find($id);
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        }
        $data->delete();
        return response()->json(['success'=>'Deletado com sucesso.'],201) ;        
    }    
    
}
