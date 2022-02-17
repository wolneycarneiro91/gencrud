<?php

namespace App\Http\Controllers;
use App\Http\Requests\RatoRequest;
use App\Models\Rato;

class RatoController extends Controller
{
    public function __construct(Rato $rato){
            $this->rato = $rato;        
    } 
    public function index()
    {                           
        $data = $this->rato->all();
        return response()->json($data, 201);                
    }
    public function store(RatoRequest $request)
    {
        $this->validate($request, $request->rules());   
        $dataFrom = $request->all();
        $data = $this->rato->create($dataFrom);  
        return response()->json($data,201) ;
    }
    public function show($id)
    {
        $data = $this->rato->find($id);
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        }
        return response()->json($data,201) ;
    }
    public function update(RatoRequest $request, $id)
    { 
        $data = $this->rato->find($id);  
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        } 
        $this->validate($request, $this->rato->rules());   
        $dataFrom = $request->all();
        $data->update($dataFrom);  
        return response()->json($data,201) ;                     
    }

    public function destroy($id)
    {
        $data = $this->rato->find($id);
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        }
        $data->delete();
        return response()->json(['success'=>'Deletado com sucesso.'],201) ;        
    }    
    
}
