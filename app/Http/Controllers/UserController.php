<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of all users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
         return view('users.index', compact('$users'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create') ;
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email|max:255',
            'ieee_membership_id' => 'required',
            'role'  =>  'required',
        ]);

        $data = $request->all();

         User::firstOrCreate($data);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function updateView() {

        return view('user.edit');
      }

    /**
     * Update the User in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'email' => 'required|email|max:255',
            'ieee_membership_id' => 'required',
            'role'  =>  'required',
        ]);  

       // $user = User::where('ieee_membership_id', $id)->first();
       // $user->fill($request::all());
        User::where('ieee_membership_id', $id)
          ->update($request);
    }

    /**
     * Remove the User from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       User::where('ieee_membership_id', $id)->delete();
    }
}
