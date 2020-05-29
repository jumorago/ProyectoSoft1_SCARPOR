<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Models\Charges as Charges;
use App\Models\States as States;
use App\Models\Documenttypes as Documenttypes;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'cedula' => ['required', 'integer', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefono' => ['required', 'integer', 'max:255'],
            'id_charges' => ['required', 'integer', 'max:255'],
            'id_documenttypes' => ['required', 'integer', 'max:255'],
            'id_states' => ['required', 'integer', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

/**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /*public function create(array $data)
    {
        return User::create([
            'cedula' => $data['cedula'],
            'name' => $data['name'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'id_charges' => 1,
            'id_documenttypes' => $data['id_documenttypes'],
            'id_states' => 1,
            'password' => Hash::make($data['password']),
        ]);
        return redirect('register');
    }*/

    public function create(Request $request)
    {
        $users = new User;
        $users->cedula = $request->cedula;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->telefono = $request->telefono;
        $users->id_charges = 1;
        $users->id_documenttypes = $request->id_documenttypes;
        $users->id_states = 1;
        $users->password = Hash::make($request['password']);
        $users->save();
        return redirect('register');
    }

    public function index(Request $request)
    {
        $states = States::all();
        $charges = Charges::all();
        $documenttypes = Documenttypes::all();
        return \View::make('auth/register', compact('states','charges','documenttypes'));
    }
    public function store(Request $request)
    {
        $states = States::all();
        $charges = Charges::all();
        $documenttypes = Documenttypes::all();
        return \View::make('auth/register', compact('states','charges','documenttypes'));
    }
 
    
}
