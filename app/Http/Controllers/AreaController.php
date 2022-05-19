<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*   abort_if(Gate::denies('role_index'), 403); */

        $areas = Area::paginate(10);

        return view('areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /*  abort_if(Gate::denies('permission_create'), 403);
 */
        return view('areas.create');
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
            'nombre_area' => 'required| unique:areas',
            'id_centro' => 'required'
         ]);
         /* strtoupper(); */
         /* use Illuminate\Support\Str;

$string = Str::upper('laravel'); */
         $area =new Area;
         $area-> nombre_area =$request->nombre_area ;
         $area->id_centro =$request->id_centro ;
        /* $centro->save(); */
         $centro= Area::create($request->all());
        return redirect()->route('areas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        /* abort_if(Gate::denies('post_show'), 403); */

        return view('areas.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        /* abort_if(Gate::denies('post_edit'), 403); */

        return view('areas.edit', compact('area'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $area->update($request->all());

        return redirect()->route('areas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        /* abort_if(Gate::denies('post_delete'), 403); */

        $area->delete();

        return redirect()->route('areas.index');
    }
}
