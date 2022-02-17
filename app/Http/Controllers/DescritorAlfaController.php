<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DescritorAlfa;

class DescritorAlfaController extends MasterApiController
{

    protected $model;    
    public function _construct(DescritorAlfa $descritoralfa, Request $request){
        $this->model = $descritoralfa;
        $this->request = $request;
    }    
    
}
