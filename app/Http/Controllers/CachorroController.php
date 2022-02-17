<?php

namespace App\Http\Controllers;
use App\Http\Requests\CachorroRequest;
use App\Models\Cachorro;

class CachorroController extends Controller
{
    public function __construct(Cachorro $cachorro){
            $this->cachorro = $cachorro;        
    } 
    public function index()
    {                           
        $data = $this->cachorro->all();
        return response()->json($data, 201);                
    }
    public function store(CachorroRequest $request)
    {
        $this->validate($request, $request->rules());   
        $dataFrom = $request->all();
        $data = $this->cachorro->create($dataFrom);  
        return response()->json($data,201) ;
    }
    public function show($id)
    {
        $data = $this->cachorro->find($id);
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        }
        return response()->json($data,201) ;
    }
    public function update(CachorroRequest $request, $id)
    { 
        $data = $this->cachorro->find($id);  
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        } 
        $this->validate($request, $this->cachorro->rules());   
        $dataFrom = $request->all();
        $data->update($dataFrom);  
        return response()->json($data,201) ;                     
    }

    public function destroy($id)
    {
        $data = $this->cachorro->find($id);
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        }
        $data->delete();
        return response()->json(['success'=>'Deletado com sucesso.'],201) ;        
    }    
    
}
