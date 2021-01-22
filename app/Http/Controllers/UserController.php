<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request ;

class UserController extends Controller
{

    public function getIndex(){


        $data=['abood','damlahi'];

        return view('welcome',compact('data'));
    }




}
