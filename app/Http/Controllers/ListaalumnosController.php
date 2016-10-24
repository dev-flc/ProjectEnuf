<?php
use Enufproject\Model;

namespace Enufproject\Http\Controllers;

use Illuminate\Http\Request;

use Enufproject\Http\Requests;

class ListaalumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $alum = \Enufproject\Model\Alumno::
            select('alumno.id','alumno.matricula','alumno.estatus','alumno.semestre','usuario.nombre','usuario.apellidos','usuario.email')->join('usuario','usuario.id','=','alumno.id_usuario')->get();
       $aaa = \Enufproject\Model\Alumno::all();

        return View('general/listaalumnos')->with('alum',$alum)->with('aaa',$aaa);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
