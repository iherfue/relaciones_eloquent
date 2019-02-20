<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $perfil = new Profile;
        $perfil->bio = 'Esta es la biografía de un usuario';
        $perfil->company = 'EscuelaIT';
        $perfil->technologies = 'PHP, Javascript, Apache, HTML';
        $user = User::find($id);
        $user->profile()->save($perfil);
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
        $usuario = User::find($id);
        $perfil = $usuario->profile;
        if($perfil) {
            echo 'tengo perfil ' . json_encode($perfil);
        } else {
            return 'no tiene profile';
        }
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
        $usuario = User::find($id);
        $usuario->delete();
    }

    public function profile($id){

        $perfil = Profile::find($id);
        //dd($perfil);
        $user = $perfil->user;
        echo('Perfil de '. $user->name);
    }
}
