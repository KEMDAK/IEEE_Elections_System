<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Candidate;

use App\Http\Requests\CandidateRequest;

class CandidateController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('guest', ['only' => ['create', 'store']]);

        $this->middleware('auth', ['except' => ['create', 'store']]);

        $this->middleware('role:Admin', ['except' => ['index', 'show', 'create', 'store']]);

        $this->middleware('role:No', ['only' => ['edit', 'update']]);
    }

    /**
    * This function accepts the candidate request
    *
    **/
    public function accept($id)
    {
        $candidate = Candidate::findOrFail($id);

        $candidate->status = 1;
        $candidate->save();

        //flash message
        flash()->success('Request Accepted!!');

        return redirect('/admin/candidates');
    }

    /**
    * This function returns a view of all the
    *
    * candidates sorted by their name.
    *
    **/
    public function index()
    {
        $presidents = Candidate::where('position', 'President')->where('status', '1')->get();
        $vice_presidents = Candidate::where('position', 'Vice President')->where('status', '1')->get();
        $treasurers = Candidate::where('position', 'Treassurer')->where('status', '1')->get();
        $secretaries = Candidate::where('position', 'Secretary')->where('status', '1')->get();



        return view('candidate.index', compact('presidents','vice_presidents','treasurers','secretaries'));
    }

    /**
    * This function returns a view of a specific
    *
    * candidate.
    *
    **/
    public function show($id)
    {
        $candidate = Candidate::findOrFail($id);

        return view('candidate.show', compact('candidate'));
    }

    /**
    * This function returns a view to create a
    *
    * new candidate.
    *
    **/
    public function create()
    {
        return view('candidate.create');
    }

    /**
    * This function creates a new candidate
    *
    * and stores it in the database.
    *
    **/
    public function store(CandidateRequest $request)
    {
        $input = $request->all();

        $candidate = Candidate::create($input);

        $candidate->votes = 0;
        $candidate->status = 0;
        $candidate->save();

        //flash message
        flash()->success('Application has been received successfully!');

        return redirect('/');
    }

    /**
    * This function returns a view to edit
    *
    * a specific candidate.
    *
    **/
    public function edit($id)
    {
        $candidate = Candidate::findOrFail($id);

        // if editing is not available
        Flash::overlay('You cannot edit your information at the moment!', 'Unavailable Service');
        
        return view('candidate.edit', compact('candidate'));
    }

    /**
    * This function updates an already exists
    *
    * candidate.
    *
    **/
    public function update($id, CandidateRequest $request)
    {
        $data = $request->all();

        $candidate = Candidate::findOrFail($id);

        $candidate->update($data);

        //flash message
        flash()->success('Candidate has been edited successfully!');

        return redirect('candidate');
    }

    /**
    * This function deletes a specified candidate
    *
    * from the database.
    *
    **/
    public function destroy($id)
    {
        Candidate::destroy($id);

        return redirect('/admin/candidates');
    }
}
