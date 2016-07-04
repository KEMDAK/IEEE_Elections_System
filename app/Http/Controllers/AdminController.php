<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Candidate;

use App\Configuration;

use App\Http\Requests\ConfigurationRequest;

use Carbon\Carbon;

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
        $candidates = Candidate::all();
        return view('admin.candidatesList',compact('candidates'));
    }

    /**
    * This function returns a view of the
    *
    * configuration.
    *
    **/
    public function showConfigurationsForm()
    {
        $applicationsFrom = Configuration::where('name', 'applicationsFrom')->first()->value;
        $applicationsTo = Configuration::where('name', 'applicationsTo')->first()->value;
        $deliverablesFrom  = Configuration::where('name', 'deliverablesFrom')->first()->value;
        $deliverablesTo  = Configuration::where('name', 'deliverablesTo')->first()->value;
        $electionsFrom  = Configuration::where('name', 'electionsFrom')->first()->value;
        $electionsTo  = Configuration::where('name', 'electionsTo')->first()->value;
        $results  = Configuration::where('name', 'results')->first()->value;
        if(strcmp($results, "") == 0){
            $results = true;
        }
        else{
            $results = false;
        }

        return view('admin.configurations', compact('applicationsFrom', 'applicationsTo', 'deliverablesFrom', 'deliverablesTo', 'electionsFrom', 'electionsTo', 'results'));
    }

    /**
    * This function stores the new configurations.
    *
    **/
    public function saveConfigurations(ConfigurationRequest $request)
    {
        $data = $request->all();

        Configuration::updateOrCreate(['name' => 'applicationsFrom'], $data['applicationsFrom']);
        Configuration::updateOrCreate(['name' => 'applicationsTo'], $data['applicationsTo']);
        Configuration::updateOrCreate(['name' => 'deliverablesFrom'], $data['applicationsFrom']); // this value is set to the applications from as we don't need a separate value.
        Configuration::updateOrCreate(['name' => 'deliverablesTo'], $data['deliverablesTo']);
        Configuration::updateOrCreate(['name' => 'electionsFrom'], $data['electionsFrom']);
        Configuration::updateOrCreate(['name' => 'electionsTo'], $data['electionsTo']);

        if(!array_key_exists('results', $data)){
            $data['results'] = Carbon::yesterday('Africa/Cairo')->toDateString();
        }
        else if(strcmp($data['results'], "true") == 0){
            $data['results'] = "";
        }

        Configuration::updateOrCreate(['name' => 'results'], $data['results']);

        return redirect('/admin/config');
    }
}
