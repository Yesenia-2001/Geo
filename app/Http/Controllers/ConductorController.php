<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use Illuminate\Http\Request;
Use Validator;

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
        $conductor = Conductor::find($id);
        return view('conductor.edit')->with('conductor', $conductor);
        
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
            'nombre'=>'required|max:10',
            'apellido'=>'required|max:10',
            'telefono'=>'required|min:5|numeric',
            'direccion'=>'required',
            'nomeropase'=>'required|numeric',
            'pase'=>'required|mimes:jgp,jpeg,png,svg|max:2048|',
            'cedula'=>'required|mimes:jgp,jpeg,png,svg|max:2048|',
            'hv'=>'required|mimes:jgp,jpeg,png,svg|max:2048|',

        ]);
        if($validator ->fails()){
            return back()
            ->withInput()
            ->with('ErrorInsert', 'llenar todos los campos')
            ->withErrors($validator);
        }
        if($request->hasFile('pase')) {
            $image = $request->file('pase');
           //  print_r($image);
            $image_name = time().'.'.$image->getClientOriginalExtension();
           //  echo $image;
           //  exit(0);
            $destinationPath = public_path('img/conductor/pase');
            $image->move($destinationPath, $image_name);
        }
        if($request->hasFile('cedula')) {
            $image = $request->file('cedula');
           //  print_r($image);
            $image_name = time().'.'.$image->getClientOriginalExtension();
           //  echo $image;
           //  exit(0);
            $destinationPath = public_path('img/conductor/cedula');
            $image->move($destinationPath, $image_name);
        }
        if($request->hasFile('hv')) {
            $image = $request->file('hv');
           //  print_r($image);
            $image_name = time().'.'.$image->getClientOriginalExtension();
           //  echo $image;
           //  exit(0);
            $destinationPath = public_path('img/conductor/hv');
            $image->move($destinationPath, $image_name);


            $conductor =  new Conductor();
            $conductor->nombre = $request->nombre;
            $conductor->apellido = $request->apellido;
            $conductor->telefono = $request->telefono;
            $conductor->direccion = $request->direccion;
            $conductor->nomeropase = $request->nomeropase;
            $conductor->pase = $request->pase;
            $conductor->cedula = $request->cedula;
            $conductor->hv = $request->hv;

            $conductor->save();
            return redirect('/conductors');

        }
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
    public function edit($id)
    {
        $conductor = Conductor::find($id);
        return view('conductor.edit')->with('conductor', $conductor );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $conductors = Conductor::find($id);
        $conductors->nombre = $request->get('nombre');
        $conductors->apellido = $request->get('apellido');
        $conductors->telefono = $request->get('telefono');        
        $conductors->direccion = $request->get('direccion');
        $conductors->nomeropase = $request->get('nomeropase');
        $conductors->pase = $request->get('pase');
        $conductors->cedula = $request->get('cedula');
        $conductors->hv = $request->get('hv');
        
        $conductors->save();

        return redirect('/conductors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $condictor = Conductor::find($id);
        $condictor->delete();
        return redirect('conductors');
    }
}