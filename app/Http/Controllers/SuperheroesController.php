<?php

namespace App\Http\Controllers;

use App\Models\superheroes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class SuperheroesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['superheroes']=Superheroes::paginate(5);
        return view('superheroes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('superheroes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosSuperheroes = request()->all();
        $datosSuperheroes = request()->except('_token');

        if($request->hasFile('Foto')){}
        $datosSuperheroes['Foto']=$request->file('Foto')->store('uploads','public');


        Superheroes::insert($datosSuperheroes);

        return response()->json($datosSuperheroes);
    }

    /**
     * Display the specified resource.
     */
    public function show(superheroes $superheroes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $superheroes=superheroes::findOrFail($id);

        return view('superheroes.edit', compact('superheroes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosSuperheroes = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $superheroes=superheroes::findOrFail($id);

        Storage::delete('public/'.$superheroes->Foto);

        $datosSuperheroes['Foto']=$request->file('Foto')->store('uploads','public');
        }

        superheroes::where('id','=',$id)->update($datosSuperheroes);
        $superheroes=superheroes::findOrFail($id);
        return view('superheroes.edit', compact('superheroes'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Superheroes::destroy($id);
        return redirect('superheroes');
    }
}
