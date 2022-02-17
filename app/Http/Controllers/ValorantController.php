<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MasterApiController;
use App\Http\Requests\ValorantRequest;
use App\Models\Valorant;

class ValorantController extends MasterApiController
{
 

    protected $model;         
    public function __construct(Valorant $valorants, ValorantRequest $request){        
        $this->model = $valorants;
        $this->request = $request;
    }    
    
}
