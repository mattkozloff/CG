<?php

namespace App\Http\Controllers;

use App\System;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SystemsController extends Controller
{
    public function edit($id) 
    {
        $system = System::find($id);
        return view('systems.edit')->with('system', $system);

        // return "System";
    }

    public function update(Request $request) 
    {
        //return($request->all());
         $system = System::find($request['id']);
        
         $system->name = $request['name'];
         if($request->hasFile('imageFileName')) {
            $file = $request->file('imageFileName');
            if($file) {
                $destinationPath = '/uploads';
                $filename = 'system' . '_' . app('system')->id . '_' . $request['id'] . '_' . $file->getClientOriginalName();
                $file->move($destinationPath, $filename);  
                $filename = $destinationPath . '\\' . $filename;
                $system->imageFileName = $filename;
            }                
        }
         $system->updated_at = Carbon::now()->toDateTimeString();
         $system->save();
         
         $system = System::find($request['id']);
         return redirect()->route('systems.edit', ['id' => $request['id']]);
    }

}
