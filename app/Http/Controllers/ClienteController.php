<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use App\Cliente;

class ClienteController extends MasterApiController
{
    protected $model;    
    public function _construct(Cliente $clientes, Request $request){
        $this->model = $clientes;
        $this->request = $request;
    }
}
