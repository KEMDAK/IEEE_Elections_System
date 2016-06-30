<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class AdminController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('role:Admin');
    }

    /**
    * This function returns a view of the
    *
    * Admin panel.
    *
    **/
    public function panel()
    {
        return view('admin.panel');
    }

    /**
    * This function returns a view of the
    *
    * users list.
    *
    **/
    public function usersList()
    {
        $users = User::where('role', 'Voter')->get();

        return view('admin.usersList', compact('users'));
    }

    /**
    * This function returns a view of the
    *
    * candidates list.
    *
    **/
    public function candidatesList()
    {
        return view('admin.candidatesList');
    }
}
