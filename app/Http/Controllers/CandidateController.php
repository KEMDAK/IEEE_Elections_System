<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Candidate;

use App\User;

use App\Http\Requests\CandidateRequest;

use Illuminate\Support\Facades\Auth;

use Flash;

use Mail;

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

        $this->middleware('role:Admin', ['except' => ['index', 'show', 'create', 'store', 'edit', 'update']]);

        $this->middleware('role:Candidate', ['only' => ['edit', 'update']]);
    }

    /**
    * This function accepts the candidate request
    *
    **/
    public function accept($id)
    {
        $candidate = Candidate::findOrFail($id);
        $user = User::findOrFail($candidate->user_id);
        $email = $user->email;

        /** sending an acceptance mail */
        Mail::send('candidate.emails.acceptance', ['name' => ($candidate->first_name . ' ' . $candidate->last_name), 'position' => $candidate->position], function($message) use ($email)
        {
            $message->to($email, 'IEEE GUC SB | Member')->subject('IEEE GUC SB | Elections \'17 Eligibility Checking Results');
        });

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
        $data = $request->all();

        $user = User::create([
            'ieee_membership_id' => $data['ieee_membership_id'],
            'role' => 'Candidate',
            'email' => $data['personal_email'],
            'active' => '0',
            'status' => '0'
        ]);

        $candidate = Candidate::create($data);

        $candidate->user_id = $user->id;
        $candidate->votes = 0;
        $candidate->status = 0;

        $plan_url = $data['plan_url'];
            $match = array();
            if(preg_match("/[-\w]{25,}/", $plan_url, $match)){
                $plan_url = "https://docs.google.com/viewer?srcid=" . $match[0] .
             "&pid=explorer&efh=false&a=v&chrome=false&embedded=true";
                $candidate->plan_url = $plan_url;
            }

        if(strcmp($candidate->image_url, "") == 0){
            if(strcmp($candidate->gender, "Male") == 0){
                $candidate->image_url = url('/img/male.png');
            }
            else{
                $candidate->image_url = url('/img/female.jpg');
            }
        }
        else{
               $image_url = $data['image_url'];
               $match = array();
               if(preg_match("/[-\w]{25,}/", $image_url, $match)){
                $image_url = "https://docs.google.com/viewer?srcid=" . $match[0] .
                "&pid=explorer&efh=false&a=v&chrome=false&embedded=true";
                $candidate->image_url = $image_url;
              }
            }



            $video_url = $data['video_url'];
            $match = array();
            if(preg_match("/[-\w]{25,}/", $video_url, $match)){
                $video_url = "https://docs.google.com/viewer?srcid=" . $match[0] .
             "&pid=explorer&efh=false&a=v&chrome=false&embedded=true";
                $candidate->video_url = $video_url;
            }
            

        $candidate->save();

        //flash message
        flash()->success('Application has been received successfully!! You have to activate your account before you can use it.');

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
        // Flash::overlay('You cannot edit your information at the moment!', 'Unavailable Service');

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
        $candidate = Candidate::findOrFail($id);
         
        if($candidate->user_id == Auth::user()->id){
            $data = $request->all();
            
            
           
         
            unset($data['votes']);
            unset($data['status']);

            $candidate->update($data);

            $candidate->votes = 0;
            $candidate->status = 0;


            $plan_url = $data['plan_url'];
            $match = array();
            if(preg_match("/[-\w]{25,}/", $plan_url, $match)){
                $plan_url = "https://docs.google.com/viewer?srcid=" . $match[0] .
             "&pid=explorer&efh=false&a=v&chrome=false&embedded=true";
                $candidate->plan_url = $plan_url;
            }
             

            if(strcmp($candidate->image_url, "") == 0){
                if(strcmp($candidate->gender, "Male") == 0){
                    $candidate->image_url = url('/img/male.png');
                }
                else{
                    $candidate->image_url = url('/img/female.jpg');
                }
            }
            else{
               $image_url = $data['image_url'];
               $match = array();
               if(preg_match("/[-\w]{25,}/", $image_url, $match)){
                $image_url = "https://docs.google.com/viewer?srcid=" . $match[0] .
                "&pid=explorer&efh=false&a=v&chrome=false&embedded=true";
                $candidate->image_url = $image_url;
              }
            }



             $video_url = $data['video_url'];
            $match = array();
            if(preg_match("/[-\w]{25,}/", $video_url, $match)){
                $video_url = "https://docs.google.com/viewer?srcid=" . $match[0] .
             "&pid=explorer&efh=false&a=v&chrome=false&embedded=true";
                $candidate->video_url = $video_url;
            }
             

            $candidate->save();

            //flash message
            flash()->success('Your profile has been edited successfully!!');

            return redirect('/candidate/'.$id);
        }
        else{
            return redirect('/');
        }
    }

    /**
    * This function deletes a specified candidate
    *
    * from the database.
    *
    **/
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/admin/candidates');
    }
}
