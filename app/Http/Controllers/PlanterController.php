<?php

namespace App\Http\Controllers;

use App\Planter;
use App\System;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PlanterController extends Controller
{
    
    public function index() {
        $planter = Planter::where('systemID', app('system')->id)->get();
        return view('planter.index', compact('planter'));
    }

    public function create() {

        return view('planter.create');
    }

    public function store(Request $request) 
    {
        // dd($request->all());
        $newplanter = planter::create([
            'name' => $request['name'],
            'comments' => $request['comments'],
            'systemID' => app('system')->id, // from appServiceprovider
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        return redirect('planter');
    }


/**
     * Display a page to edit a new planttype
     *
     */
    public function edit($id) 
    {
        $planter = planter::find($id);
        return view('planter.edit')->with('planter', $planter);
    }

    public function update(Request $request) 
    {
       //print_r($_POST); 
       //dd($request->all()); 
       //dd($request->hasFile('imageFile'));
       // dd($request['imageFile']);
        $planter = planter::find($request['id']);
        
            $planter->name = $request['name'];
            $planter->comments = $request['comments'];
            
            $planter->updated_at = Carbon::now()->toDateTimeString();
            $planter->save();
            return redirect('planter');
    }

    /**
     * Display a page to delete a new planttype
     *
     */
    public function destroy($id) 
    {
        planter::destroy($id);

        $planter = planter::all();
        return view('planter.index', compact('planter'));
    }
}
