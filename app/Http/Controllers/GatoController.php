<?php

namespace App\Http\Controllers;
use App\Http\Requests\GatoRequest;
use App\Models\Gato;

class GatoController extends Controller
{
    public function __construct(Gato $gato){
            $this->gato = $gato;        
    } 
    public function index()
    {                           
        $data = $this->gato->all();
        return response()->json($data, 201);                
    }
    public function store(GatoRequest $request)
    {
        $this->validate($request, $request->rules());   
        $dataFrom = $request->all();
        $data = $this->gato->create($dataFrom);  
        return response()->json($data,201) ;
    }
    public function show($id)
    {
        $data = $this->gato->find($id);
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        }
        return response()->json($data,201) ;
    }
    public function update(GatoRequest $request, $id)
    { 
        $data = $this->gato->find($id);  
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        } 
        $this->validate($request, $this->gato->rules());   
        $dataFrom = $request->all();
        $data->update($dataFrom);  
        return response()->json($data,201) ;                     
    }

    public function destroy($id)
    {
        $data = $this->gato->find($id);
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        }
        $data->delete();
        return response()->json(['success'=>'Deletado com sucesso.'],201) ;        
    }    
    
}
