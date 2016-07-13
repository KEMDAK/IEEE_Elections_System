<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\VoteRequest;

use App\Candidate;

use Illuminate\Support\Facades\Auth;

use App\Configuration;

use DB;

class VoteController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['resultsUnofficial']]);

        $this->middleware('role:Voter', ['except' => ['thanks', 'resultsUnofficial', 'resultsOfficial']]);
        
        $this->middleware('role:Admin', ['only' => ['resultsOfficial']]);

        $start = Configuration::where('name', 'electionsFrom')->first()->value;
        $end = Configuration::where('name', 'electionsTo')->first()->value;

        $this->middleware('deadline:' . $start . ',' . $end . ',vote', ['only' => ['index', 'store']]);

        $end = Configuration::where('name', 'results')->first()->value;

        $this->middleware('deadline:,' . $end . ',result', ['only' => ['resultsUnofficial', 'resultsOfficial']]);
    }

    /**
    * Display a listing of all candidates to vote for .
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $presidents = Candidate::where('position', 'President')->where('status', '1')->get();
        $vice_presidents = Candidate::where('position', 'Vice President')->where('status', '1')->get();
        $treasurers = Candidate::where('position', 'Treassurer')->where('status', '1')->get();
        $secretaries = Candidate::where('position', 'Secretary')->where('status', '1')->get();

        return view('vote.index', compact('presidents','vice_presidents','treasurers','secretaries'));
    }

    /**
    * Store a newly created vote request .
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(VoteRequest $request)
    {
        $positions = ['president','vice_president','treasurer','secretary'];
        $candidates = $request->all();
        $user = Auth::user();
        for($x = 0; $x < 4; $x++) {

            $id = $candidates[$positions[$x]] ;
            if($id){
                $candidate = Candidate::findOrFail($id);
                if($user->ieee_membership_id === null){
                    $candidate->u_votes = $candidate->u_votes + 1;
                }
                else{
                    $candidate->votes = $candidate->votes + 1;
                }
                $candidate->save();
            }
        }

        $user->status = '1';
        $user->save();

        return redirect('/vote/thanks');
    }

    /**
    * Display the thanks page.
    * @return \Illuminate\Http\Response
    */
    public function thanks()
    {
        return view('vote.thanks');
    }

    /**
    * Display the results page.
    * @return \Illuminate\Http\Response
    */
    public function resultsUnofficial()
    {
        // getting the results from the database and sending it to the view
        $presidents = Candidate::where('position', 'President')->where('status', '1')->get();
        $max_president = -1;
        $votes_presidents_o = DB::table('candidates')->where('position', 'President')->where('status', '1')->pluck('votes');
        $votes_presidents_u = DB::table('candidates')->where('position', 'President')->where('status', '1')->pluck('u_votes');
        $votes_presidents = array();
        for ($i=0; $i < count($votes_presidents_o); $i++) {
            $votes_presidents[$i] = $votes_presidents_o[$i] + $votes_presidents_u[$i];
            if($votes_presidents[$i] > $max_president){
                $max_president = $votes_presidents[$i];
            }
        }

        $vice_presidents = Candidate::where('position', 'Vice President')->where('status', '1')->get();
        $max_vice_president = -1;
        $votes_vice_presidents_o = DB::table('candidates')->where('position', 'Vice President')->where('status', '1')->pluck('votes');
        $votes_vice_presidents_u = DB::table('candidates')->where('position', 'Vice President')->where('status', '1')->pluck('u_votes');
        $votes_vice_presidents = array();
        for ($i=0; $i < count($votes_vice_presidents_o); $i++) {
            $votes_vice_presidents[$i] = $votes_vice_presidents_o[$i] + $votes_vice_presidents_u[$i];
            if($votes_vice_presidents[$i] > $max_vice_president){
                $max_vice_president = $votes_vice_presidents[$i];
            }
        }

        $treasurers = Candidate::where('position', 'Treassurer')->where('status', '1')->get();
        $max_treasurer = -1;
        $votes_treasurers_o = DB::table('candidates')->where('position', 'Treassurer')->where('status', '1')->pluck('votes');
        $votes_treasurers_u = DB::table('candidates')->where('position', 'Treassurer')->where('status', '1')->pluck('u_votes');
        $votes_treasurers = array();
        for ($i=0; $i < count($votes_treasurers_o); $i++) {
            $votes_treasurers[$i] = $votes_treasurers_o[$i] + $votes_treasurers_u[$i];
            if($votes_treasurers[$i] > $max_treasurer){
                $max_treasurer = $votes_treasurers[$i];
            }
        }

        $secretaries = Candidate::where('position', 'Secretary')->where('status', '1')->get();
        $max_secretary = -1;
        $votes_secretaries_o = DB::table('candidates')->where('position', 'Secretary')->where('status', '1')->pluck('votes');
        $votes_secretaries_u = DB::table('candidates')->where('position', 'Secretary')->where('status', '1')->pluck('u_votes');
        $votes_secretaries = array();
        for ($i=0; $i < count($votes_secretaries_o); $i++) {
            $votes_secretaries[$i] = $votes_secretaries_o[$i] + $votes_secretaries_u[$i];
            if($votes_secretaries[$i] > $max_secretary){
                $max_secretary = $votes_secretaries[$i];
            }
        }

        return view('vote.results', compact('presidents', 'votes_presidents', 'max_president', 'vice_presidents', 'votes_vice_presidents', 'max_vice_president', 'treasurers', 'votes_treasurers', 'max_treasurer', 'secretaries', 'votes_secretaries', 'max_secretary'));
    }

    /**
    * Display the results page.
    * @return \Illuminate\Http\Response
    */
    public function resultsOfficial()
    {
        // getting the results from the database and sending it to the view
        $presidents = Candidate::where('position', 'President')->where('status', '1')->get();
        $max_president = Candidate::where('position', 'President')->where('status', '1')->max('votes');
        $votes_presidents = DB::table('candidates')->where('position', 'President')->where('status', '1')->pluck('votes');

        $vice_presidents = Candidate::where('position', 'Vice President')->where('status', '1')->get();
        $max_vice_president = Candidate::where('position', 'Vice President')->where('status', '1')->max('votes');
        $votes_vice_presidents = DB::table('candidates')->where('position', 'Vice President')->where('status', '1')->pluck('votes');

        $treasurers = Candidate::where('position', 'Treassurer')->where('status', '1')->get();
        $max_treasurer = Candidate::where('position', 'Treassurer')->where('status', '1')->max('votes');
        $votes_treasurers = DB::table('candidates')->where('position', 'Treassurer')->where('status', '1')->pluck('votes');

        $secretaries = Candidate::where('position', 'Secretary')->where('status', '1')->get();
        $max_secretary = Candidate::where('position', 'Secretary')->where('status', '1')->max('votes');
        $votes_secretaries = DB::table('candidates')->where('position', 'Secretary')->where('status', '1')->pluck('votes');

        return view('vote.results', compact('presidents', 'votes_presidents', 'max_president', 'vice_presidents', 'votes_vice_presidents', 'max_vice_president', 'treasurers', 'votes_treasurers', 'max_treasurer', 'secretaries', 'votes_secretaries', 'max_secretary'));
    }
}
