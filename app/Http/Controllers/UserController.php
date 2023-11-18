<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        // return view("users.index", compact("users"));
        return view("users.index", ["users"=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $role = Role::all();

        return view("users.create", compact("role"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        
        // $request->validate([
            
        //     "name" => "required",
        //     "email" => "required|email",
        //     "password" => "required|min:5",
        //     "roles" => "required|array",
            
            
            
        // ]);
        
        // $user = User::all();
        //  $role = Role::all();
        
        // dd($request);
        
        $user = User::create([
            
            "name" => $request->name,
            "email" => $request->email,
            "profile" => $request->profile,
            
            
        ]);
        // dd($user);
        $user->roles()->attach($request->input("roles")); //form input wala roles h ye

       
        return back()->withSuccess('Product is Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        $user = User::all();

        return view("users.show", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user , $id)
    {
        //
        $role = Role::find($id);
        $user = User::find($id);

        return view("users.edit", compact("user", "role"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {


        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "profile" => $request->profile,
        ]);


        $user->roles()->sync($request->input("roles")); //form input wala roles h ye
        
        // dd($user);
       
        return back()->withSuccess('Product is Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
