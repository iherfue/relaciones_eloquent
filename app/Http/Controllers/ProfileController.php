<?php

namespace App\Http\Controllers;
use App\User;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id){

        $perfil = Profile::find($id);
        dd($perfil);
        //$user = $perfil->user;
    }
}
