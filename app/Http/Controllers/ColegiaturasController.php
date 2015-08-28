<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Colegiatura;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ColegiaturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id)
    {
        //obtener los datos del alumno para mostrar
        $alumno = Alumno::find($id);

        return view('alumnos.colegiatura',[
           'alumno'=>$alumno
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  integer  $id
     * @param  Request  $request
     * @return Response
     */
    public function store($id, Request $request)
    {
        //
        $colegiatura = Colegiatura::create($request->all());

        return 'ok';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
