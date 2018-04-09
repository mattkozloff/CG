<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {

        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create() {

        return view('users.create');
    }

    public function store(Request $request) 
    {
        //dd($request->all());
        $newUser = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => $request['role'],
            'password' => bcrypt($request['password']),
            'imageFileName' => $request['imageFileName'],
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        return redirect('users');
    }


/**
     * Display a page to edit a new user
     *
     */
    public function edit($id) 
    {
        $user = User::find($id);
        return view('users.edit')->with('user', $user);
    }

    public function update(Request $request) 
    {
       //print_r($_POST); 
       // dd($request->all()); 
       //dd($request->hasFile('imageFile'));
       // dd($request['imageFile']);
        $user = User::find($request['id']);
        
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->imageFileName = $request['imageFileName'];
            
            $user->updated_at = Carbon::now()->toDateTimeString();
            $user->save();
            return redirect('users');
    }

    /**
     * Display a page to delete a new user
     *
     */
    public function destroy($id) 
    {
        User::destroy($id);

        $users = User::all();
        return view('users.index', compact('users'));
    }
}
