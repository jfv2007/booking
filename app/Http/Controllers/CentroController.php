<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Centro;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;


class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $centros =Centro::paginate(5);
        return view ('centros.index', compact('centros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('centros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'id_centro' => 'required| unique:centros',
            'nombre_centro' => 'required| unique:centros'
         ]);

         $centro =new Centro;
         $centro->id_centro =$request->id_centro ;
         $centro->nombre_centro =$request->nombre_centro ;
        /* $centro->save(); */
         $centro= Centro::create($request->all());
        return redirect()->route('centros.index');

/*
        Post::create($request->all());

        return redirect()->route('posts.index'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Centro $centro)
    {
        /* abort_if(Gate::denies('post_show'), 403); */

        return view('centros.show', compact('centro'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Centro $centro)
    {
        /* abort_if(Gate::denies('post_edit'), 403); */

        return view('centros.edit', compact('centro'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Centro $centro)
    {
      /*   $data =$request->only('name','username','email'); */

        $centro->update($request->all());

        return redirect()->route('centros.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Centro $centro)
    {
        /* abort_if(Gate::denies('post_delete'), 403); */

        $centro->delete();

        return redirect()->route('centros.index');
    }
}
