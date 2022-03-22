<?php

namespace App\Http\Controllers;

use App\Models\PlusAllatok;
use Illuminate\Http\Request;

class PlusAllatokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allatok = PlusAllatok::all();
        return response()->json($allatok);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new PlusAllatok();
        $p->fill($request->all());
        $p->save();
        return response()->json($p, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlusAllatok  $plusAllatok
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $p = PlusAllatok::findOrFail($id);
        return response()->json($p);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlusAllatok  $plusAllatok
     * @return \Illuminate\Http\Response
     */
    public function edit(PlusAllatok $plusAllatok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlusAllatok  $plusAllatok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $p = PlusAllatok::findOrFail($id);
        $p->fill($request->all());
        $p->save();
        return response()->json($p, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlusAllatok  $plusAllatok
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        PlusAllatok::destroy($id);
        return response()->noContent();
    }
}
