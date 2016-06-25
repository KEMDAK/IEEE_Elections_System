<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Candidate;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new candidate.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidates.create') ;
    }

    /**
     * Store a newly created candidate in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $this->validate($request, [
            'email' => 'required|email|max:255',
            'ieee_membership_id' => 'required',
            'position'  =>  'required',
            'first_name'  =>  'required',
            'last_name'  =>  'required',
            'major'  =>  'required',
            'graduation_year'  =>  'required',
            'description'  =>  'required',
            'image_url'  =>  'required',
        ]);

        $data = $request->all();

         Candidate::firstOrCreate($data);
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

        return view('candidate.edit');
      }

    /**
     * Update the specified candidate in Database.
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
            'position'  =>  'required',
            'first_name'  =>  'required',
            'last_name'  =>  'required',
            'major'  =>  'required',
            'graduation_year'  =>  'required',
            'description'  =>  'required',
            'image_url'  =>  'required',
        ]); 

       // $candidate = ::where('ieee_membership_id', $id)->first();
       // $candidate->fill($request::all());
        Candidate::where('ieee_membership_id', $id)
          ->update($request);
    }

    /**
     * Remove the specified candidate from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Candidate::where('ieee_membership_id', $id)->delete();
    }
}
