<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::latest()->get();

        return response()->json($produtos, 201);
    }

    public function store(ProdutoRequest $request)
    {
        $produto = Produto::create($request->all());

        return response()->json($produto, 201);
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);

        return response()->json($produto);
    }

    public function update(ProdutoRequest $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update($request->all());

        return response()->json($produto, 200);
    }

    public function destroy($id)
    {
        Produto::destroy($id);

        return response()->json(null, 204);
    }
}
