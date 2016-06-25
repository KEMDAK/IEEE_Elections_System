<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Candidate;

class VoteController extends Controller
{
    /**
    * Display a listing of all candidates to vote for .
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $presidentCandidates = Candidate::where('position', 'President')->get();
        $ViceCandidates = Candidate::where('position', 'Vice President')->get();
        $treassurerCandidates = Candidate::where('position', 'Treassurer')->get();
        $secratoryCandidates = Candidate::where('position', 'Secratory')->get();



        return view('vote.index', compact('presidentCandidates','ViceCandidates','treassurerCandidates','secratoryCandidates'));
    }

    /**
    * Store a newly created vote request .
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $candidates = $request->all();
        for($x = 0; $x < count($candidates); $x++) {

            $id = $candidates[$x]->ieee_membership_id ;
            DB::table('candidates')->increment('votes', 1, ['ieee_membership_id' => $id]);

        }
    }
}
