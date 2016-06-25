<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => ['logout', 'register', 'showRegistrationForm', 'index', 'destroy']]);

        $this->middleware('auth', ['only' => ['register', 'showRegistrationForm', 'index', 'destroy']]);

        $this->middleware('role:Admin', ['only' => ['register', 'showRegistrationForm', 'index', 'destroy']]);
    }

    /**
    * This function returns a view of all the
    *
    * users sorted by their name.
    *
    **/
    public function index()
    {
        $users = User::all();

        $users = $users->sortBy('name');

        return view('auth.index', compact('users'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:255|unique:users',
            'ieee_membership_id' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'ieee_membership_id' => $data['ieee_membership_id'],
            'role' => 'Voter',
            'email' => $data['email'],
            'active' => 'false',
            'status' => 'false'
        ]);
    }

    /**
     * Show the activation form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showActivationForm()
    {
        return view('auth.activate');
    }

    /**
     * activate a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function activate(Request $request)
    {

        $data = $request->all();

        $this->validate($request, [
            'email' => 'required|email|max:255|exists:users,email,ieee_membership_id,' . $data['ieee_membership_id'],
            'ieee_membership_id' => 'required',
        ]);


        $user = User::where('email', $data['email'])->first();

        /** generating a password and activating the account */
        $user->active = 'true';
        $password = $this->generateStrongPassword(10, false, 'luds');
        $user->password = bcrypt($password);
        $email = $user->email;

        /** sending an email with the password */
        Mail::send('auth.emails.welcome', ['password' => $password], function($message) use ($email)
        {
            $message->to($email, 'IEEE GUC SB member')->subject('Welcome to IEEE GUC SB 2016 Elections!');
        });

        /** saving the user in the database */
        $user->save();

        return redirect('/');
    }

    /**
     * This function generates a strong user friendly password.
     *
     * @param  Integer $length        The length of the password.
     * @param  Boolean $add_dashes    True if the password contains dashes.
     * @param  String $available_sets The password character set.
     * @return String                 The generated password.
     */
    protected function generateStrongPassword($length, $add_dashes, $available_sets)
    {
        $sets = array();
        if(strpos($available_sets, 'l') !== false)
        $sets[] = 'abcdefghjkmnpqrstuvwxyz';
        if(strpos($available_sets, 'u') !== false)
        $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
        if(strpos($available_sets, 'd') !== false)
        $sets[] = '23456789';
        if(strpos($available_sets, 's') !== false)
        $sets[] = '!@#$%&*?';
        $all = '';
        $password = '';
        foreach($sets as $set)
        {
            $password .= $set[array_rand(str_split($set))];
            $all .= $set;
        }
        $all = str_split($all);
        for($i = 0; $i < $length - count($sets); $i++)
        $password .= $all[array_rand($all)];
        $password = str_shuffle($password);
        if(!$add_dashes)
        return $password;
        $dash_len = floor(sqrt($length));
        $dash_str = '';
        while(strlen($password) > $dash_len)
        {
            $dash_str .= substr($password, 0, $dash_len) . '-';
            $password = substr($password, $dash_len);
        }
        $dash_str .= $password;
        return $dash_str;
    }

    /**
    * This function deletes a specified user
    *
    * from the database.
    *
    **/
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('voters');
    }
}
