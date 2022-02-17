<?php

namespace App\Http\Controllers;

use App\Http\Requests\NegocioRequest;
use App\Models\Negocio;

class NegocioController extends Controller
{
    public function __construct(Negocio $negocio)
    {
        $this->negocio = $negocio;
    }
    public function index()
    {
        $data = $this->negocio->all();
        return response()->json($data, 201);
    }
    public function store(NegocioRequest $request)
    {
        $this->validate($request, $request->rules());
        $dataFrom = $request->all();
        $data = $this->negocio->create($dataFrom);
        return response()->json($data, 201);
    }
    public function show($id)
    {
        $data = $this->negocio->find($id);
        if (!$data) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        }
        return response()->json($data, 201);
    }
    public function update(NegocioRequest $request, $id)
    {
        $data = $this->negocio->find($id);
        if (!$data) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        }
        $this->validate($request, $request->rules());
        $dataFrom = $request->all();
        $data->update($dataFrom);
        return response()->json($data, 201);
    }

    public function destroy($id)
    {
        $data = $this->negocio->find($id);
        if (!$data) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        }
        $data->delete();
        return response()->json(['success' => 'Deletado com sucesso.'], 201);
    }
}
