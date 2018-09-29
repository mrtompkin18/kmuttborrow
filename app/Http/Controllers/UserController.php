<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->user_fname = $request->user_fname;
        $user->user_lname = $request->user_lname;
        $user->user_email = $request->user_email;
        $user->user_password = md5($request->user_password);
        $user->role_id = $request->role_id;
        $user->class_id = $request->class_id;
        $user->save();

        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::find($id);
        return "5";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->user_fname = $request->user_fname;
        $user->user_lname = $request->user_lname;
        $user->user_email = $request->user_email;
        $user->user_password = md5($request->user_password);
        $user->role_id = $request->role_id;
        $user->class_id = $request->class_id;
        $user->update();
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return 204;
    }
}
