<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate login data
        $request->validate([
            'user' => 'required',
            'password' => 'required',
            ]);

            // Attempt to authenticate user
        $credentials = $request->only('user', 'password');

            // Attempt to authenticate user using the 'name' column
        if (Auth::attempt(['name' => $credentials['user'], 'password' => $credentials['password']])) {
            cookie('username', $credentials['user']);
            return redirect()->intended('/panel');
        } else {
            // Authentication failed
            return redirect('/')->withErrors(['login_error' => 'Invalid email or password.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
