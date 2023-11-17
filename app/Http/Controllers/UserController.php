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
        return view("users.index", compact("users"));
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

        $request->validate([

            "name" => "required",
            "email" => "required|email",
            "password" => "required|min:5",
            "roles" => "required|array",



        ]);

        $user = User::all();
        //  $role = Role::all();

        $user = User::create([

            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),


        ]);

        $user->role()->attach($request->input("roles")); //form input wala roles h ye

        return redirect()->route("users.index")->with("success", "USER ADDED SUCCCESSFULLY");


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
    public function edit(User $user)
    {
        //
        $role = Role::all();
        $user = User::all();

        return view("users.show", compact("user", "role"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //

        $request->validate([

            "name" => "required",
            "email" => "required|email"  . $user->id,
            "password" => "required|min:5",
            "roles" => "required|array",



        ]);

        dd($request);

        //    $user = User::all();

        // User::($request->all());

        // return redirect()->route("users.index")->with("success","USER ADDED SUCCCESSFULLY");

       


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
