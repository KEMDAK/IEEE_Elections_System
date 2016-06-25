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
        $this->middleware('auth');

        $this->middleware('role:Admin', ['except' => ['index', 'show']]);
    }

    /**
    * This function returns a view of all the
    *
    * candidates sorted by their name.
    *
    **/
    public function index()
    {
        $candidates = Candidate::all();

        $candidates = $candidates->sortBy('first_name');

        return view('candidate.index', compact('candidates'));
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
        $candidate = $request->all();
        $candidate->votes = 0;

        $candidate = Candidate::create($candidate);

        return redirect('candidate');
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

        return redirect('candidate');
    }
}
