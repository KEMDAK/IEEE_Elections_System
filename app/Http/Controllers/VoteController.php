<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class VoteController extends Controller
{
    /**
     * Display a listing of all candidates to vote for .
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $presidentCandidates = candidate::where('position', 'President')->get();
          $ViceCandidates = candidate::where('position', 'Vice President')->get();
          $treassurerCandidates = candidate::where('position', 'Treassurer')->get();
          $secratoryCandidates = candidate::where('position', 'Secratory')->get();

          

        return view('vote.index', compact('presidentCandidates','ViceCandidates','treassurerCandidates','secratoryCandidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
