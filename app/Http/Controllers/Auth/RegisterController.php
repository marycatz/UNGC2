<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Companies;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        // dd(auth()->user()->access_level);
        if (auth()->user()->access_level == '2') {
            return '/indexsme';
        }
        return '/index';
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            // 'dob' => ['required', 'date', 'before:today'],
            // 'avatar' => ['required', 'image' ,'mimes:jpg,jpeg,png','max:1024'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if (request()->has('ssmfile')) {            
            $ssmfile = request()->file('ssmfile');
            $ssmfileame = time() . '.' . $ssmfile->getClientOriginalExtension();
            $ssmfilePath = public_path('/images/');
            $ssmfile->move($ssmfilePath, $ssmfileame);
        }

        $companies = Companies::create([
            'company_name' => $data['company_name'],
            'company_ssm' => $data['company_ssm'],
            'company_ssm_file_name' =>  "/images/" .$ssmfileame,
            'company_ssm_file_path' => $ssmfilePath,
            'company_state' => $data['company_state'],
            'company_industry' => $data['company_industry'],
        ]);

        $idcompany = $companies->id;
        
    
        $now = date('Y-m-d'); //Fomat Date and time //you are overwriting this variable below

        
        // $data['title'] = $request->title;


        return User::create([
            'company_id' => $idcompany,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'access_level' => $data['access_level'],
            'access_group' => $data['access_group'],
            'position' => $data['position'],
            'isAdmin' => 1,
            // 'dob' => $now,
        ]);
    }
}
