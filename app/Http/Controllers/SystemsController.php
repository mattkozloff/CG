<?php

namespace App\Http\Controllers;

use App\System;
use Illuminate\Http\Request;

class SystemsController extends Controller
{
    public function edit($id) 
    {
        $system = System::find($id);
        return view('systems.edit')->with('system', $system);

        // return "System";
    }
}
