<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios['usuarios']=User::paginate(5);
        return view('users.index',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'name'=>'required|string|max:50',
            'email'=>'required|date', 
            'password'=>'required|string|',
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $usuarios = request()->except('_token');
        User::insert($usuarios);

        return redirect('usuarios')->with('mensaje','Usuario creado con exito'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios = User::find($id);
        return view('users.show',compact('usuarios'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $usuarios = User::findOrFail($id);
        return view('users.edit',compact('usuarios'));
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
        $campos=[
            'name'=>'required|string|max:50',
            'email'=>'required|date', 
            'password'=>'required|string|',
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $usuarios = request()->except(['_token','_method']);
        User::where('id','=',$id)->update($usuarios);

        $usuarios = User::findOrFail($id);
        //return view('citas.edit',compact('cita'));
        return redirect('usuarios')->with('mensaje','usuario Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('usuarios')->with('mensaje','usuario eliminado');
    }
}
