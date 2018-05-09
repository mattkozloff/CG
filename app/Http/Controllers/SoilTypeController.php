<?php

namespace App\Http\Controllers;

use App\SoilType;
use App\System;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SoilTypeController extends Controller
{
    
    public function index() {
        $soilType = SoilType::where('systemID', app('system')->id)->get();
        return view('soilType.index', compact('soilType'));
    }

    public function create() {

        return view('soilType.create');
    }

    public function store(Request $request) 
    {
        // dd($request->all());
        $newsoilType = SoilType::create([
            'name' => $request['name'],
            'comments' => $request['comments'],
            'systemID' => app('system')->id, // from appServiceprovider
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        return redirect('soilType');
    }


/**
     * Display a page to edit a new planttype
     *
     */
    public function edit($id) 
    {
        $soilType = SoilType::find($id);
        return view('soilType.edit')->with('soilType', $soilType);
    }

    public function update(Request $request) 
    {
       //print_r($_POST); 
       //dd($request->all()); 
       //dd($request->hasFile('imageFile'));
       // dd($request['imageFile']);
        $soilType = SoilType::find($request['id']);
        
            $soilType->name = $request['name'];
            $soilType->comments = $request['comments'];
            
            $soilType->updated_at = Carbon::now()->toDateTimeString();
            $soilType->save();
            return redirect('planter');
    }

    /**
     * Display a page to delete a new planttype
     *
     */
    public function destroy($id) 
    {
        SoilType::destroy($id);

        $soilType = SoilType::all();
        return view('soilType.index', compact('soilType'));
    }
}
