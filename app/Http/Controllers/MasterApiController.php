<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Eloquent\Model;


class MasterApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {                   
        //dd($this);
        $data = $this->model->all();
        return response()->json($data, 201);                
    }
    public function store(Request $request)
    {
        $this->validate($request, $this->model->rules());   
        $dataFrom = $request->all();
        $data = $this->model->create($dataFrom);  
        return response()->json($data,201) ;
    }
    public function show($id)
    {
        $data = $this->model->find($id);
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        }
        return response()->json($data,201) ;
    }
    public function update(Request $request, $id)
    { 
        $data = $this->model->find($id);  
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        } 
        $this->validate($request, $this->model->rules());   
        $dataFrom = $request->all();
        $data->update($dataFrom);  
        return response()->json($data,201) ;                     
    }

    public function destroy($id)
    {
        $data = $this->model->find($id);
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'],404) ;
        }
        $data->delete();
        return response()->json(['success'=>'Deletado com sucesso.'],201) ;        
    }
}
