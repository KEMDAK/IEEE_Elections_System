<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Candidate;

class VoteController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('role:Voter');
    }

    /**
    * Display a listing of all candidates to vote for .
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $presidents = Candidate::where('position', 'President')->get();
        $vice_presidents = Candidate::where('position', 'Vice President')->get();
        $treasurers = Candidate::where('position', 'Treassurer')->get();
        $secretaries = Candidate::where('position', 'Secretary')->get();



        return view('vote.index', compact('presidents','vice_presidents','treasurers','secretaries'));
    }

    /**
    * Store a newly created vote request .
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        var_dump($request);
        $candidates = $request->all();
        for($x = 0; $x < count($candidates); $x++) {

            $id = $candidates[$x]->ieee_membership_id ;
            DB::table('candidates')->increment('votes', 1, ['ieee_membership_id' => $id]);

        }
    }

    /**
    * Display the thanks page.
    * @return \Illuminate\Http\Response
    */
    public function thanks()
    {
        return view('vote.thanks');
    }
}
