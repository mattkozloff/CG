<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Plant;
use App\Note;

class NotesController extends Controller
{
    public function index($entity, $entityID) {
        
        $entityTable = \DB::table($entity . 's')->get(['id', 'name'])->where('id', '=', (int)$entityID)->first();        

        //dd($entityTable->name);
        $notes = Note::where('systemID', app('system')->id)
                        ->where('entity', $entity)
                        ->where('entityID', $entityID)
                        ->get();
        
        return view('notes.index')->with('notes', $notes)
                                ->with('entity', $entity)
                                ->with('entityID', $entityID)
                                ->with('entityName', $entityTable->name);
    }

    /**
    * create
    */

    public function create($entity, $entityID) {

        $entityTable = \DB::table($entity . 's')->get(['id', 'name'])->where('id', '=', (int)$entityID)->first();        

        $entityDetail = [
            'entity' => $entity,
            'entityID' => $entityID,
            'entityName' => $entityTable->name
        ];
        
        return view('notes.create')->with('entityDetail', $entityDetail);
    }

     public function store(Request $request) 
    {
        //dd($request->all());
        $newNote = Note::create([
            'entity' => $request['entity'],
            'entityID' => (int)$request['entityID'],
            'comments' => $request['comments'],
            'imageFileName' => $request['imageFileName'],
            'systemID' => app('system')->id, // from appServiceprovider
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        $entityTable = \DB::table($request['entity'] . 's')->get(['id', 'name'])->where('id', '=', (int)$request['entityID'])->first();

        //dd($entityTable->name);
        $notes = Note::where('systemID', app('system')->id)
                        ->where('entity', $request['entity'])
                        ->where('entityID', $request['entityID'])
                        ->get();
        
        return view('notes.index')->with('notes', $notes)
                                ->with('entity', $request['entity'])
                                ->with('entityID', $request['entityID'])
                                ->with('entityName', $entityTable->name);
    }
    
}
