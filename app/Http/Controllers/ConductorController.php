<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use Illuminate\Http\Request;
use Validator;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductors = Conductor::all();
        return view('conductor.index')->with('conductors',$conductors);
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
        $validator = Validator::make($request->all(),[
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'nomeropase' => 'required|numeric',
            'pase' => 'required|image|mimes:jgp,jpeg,png,svg|max:2048|',
            'cedula' => 'required|image|mimes:jgp,jpeg,png,svg|max:2048|',
            'hv' => 'required|image|mimes:jgp,jpeg,png,svg|max:2048|',


        ]);

        if ($validator->fails()){
            return back()
            ->withInput()
            ->with('ErrorInsert', 'llenar todos los campos')
            ->withErrors($validator);
        }

        if($request->hasFile('pase')) {
            $image = $request->file('pase');

            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img\conductor\pase');
            $image->move($destinationPath, $image_name);
        }
        if($request->hasFile('cedula')) {
            $image = $request->file('cedula');

            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img\conductor\cedula');
            $image->move($destinationPath, $image_name);
        }
        if($request->hasFile('hv')) {
            $image = $request->file('hv');

            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img\conductor\hv');
            $image->move($destinationPath, $image_name);
        
        
            $conductors =  new Empresa();
            $conductors->nombre = $request->nombre;
            $conductors->apellido = $request->apellido;
            $conductors->telefono = $request->telefono;
            $conductors->direccion = $request->direccion;
            $conductors->nomeropase = $request->nomeropase;
            $conductors->pase = $request->pase;
            $conductors->cedula = $request->cedula;
            $conductors->hv = $request->hv;

            $empresas->save();
            return redirect('/conductors');

        };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conductor = Conductor::find($id);
        return view('conductor.show')->with('conductor', $conductor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function edit(Conductor $conductor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conductor $conductor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conductor $conductor)
    {
        //
    }
}
