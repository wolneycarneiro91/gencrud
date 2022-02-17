<?php

namespace App\Http\Controllers;

use App\Http\Requests\RealtorRequest;
use App\Realtor;

class RealtorController extends Controller
{
    public function index()
    {
        $realtors = Realtor::latest()->get();

        return response()->json($realtors, 201);
    }

    public function store(RealtorRequest $request)
    {
        $realtor = Realtor::create($request->all());

        return response()->json($realtor, 201);
    }

    public function show($id)
    {
        $realtor = Realtor::findOrFail($id);

        return response()->json($realtor);
    }

    public function update(RealtorRequest $request, $id)
    {
        $realtor = Realtor::findOrFail($id);
        $realtor->update($request->all());

        return response()->json($realtor, 200);
    }

    public function destroy($id)
    {
        Realtor::destroy($id);

        return response()->json(null, 204);
    }
}
