<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Requests\User\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Login page for users
     * 
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return Inertia::render('User/Login');
    }

    /**
     * Authenticate user
     * @param Illuminate\Http\Request $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ( Auth::attempt($credentials) ) {
            return redirect()->route('vacancies.index');
        }
    }

    /**
     * Register page for users
     * 
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return Inertia::render('User/Register');
    }

    /**
     * Store a new user
     * @param App\Http\Requests\User\StoreUserRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt( $data['password'] )
        ]);

        return redirect()->route('login')->with('success', 'You successfully create your account!');
    }

    /**
     * Logout function
     * 
     * @return void
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    /**
     * Update user function
     */
    public function update(Request $request)
    {
        $user = auth()->user();

        $user->update([
            'name' => $request->name
        ]);
    }
}
