<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MasterApiController;
use App\Models\Valorant;

class ValorantController extends MasterApiController
{
 

    protected $model;         
    public function __construct(Valorant $valorants, Request $request){        
        $this->model = $valorants;
        $this->request = $request;
    }    
    
}
