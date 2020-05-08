<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'last name'=>$data['LastName'],
            'email' => $data['email'],
            'selected'=>$data['selected'],
            'password' => Hash::make($data['password']),
            'parent email'=>$data['ParentEmail'],
            'img'=>'default.jpg',
            'phonenum'=>$data['phonenum'],
            'parentnum'=>$data['parentnum'], 
            
        ]);
        //DB::insert('insert into users (first name, lastName,email,password,Parent email,your phone,parent phone) values (name, LastName,email,password,ParentEmail,phonenum,parentnum)');


   

        
    }
    
    protected function create2(array $data2)
    {
        return User::create([
            'name' => $data2['name'],
            'last name'=>$data2['LastName'],
            'email' => $data2['email'],
            'password' => Hash::make($data2['password']),
            'phonenum'=>$data2['phonenum'],
            'type'=>2,
        ]);
    }
   
}
