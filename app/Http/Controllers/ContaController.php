<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conta;

class ContaController extends Controller
{

    protected $model;    
    public function _construct(Conta $conta, Request $request){
        $this->model = $conta;
        $this->request = $request;
    }    
    
}
