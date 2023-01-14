<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function ola($id, Request $request)
    {

        $name = $id;

        return view('/hello', compact('name'));

    
    }
}
