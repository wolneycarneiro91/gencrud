<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CS;

class CSController extends MasterApiController
{

    protected $model;    
    public function _construct(CS $cs, Request $request){
        $this->model = $cs;
        $this->request = $request;
    }    
    
}
